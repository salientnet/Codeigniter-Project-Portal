<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reports extends Admin_controller
{
    function __construct()
    {
        parent::__construct();
        if (!has_permission('reports', '', 'view')) {
            access_denied('reports');
        }
        $this->load->model('reports_model');
    }
    /* No access on this url */
    public function index()
    {
        redirect(site_url('admin'));
    }
    /* See knowledge base article reports*/
    public function knowledge_base_articles()
    {
        if (get_option('use_knowledge_base') == 0) {
            redirect(site_url('admin'));
        }
        $this->load->model('knowledge_base_model');
        $data['groups'] = $this->knowledge_base_model->get_kbg();
        $data['title']  = _l('kb_reports');
        $this->load->view('admin/reports/knowledge_base_articles', $data);
    }
    /* Rerport leads conversions */
    public function leads()
    {
        $type = 'leads';
        if($this->input->get('type')){
            $type = $type.'_'.$this->input->get('type');
            $data['leads_staff_report'] = json_encode($this->reports_model->leads_staff_report());
        }
        $this->load->model('leads_model');
        $data['statuses'] = $this->leads_model->get_status();
        $data['leads_this_week_report'] = json_encode($this->reports_model->leads_this_week_report());
        $data['leads_sources_report'] = json_encode($this->reports_model->leads_sources_report());
        $this->load->view('admin/reports/'.$type, $data);
    }
    /* Sales reportts */
    public function sales()
    {
        if (is_using_multiple_currencies()) {
            $this->load->model('currencies_model');
            $data['currencies'] = $this->currencies_model->get();
        }
        $data['payments_years'] = $this->reports_model->get_distinct_payments_years();
        $data['title']          = _l('sales_reports');
        $this->load->view('admin/reports/sales', $data);
    }
    /* Customer report */
    public function customers_report()
    {
        if ($this->input->is_ajax_request()) {
            $this->load->model('currencies_model');
            $months_report = $this->input->post('report_months');
            $select        = array(
                'company',
                '(SELECT COUNT(clientid) FROM tblinvoices WHERE tblinvoices.clientid = tblclients.userid AND status != 5)',
                '(SELECT SUM(subtotal) FROM tblinvoices WHERE tblinvoices.clientid = tblclients.userid AND status != 5)',
                '(SELECT SUM(total) FROM tblinvoices WHERE tblinvoices.clientid = tblclients.userid AND status != 5)'
            );
            if ($months_report != '') {
                $custom_date_select = '';
                if (is_numeric($months_report)) {
                    $custom_date_select = 'AND date > DATE_SUB(now(), INTERVAL ' . $months_report . ' MONTH)';
                } else if ($months_report == 'custom') {
                    $from_date = to_sql_date($this->input->post('report_from'));
                    $to_date   = to_sql_date($this->input->post('report_to'));
                    if ($from_date == $to_date) {
                        $custom_date_select = 'AND date ="' . $from_date . '"';
                    } else {
                        $custom_date_select = 'AND (date BETWEEN "' . $from_date . '" AND "' . $to_date . '")';
                    }
                }
                if ($custom_date_select != '') {
                    $i = 0;
                    foreach ($select as $_select) {
                        if ($i !== 0) {
                            $_temp = substr($_select, 0, -1);
                            $_temp .= ' ' . $custom_date_select . ')';
                            $select[$i] = $_temp;
                        }
                        $i++;
                    }
                }
            }
            $by_currency     = $this->input->post('report_currency');
            $currency        = $this->currencies_model->get_base_currency();
            $currency_symbol = $this->currencies_model->get_currency_symbol($currency->id);
            if ($by_currency) {
                $i = 0;
                foreach ($select as $_select) {
                    if ($i !== 0) {
                        $_temp = substr($_select, 0, -1);
                        $_temp .= ' AND currency =' . $by_currency . ')';
                        $select[$i] = $_temp;
                    }
                    $i++;
                }
                $currency        = $this->currencies_model->get($by_currency);
                $currency_symbol = $this->currencies_model->get_currency_symbol($currency->id);
            }
            $aColumns     = $select;
            $sIndexColumn = "userid";
            $sTable       = 'tblclients';
            $where        = array();
            $i            = 0;
            foreach ($select as $_select) {
                if ($i > 0) {
                    if ($i == 1) {
                        $where[] = 'WHERE ' . $_select . '' . ' !=0';
                    } else {
                        $where[] = 'AND ' . $_select . '' . ' !=0';
                    }
                }
                $i++;
            }
            $result  = data_tables_init($aColumns, $sIndexColumn, $sTable, array(), $where, array(
                'userid'
            ));
            $output  = $result['output'];
            $rResult = $result['rResult'];
            $x       = 0;
            foreach ($rResult as $aRow) {
                $row = array();
                for ($i = 0; $i < count($aColumns); $i++) {
                    $_data = $aRow[$aColumns[$i]];
                    if ($aColumns[$i] == 'company') {
                        $_data = '<a href="' . admin_url('clients/client/' . $aRow['userid']) . '" target="_blank">' . $aRow['company'] . '</a>';
                    } else if ($aColumns[$i] == $select[2] || $aColumns[$i] == $select[3]) {
                        if ($_data == null) {
                            $_data = 0;
                        }
                        $_data = format_money($_data, $currency_symbol);
                    }
                    $row[] = $_data;
                }
                $output['aaData'][] = $row;
                $x++;
            }
            echo json_encode($output);
            die();
        }
    }

    public function invoices_report()
    {
        if ($this->input->is_ajax_request()) {
            $this->load->model('currencies_model');
            $this->load->model('invoices_model');
            $months_report = $this->input->post('report_months');
            $select        = array(
                'id',
                'clientid',
                'date',
                'duedate',
                'subtotal',
                'total',
                'total_tax',
                '(SELECT SUM(amount) FROM tblinvoicepaymentrecords WHERE invoiceid = tblinvoices.id)',
                'status'
            );
            $where         = array(
                'AND status != 5'
            );
            if ($months_report != '') {
                $custom_date_select = '';
                if (is_numeric($months_report)) {
                    $custom_date_select = 'AND date > DATE_SUB(now(), INTERVAL ' . $months_report . ' MONTH)';
                } else if ($months_report == 'custom') {
                    $from_date = to_sql_date($_POST['report_from']);
                    $to_date   = to_sql_date($_POST['report_to']);
                    if ($from_date == $to_date) {
                        $custom_date_select = 'AND date = "' . $from_date . '"';
                    } else {
                        $custom_date_select = 'AND (date BETWEEN "' . $from_date . '" AND "' . $to_date . '")';
                    }
                }
                if ($custom_date_select != '') {
                    $i = 0;
                    foreach ($select as $_select) {
                        if ($i == 7) {
                            $_temp = substr($_select, 0, -1);
                            $_temp .= ' ' . $custom_date_select . ')';
                            $select[$i] = $_temp;
                        }
                        $i++;
                    }
                    array_push($where, $custom_date_select);
                }
            }
            $by_currency     = $this->input->post('report_currency');
            $currency        = $this->currencies_model->get_base_currency();
            $currency_symbol = $this->currencies_model->get_currency_symbol($currency->id);
            if ($by_currency) {
                $i = 0;
                foreach ($select as $_select) {
                    if ($i == 7) {
                        $_temp = substr($_select, 0, -1);
                        $_temp .= ' AND currency =' . $by_currency . ')';
                        $select[$i] = $_temp;
                    }
                    $i++;
                }
                $currency        = $this->currencies_model->get($by_currency);
                $currency_symbol = $this->currencies_model->get_currency_symbol($currency->id);
                array_push($where, 'AND currency=' . $by_currency);
            }
            if ($this->input->post('invoice_status')) {
                $statuses  = $this->input->post('invoice_status');
                $_statuses = array();
                if (is_array($statuses)) {
                    foreach ($statuses as $status) {
                        if ($status != '') {
                            array_push($_statuses, $status);
                        }
                    }
                }
                if (count($_statuses) > 0) {
                    array_push($where, 'AND status IN (' . implode(', ', $_statuses) . ')');
                }
            }
            $aColumns     = $select;
            $sIndexColumn = "id";
            $sTable       = 'tblinvoices';
            $join         = array(
                'JOIN tblclients ON tblclients.userid = tblinvoices.clientid'
            );
            $result       = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, array(
                'userid',
                'company'
            ));
            $output       = $result['output'];
            $rResult      = $result['rResult'];
            $x            = 0;
            foreach ($rResult as $aRow) {
                $row = array();
                for ($i = 0; $i < count($aColumns); $i++) {
                    $_data = $aRow[$aColumns[$i]];
                    if ($aColumns[$i] == 'clientid') {
                        $_data = '<a href="' . admin_url('clients/client/' . $aRow['userid']) . '" target="_blank">' . $aRow['company'] . '</a>';
                    } else if ($aColumns[$i] == 'total' || $aColumns[$i] == 'subtotal' || $aColumns[$i] == 'total_tax') {
                        if ($aColumns[$i] != 'total_tax') {
                            if ($_data == null) {
                                $_data = 0;
                            }
                            $_data = format_money($_data, $currency_symbol);
                        } else {
                            $items             = $this->invoices_model->get_invoice_items($aRow['id']);
                            $taxes             = array();
                            $_calculated_taxes = array();
                            $multiple_taxes    = false;
                            $one_tax           = false;
                            foreach ($items as $item) {
                                $item_taxes = get_invoice_item_taxes($item['id']);
                                if (count($item_taxes) > 0) {
                                    foreach ($item_taxes as $tax) {
                                        $calc_tax     = 0;
                                        $tax_not_calc = false;
                                        if (!in_array($tax['taxname'], $_calculated_taxes)) {
                                            array_push($_calculated_taxes, $tax['taxname']);
                                            $tax_not_calc = true;
                                        }
                                        if ($tax_not_calc == true) {
                                            $taxes[$tax['taxname']]          = array();
                                            $taxes[$tax['taxname']]['total'] = array();
                                            array_push($taxes[$tax['taxname']]['total'], (($item['qty'] * $item['rate']) / 100 * $tax['taxrate']));
                                            $taxes[$tax['taxname']]['tax_name'] = $tax['taxname'];
                                            $taxes[$tax['taxname']]['taxrate']  = $tax['taxrate'];
                                        } else {
                                            array_push($taxes[$tax['taxname']]['total'], (($item['qty'] * $item['rate']) / 100 * $tax['taxrate']));
                                        }
                                    }
                                }
                            }
                            $_tax = '';
                            $this->db->select('discount_type,discount_percent');
                            $this->db->where('id', $aRow['id']);
                            $invoice_necessary_data = $this->db->get('tblinvoices')->row();
                            $count                  = count($taxes);
                            if ($count >= 1) {
                                if ($count > 1) {
                                    $multiple_taxes = true;
                                } else if ($count == 1) {
                                    $one_tax = true;
                                }
                                foreach ($taxes as $tax) {
                                    $total = array_sum($tax['total']);
                                    if ($invoice_necessary_data->discount_percent != 0 && $invoice_necessary_data->discount_type == 'before_tax') {
                                        $total_tax_calculated = ($total * $invoice_necessary_data->discount_percent) / 100;
                                        $total                = ($total - $total_tax_calculated);
                                    }
                                    $_tax_name = explode('|', $tax['tax_name']);
                                    $_tax .= $_tax_name[0] . '(' . _format_number($tax['taxrate']) . '%) - ' . format_money($total, $currency_symbol) . ' | ';
                                }
                            } else if ($count == 0) {
                                $_tax = format_money($_data, $currency_symbol);
                            }
                            if ($multiple_taxes == true || $one_tax == true) {
                                if ($multiple_taxes == true) {
                                    $_tax .= ' ' . _l('report_invoice_total_tax') . ':' . format_money($_data, $currency_symbol);
                                } else {
                                    $_tax = substr($_tax, 0, -2);
                                }
                            }
                            $_data = $_tax;
                        }
                    } else if ($aColumns[$i] == $select[7]) {
                        $_amount_open = $aRow['total'] - $_data;
                        $_data        = format_money($_amount_open, $currency_symbol);
                    } else if ($aColumns[$i] == 'id') {
                        $_data = '<a href="' . admin_url('invoices/list_invoices/' . $aRow['id']) . '" target="_blank">' . format_invoice_number($aRow['id']) . '</a>';
                    } else if ($aColumns[$i] == 'status') {
                        $_data = format_invoice_status($aRow['status']);
                    } else if ($aColumns[$i] == 'date' || $aColumns[$i] == 'duedate') {
                        $_data = _d($_data);
                    }
                    $row[] = $_data;
                }
                $output['aaData'][] = $row;
                $x++;
            }
            echo json_encode($output);
            die();
        }
    }
    public function expenses($current_year = '')
    {
        $data['current_year'] = $current_year;
        if ($current_year == '') {
            $data['current_year'] = date('Y');
        }
        $data['expense_years'] = $this->reports_model->get_distinct_expense_years();
        $this->load->model('currencies_model');
        $data['base_currency'] = $this->currencies_model->get_base_currency();
        $data['currencies'] = $this->currencies_model->get();
        $this->load->model('expenses_model');
        $data['categories'] = $this->expenses_model->get_category();
        $data['title']      = 'Expenses Report';
        $this->load->view('admin/reports/expenses', $data);
    }
     public function expenses_vs_income($year = '')
    {
        $_expenses_years = array();
        $_years = array();
        $expenses_years = $this->reports_model->get_distinct_expense_years();
        $payments_years = $this->reports_model->get_distinct_payments_years();
        foreach($expenses_years as $y){
            array_push($_years,$y['year']);
        }
        foreach($payments_years as $y){
            array_push($_years,$y['year']);
        }
        $_years            = array_map("unserialize", array_unique(array_map("serialize", $_years)));
        $data['years'] = $_years;
        $data['chart_expenses_vs_income_values'] = json_encode($this->reports_model->get_expenses_vs_income_report($year));
        $data['title']                           = 'Expense vs Income';
        $this->load->view('admin/reports/expenses_vs_income', $data);
    }

    /* Total income report / ajax chart*/
    public function total_income_report()
    {
        echo json_encode($this->reports_model->total_income_report());
    }
    public function report_by_payment_modes(){
        echo json_encode($this->reports_model->report_by_payment_modes());
    }
    public function invoices_report_total()
    {
        echo json_encode($this->reports_model->invoices_report_total());
    }
    public function report_by_customer_groups()
    {
        echo json_encode($this->reports_model->report_by_customer_groups());
    }
    /* Leads conversion monthly report / ajax chart*/
    public function leads_monthly_report($month)
    {
        echo json_encode($this->reports_model->leads_monthly_report($month));
    }
}
