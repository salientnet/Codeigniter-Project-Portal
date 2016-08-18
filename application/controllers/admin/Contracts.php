<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contracts extends Admin_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('contracts_model');
    }
    /* List all contracts */
    public function index($clientid = false)
    {
        if (!has_permission('contracts', '', 'view')) {
            access_denied('contracts');
        }
        if ($this->input->is_ajax_request()) {
            $this->perfex_base->get_table_data('contracts', array(
                'clientid' => $clientid
            ));
        }
        $data['chart_types']        = json_encode($this->contracts_model->get_contracts_types_chart_data());
        $data['chart_types_values'] = json_encode($this->contracts_model->get_contracts_types_values_chart_data());
        $data['contract_types']     = $this->contracts_model->get_contract_types();
        $data['title']              = _l('contracts');
        $this->load->view('admin/contracts/manage', $data);
    }
    /* Edit contract or add new contract */
    public function contract($id = '')
    {
        if (!has_permission('contracts', '', 'view')) {
            access_denied('contracts');
        }
        if ($this->input->post()) {
            if ($id == '') {
                if (!has_permission('contracts', '', 'create')) {
                    access_denied('contracts');
                }
                $id = $this->contracts_model->add($this->input->post());
                if ($id) {
                    set_alert('success', _l('added_successfuly', _l('contract')));
                    redirect(admin_url('contracts/contract/' . $id));
                }
            } else {
                if (!has_permission('contracts', '', 'edit')) {
                    access_denied('contracts');
                }
                $success = $this->contracts_model->update($this->input->post(), $id);
                if ($success) {
                    set_alert('success', _l('updated_successfuly', _l('contract')));
                }
                redirect(admin_url('contracts/contract/' . $id));
            }
        }
        if ($id == '') {
            $title = _l('add_new', _l('contract_lowercase'));
        } else {
            $data['contract']                 = $this->contracts_model->get($id, array(), true);
            $data['contract_renewal_history'] = $this->contracts_model->get_contract_renewal_history($id);
            if (!$data['contract']) {
                blank_page(_l('contract_not_found'));
            }
            $contract_merge_fields  = get_available_merge_fields();
            $_contract_merge_fields = array();
            foreach ($contract_merge_fields as $key => $val) {
                foreach ($val as $type => $f) {
                    if ($type == 'contract') {
                        foreach ($f as $available) {
                            foreach ($available['available'] as $av) {
                                if ($av == 'contract') {
                                    array_push($_contract_merge_fields, $f);
                                    break;
                                }
                            }
                            break;
                        }
                    } else if ($type == 'other') {
                        array_push($_contract_merge_fields, $f);
                    } else if ($type == 'clients') {
                        array_push($_contract_merge_fields, $f);
                    }
                }
            }
            $data['contract_merge_fields'] = $_contract_merge_fields;
            $title                         = _l('edit', _l('contract_lowercase'));
            $merge_fields                  = array();
            $merge_fields                  = array_merge($merge_fields, get_client_contact_merge_fields($data['contract']->client));
            $merge_fields                  = array_merge($merge_fields, get_contract_merge_fields($id));
            $template_name = 'send-contract';
            $data['template']              = parse_email_template($template_name, $merge_fields);
            $data['template_name'] = 'send-contract';
        }

        if($this->input->get('customer_id')){
            $data['customer_id'] = $this->input->get('customer_id');
            $data['do_not_auto_toggle'] = true;
        }

        $this->load->model('currencies_model');
        $data['base_currency'] = $this->currencies_model->get_base_currency();
        $data['types']         = $this->contracts_model->get_contract_types();
        $data['clients']       = $this->clients_model->get();
        $data['title']         = $title;
        $this->load->view('admin/contracts/contract', $data);
    }
    public function pdf($id)
    {
        if (!has_permission('contracts', '', 'view')) {
            access_denied('contracts');
        }
        if (!$id) {
            redirect(admin_url('contracts'));
        }
        $contract = $this->contracts_model->get($id);
        $pdf      = contract_pdf($contract);
        $type     = 'D';
        if ($this->input->get('print')) {
            $type = 'I';
        }
        $pdf->Output(slug_it($contract->subject) . '.pdf', $type);
    }
    public function send_to_email($id)
    {
        if (!has_permission('contracts', '', 'view')) {
            access_denied('contracts');
        }
        $success = $this->contracts_model->sent_contract_to_client($id, $this->input->post('attach_pdf'));
        if ($success) {
            set_alert('success', _l('contract_sent_to_client_success'));
        } else {
            set_alert('danger', _l('contract_sent_to_client_fail'));
        }
        redirect(admin_url('contracts/contract/' . $id));
    }
    public function save_contract_data()
    {
        if (!has_permission('contracts', '', 'edit')) {
            access_denied('contracts');
        }
        if ($this->input->post('content')) {
            $this->db->where('id', $this->input->post('contract_id'));
            $this->db->update('tblcontracts', array(
                'content' => $this->input->post('content')
            ));
            $success = false;
            $message = '';
            if ($this->db->affected_rows() > 0) {
                $success = true;
                $message = _l('updated_successfuly', _l('contract'));
            }
            echo json_encode(array(
                'success' => $success,
                'message' => $message
            ));
        }
    }
    public function renew()
    {
        if (!has_permission('contracts', '', 'create')) {
            access_denied('contracts');
        }
        if ($this->input->post()) {
            $data    = $this->input->post();
            $success = $this->contracts_model->renew($data);
            if ($success) {
                set_alert('success', _l('contract_renewed_successfuly'));
            } else {
                set_alert('warning', _l('contract_renewed_fail'));
            }
            redirect(admin_url('contracts/contract/' . $data['contractid']));
        }
    }
    public function delete_renewal($renewal_id, $contractid)
    {
        if (!has_permission('contracts', '', 'delete')) {
            access_denied('contracts');
        }
        $success = $this->contracts_model->delete_renewal($renewal_id, $contractid);
        if ($success) {
            set_alert('success', _l('contract_renewal_deleted'));
        } else {
            set_alert('warning', _l('contract_renewal_delete_fail'));
        }
        redirect(admin_url('contracts/contract/' . $contractid));
    }
    /* Delete contract from database */
    public function delete($id)
    {
        if (!has_permission('contracts', '', 'delete')) {
            access_denied('contracts');
        }
        if (!$id) {
            redirect(admin_url('contracts'));
        }
        $response = $this->contracts_model->delete($id);
        if ($response == true) {
            set_alert('success', _l('deleted', _l('contract')));
        } else {
            set_alert('warning', _l('problem_deleting', _l('contract_lowercase')));
        }
        redirect(admin_url('contracts'));
    }
    /* Manage contract types Since Version 1.0.3 */
    public function type($id = '')
    {
        if (!is_admin()) {
            access_denied('contracts');
        }
        if ($this->input->post()) {
            if (!$this->input->post('id')) {
                $id = $this->contracts_model->add_contract_type($this->input->post());
                if ($id) {
                    $success = true;
                    $message = _l('added_successfuly', _l('contract_type'));
                }
                echo json_encode(array(
                    'success' => $success,
                    'message' => $message
                ));
            } else {
                $data = $this->input->post();
                $id   = $data['id'];
                unset($data['id']);
                $success = $this->contracts_model->update_contract_type($data, $id);
                $message = '';
                if ($success) {
                    $message = _l('updated_successfuly', _l('contract_type'));
                }
                echo json_encode(array(
                    'success' => $success,
                    'message' => $message
                ));
            }
        }
    }
    public function types()
    {
        if (!is_admin()) {
            access_denied('contracts');
        }
        if ($this->input->is_ajax_request()) {
            $this->perfex_base->get_table_data('contract_types');
        }
        $data['title'] = _l('contract_types');
        $this->load->view('admin/contracts/manage_types', $data);
    }
    /* Delete announcement from database */
    public function delete_contract_type($id)
    {
        if (!$id) {
            redirect(admin_url('contracts/types'));
        }
        if (!is_admin()) {
            access_denied('contracts');
        }
        $response = $this->contracts_model->delete_contract_type($id);
        if (is_array($response) && isset($response['referenced'])) {
            set_alert('warning', _l('is_referenced', _l('contract_type_lowercase')));
        } else if ($response == true) {
            set_alert('success', _l('deleted', _l('contract_type')));
        } else {
            set_alert('warning', _l('problem_deleting', _l('contract_type_lowercase')));
        }
        redirect(admin_url('contracts/types'));
    }
    public function init_relation_equipments($rel_id)
    {
      if (!is_admin()) {
          access_denied('contracts');
      }
      if ($this->input->is_ajax_request()) {
         $this->perfex_base->get_table_data('contract_equipments', array(
            'rel_id' => $rel_id
         ));
      }
    }
    public function contract_equipment($id = '')
    {
        if (!is_admin()) {
            access_denied('contracts');
        }
        if ($this->input->post()) {
            if (!$this->input->post('id')) {
                $id = $this->contracts_model->add_contract_equipment($this->input->post());
                if ($id) {
                    $success = true;
                    $message = _l('added_successfuly', _l('contract_equipment'));
                }
                echo json_encode(array(
                    'success' => $success,
                    'message' => $message
                ));
            } else {
                $data = $this->input->post();
                $id   = $data['id'];
                unset($data['id']);
                $success = $this->contracts_model->update_contract_equipment($data, $id);
                $message = '';
                if ($success) {
                    $message = _l('updated_successfuly', _l('contract_equipment'));
                }
                echo json_encode(array(
                    'success' => $success,
                    'message' => $message
                ));
            }
        }
    }
    /* Delete announcement from database */
    public function delete_contract_equipment($id)
    {
      $contract_id = $this->contracts_model->get_contract_id_with_equipment($id);
        if (!$id) {
            redirect(admin_url('contracts/contract/' . $contract_id));
        }
        if (!is_admin()) {
            access_denied('contracts');
        }
        $response = $this->contracts_model->delete_contract_equipment($id);
         if ($response == true) {
            set_alert('success', _l('deleted', _l('contract_equipment')));
        } else {
            set_alert('warning', _l('problem_deleting', _l('contract_equipment_lowercase')));
        }
        redirect(admin_url('contracts/contract/' . $contract_id));
    }
    public function add_contract_attachment($id)
    {
        if (!has_permission('contracts', '', 'create') && !has_permission('contracts','','edit')) {
            // access_denied
            header('HTTP/1.0 400 Bad error');
            echo _l('access_denied');
            die;
        }
        handle_contract_attachment($id);
    }
    public function delete_contract_attachment($attachment_id)
    {
        if (!has_permission('contracts', '', 'delete')) {
            echo json_encode(array(
                'success' => false,
                'message' => _l('access_denied')
            ));
            die;
        }
        echo json_encode(array(
            'success' => $this->contracts_model->delete_contract_attachments($attachment_id)
        ));
    }
    public function equipment_custom_fields($equipment_id) {
      echo render_custom_fields('equipment', $equipment_id);
   }
}
