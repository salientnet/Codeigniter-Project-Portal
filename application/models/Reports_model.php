<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reports_model extends CRM_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /**
     *  Leads conversions monthly report
     * @param   mixed $month  which month / chart
     * @return  array          chart data
     */
    public function leads_monthly_report($month)
    {
        $result      = $this->db->query('select last_status_change from tblleads where MONTH(last_status_change) = ' . $month . ' AND status = 1 and lost = 0')->result_array();
        $month_dates = array();
        $data        = array();
        for ($d = 1; $d <= 31; $d++) {
            $time = mktime(12, 0, 0, $month, $d, date('Y'));
            if (date('m', $time) == $month) {
                $month_dates[] = _d(date('Y-m-d', $time));
                $data[]        = 0;
            }
        }
        $chart = array(
            'labels' => $month_dates,
            'datasets' => array(
                array(
                    'label' => _l('leads'),
                    'backgroundColor' => 'rgba(197, 61, 169, 0.5)',
                    'borderColor' => '#c53da9',
                    'borderWidth'=>1,
                    'tension'=>false,
                    'data' => $data
                )
            )
        );
        foreach ($result as $lead) {
            $i = 0;
            foreach ($chart['labels'] as $date) {
                if (_d($lead['last_status_change']) == $date) {
                    $chart['datasets'][0]['data'][$i]++;
                }
                $i++;
            }
        }
        return $chart;
    }
     public function get_expenses_vs_income_report($year = '')
    {
        $months_labels  = array();
        $total_expenses = array();
        $total_income   = array();
        $i              = 0;
        if(!is_numeric($year)){
            $year = date('Y');
        }
        for ($m = 1; $m <= 12; $m++) {
            array_push($months_labels, _l(date('F', mktime(0, 0, 0, $m, 1))));
            $this->db->select('amount,taxrate,tblexpenses.tax')->from('tblexpenses')->join('tbltaxes', 'tbltaxes.id = tblexpenses.tax', 'left')->where('MONTH(date)', $m)->where('YEAR(date)', $year)->where('billable', 0);
            $expenses = $this->db->get()->result_array();
            if (!isset($total_expenses[$i])) {
                $total_expenses[$i] = array();
            }
            if (count($expenses) > 0) {
                foreach ($expenses as $expense) {
                    $total = $expense['amount'];
                    // Check if tax is applied
                    if ($expense['tax'] != 0) {
                        $total += ($total / 100 * $expense['taxrate']);
                    }
                    $total_expenses[$i][] = $total;
                }
            } else {
                $total_expenses[$i][] = 0;
            }
            $total_expenses[$i] = array_sum($total_expenses[$i]);
            // Calculate the income
            $this->db->select('amount');
            $this->db->from('tblinvoicepaymentrecords');
            $this->db->join('tblinvoices', 'tblinvoices.id = tblinvoicepaymentrecords.invoiceid');
            $this->db->where('MONTH(tblinvoicepaymentrecords.date)', $m);
            $this->db->where('YEAR(tblinvoicepaymentrecords.date)', $year);
            $payments = $this->db->get()->result_array();
            if (!isset($total_income[$m])) {
                $total_income[$i] = array();
            }
            if (count($payments) > 0) {
                foreach ($payments as $payment) {
                    $total_income[$i][] = $payment['amount'];
                }
            } else {
                $total_income[$i][] = 0;
            }
            $total_income[$i] = array_sum($total_income[$i]);
            $i++;
        }

        $chart = array(
            'labels' => $months_labels,
            'datasets' => array(
                array(
                    'label' => _l('report_sales_type_income'),
                    'backgroundColor' => 'rgba(37,155,35,0.2)',
                    'borderColor' => "#84c529",
                    'borderWidth'=>1,
                    'tension'=>false,
                    'data' => $total_income,
                ),
                array(
                    'label' => _l('expenses'),
                    'backgroundColor' => 'rgba(252,45,66,0.4)',
                    'borderColor' => "#fc2d42",
                    'borderWidth'=>1,
                    'tension'=>false,
                    'data' => $total_expenses,
                )
            )
        );
        return $chart;
    }
    /**
     * Chart leads weeekly report
     * @return array  chart data
     */
    public function leads_this_week_report()
    {
        $this->db->where('CAST(last_status_change as DATE) >= "' . date('Y-m-d', strtotime('monday this week', strtotime('last sunday'))) . '" AND CAST(last_status_change as DATE) <= "' . date('Y-m-d', strtotime('sunday this week', strtotime('last sunday'))) . '" AND status = 1 and lost = 0');
        $weekly = $this->db->get('tblleads')->result_array();
        $colors = get_system_favourite_colors();
        $chart = array(
            'labels'=>array(
                _l('wd_monday'),
                _l('wd_tuesday'),
                _l('wd_thursday'),
                _l('wd_wednesday'),
                _l('wd_friday'),
                _l('wd_saturday'),
                _l('wd_sunday'),
                ),
            'datasets'=>array(
              array(
                  'data'=>array(0,0,0,0,0,0,0),
                'backgroundColor'=>array(
                    $colors[0],$colors[1],$colors[2],$colors[3],$colors[4],$colors[5],$colors[6]
                    ),
                'hoverBackgroundColor'=>array(
                    adjust_color_brightness($colors[0],-20),
                    adjust_color_brightness($colors[1],-20),
                    adjust_color_brightness($colors[2],-20),
                    adjust_color_brightness($colors[3],-20),
                    adjust_color_brightness($colors[4],-20),
                    adjust_color_brightness($colors[5],-20),
                    adjust_color_brightness($colors[6],-20),
                    )
                )
                )
            );
    foreach ($weekly as $weekly) {
            $lead_status_day = _l(mb_strtolower('wd_' . date('l', strtotime($weekly['last_status_change']))));
            $i               = 0;
            foreach ($chart['labels'] as $dat) {
                if ($lead_status_day == $dat) {
                    $chart['datasets'][0]['data'][$i]++;
                }
                $i++;
            }
        }
        return $chart;
    }
    public function leads_staff_report(){
        $this->load->model('staff_model');
        $staff = $this->staff_model->get();
        if($this->input->post()){
            $from_date = to_sql_date($this->input->post('staff_report_from_date'));
            $to_date = to_sql_date($this->input->post('staff_report_to_date'));
        }
        $chart = array(
                'labels'=>array(),
                'datasets'=>array(
                    array(
                        'label'=>_l('leads_staff_report_created'),
                        'backgroundColor' => 'rgba(3,169,244,0.2)',
                        'borderColor' => "#03a9f4",
                        'borderWidth'=> 1,
                        'tension'=> false,
                        'data'=>array()
                        ),
                     array(
                        'label'=>_l('leads_staff_report_lost'),
                        'backgroundColor' => 'rgba(252,45,66,0.4)',
                        'borderColor' => "#fc2d42",
                        'borderWidth'=> 1,
                        'tension'=> false,
                        'data'=>array()
                        ),
                    array(
                        'label'=>_l('leads_staff_report_converted'),
                        'backgroundColor' => 'rgba(37,155,35,0.2)',
                        'borderColor' => "#84c529",
                        'borderWidth'=> 1,
                        'tension'=> false,
                        'data'=>array()
                        ),
                    ),
            );
        foreach($staff as $member){
            array_push($chart['labels'],$member['firstname'].' '.$member['lastname']);
            if(!isset($to_date) && !isset($from_date)){
                $total_rows_converted = total_rows('tblleads',array('assigned'=>$member['staffid'],'status'=>1));
                $total_rows_created = total_rows('tblleads',array('addedfrom'=>$member['staffid']));
                $total_rows_lost = total_rows('tblleads',array('assigned'=>$member['staffid'],'lost'=>1));
            } else {

                $sql = "SELECT COUNT(tblleads.id) as total FROM tblleads WHERE DATE(last_status_change) BETWEEN '" . $from_date . "' AND '" . $to_date . "' AND status = 1 AND assigned=".$member['staffid']."";
                $total_rows_converted = $this->db->query($sql)->row()->total;

                $sql = "SELECT COUNT(tblleads.id) as total FROM tblleads WHERE DATE(dateadded) BETWEEN '" . $from_date . "' AND '" . $to_date . "' AND addedfrom=".$member['staffid']."";
                $total_rows_created = $this->db->query($sql)->row()->total;

                $sql = "SELECT COUNT(tblleads.id) as total FROM tblleads WHERE DATE(last_status_change) BETWEEN '" . $from_date . "' AND '" . $to_date . "' AND lost = 1 AND assigned=".$member['staffid']."";

                $total_rows_lost = $this->db->query($sql)->row()->total;
            }

            array_push($chart['datasets'][0]['data'],$total_rows_created);
            array_push($chart['datasets'][1]['data'],$total_rows_lost);
            array_push($chart['datasets'][2]['data'],$total_rows_converted);
        }

        return $chart;
    }
    /**
     * Lead conversion by sources report / chart
     * @return arrray chart data
     */
    public function leads_sources_report()
    {
        $this->load->model('leads_model');
        $sources = $this->leads_model->get_source();
        $chart   = array(
            'labels' => array(),
            'datasets' => array(
                array(
                    'label' => _l('report_leads_sources_conversions'),
                    'backgroundColor' => 'rgba(124, 179, 66, 0.5)',
                    'borderColor' => '#7cb342',
                    'data' => array()
                ),
            )
        );
        foreach ($sources as $source) {
            array_push($chart['labels'], $source['name']);
            array_push($chart['datasets'][0]['data'], total_rows('tblleads', array(
                'source' => $source['id'],
                'status' => 1,
                'lost' => 0
            )));
        }
        return $chart;
    }
    public function report_by_customer_groups()
    {
        $months_report = $this->input->post('months_report');
        $groups        = $this->clients_model->get_groups();
        if ($months_report != '') {
            $custom_date_select = '';
            if (is_numeric($months_report)) {
                $custom_date_select = 'tblinvoicepaymentrecords.date > DATE_SUB(now(), INTERVAL ' . $months_report . ' MONTH)';
            } else if ($months_report == 'custom') {
                $from_date = to_sql_date($this->input->post('report_from'));
                $to_date   = to_sql_date($this->input->post('report_to'));
                if ($from_date == $to_date) {
                    $custom_date_select = 'tblinvoicepaymentrecords.date ="' . $from_date . '"';
                } else {
                    $custom_date_select = '(tblinvoicepaymentrecords.date BETWEEN "' . $from_date . '" AND "' . $to_date . '")';
                }
            }
            $this->db->where($custom_date_select);
        }
        $this->db->select('amount,tblinvoicepaymentrecords.date,tblinvoices.clientid,(SELECT GROUP_CONCAT(name) FROM tblcustomersgroups LEFT JOIN tblcustomergroups_in ON tblcustomergroups_in.groupid = tblcustomersgroups.id WHERE customer_id = tblinvoices.clientid) as groups');
        $this->db->from('tblinvoicepaymentrecords');
        $this->db->join('tblinvoices', 'tblinvoices.id = tblinvoicepaymentrecords.invoiceid');
        $this->db->where('tblinvoices.clientid IN (select customer_id FROM tblcustomergroups_in)');
        $this->db->where('tblinvoices.status !=', 5);
        $by_currency = $this->input->post('report_currency');
        if ($by_currency) {
            $this->db->where('currency', $by_currency);
        }
        $payments       = $this->db->get()->result_array();
        $data           = array();
        $data['temp']   = array();
        $data['total']  = array();
        $data['labels'] = array();
        foreach ($groups as $group) {
            if (!isset($data['groups'][$group['name']])) {
                $data['groups'][$group['name']] = $group['name'];
            }
        }
        // If any groups found
        if(isset($data['groups'])){
            foreach ($data['groups'] as $group) {
                foreach ($payments as $payment) {
                    $p_groups = explode(',', $payment['groups']);
                    foreach ($p_groups as $p_group) {
                        if ($p_group == $group) {
                            $data['temp'][$group][] = $payment['amount'];
                        }
                    }
                }
                array_push($data['labels'], $group);
                if (isset($data['temp'][$group])) {
                    $data['total'][] = array_sum($data['temp'][$group]);
                }
            }
        }
        $chart = array(
            'labels' => $data['labels'],
            'datasets' => array(
                array(
                    'label' => _l('customer_groups'),
                    'backgroundColor' => 'rgba(197, 61, 169, 0.2)',
                    'borderColor' => '#c53da9',
                    'borderWidth'=>1,
                    'tension'=>false,
                    'data' => $data['total']
                )
            )
        );
        return $chart;
    }
    public function invoices_report_total()
    {
        $where              = ' WHERE status != 5';
        $months_report      = $this->input->post('months_report');
        $custom_date_select = '';
        if ($months_report != '') {
            if (is_numeric($months_report)) {
                $custom_date_select = ' tblinvoices.date > DATE_SUB(now(), INTERVAL ' . $months_report . ' MONTH)';
            } else if ($months_report == 'custom') {
                $from_date = to_sql_date($this->input->post('report_from'));
                $to_date   = to_sql_date($this->input->post('report_to'));
                if ($from_date == $to_date) {
                    $custom_date_select = ' tblinvoices.date ="' . $from_date . '"';
                } else {
                    $custom_date_select = ' (tblinvoices.date BETWEEN "' . $from_date . '" AND "' . $to_date . '")';
                }
            }
        }
        if ($custom_date_select != '') {
            $where .= ' AND' . $custom_date_select;
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
                $where .= ' AND status IN (' . implode(', ', $_statuses) . ')';
            }
        }
        $this->load->model('currencies_model');
        $currency        = $this->currencies_model->get_base_currency();
        $currency_symbol = $this->currencies_model->get_currency_symbol($currency->id);
        $by_currency     = $this->input->post('report_currency');
        if ($by_currency) {
            $where .= ' AND currency=' . $by_currency;
            $currency        = $this->currencies_model->get($by_currency);
            $currency_symbol = $this->currencies_model->get_currency_symbol($currency->id);
        }
        $total_with_tax             = $this->db->query('SELECT SUM(total) as total_with_tax FROM tblinvoices' . $where . '', FALSE)->result_array();
        $total_without_tax          = $this->db->query('SELECT SUM(subtotal) as total_without_tax FROM tblinvoices' . $where . '', FALSE)->result_array();
        $discounts                  = $this->db->query('SELECT SUM(discount_total) as discount_total FROM tblinvoices' . $where . '', FALSE)->result_array();
        $final                      = array();
        $final['taxes']             = format_money(($total_with_tax[0]['total_with_tax'] - $total_without_tax[0]['total_without_tax']), $currency_symbol);
        $final['total_with_tax']    = format_money($total_with_tax[0]['total_with_tax'], $currency_symbol);
        $final['total_without_tax'] = format_money($total_without_tax[0]['total_without_tax'], $currency_symbol);
        $final['discounts']         = format_money($discounts[0]['discount_total'], $currency_symbol);
        return $final;
    }
    public function report_by_payment_modes(){

        $this->load->model('payment_modes_model');
        $modes = $this->payment_modes_model->get('',true,true);
        $year = $this->input->post('year');
        $colors = get_system_favourite_colors();
        $this->db->select('amount,tblinvoicepaymentrecords.date');
        $this->db->from('tblinvoicepaymentrecords');
        $this->db->where('YEAR(tblinvoicepaymentrecords.date)', $year);
        $this->db->join('tblinvoices', 'tblinvoices.id = tblinvoicepaymentrecords.invoiceid');
        $by_currency = $this->input->post('report_currency');
        if ($by_currency) {
            $this->db->where('currency', $by_currency);
        }
        $all_payments       = $this->db->get()->result_array();
        $chart = array(
            'labels' => array(),
            'datasets' => array()
        );
        $data           = array();
        $data['months'] = array();
        foreach ($all_payments as $payment) {
            $month   = date('m', strtotime($payment['date']));
            $dateObj = DateTime::createFromFormat('!m', $month);
            $month   = $dateObj->format('F');
            if (!isset($data['months'][$month])) {
                $data['months'][$month] = $month;
            }
        }
        usort($data['months'], function($a, $b)
        {
            $month1 = date_parse($a);
            $month2 = date_parse($b);
            return $month1["month"] - $month2["month"];
        });

        foreach ($data['months'] as $month) {
            array_push($chart['labels'], _l($month) . ' - ' . $year);
        }
         $i = 0;
        foreach($modes as $mode){
            $color = '#4B5158';
            if(isset($colors[$i])){
                $color = $colors[$i];
            }
            $this->db->select('amount,tblinvoicepaymentrecords.date');
            $this->db->from('tblinvoicepaymentrecords');
            $this->db->where('YEAR(tblinvoicepaymentrecords.date)', $year);
            $this->db->where('tblinvoicepaymentrecords.paymentmode', $mode['id']);
            $this->db->join('tblinvoices', 'tblinvoices.id = tblinvoicepaymentrecords.invoiceid');
            $by_currency = $this->input->post('report_currency');
            if ($by_currency) {
                $this->db->where('currency', $by_currency);
            }
            $payments       = $this->db->get()->result_array();
            $datasets_data           = array();
            $datasets_data['total']  = array();
            foreach ($data['months'] as $month) {
                $total_payments = array();
                if(!isset($datasets_data['temp'][$month])){
                    $datasets_data['temp'][$month] = array();
                }
                foreach ($payments as $payment) {
                    $_month  = date('m', strtotime($payment['date']));
                    $dateObj = DateTime::createFromFormat('!m', $_month);
                    $_month  = $dateObj->format('F');
                    if ($month == $_month) {
                        $total_payments[] = $payment['amount'];
                    }
                }
                $datasets_data['total'][] = array_sum($total_payments);
            }
            $chart['datasets'][] = array(
                'label' => $mode['name'],
                'backgroundColor' => $color,
                'borderColor' => adjust_color_brightness($color,-20),
                'tension' => false,
                'borderWidth'=>1,
                'data' => $datasets_data['total']
            );
            $i++;
        }
        return $chart;
    }
    /**
     * Total income report / chart
     * @return array chart data
     */
    public function total_income_report()
    {
        $year = $this->input->post('year');
        $this->db->select('amount,tblinvoicepaymentrecords.date');
        $this->db->from('tblinvoicepaymentrecords');
        $this->db->where('YEAR(tblinvoicepaymentrecords.date)', $year);
        $this->db->join('tblinvoices', 'tblinvoices.id = tblinvoicepaymentrecords.invoiceid');
        $by_currency = $this->input->post('report_currency');
        if ($by_currency) {
            $this->db->where('currency', $by_currency);
        }
        $payments       = $this->db->get()->result_array();
        $data           = array();
        $data['months'] = array();
        $data['temp']   = array();
        $data['total']  = array();
        $data['labels'] = array();
        foreach ($payments as $payment) {
            $month   = date('m', strtotime($payment['date']));
            $dateObj = DateTime::createFromFormat('!m', $month);
            $month   = $dateObj->format('F');
            if (!isset($data['months'][$month])) {
                $data['months'][$month] = $month;
            }
        }
        usort($data['months'], function($a, $b)
        {
            $month1 = date_parse($a);
            $month2 = date_parse($b);
            return $month1["month"] - $month2["month"];
        });
        foreach ($data['months'] as $month) {
            foreach ($payments as $payment) {
                $_month  = date('m', strtotime($payment['date']));
                $dateObj = DateTime::createFromFormat('!m', $_month);
                $_month  = $dateObj->format('F');
                if ($month == $_month) {
                    $data['temp'][$month][] = $payment['amount'];
                }
            }
            array_push($data['labels'], _l($month) . ' - ' . $year);
            $data['total'][] = array_sum($data['temp'][$month]);
        }
        $chart = array(
            'labels' => $data['labels'],
            'datasets' => array(
                array(
                    'label' => _l('report_sales_type_income'),
                    'backgroundColor' => 'rgba(37,155,35,0.2)',
                    'borderColor' => "#84c529",
                    'tension' => false,
                    'borderWidth'=>1,
                    'data' => $data['total']
                )
            )
        );
        return $chart;
    }
    public function get_distinct_expense_years()
    {
        return $this->db->query('SELECT DISTINCT(YEAR(date)) as year FROM tblexpenses')->result_array();
    }
    public function get_distinct_payments_years()
    {
        return $this->db->query('SELECT DISTINCT(YEAR(date)) as year FROM tblinvoicepaymentrecords')->result_array();
    }
     public function get_distinct_customer_invoices_years()
    {
        return $this->db->query('SELECT DISTINCT(YEAR(date)) as year FROM tblinvoices WHERE clientid='.get_client_user_id())->result_array();
    }
}

