<!-- Project Tasks -->
<div class="tasks-table">
    <?php echo form_hidden('custom_view',''); ?>
    <div class="btn-group mtop5">
        <?php $this->load->view('admin/tasks/tasks_filter_by',array('view_table_name'=>'.table-rel-tasks')); ?>
    </div>
    <?php init_relation_tasks_table(array( 'data-new-rel-id'=>$project->id,'data-new-rel-type'=>'project')); ?>
</div>
