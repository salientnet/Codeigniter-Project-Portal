<?php
if(!isset($filter_table_name)){
    $filter_table_name = '.table-expenses';
}
?>
<div class="btn-group pull-right mleft4 btn-with-tooltip-group" data-toggle="tooltip" data-title="<?php echo _l('filter_by'); ?>">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-filter" aria-hidden="true"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-right width220">
        <li>
            <a href="#" onclick="dt_custom_view('','<?php echo $filter_table_name; ?>'); return false;">
                <?php echo _l('expenses_list_all'); ?>
            </a>
        </li>
        <li class="divider"></li>
        <li>
        <a href="#" onclick="dt_custom_view('billable','<?php echo $filter_table_name; ?>'); return false;">
                <?php echo _l('expenses_list_billable'); ?> (<?php echo total_rows('tblexpenses',array('billable'=>1)); ?>)
            </a>
        </li>
        <li>
        <a href="#" onclick="dt_custom_view('non-billable','<?php echo $filter_table_name; ?>'); return false;">
                <?php echo _l('expenses_list_non_billable'); ?> (<?php echo total_rows('tblexpenses',array('billable'=>0)); ?>)
            </a>
        </li>
        <li>
        <a href="#" onclick="dt_custom_view('invoiced','<?php echo $filter_table_name; ?>'); return false;">
                <?php echo _l('expenses_list_invoiced'); ?> (<?php echo total_rows('tblexpenses',array('invoiceid !='=>NULL)); ?>)
            </a>
        </li>
        <li>
        <a href="#" onclick="dt_custom_view('unbilled','<?php echo $filter_table_name; ?>'); return false;">
                <?php echo _l('expenses_list_unbilled'); ?>
                (<?php echo $total_unbilled; ?>)
            </a>
        </li>
        <li>
        <a href="#" onclick="dt_custom_view('recurring','<?php echo $filter_table_name; ?>'); return false;">
                <?php echo _l('expenses_list_recurring'); ?>
                (<?php echo total_rows('tblexpenses',array('recurring'=>1)); ?>)
            </a>
        </li>
        <li class="divider"></li>
        <?php foreach($categories as $category){ ?>
            <li>
                <a href="#" onclick="dt_custom_view(<?php echo $category['id']; ?>,'<?php echo $filter_table_name; ?>'); return false;"><?php echo $category['name']; ?></a>
            </li>
            <?php } ?>
        <li class="divider"></li>
        <?php for ($m = 1; $m <= 12; $m++) { ?>
              <?php if(total_rows('tblexpenses',array('MONTH(date)'=>$m)) > 0){ ?>
              <li><a href="#" onclick="dt_custom_view('expenses_by_month_<?php echo $m; ?>','<?php echo $filter_table_name; ?>'); return false;"><?php echo _l(date('F', mktime(0, 0, 0, $m, 1))); ?></a></li>
              <?php } ?>
           <?php } ?>
        </ul>
    </div>
