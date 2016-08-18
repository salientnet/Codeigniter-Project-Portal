<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$aColumns = array(
    'name',
    'startdate',
    'duedate',
    '(SELECT GROUP_CONCAT(staffid SEPARATOR ",") FROM tblstafftaskassignees WHERE taskid=tblstafftasks.id) as assignees',
    'priority',
    'finished'
);
if(has_permission('tasks','','create') || has_permission('tasks','','edit')){
    array_push($aColumns, 'billable');
    array_push($aColumns, 'billed');
}
$where = array();
$_where = '';
if ($this->_instance->input->post('custom_view')) {
    $view   = $this->_instance->input->post('custom_view');
    if($view != 'all'){
        if ($view == 'finished') {
            $_where = 'AND finished = 1';
        } else if ($view == 'unfinished') {
            $_where = 'AND finished = 0';
        } else if ($view == 'not_assigned') {
            $_where = 'AND tblstafftasks.id NOT IN (SELECT taskid FROM tblstafftaskassignees)';
        } else if ($view == 'due_date_passed') {
            $_where = 'AND (duedate < "' . date('Y-m-d') . '" AND duedate IS NOT NULL) AND finished = 0';
        } else if ($view == 'tasks_staff_private') {
            $_where = 'AND is_public = 0';
        } else if ($view == 'tasks_staff_public') {
            $_where = 'AND is_public = 1';
        } else if ($view == 'my_tasks') {
            $_where = 'AND (tblstafftasks.id IN (SELECT taskid FROM tblstafftaskassignees WHERE staffid = ' . get_staff_user_id() . '))';
        } else if ($view == 'my_following_tasks') {
            $_where = 'AND (tblstafftasks.id IN (SELECT taskid FROM tblstafftasksfollowers WHERE staffid = ' . get_staff_user_id() . '))';
        }
    }
} else {
    // At initial show only unfinshed tasks
    $_where = 'AND finished=0';
}
if ($_where != '') {
    array_push($where, $_where);
}
if (!has_permission('tasks', '', 'view')) {
    $_tasks_where = 'AND (tblstafftasks.id IN (SELECT taskid FROM tblstafftaskassignees WHERE staffid = ' . get_staff_user_id() . ') OR tblstafftasks.id IN (SELECT taskid FROM tblstafftasksfollowers WHERE staffid = ' . get_staff_user_id() . ') OR addedfrom=' . get_staff_user_id();
    if(get_option('show_all_tasks_for_project_member') == 1){
        $_tasks_where .= ' OR (rel_type="project" AND rel_id IN (SELECT project_id FROM tblprojectmembers WHERE staff_id='.get_staff_user_id().'))';
    }
    $_tasks_where .= ' OR is_public = 1)';
    array_push($where, $_tasks_where);
}

