   <h3 class="text-success no-margin"><?php echo _l('tickets_summary'); ?></h4>
    <?php
    $where = '';
    if (!is_admin()) {
      if (get_option('staff_access_only_assigned_departments') == 1) {
        $departments_ids = array();
        if (count($staff_deparments_ids) == 0) {
          $departments = $this->departments_model->get();
          foreach($departments as $department){
            array_push($departments_ids,$department['departmentid']);
          }
        } else {
         $departments_ids = $staff_deparments_ids;
       }
       if(count($departments_ids) > 0){
        $where = 'AND department IN (SELECT departmentid FROM tblstaffdepartments WHERE departmentid IN (' . implode(',', $departments_ids) . ') AND staffid="'.get_staff_user_id().'")';
      }
    }
  }
  $statuses = $this->tickets_model->get_ticket_status();
  foreach($statuses as $status){
    $_where = '';
    if($where == ''){
      $_where = 'status='.$status['ticketstatusid'];
    } else{
      $_where = 'status='.$status['ticketstatusid'] . ' '.$where;
    }
    if(isset($project_id)){
      $_where = $_where . ' AND project_id='.$project_id;
    }
    ?>
    <div class="col-md-2 col-xs-6 mbot15 border-right">
      <a href="#" onclick="dt_custom_view(<?php echo $status['ticketstatusid']; ?>,'.tickets-table'); return false;">
        <h3 class="bold"><?php echo total_rows('tbltickets',$_where); ?></h3>
        <span class="bold" style="color:<?php echo $status['statuscolor']; ?>">
        <?php echo ticket_status_translate($status['ticketstatusid']); ?>
        </span>
      </a>
    </div>
    <?php } ?>
