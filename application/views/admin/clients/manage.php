<?php init_head(); ?>
<div id="wrapper">
   <div class="content">
      <div class="row">
         <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
         <div class="col-md-12">
            <?php echo form_hidden('custom_view'); ?>
            <?php echo form_hidden('invoices_by_status'); ?>
            <?php echo form_hidden('estimates_by_status'); ?>
            <?php echo form_hidden('contracts_by_type'); ?>
            <?php echo form_hidden('projects_by_status'); ?>
            <?php echo form_hidden('proposals_by_status'); ?>
            <div class="panel_s">
               <div class="panel-body">
                  <div class="_buttons">
                     <?php if (has_permission('customers','','create')) { ?>
                     <a href="<?php echo admin_url('clients/client'); ?>" class="btn btn-info mright5 test pull-left display-block">
                     <?php echo _l('new_client'); ?></a>
                     <a href="<?php echo admin_url('clients/import'); ?>" class="btn btn-info pull-left display-block mright5">
                     <?php echo _l('import_customers'); ?></a>
                     <?php } ?>
                     <div class="visible-xs">
                        <div class="clearfix"></div>
                     </div>
                     <div class="btn-group pull-right btn-with-tooltip-group" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-left" style="width:300px;">
                           <li><a href="#" onclick="dt_custom_view('','.table-clients'); return false;"><?php echo _l('customers_sort_all'); ?></a></li>
                           <li class="divider"></li>
                           <?php if(count($groups) > 0){ ?>
                           <li class="dropdown-submenu pull-left">
                              <a href="#" tabindex="-1"><?php echo _l('customer_groups'); ?></a>
                              <ul class="dropdown-menu dropdown-menu-left">
                                 <?php foreach($groups as $group){ ?>
                                 <li><a href="#" onclick="dt_custom_view(<?php echo $group['id']; ?>,'.table-clients'); return false;"><?php echo $group['name']; ?></a></li>
                                 <?php } ?>
                              </ul>
                           </li>
                           <div class="clearfix"></div>
                           <li class="divider"></li>
                           <?php } ?>
                           <li class="dropdown-submenu pull-left">
                              <a href="#" tabindex="-1"><?php echo _l('invoices'); ?></a>
                              <ul class="dropdown-menu dropdown-menu-left">
                                 <li>
                                    <a href="#" onclick="customer_invoices_by_status(1); return false;"><?php echo _l('customer_have_invoices_by',_l('invoice_status_unpaid')); ?></a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_invoices_by_status(2); return false;"><?php echo _l('customer_have_invoices_by',_l('invoice_status_paid')); ?></a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_invoices_by_status(3); return false;"><?php echo _l('customer_have_invoices_by',_l('invoice_status_not_paid_completely')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_invoices_by_status(4); return false;"><?php echo _l('customer_have_invoices_by',_l('invoice_status_overdue')); ?>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <div class="clearfix"></div>
                           <li class="divider"></li>
                           <li class="dropdown-submenu pull-left">
                              <a href="#" tabindex="-1"><?php echo _l('estimates'); ?></a>
                              <ul class="dropdown-menu dropdown-menu-left">
                                 <li>
                                    <a href="#" onclick="customer_estimates_by_status(1); return false;">
                                    <?php echo _l('customer_have_estimates_by',_l('estimate_status_draft')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_estimates_by_status(2); return false;">
                                    <?php echo _l('customer_have_estimates_by',_l('estimate_status_sent')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_estimates_by_status(3); return false;">
                                    <?php echo _l('customer_have_estimates_by',_l('estimate_status_declined')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_estimates_by_status(4); return false;">
                                    <?php echo _l('customer_have_estimates_by',_l('estimate_status_accepted')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_estimates_by_status(5); return false;">
                                    <?php echo _l('customer_have_estimates_by',_l('estimate_status_expired')); ?>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <div class="clearfix"></div>
                           <li class="divider"></li>
                           <li class="dropdown-submenu pull-left">
                              <a href="#" tabindex="-1"><?php echo _l('projects'); ?></a>
                              <ul class="dropdown-menu dropdown-menu-left">
                                 <li>
                                    <a href="#" onclick="customer_projects_by_status(1); return false;">
                                    <?php echo _l('customer_have_projects_by',_l('project_status_1')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_projects_by_status(2); return false;">
                                    <?php echo _l('customer_have_projects_by',_l('project_status_2')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_projects_by_status(3); return false;">
                                    <?php echo _l('customer_have_projects_by',_l('project_status_3')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_projects_by_status(4); return false;">
                                    <?php echo _l('customer_have_projects_by',_l('project_status_4')); ?>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <div class="clearfix"></div>
                           <li class="divider"></li>
                           <li class="dropdown-submenu pull-left">
                              <a href="#" tabindex="-1"><?php echo _l('proposals'); ?></a>
                              <ul class="dropdown-menu dropdown-menu-left">
                                 <li>
                                    <a href="#" onclick="customer_proposals_by_status('0'); return false;">
                                    <?php echo _l('customer_have_proposals_by',_l('proposal_status_draft')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_proposals_by_status('1'); return false;">
                                    <?php echo _l('customer_have_proposals_by',_l('proposal_status_open')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_proposals_by_status('3'); return false;">
                                    <?php echo _l('customer_have_proposals_by',_l('proposal_status_declined')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_proposals_by_status('2'); return false;">
                                    <?php echo _l('customer_have_proposals_by',_l('proposal_status_accepted')); ?>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="customer_proposals_by_status('4'); return false;">
                                    <?php echo _l('customer_have_proposals_by',_l('proposal_status_sent')); ?>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <div class="clearfix"></div>
                           <?php if(count($contract_types) > 0) { ?>
                           <li class="divider"></li>
                           <li class="dropdown-submenu pull-left">
                              <a href="#" tabindex="-1"><?php echo _l('contract_types'); ?></a>
                              <ul class="dropdown-menu dropdown-menu-left">
                                 <?php foreach($contract_types as $type){ ?>
                                 <li>
                                    <a href="#" onclick="customer_contracts_by_type('<?php echo $type['id']; ?>'); return false;">
                                    <?php echo _l('customer_have_contracts_by_type',$type['name']); ?>
                                    </a>
                                 </li>
                                 <?php } ?>
                              </ul>
                           </li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr />
                  <div class="row mbot15">
                     <div class="col-md-12">
                        <h3 class="text-success no-margin"><?php echo _l('customers_summary'); ?></h3>
                     </div>
                     <div class="col-md-2 col-xs-6 border-right">
                        <h3 class="bold"><?php echo total_rows('tblclients'); ?></h3>
                        <span class="text-success bold"><?php echo _l('customers_summary_total'); ?></span>
                     </div>
                     <div class="col-md-2 col-xs-6 border-right">
                        <h3 class="bold"><?php echo total_rows('tblcontacts',array('active'=>1)); ?></h3>
                        <span class="text-info bold"><?php echo _l('customers_summary_active'); ?></span>
                     </div>
                     <div class="col-md-2  col-xs-6 border-right">
                        <h3 class="bold"><?php echo total_rows('tblcontacts',array('active'=>0)); ?></h3>
                        <span class="text-danger bold"><?php echo _l('customers_summary_inactive'); ?></span>
                     </div>
                     <div class="col-md-2 col-xs-6">
                        <h3 class="bold"><?php echo total_rows('tblcontacts','last_login = DATE('.date('Y-m-d').')'); ?></h3>
                        <span class="text-muted bold"><?php echo _l('customers_summary_logged_in_today'); ?></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="panel_s">
               <div class="panel-body">
                  <div class="clearfix"></div>
                  <?php
                     $table_data = array();
                     $_table_data = array(
                         _l('clients_list_company'),
                         _l('contact_primary'),
                         _l('company_primary_email'),
                         _l('clients_list_phone'),
                         _l('customer_groups'),
                         );
                     foreach($_table_data as $_t){
                         array_push($table_data,$_t);
                     }
                     $custom_fields = get_custom_fields('customers',array('show_on_table'=>1));
                     foreach($custom_fields as $field){
                         array_push($table_data,$field['name']);
                     }
                     $_op = _l('options');
                     if(has_permission('customers','','delete')){
                       $_op .= '<div class="checkbox hide mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="clients"><label></label></div>';
                     }
                     array_push($table_data, $_op);
                     render_datatable($table_data,'clients');
                     ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php init_tail(); ?>
<script>
   var CustomersServerParams = {
      "custom_view": "[name='custom_view']",
      "invoices_by_status": "[name='invoices_by_status']",
      "estimates_by_status": "[name='estimates_by_status']",
      "contracts_by_type": "[name='contracts_by_type']",
      "projects_by_status": "[name='projects_by_status']",
      "proposals_by_status": "[name='proposals_by_status']",
   }
   var headers_clients = $('.table-clients').find('th');
   var not_sortable_clients = (headers_clients.length - 1);
   initDataTable('.table-clients', window.location.href, [not_sortable_clients], [not_sortable_clients], CustomersServerParams);
   function customer_invoices_by_status(status){
      $('input[name="invoices_by_status"]').val(status);
      $('.table-clients').DataTable().ajax.reload();
      $('input[name="invoices_by_status"]').val('');
   }
   function customer_estimates_by_status(status){
      $('input[name="estimates_by_status"]').val(status);
      $('.table-clients').DataTable().ajax.reload();
      $('input[name="estimates_by_status"]').val('');
   }
   function customer_contracts_by_type(status){
      $('input[name="contracts_by_type"]').val(status);
      $('.table-clients').DataTable().ajax.reload();
      $('input[name="contracts_by_type"]').val('');
   }
   function customer_projects_by_status(status){
      $('input[name="projects_by_status"]').val(status);
      $('.table-clients').DataTable().ajax.reload();
      $('input[name="projects_by_status"]').val('');
   }
   function customer_proposals_by_status(status){
      $('input[name="proposals_by_status"]').val(status);
      $('.table-clients').DataTable().ajax.reload();
      $('input[name="proposals_by_status"]').val('');
   }
</script>
</body>
</html>
