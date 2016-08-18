<?php init_head(); ?>
<div id="wrapper">
   <div class="content">
      <div class="row">
         <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
         <div class="col-md-9">
            <div class="row">
               <?php
                  $no_left_row = true;
                  // Is staff member is for leads
                  if(has_permission('invoices','','view') || has_permission('proposals','','view') || has_permission('estimates','','view') || has_permission('payments','','view') || is_staff_member()){ $no_left_row = false ?>
               <div class="col-md-4">
                  <div class="panel_s">
                     <div class="panel-body">
                        <div class="row home-summary">
                           <?php if(has_permission('invoices','','view')){ ?>
                           <div class="col-md-12">
                              <p class="text-muted mleft5"><?php echo _l('home_invoice_overview'); ?>
                                 <br /><a href="#"  class="home-weekly-payment-sc"><?php echo _l('home_stats_see_weekly_payments'); ?></a>
                              </p>
                              <hr/>
                           </div>
                           <div class="col-md-12">
                            <h3 class="bold no-margin pull-left"><?php echo total_rows('tblinvoices',array('status'=>1)); ?></h3>
                              <a href="<?php echo admin_url('invoices/list_invoices?status=1'); ?>" class="mleft15 inline-block">
                              <span class="bold text-danger mbot10 pull-left"><i class="fa fa-remove"></i> <?php echo _l('invoice_status_unpaid'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                             <h3 class="bold no-margin pull-left"><?php echo total_rows('tblinvoices',array('status'=>4)); ?></h3>
                              <a href="<?php echo admin_url('invoices/list_invoices?status=4'); ?>" class="mleft15 inline-block">
                              <span class="bold text-warning mbot10 pull-left"><i class="fa fa-clock-o"></i> <?php echo _l('home_invoice_overdue'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                              <h3 class="bold no-margin pull-left"><?php echo total_rows('tblinvoices',array('sent'=>0,'status !='=>2)); ?></h3>
                              <a href="<?php echo admin_url('invoices/list_invoices?custom_view=not_sent'); ?>" class="mleft15 inline-block">
                              <span class="bold text-muted inline-block mbot10 pull-left"><i class="fa fa-envelope"></i> <?php echo _l('home_invoice_not_sent'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblinvoices',array('status'=>3)); ?></h3>
                              <a href="<?php echo admin_url('invoices/list_invoices?status=3'); ?>" class="mleft15 inline-block">
                              <span class="bold text-warning mbot10 pull-left"><i class="fa fa-balance-scale"></i> <?php echo _l('home_invoice_partialy_paid'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblinvoices',array('status'=>2)); ?></h3>
                              <a href="<?php echo admin_url('invoices/list_invoices?status=2'); ?>" class="mleft15 inline-block">
                              <span class="bold text-success mbot10 pull-left"><i class="fa fa-check"></i> <?php echo _l('home_invoice_paid'); ?></span>
                              </a>
                           </div>
                           <?php } ?>
                           <?php if(has_permission('payments','','view')){ ?>
                           <div class="col-md-12">
                             <h3 class="bold no-margin pull-left"><?php echo total_rows('tblinvoicepaymentrecords',array('DATE(date)'=>date('Y-m-d'))); ?></h3>
                              <a href="<?php echo admin_url('payments?custom_view=today'); ?>" class="mleft15 inline-block">
                              <span class="bold text-success pull-left"><i class="fa fa-calendar-check-o"></i> <?php echo _l('home_payments_received_today'); ?></span>
                              </a>
                           </div>
                           <?php } ?>
                           <div class="clearfix"></div>
                           <?php if(has_permission('estimates','','view')){ ?>
                           <hr class="home-summary-separator"/>
                           <div class="col-md-12">
                              <p class="text-muted mleft5"><?php echo _l('home_estimate_overview'); ?></p>
                              <hr />
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblestimates',array('status'=>1)); ?></h3>
                              <a href="<?php echo admin_url('estimates/list_estimates?status=1'); ?>" class="mleft15 inline-block">
                              <span class="bold text-muted mbot10 pull-left"><i class="fa fa-pencil"></i> <?php echo _l('estimate_status_draft'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblestimates',array('status'=>5)); ?></h3>
                              <a href="<?php echo admin_url('estimates/list_estimates?status=5'); ?>" class="mleft15 inline-block">
                              <span class="bold text-warning mbot10 pull-left"><i class="fa fa-clock-o"></i> <?php echo _l('home_expired_estimates'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblestimates',array('status'=>3)); ?></h3>
                              <a href="<?php echo admin_url('estimates/list_estimates?status=3'); ?>" class="mleft15 inline-block">
                              <span class="bold mbot10 pull-left text-danger"><i class="fa fa-times"></i> <?php echo _l('home_estimate_declined'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblestimates',array('status'=>2)); ?></h3>
                              <a href="<?php echo admin_url('estimates/list_estimates?status=2'); ?>" class="mleft15 inline-block">
                              <span class="bold text-info mbot10 pull-left"><i class="fa fa-envelope-o"></i> <?php echo _l('home_estimate_sent'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblestimates',array('status'=>4)); ?></h3>
                              <a href="<?php echo admin_url('estimates/list_estimates?status=4'); ?>" class="mleft15 inline-block">
                              <span class="bold text-success pull-left"><i class="fa fa-check"></i> <?php echo _l('home_estimate_accepted'); ?></span>
                              </a>
                           </div>
                           <?php } ?>
                           <div class="clearfix"></div>
                           <?php if(has_permission('proposals','','view')){ ?>
                           <hr class="home-summary-separator"/>
                           <div class="col-md-12">
                              <p class="text-muted mleft5"><?php echo _l('home_proposal_overview'); ?></p>
                              <hr />
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblproposals',array('status'=>0)); ?></h3>
                              <a href="<?php echo admin_url('proposals/list_proposals?custom_view=0'); ?>" class="mleft15 inline-block">
                              <span class="bold text-muted mbot10 pull-left"><i class="fa fa-pencil"></i> <?php echo _l('proposal_status_draft'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                            <h3 class="bold no-margin pull-left"><?php echo total_rows('tblproposals',array('status'=>1)); ?></h3>
                              <a href="<?php echo admin_url('proposals/list_proposals?custom_view=1'); ?>" class="mleft15 inline-block">
                              <span class="bold text-default mbot10 pull-left"><i class="fa fa-calendar"></i> <?php echo _l('proposal_status_open'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                            <h3 class="bold no-margin pull-left"><?php echo total_rows('tblproposals',array('status'=>2)); ?></h3>
                              <a href="<?php echo admin_url('proposals/list_proposals?custom_view=2'); ?>" class="mleft15 inline-block">
                              <span class="bold text-warning mbot10 pull-left"><i class="fa fa-remove"></i> <?php echo _l('proposal_status_declined'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                           <h3 class="bold no-margin pull-left"><?php echo total_rows('tblproposals',array('status'=>3)); ?></h3>
                              <a href="<?php echo admin_url('proposals/list_proposals?custom_view=3'); ?>"  class="mleft15 inline-block">
                              <span class="bold text-success mbot10 pull-left"><i class="fa fa-check"></i> <?php echo _l('proposal_status_accepted'); ?></span>
                              </a>
                           </div>
                           <div class="col-md-12">
                            <h3 class="bold no-margin pull-left"><?php echo total_rows('tblproposals',array('status'=>4)); ?></h3>
                              <a href="<?php echo admin_url('proposals/list_proposals?custom_view=4'); ?>" class="mleft15 inline-block">
                              <span class="bold text-info pull-left"><i class="fa fa-envelope"></i> <?php echo _l('proposal_status_sent'); ?></span>
                              </a>
                           </div>
                           <div class="clearfix"></div>
                           <hr class="home-summary-separator"/>
                           <?php } ?>
                           <?php if(is_staff_member()){ ?>
                           <div class="col-md-12">
                              <p class="text-muted mleft5"><?php echo _l('home_lead_overview'); ?></p>
                              <hr />
                           </div>
                           <div class="col-md-12">
                              <canvas class="chart" id="leads_status_stats" height="180"></canvas>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <div class="<?php if($no_left_row == false){echo 'col-md-8';}else{echo 'col-md-12';}?> right-height-fix-col">
                  <div class="panel_s">
                     <div class="panel-body home-activity">
                        <ul class="nav nav-tabs" role="tablist">
                           <?php if(is_admin()){ ?>
                           <li role="presentation" class="active">
                              <a href="#home_tab_activity" aria-controls="home_tab_activity" role="tab" data-toggle="tab">
                              <?php echo _l('home_latest_activity'); ?>
                              </a>
                           </li>
                           <?php } ?>
                           <li role="presentation" class="<?php if(!is_admin()){ echo 'active'; } ?>">
                              <a href="#home_tab_tasks" aria-controls="home_tab_tasks" role="tab" data-toggle="tab">
                              <?php echo _l('home_my_tasks'); ?>
                              </a>
                           </li>
                           <li role="presentation">
                              <a href="#home_my_projects" aria-controls="home_my_projects" role="tab" data-toggle="tab">
                              <?php echo _l('home_my_projects'); ?>
                              </a>
                           </li>
                           <?php if((get_option('access_tickets_to_none_staff_members') == 1 && !is_staff_member()) || is_staff_member()){ ?>
                           <li role="presentation">
                              <a href="#home_tab_tickets" aria-controls="home_tab_tickets" role="tab" data-toggle="tab">
                              <?php echo _l('home_tickets'); ?>
                              </a>
                           </li>
                           <?php } ?>
                           <?php if(is_staff_member()){ ?>
                           <li role="presentation">
                              <a href="#home_announcements" aria-controls="home_announcements" role="tab" data-toggle="tab">
                              <?php echo _l('home_announcements'); ?>
                              <?php if($total_undismissed_announcements != 0){ echo '<span class="badge">'.$total_undismissed_announcements.'</span>';} ?>
                              </a>
                           </li>
                           <?php } ?>
                        </ul>
                        <div class="tab-content">
                           <?php if(is_admin()){ ?>
                           <div role="tabpanel" class="tab-pane active" id="home_tab_activity">
                              <a href="<?php echo admin_url('utilities/activity_log'); ?>"><?php echo _l('home_widget_view_all'); ?></a>
                              <div class="clearfix"></div>
                              <div class="activity-feed">
                                 <?php foreach($activity_log as $log){ ?>
                                  <div class="feed-item">
                                   <div class="date"><?php echo time_ago($log['date']); ?></div>
                                   <div class="text">
                                   <?php if($log['staffid'] != 0){ ?>
                                      <a href="<?php echo admin_url('profile/'.$log["staffid"]); ?>">
                                     <?php echo get_staff_full_name($log['staffid']); ?>
                                       </a><br />
                                   <?php } ?>
                                   <?php echo $log['description']; ?></div>
                                </div>
                                <?php } ?>
                             </div>
                           </div>
                           <?php } ?>
                           <div role="tabpanel" class="tab-pane <?php if(!is_admin()){ echo 'active'; } ?>" id="home_tab_tasks">
                              <a href="<?php echo admin_url('tasks/list_tasks'); ?>"><?php echo _l('home_widget_view_all'); ?></a>
                              <div class="clearfix"></div>
                              <hr />
                              <?php
                                 if(count($tasks) == 0){
                                    echo '<p class="bold text-success text-center">'. _l('no_tasks_found') . '</p>';
                                 }
                                 foreach($tasks as $task){ ?>
                              <div class="widget-task" data-widget-task-id="<?php echo $task['id']; ?>">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <a href="#" class="pull-left" onclick="mark_complete(<?php echo $task['id']; ?>); return false;" data-placement="right" data-toggle="tooltip" title="<?php echo _l('task_single_mark_as_complete'); ?>"><i class="fa fa-check task-icon task-unfinished-icon"></i></a>
                                       <a href="#" onclick="init_task_modal(<?php echo $task['id']; ?>); return false;"><?php echo $task['name']; ?></a>
                                       <div class="clearfix mtop10"></div>
                                       <?php echo strip_tags(substr($task['description'],0,150)) . '...' ?>
                                    </div>
                                    <div class="col-md-12 mtop10">
                                       <span class="label <?php if(total_rows('tbltaskchecklists',array('finished'=>0,'taskid'=>$task['id'])) == 0){echo 'label-default-light';}else{echo 'label-danger';} ?> pull-left mright5">
                                       <i class="fa fa-th-list"></i> <?php echo total_rows('tbltaskchecklists',array('finished'=>0,'taskid'=>$task['id'])); ?>
                                       </span>
                                       <span class="label label-default-light pull-left mright5">
                                       <i class="fa fa-paperclip"></i> <?php echo total_rows('tblstafftasksattachments',array('taskid'=>$task['id'])); ?>
                                       </span>
                                       <span class="label label-default-light pull-left">
                                       <i class="fa fa-comments"></i> <?php echo total_rows('tblstafftaskcomments',array('taskid'=>$task['id'])); ?>
                                       </span>
                                    </div>
                                 </div>
                                 <hr />
                              </div>
                              <?php } ?>
                           </div>
                           <?php if((get_option('access_tickets_to_none_staff_members') == 1 && !is_staff_member()) || is_staff_member()){ ?>
                           <div role="tabpanel" class="tab-pane" id="home_tab_tickets">
                             <a href="<?php echo admin_url('tickets'); ?>"><?php echo _l('home_widget_view_all'); ?></a>
                              <div class="clearfix"></div>
                              <?php echo AdminTicketsTableStructure('tickets-table-home'); ?>
                           </div>
                           <?php } ?>
                           <div role="tabpanel" class="tab-pane" id="home_my_projects">
                              <a href="<?php echo admin_url('projects'); ?>"><?php echo _l('home_widget_view_all'); ?></a>
                              <div class="clearfix"></div>
                              <div class="table-responsive">
                                 <?php render_datatable(array(
                                    _l('project_name'),
                                    _l('project_start_date'),
                                    _l('project_deadline'),
                                    _l('project_status'),
                                    ),'staff-projects'); ?>
                              </div>
                           </div>
                           <?php if(is_staff_member()){ ?>
                           <div role="tabpanel" class="tab-pane" id="home_announcements">
                              <?php if(is_admin()){ ?>
                              <a href="<?php echo admin_url('announcements'); ?>"><?php echo _l('home_widget_view_all'); ?></a>
                              <div class="clearfix"></div>
                              <?php } ?>
                              <div class="table-responsive">
                                 <?php render_datatable(array(_l('announcement_name'),_l('announcement_date_list'),_l('options')),'announcements'); ?>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
                  <div class="panel_s">
                     <div class="panel-body">
                        <?php if((get_option('access_tickets_to_none_staff_members') == 1 && !is_staff_member()) || is_staff_member()){ ?>
                        <div class="row">
                           <div class="row">
                              <div class="col-md-6">
                                 <p class="text-muted text-center"><?php echo _l('home_tickets_awaiting_reply_by_department'); ?></p>
                                 <canvas class="chart" height="175px" id="tickets-awaiting-reply-by-department"></canvas>
                              </div>
                              <div class="col-md-6">
                                 <p class="text-muted text-center"> <?php echo _l('home_tickets_awaiting_reply_by_status'); ?></p>
                                 <canvas class="chart" height="175px" id="tickets-awaiting-reply-by-status"></canvas>
                              </div>
                           </div>
                        </div>
                        <hr />
                        <?php } ?>
                        <div class="row">
                           <div class="col-md-12">
                              <p class="text-muted text-center mbot5"><?php echo _l('home_stats_by_project_status'); ?></p>
                           </div>
                           <div class="col-md-8 col-md-offset-2">
                              <canvas class="chart" id="projects_status_stats"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row right-height-fix-col">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="panel_s">
                           <div class="panel-body">
                              <div class="dt-loader hide"></div>
                              <div id="calendar"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php if(has_permission('payments','','view')){ ?>
            <div class="row" id="weekly_payments">
               <div class="col-md-12 right-height-fix-col">
                  <div class="panel_s">
                     <div class="panel-body padding-10">
                        <div class="col-md-12">
                           <p class="text-muted pull-left"><?php echo _l('home_weekly_payment_records'); ?></p>
                           <?php if(has_permission('reports','','view')){ ?>
                           <a href="<?php echo admin_url('reports/sales'); ?>?report_income=true" class="pull-right"><?php echo _l('home_stats_full_report'); ?></a>
                           <div class="clearfix"></div>
                           <?php } ?>
                           <div class="clearfix"></div>
                           <?php if (is_using_multiple_currencies()) { ?>
                           <select class="selectpicker pull-left mbot15" name="currency" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                              <?php foreach($currencies as $currency){
                                 $selected = '';
                                 if($currency['isdefault'] == 1){
                                  $selected = 'selected';
                                 }
                                 ?>
                              <option value="<?php echo $currency['id']; ?>" <?php echo $selected; ?> data-subtext="<?php echo $currency['name']; ?>"><?php echo $currency['symbol']; ?></option>
                              <?php } ?>
                           </select>
                           <?php } ?>
                           <canvas class="chart" id="weekly-payment-statistics" height="120"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
         </div>
         <div class="col-md-3">

            <div class="panel_s todo-panel">
               <div class="panel-body padding-10">
                  <p class="text-muted pull-left padding-5">
                     <?php echo _l('home_my_todo_items'); ?>
                  </p>
                  <a href="<?php echo admin_url('todo'); ?>" class="pull-right mbot20"><?php echo _l('home_widget_view_all'); ?></a>

                  <div class="clearfix"></div>
                    <hr class="no-mtop">
                     <?php $total_todos = count($todos); ?>
                     <h4 class="todo-title text-warning"><i class="fa fa-warning"></i> <?php echo _l('home_latest_todos'); ?></h4>
                     <ul class="list-unstyled todo unfinished-todos todos-sortable sortable">
                        <?php foreach($todos as $todo) { ?>
                        <li>
                           <div class="dragger todo-dragger"></div>
                           <?php echo form_hidden('todo_order',$todo['item_order']); ?>
                           <?php echo form_hidden('finished',0); ?>
                           <div class="checkbox checkbox-default todo-checkbox">
                              <input type="checkbox" name="todo_id" value="<?php echo $todo['todoid']; ?>">
                              <label></label>
                           </div>
                           <span class="todo-description"><?php echo $todo['description']; ?><a href="#" onclick="delete_todo_item(this,<?php echo $todo['todoid']; ?>)" class="pull-right text-muted"><i class="fa fa-remove"></i></a></span>
                           <small class="todo-date"><?php echo $todo['dateadded']; ?></small>
                        </li>
                        <?php } ?>
                        <li class="padding no-todos ui-state-disabled <?php if($total_todos > 0){echo 'hide';} ?>"><?php echo _l('home_no_latest_todos'); ?></li>
                     </ul>
                     <?php $total_finished_todos = count($todos_finished); ?>
                     <h4 class="todo-title text-success"><i class="fa fa-check"></i> <?php echo _l('home_latest_finished_todos'); ?></h4>
                     <ul class="list-unstyled todo finished-todos todos-sortable sortable" >
                        <?php foreach($todos_finished as $todo_finished){ ?>
                        <li>
                           <div class="dragger todo-dragger"></div>
                           <?php echo form_hidden('todo_order',$todo_finished['item_order']); ?>
                           <?php echo form_hidden('finished',1); ?>
                           <div class="checkbox checkbox-default todo-checkbox">
                              <input type="checkbox" value="<?php echo $todo_finished['todoid']; ?>" name="todo_id" checked>
                              <label></label>
                           </div>
                           <span class="todo-description line-throught"><?php echo $todo_finished['description']; ?><a href="#" onclick="delete_todo_item(this,<?php echo $todo_finished['todoid']; ?>)" class="pull-right text-muted"><i class="fa fa-remove"></i></a></span>
                           <small class="todo-date todo-date-finished"><?php echo $todo_finished['datefinished']; ?></small>
                        </li>
                        <?php } ?>
                        <li class="padding no-todos ui-state-disabled <?php if($total_finished_todos > 0){echo 'hide';} ?>"><?php echo _l('home_no_finished_todos_found'); ?></li>
                     </ul>
               </div>
            </div>
               <?php
               if(count($upcoming_events) > 0 && is_staff_member()){ ?>
            <div class="row">
               <div class="col-md-12">
                  <div class="panel_s events animated fadeIn ">
                     <div class="panel-heading-bg">
                        <?php echo _l('home_this_week_events'); ?>
                     </div>
                     <div class="panel-body">
                        <?php foreach($upcoming_events as $event){ ?>
                        <div class="event">
                           <div class="ptop10"></div>
                           <span class="text-dark pull-left"><i class="fa fa-calendar-check-o"></i> <?php echo _dt($event['start']); ?></span>
                           <?php if($event['public'] == 1) { ?>
                           <span class="text-success pull-right"><?php echo _l('home_public_event'); ?></span>
                           <?php } ?>
                           <div class="clearfix"></div>
                           <h5 class="event-title"><a href="#" onclick="view_event(<?php echo $event['eventid']; ?>); return false;"><?php echo $event['title']; ?></a></h5>
                           <p class="text-muted no-margin"><?php echo $event['description']; ?></p>
                           <?php if($event['userid'] != get_staff_user_id()){ ?>
                           <small class="display-block valign mtop5"><?php echo _l('home_event_added_by'); ?> <a href="<?php echo admin_url('profile/'.$event['userid']); ?>"><?php echo staff_profile_image($event['userid'],array('staff-profile-xs-image')); ?> <?php echo get_staff_full_name($event['userid']); ?></a></small>
                           <?php } ?>
                        </div>
                        <?php } ?>
                     </div>
                     <div class="panel-footer">
                        <?php echo _l('home_upcoming_events_next_week'); ?> : <?php echo $upcoming_events_next_week; ?>
                     </div>
                  </div>
               </div>
            </div>
            <?php } ?>
            <div class="panel_s projects-activity">
               <div class="panel-body padding-10">
                  <p class="text-muted padding-5"><?php echo _l('home_project_activity'); ?></p>
                  <hr class="no-mtop" />
                  <div class="activity-feed">
                     <?php foreach($projects_activity as $activity){
                        if($activity['staff_id'] != 0){
                           $name = get_staff_full_name($activity['staff_id']);
                           $href = admin_url('profile/'.$activity['staff_id']);
                        } else if($activity['contact_id'] != 0){
                            $name = '<span class="label label-info inline-block mright5">'._l('is_customer_indicator') . '</span>';
                           $name .= get_contact_full_name($activity['contact_id']);
                           $href = admin_url('clients/client/'.get_user_id_by_contact_id($activity['contact_id']).'?contactid='.$activity['contact_id']);
                        } else {
                           $href = '';
                           $name = '[CRON]';
                        }
                        ?>
                        <div class="feed-item">
                         <div class="date"><?php echo time_ago($activity['dateadded']); ?></div>
                         <div class="text">
                           <?php echo _l('project_name'); ?>: <a href="<?php echo admin_url('projects/view/'.$activity['project_id']); ?>"><?php echo $activity['project_name']; ?></a><br />
                            <?php if($href != ''){ ?>
                              <a href="<?php echo $href;?>"><?php echo $name; ?></a>
                              <?php } else {echo $name;} ;?>
                              <br /><?php echo $activity['description']; ?></div>
                              <p class="text-muted"><?php echo $activity['additional_data']; ?></p>
                           </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
         </div>
      </div>
   </div>
</div>
<script>
   google_api = '<?php echo $google_api_key; ?>';
   calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
</script>
<?php init_tail(); ?>
<?php $this->load->view('admin/utilities/calendar_template'); ?>
<script>
   var weekly_payments_statistics;
   $(window).bind("resize", function() {
     window.resizeEvt;
     $(window).resize(function()
     {
       clearTimeout(window.resizeEvt);
       window.resizeEvt = setTimeout(function()
       {
        fix_dashboard_height();
     }, 250);
    })
   });
   $(document).ready(function() {
      fix_dashboard_height();
        $('.home-weekly-payment-sc').on('click',function(e){
          e.preventDefault();
          $('body,html').animate({
            scrollTop: $('#weekly_payments').offset().top
         });
        });
        if ($('#tickets-awaiting-reply-by-department').length > 0) {
         // Tickets awaiting reply by department chart
         var tickets_dep_chart = new Chart($('#tickets-awaiting-reply-by-department'),{
            type:'doughnut',
            data:<?php echo $tickets_awaiting_reply_by_department; ?>
         });
      }
         if ($('#tickets-awaiting-reply-by-status').length > 0) {
         // Tickets awaiting reply by department chart
         new Chart($('#tickets-awaiting-reply-by-status'),{
            type:'doughnut',
            data:<?php echo $tickets_reply_by_status; ?>
         });
      }
          // Projects statuses
          new Chart($('#projects_status_stats'),{
            type:'doughnut',
            data:<?php echo $projects_status_stats; ?>
          });

          if ($('#leads_status_stats').length > 0) {
          // Leads overview status
         new Chart($('#leads_status_stats'),{
            type:'doughnut',
            data:<?php echo $leads_status_stats; ?>
          });
       }
         // Payments statistics
         init_weekly_payment_statistics();
         $('select[name="currency"]').on('change', function() {
          init_weekly_payment_statistics();
       });
      });

   function init_weekly_payment_statistics() {
    if ($('#weekly-payment-statistics').length > 0) {
      if (typeof(weekly_payments_statistics) !== 'undefined') {
        weekly_payments_statistics.destroy();
     }
     var currency = $('select[name="currency"]').val();
     $.get(admin_url + 'home/weekly_payments_statistics/' + currency, function(response) {
           weekly_payments_statistics = new Chart($('#weekly-payment-statistics'),{
            type:'bar',
            data: response,
            options:{responsive:true},
           });
     }, 'json');
   }
   }
   function fix_dashboard_height(){
    var todo_height = $('.todo-panel').outerHeight(true);
    var events_height = $('.events').outerHeight(true);
    var minus = (todo_height + events_height);
      var total_center_height = 0;
      var center_fix_columns = $('.right-height-fix-col .panel_s');
      $.each(center_fix_columns,function(){
         total_center_height += $(this).outerHeight(true);
      });
      $('.projects-activity').height(((total_center_height - minus) - 30)+'px');
   }
</script>
</body>
</html>