array_push($where, 'AND rel_id="' . $rel_id . '" AND rel_type="' . $rel_type . '"');
$join          = array();
$custom_fields = get_custom_fields('tasks', array(
    'show_on_table' => 1
));
$i             = 0;
foreach ($custom_fields as $field) {
    array_push($aColumns, 'ctable_' . $i . '.value as cvalue_' . $i);
    array_push($join, 'LEFT JOIN tblcustomfieldsvalues as ctable_' . $i . ' ON tblstafftasks.id = ctable_' . $i . '.relid AND ctable_' . $i . '.fieldto="' . $field['fieldto'] . '" AND ctable_' . $i . '.fieldid=' . $field['id']);
    $i++;
}
$sIndexColumn = "id";
$sTable       = 'tblstafftasks';
// Fix for big queries. Some hosting have max_join_limit
if (count($custom_fields) > 4) {
    @$this->_instance->db->query('SET SQL_BIG_SELECTS=1');
}
$result  = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, array(
    'tblstafftasks.id',
    'dateadded',
    'priority',
    'finished',
    'invoice_id'
));
$output  = $result['output'];
$rResult = $result['rResult'];
foreach ($rResult as $aRow) {
    $row = array();
    for ($i = 0; $i < count($aColumns); $i++) {
        if (strpos($aColumns[$i], 'as') !== false && !isset($aRow[$aColumns[$i]])) {
            $_data = $aRow[strafter($aColumns[$i], 'as ')];
        } else {
            $_data = $aRow[$aColumns[$i]];
        }
        if ($aColumns[$i] == 'name') {
            $task_name = $_data;
            $_data     = '';
            if ($aRow['finished'] == 1) {
                $_data .= '<a href="#" onclick="unmark_complete(' . $aRow['id'] . '); return false;"><i class="fa fa-check task-icon task-finished-icon" data-toggle="tooltip" title="' . _l('task_unmark_as_complete') . '"></i></a>';
            } else {
                $_data .= '<a href="#" onclick="mark_complete(' . $aRow['id'] . '); return false;"><i class="fa fa-check task-icon task-unfinished-icon" data-toggle="tooltip" title="' . _l('task_single_mark_as_complete') . '"></i></a>';
            }
            $_data .= '<a href="#" class="main-tasks-table-href-name" onclick="init_task_modal(' . $aRow['id'] . '); return false;">' . $task_name . '</a>';
        } else if ($aColumns[$i] == 'finished') {
            if ($_data == 1) {
                $_data = '<span class="label label-success inline-block">' . _l('task_table_is_finished_indicator') . '</span>';
            } else {
                $_data = '<span class="label label-warning inline-block">' . _l('task_table_is_not_finished_indicator') . '</span>';
            }
        } else if ($aColumns[$i] == 'startdate' || $aColumns[$i] == 'duedate') {
            if ($aColumns[$i] == 'startdate') {
                $_data = _d($aRow['startdate']);
            } else {
                  $_data = _d($aRow['duedate']);
            }
        } else if ($aColumns[$i] == 'priority') {
            $_data = '<span class="label label-' . get_task_priority_class($_data) . ' inline-block">' . task_priority($_data) . '</span>';
        } else if ($aColumns[$i] == 'billable') {
            if ($_data == 1) {
                $billable = _l("task_billable_yes");
            } else {
                $billable = _l("task_billable_no");
            }
            $_data = $billable;
        } else if ($aColumns[$i] == 'billed') {
            if ($aRow['billable'] == 1) {
                if ($_data == 1) {
                    $_data = '<span class="label label-success inline-block">' . _l('task_billed_yes') . '</span>';
                } else {
                    $_data = '<span class="label label-danger inline-block">' . _l('task_billed_no') . '</span>';
                }
            } else {
                $_data = '';
            }
        } else if($aColumns[$i] == $aColumns[3]) {
            $assignees = explode(',', $_data);
            $_data     = '';
            foreach ($assignees as $assigned) {
                if ($assigned != '') {
                    $_data .= '<a href="' . admin_url('profile/' . $assigned) . '">' . staff_profile_image($assigned, array(
                        'staff-profile-image-small mright5'
                    ), 'small', array(
                        'data-toggle' => 'tooltip',
                        'data-title' => get_staff_full_name($assigned)
                    )) . '</a>';
                }
            }
        }
        $row[] = $_data;
    }
    $options = '';
    if (has_permission('tasks', '', 'view')) {
        $options .= icon_btn('#', 'pencil-square-o', 'btn-default', array(
            'onclick' => 'edit_task(' . $aRow['id'] . '); return false'
        ));
    }
    $class          = 'btn-success';
    $atts           = array(
        'onclick' => 'timer_action(this,' . $aRow['id'] . '); return false'
    );
    $tooltip        = '';
    $is_assigned    = $this->_instance->tasks_model->is_task_assignee(get_staff_user_id(), $aRow['id']);
    $is_task_billed = $this->_instance->tasks_model->is_task_billed($aRow['id']);
    if ($is_task_billed || !$is_assigned) {
        $class = 'btn-default disabled';
        if ($is_task_billed) {
            $tooltip = ' data-toggle="tooltip" data-title="' . _l('task_billed_cant_start_timer') . '"';
        } else {
            $tooltip = ' data-toggle="tooltip" data-title="' . _l('task_start_timer_only_assignee') . '"';
        }
    }
    if (!$this->_instance->tasks_model->is_timer_started($aRow['id'])) {
        $options .= '<span' . $tooltip . '>' . icon_btn('#', 'clock-o', $class, $atts) . '</span>';
    } else {
        $options .= icon_btn('#', 'clock-o', 'btn-danger', array(
            'onclick' => 'timer_action(this,' . $aRow['id'] . ',' . $this->_instance->tasks_model->get_last_timer($aRow['id'])->id . '); return false'
        ));
    }
    if (has_permission('tasks', '', 'delete')) {
        $options .= icon_btn('tasks/delete_task/' . $aRow['id'], 'remove', 'btn-danger _delete');
    }
    $row[]              = $options;
    $row_finished_class = '';
    if ((!empty($aRow['duedate']) && $aRow['duedate'] < date('Y-m-d')) && $aRow['finished'] == 0) {
        $row_finished_class = 'text-danger bold ';
    }
    if ($aRow['finished'] == 0) {
        $row_finished_class .= 'task-unfinished-table';
    } else {
        $row_finished_class .= 'task-finished-table';
    }
    $row['DT_RowClass'] = $row_finished_class;
    $output['aaData'][] = $row;
}
