<?php if(isset($client)){ ?>
    <?php if(has_permission('invoices','','create')){ ?>
        <a href="<?php echo admin_url('invoices/invoice?customer_id='.$client->userid); ?>" class="btn btn-info"><?php echo _l('create_new_invoice'); ?></a>
    <?php } ?>
    <?php if(has_permission('invoices','','view')){ ?>
        <?php
        $table_data = array(
            _l('invoice_dt_table_heading_number'),
            _l('invoice_dt_table_heading_amount'),
            _l('invoice_total_tax'),
            _l('invoice_dt_table_heading_date'),
            _l('invoice_dt_table_heading_client'),
            _l('invoice_dt_table_heading_duedate'),
            _l('invoice_dt_table_heading_status'));

        $custom_fields = get_custom_fields('invoice',array('show_on_table'=>1));
        foreach($custom_fields as $field){
            array_push($table_data,$field['name']);
        }
        render_datatable($table_data, 'invoices-single-client');
        include_once(APPPATH . 'views/admin/clients/modals/zip_invoices.php');
        ?>
        <?php } ?>
        <?php } ?>
