<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body _buttons">
                        <?php if(has_permission('contracts','','create')){ ?>
                        <a href="<?php echo admin_url('contracts/contract'); ?>" class="btn btn-info pull-left display-block"><?php echo _l('new_contract'); ?></a>
                        <?php } ?>
                        <div class="btn-group pull-right btn-with-tooltip-group" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-left width220">
                                <li>
                                    <a href="#" onclick="dt_custom_view('','.table-contracts'); return false;">
                                    <?php echo _l('contracts_view_exclude_trashed'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('all','.table-contracts'); return false;">
                                    <?php echo _l('contracts_view_all'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('expired','.table-contracts'); return false;">
                                    <?php echo _l('contracts_view_expired'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('without_dateend','.table-contracts'); return false;">
                                    <?php echo _l('contracts_view_without_dateend'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('trash','.table-contracts'); return false;">
                                    <?php echo _l('contracts_view_trash'); ?>
                                    </a>
                                </li>
                                <?php if(count($contract_types) > 0){ ?>
                                <li class="divider"></li>
                                <?php foreach($contract_types as $type){ ?>
                                <li>
                                    <a href="#" onclick="dt_custom_view('<?php echo $type['id']; ?>','.table-contracts'); return false;">
                                    <?php echo $type['name']; ?>
                                    </a>
                                </li>
                                <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row" id="contract_summary">
                            <hr />
                            <?php $minus_7_days = date('Y-m-d', strtotime("-7 days")); ?>
                            <?php $plus_7_days = date('Y-m-d', strtotime("+7 days")); ?>
                            <div class="col-md-12">
                                <h3 class="no-margin text-success"><?php echo _l('contract_summary_heading'); ?></h3>
                            </div>
                            <div class="col-md-2 col-xs-6 border-right">
                                <h3 class="bold"><?php echo total_rows('tblcontracts',array('DATE(dateend) >'=>date('Y-m-d'),'trash'=>0)); ?></h3>
                                <span class="text-info bold"><?php echo _l('contract_summary_active'); ?></span>
                            </div>
                            <div class="col-md-2 col-xs-6 border-right">
                                <h3 class="bold"><?php echo total_rows('tblcontracts',array('DATE(dateend) <'=>date('Y-m-d'),'trash'=>0)); ?></h3>
                                <span class="text-danger bold"><?php echo _l('contract_summary_expired'); ?></span>
                            </div>
                            <div class="col-md-2 col-xs-6 border-right">
                                <h3 class="bold"><?php echo total_rows('tblcontracts','dateend BETWEEN "'.$minus_7_days.'" AND "'.$plus_7_days.'" AND trash=0 AND dateend is NOT NULL AND dateend >"'.date('Y-m-d').'"'); ?></h3>
                                <span class="text-warning bold"><?php echo _l('contract_summary_about_to_expire'); ?></span>
                            </div>
                            <div class="col-md-2 col-xs-6 border-right">
                                <h3 class="bold"><?php echo total_rows('tblcontracts','dateadded BETWEEN "'.$minus_7_days.'" AND "'.$plus_7_days.'" AND trash=0'); ?></h3>
                                <span class="text-success bold"><?php echo _l('contract_summary_recently_added'); ?></span>
                            </div>
                            <div class="col-md-2 col-xs-6">
                                <h3 class="bold"><?php echo total_rows('tblcontracts',array('trash'=>1)); ?></h3>
                                <span class="text-muted bold"><?php echo _l('contract_summary_trash'); ?></span>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="col-md-6 border-right">
                                <h4 class="text-muted bold"><?php echo _l('contract_summary_by_type'); ?></h4>
                                <canvas class="chart" height="160" id="contracts-by-type-chart"></canvas>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-muted bold"><?php echo _l('contract_summary_by_type_value'); ?></h4>
                                <canvas class="chart" height="160" id="contracts-value-by-type-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel_s">
                    <?php echo form_hidden('custom_view'); ?>
                    <div class="panel-body">
                        <?php
                            $table_data = array(
                             _l('contract_list_subject'),
                             _l('contract_list_client'),
                             _l('contract_types_list_name'),
                             _l('contract_list_start_date'),
                             _l('contract_list_end_date'),
                             );
                            $custom_fields = get_custom_fields('contracts',array('show_on_table'=>1));
                            foreach($custom_fields as $field){
                             array_push($table_data,$field['name']);
                            }
                            array_push($table_data,_l('options'));
                            render_datatable($table_data,'contracts'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
<script>
    $(document).ready(function() {
        var ContractsServerParams = {
            "custom_view": "[name='custom_view']"
        }
        var headers_contracts = $('.table-contracts').find('th');
        var not_sortable_contracts = (headers_contracts.length - 1);

        initDataTable('.table-contracts', window.location.href, [not_sortable_contracts], [not_sortable_contracts], ContractsServerParams);
        new Chart($('#contracts-by-type-chart'), {
            type: 'bar',
            data: <?php echo $chart_types; ?>,
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0, // minimum will be 0, unless there is a lower value.
                        }
                    }]
                }
            }
        });
        new Chart($('#contracts-value-by-type-chart'), {
            type: 'line',
            data: <?php echo $chart_types_values; ?>,
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0, // minimum will be 0, unless there is a lower value.
                        }
                    }]
                }
            }
        });
    });
</script>
</body>
</html>
