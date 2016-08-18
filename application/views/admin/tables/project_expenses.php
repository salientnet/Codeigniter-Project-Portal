<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$aColumns      = array(
    'category',
    'amount',
    'date',
    'reference_no',
    'paymentmode'
);
$join          = array(
    'LEFT JOIN tblclients ON tblclients.userid = tblexpenses.clientid',
    'LEFT JOIN tblexpensescategories ON tblexpensescategories.id = tblexpenses.category'
);
$custom_fields = get_custom_fields('expenses', array(
    'show_on_table' => 1
));
$i             = 0;
foreach ($custom_fields as $field) {
    array_push($aColumns, 'ctable_' . $i . '.value as cvalue_' . $i);
    array_push($join, 'LEFT JOIN tblcustomfieldsvalues as ctable_' . $i . ' ON tblexpenses.id = ctable_' . $i . '.relid AND ctable_' . $i . '.fieldto="' . $field['fieldto'] . '" AND ctable_' . $i . '.fieldid=' . $field['id']);
    $i++;
}
$where = array();
if (is_numeric($project_id)) {
    $where = array(
        'AND project_id=' . $project_id
    );
}
if ($this->_instance->input->post('custom_view')) {
    $custom_view = $this->_instance->input->post('custom_view');
    if ($custom_view == 'invoiced') {
        array_push($where, 'AND invoiceid IS NOT NULL');
    } else if ($custom_view == 'billable') {
        array_push($where, 'AND billable = 1');
    } else if ($custom_view == 'non-billable') {
        array_push($where, 'AND billable = 0');
    } else if ($custom_view == 'unbilled') {
        array_push($where, 'AND (SELECT 1 from tblinvoices WHERE tblinvoices.id = tblexpenses.invoiceid AND status != 2)');
    } else if ($custom_view == 'recurring') {
        array_push($where, 'AND recurring = 1');
    } else if(_startsWith($custom_view,'expenses_by_month_')){
        $month = strafter($custom_view,'expenses_by_month_');
        array_push($where, 'AND MONTH(date) = '.$month);
    } else {
        // is expense category
        if (is_numeric($custom_view)) {
            array_push($where, 'AND category = ' . $custom_view);
        }
    }
}

$sIndexColumn = "id";
$sTable       = 'tblexpenses';
$result       = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, array(
    'name',
    'tblexpenses.id',
    'company',
    'billable',
    'invoiceid',
    'currency'
));
$output       = $result['output'];
$rResult      = $result['rResult'];
$this->_instance->load->model('currencies_model');
$this->_instance->load->model('payment_modes_model');
foreach ($rResult as $aRow) {
    $row = array();
    for ($i = 0; $i < count($aColumns); $i++) {
        if (strpos($aColumns[$i], 'as') !== false && !isset($aRow[$aColumns[$i]])) {
            $_data = $aRow[strafter($aColumns[$i], 'as ')];
        } else {
            $_data = $aRow[$aColumns[$i]];
        }
        if ($aColumns[$i] == 'category') {
            $_data = '<a href="' . admin_url('expenses/list_expenses/' . $aRow['id']) . '" target="_blank">' . $aRow['name'] . '</a>';
            if ($aRow['billable'] == 1) {
                if ($aRow['invoiceid'] == NULL) {
                    $_data .= '<p class="text-danger">' . _l('expense_list_unbilled') . '</p>';
                } else {
                    if (total_rows('tblinvoices', array(
                        'id' => $aRow['invoiceid'],
                        'status' => 2
                    )) > 0) {
                        $_data .= '<br /><p class="text-success">' . _l('expense_list_billed') . '</p>';
                    } else {
                        $_data .= '<p class="text-success">' . _l('expense_list_invoice') . '</p>';
                    }
                }
            }
        } else if ($aColumns[$i] == 'amount') {
            $_data = format_money($_data, $this->_instance->currencies_model->get($aRow['currency'])->symbol);
        } else if ($aColumns[$i] == 'paymentmode') {
            $_data = '';
            if ($aRow['paymentmode'] != '0' && !empty($aRow['paymentmode'])) {
                $_data = $this->_instance->payment_modes_model->get($aRow['paymentmode'])->name;
            }
        }
        $row[] = $_data;
    }
    $output['aaData'][] = $row;
}
