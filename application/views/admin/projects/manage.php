<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body _buttons">
                        <?php if(has_permission('projects','','create')){ ?>
                        <a href="<?php echo admin_url('projects/project'); ?>" class="btn btn-info pull-left display-block">
                        <?php echo _l('new_project'); ?>
                        </a>
                        <?php } ?>
                        <div class="btn-group pull-right mleft4 btn-with-tooltip-group" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#" onclick="dt_custom_view('all','.table-projects'); return false;">
                                    <?php echo _l('expenses_list_all'); ?>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('1','.table-projects'); return false;">
                                    <?php echo _l('project_status_1'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('2','.table-projects'); return false;">
                                    <?php echo _l('project_status_2'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('3','.table-projects'); return false;">
                                    <?php echo _l('project_status_3'); ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="dt_custom_view('4','.table-projects'); return false;">
                                    <?php echo _l('project_status_4'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel_s">
                    <div class="panel-body">

                   <div class="row mbot15">
                          <div class="col-md-12">
                              <h3 class="text-success no-margin"><?php echo _l('projects_summary'); ?></h3>
                              <?php
                              $_where = '';
                                  if(!has_permission('projects','','view')){
                                      $_where = 'id IN (SELECT project_id FROM tblprojectmembers WHERE staff_id='.get_staff_user_id().')';
                                  }
                              ?>
                          </div>
                          <div class="col-md-2 col-xs-6 border-right">
                          <?php $where = ($_where == '' ? '' : $_where.' AND ').'status = 1'; ?>
                           <a href="#" onclick="dt_custom_view(1,'.table-projects')">
                            <h3 class="bold"><?php echo total_rows('tblprojects',$where); ?></h3>
                              <span class="text-muted bold"><?php echo _l('project_status_1'); ?></span>
                            </a>
                          </div>
                          <div class="col-md-2 col-xs-6 border-right">
                          <?php $where = ($_where == '' ? '' : $_where.' AND ').'status = 2'; ?>
                           <a href="#" onclick="dt_custom_view(2,'.table-projects')">
                              <h3 class="bold"><?php echo total_rows('tblprojects',$where); ?></h3>
                              <span class="text-info bold"><?php echo _l('project_status_2'); ?></span>
                              </a>
                          </div>
                          <div class="col-md-2 col-xs-6 border-right">
                          <?php $where = ($_where == '' ? '' : $_where.' AND ').'status = 3'; ?>
                           <a href="#" onclick="dt_custom_view(3,'.table-projects')">
                              <h3 class="bold"><?php echo total_rows('tblprojects',$where); ?></h3>
                              <span class="text-warning bold"><?php echo _l('project_status_3'); ?></span>
                              </a>
                          </div>
                          <div class="col-md-2 col-xs-6">
                          <?php $where = ($_where == '' ? '' : $_where.' AND ').'status = 4'; ?>
                           <a href="#" onclick="dt_custom_view(4,'.table-projects')">
                              <h3 class="bold"><?php echo total_rows('tblprojects',$where); ?></h3>
                              <span class="text-success bold"><?php echo _l('project_status_4'); ?></span>
                              </a>
                          </div>
                      </div>
                        <div class="clearfix"></div>
                        <?php echo form_hidden('custom_view'); ?>
                        <?php
                            $table_data = array(
                                _l('project_name'),
                                _l('project_customer'),
                                _l('project_start_date'),
                                _l('project_deadline'),
                                _l('project_status'),
                                _l('project_billing_type'),
                                _l('project_datecreated'),
                                );
                            $custom_fields = get_custom_fields('projects',array('show_on_table'=>1));
                            foreach($custom_fields as $field){
                                array_push($table_data,$field['name']);
                            }
                            array_push($table_data, _l('options'));

                            render_datatable($table_data,'projects'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
<script>
var ProjectsServerParams = {
    "custom_view": "[name='custom_view']"
}
var projects_not_sortable = $('.table-projects').find('th').length - 1;
initDataTable('.table-projects', window.location.href, [projects_not_sortable], [projects_not_sortable], ProjectsServerParams, [3, 'ASC']);
</script>
</body>
</html>
