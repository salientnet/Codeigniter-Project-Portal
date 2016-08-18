<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
            <?php echo form_hidden('custom_view',$custom_view); ?>
            <div class="col-md-12" id="small-table">
                <div class="panel_s">
                    <div class="panel-body _buttons">
                        <?php if(has_permission('proposals','','create')){ ?>
                        <a href="<?php echo admin_url('proposals/proposal'); ?>" class="btn btn-info pull-left display-block">
                        <?php echo _l('new_proposal'); ?>
                        </a>
                        <?php } ?>
                        <a href="<?php echo admin_url('proposals/pipeline/'.$switch_pipeline); ?>" class="btn btn-default mleft5 pull-left"><?php echo _l('switch_to_pipeline'); ?></a>
                        <div class="display-block text-right">
                            <div class="btn-group pull-right mleft4 btn-with-tooltip-group" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-filter" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu width220">
                                    <li>
                                        <a href="#" onclick="dt_custom_view('','.table-proposals'); return false;">
                                        <?php echo _l('proposals_list_all'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('0','.table-proposals'); return false;">
                                        <?php echo _l('proposal_status_draft'); ?> (<?php echo total_rows('tblproposals',array('status'=>0)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('1','.table-proposals'); return false;">
                                        <?php echo _l('proposal_status_open'); ?> (<?php echo total_rows('tblproposals',array('status'=>1)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('3','.table-proposals'); return false;">
                                        <?php echo _l('proposal_status_declined'); ?> (<?php echo total_rows('tblproposals',array('status'=>3)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('2','.table-proposals'); return false;">
                                        <?php echo _l('proposal_status_accepted'); ?> (<?php echo total_rows('tblproposals',array('status'=>2)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('4','.table-proposals'); return false;">
                                        <?php echo _l('proposal_status_sent'); ?> (<?php echo total_rows('tblproposals',array('status'=>4)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('leads_related','.table-proposals'); return false;">
                                        <?php echo _l('proposals_leads_related'); ?> (<?php echo total_rows('tblproposals',array('rel_type'=>'lead')); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="dt_custom_view('customers_related','.table-proposals'); return false;">
                                        <?php echo _l('proposals_customers_related'); ?> (<?php echo total_rows('tblproposals',array('rel_type'=>'customer')); ?>)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-default btn-with-tooltip toggle-small-view" onclick="toggle_small_view('.table-proposals','#proposal'); return false;" data-toggle="tooltip" title="<?php echo _l('invoices_toggle_table_tooltip'); ?>"><i class="fa fa-angle-double-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="panel_s">
                    <div class="panel-body">
                        <!-- if invoiceid found in url -->
                        <?php echo form_hidden('proposal_id',$proposal_id); ?>
                        <?php
                            $table_data = array(
                              _l('proposal_subject'),
                              _l('proposal_to'),
                              _l('proposal_total'),
                              _l('proposal_date'),
                              _l('proposal_open_till'),
                              _l('proposal_date_created'),
                              _l('proposal_status'),
                              );

                            $custom_fields = get_custom_fields('proposal',array('show_on_table'=>1));
                            foreach($custom_fields as $field){
                              array_push($table_data,$field['name']);
                            }
                            render_datatable($table_data,'proposals');
                            ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7 small-table-right-col">
                <div id="proposal" class="hide">
                </div>
            </div>
        </div>
    </div>
</div>
<script> var hidden_columns = [3,4,5];</script>
<?php init_tail(); ?>
<script>
    var proposal_id;
    $(document).ready(function(){
    var Proposals_ServerParams = {
        'custom_view': '[name="custom_view"]',
    };
    initDataTable('.table-proposals', window.location.href, ['undefined'], ['undefined'], Proposals_ServerParams, [5, 'DESC']);
    init_proposal();
    });
</script>
<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/proposals.css">
<script src="<?php echo site_url(); ?>assets/js/proposals.js"></script>
</body>
</html>
