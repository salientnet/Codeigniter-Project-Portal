<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>

            <div class="col-md-12" id="small-table">
                <div class="panel_s">
                    <div class="panel-body _buttons">
                    <?php if(has_permission('estimates','','create')){
                        include_once(APPPATH . 'views/admin/estimates/estimates_top_stats.php');
                    } ?>
                        <?php if(has_permission('estimates','','create')){ ?>
                        <a href="<?php echo admin_url('estimates/estimate'); ?>" class="btn btn-info pull-left new"><?php echo _l('create_new_estimate'); ?></a>
                        <?php } ?>
                        <a href="<?php echo admin_url('estimates/pipeline/'.$switch_pipeline); ?>" class="btn btn-default mleft5 pull-left"><?php echo _l('switch_to_pipeline'); ?></a>
                        <div class="display-block text-right">
                            <div class="btn-group pull-right mleft4 btn-with-tooltip-group" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-filter" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" onclick="dt_custom_view('','.table-estimates'); return false;">
                                        <?php echo _l('estimates_list_all'); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="show_estimates_by_status(1); return false;">
                                        <?php echo _l('estimate_status_draft'); ?> (<?php echo total_rows('tblestimates',array('status'=>0)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="show_estimates_by_status(2); return false;">
                                        <?php echo _l('estimate_status_sent'); ?> (<?php echo total_rows('tblestimates',array('status'=>2)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="show_estimates_by_status(3); return false;">
                                        <?php echo _l('estimate_status_declined'); ?> (<?php echo total_rows('tblestimates',array('status'=>3)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="show_estimates_by_status(4); return false;">
                                        <?php echo _l('estimate_status_accepted'); ?> (<?php echo total_rows('tblestimates',array('status'=>4)); ?>)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="show_estimates_by_status(5); return false;">
                                        <?php echo _l('estimate_status_expired'); ?> (<?php echo total_rows('tblestimates',array('status'=>5)); ?>)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php if(has_permission('estimates','','create')){ ?>
                            <a href="#" class="btn btn-default btn-with-tooltip" onclick="slideToggle('#stats-top'); return false;" data-toggle="tooltip" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="fa fa-bar-chart"></i></a>
                            <?php } ?>
                            <a href="#" class="btn btn-default btn-with-tooltip toggle-small-view" onclick="toggle_small_view('.table-estimates','#estimate'); return false;" data-toggle="tooltip" title="<?php echo _l('estimates_toggle_table_tooltip'); ?>"><i class="fa fa-angle-double-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="panel_s">
                    <div class="panel-body">
                        <!-- if estimateid found in url -->
                        <?php echo form_hidden('estimateid',$estimateid); ?>
                        <?php
                            $table_data = array(
                            	_l('estimate_dt_table_heading_number'),
                            	_l('estimate_dt_table_heading_amount'),
                            	_l('estimates_total_tax'),
                            	_l('estimate_dt_table_heading_client'),
                            	_l('estimate_dt_table_heading_date'),
                            	_l('estimate_dt_table_heading_expirydate'),
                            	_l('reference_no'),
                            	_l('estimate_dt_table_heading_status'),
                            	);
                            $custom_fields = get_custom_fields('estimate',array('show_on_table'=>1));
                            foreach($custom_fields as $field){
                            	array_push($table_data,$field['name']);
                            }
                            render_datatable($table_data,'estimates'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div id="estimate" class="hide">
                </div>
            </div>
        </div>
    </div>
</div>
<script>var hidden_columns = [2,5,6];</script>
<?php init_tail(); ?>
<script>
    $(document).ready(function(){
    	init_estimate();
    	init_estimates_total();
    });
</script>
</body>
</html>
