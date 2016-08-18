<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
            <div class="col-md-12" id="small-table">
                <div class="panel_s">
                    <div class="panel-body _buttons">
                        <?php if(has_permission('expenses','','create')){ ?>
                        <a href="<?php echo admin_url('expenses/expense'); ?>" class="btn btn-info"><?php echo _l('new_expense'); ?></a>
                        <?php } ?>
                        <?php $this->load->view('admin/expenses/filter_by_template'); ?>
                        <a href="#" class="btn btn-default pull-right btn-with-tooltip toggle-small-view" onclick="toggle_small_view('.table-expenses','#expense'); return false;" data-toggle="tooltip" title="<?php echo _l('invoices_toggle_table_tooltip'); ?>"><i class="fa fa-angle-double-left"></i></a>
                    </div>
                </div>
                <?php echo form_hidden('custom_view'); ?>
                <div class="panel_s">
                    <div class="panel-body">
                        <div class="clearfix"></div>
                        <!-- if expenseid found in url -->
                        <?php echo form_hidden('expenseid',$expenseid); ?>
                        <?php
                            $table_data = array(
                                _l('expense_dt_table_heading_category'),
                                _l('expense_dt_table_heading_amount'),
                                _l('expense_dt_table_heading_date'),
                                _l('project'),
                                _l('expense_dt_table_heading_customer'),
                                _l('expense_dt_table_heading_reference_no'),
                                _l('expense_dt_table_heading_payment_mode'),
                                );
                            $custom_fields = get_custom_fields('expenses',array('show_on_table'=>1));
                            foreach($custom_fields as $field){
                                array_push($table_data,$field['name']);
                            }
                            render_datatable($table_data,'expenses'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div id="expense" class="hide">
                </div>
            </div>
        </div>
    </div>
</div>
<script>var hidden_columns = [4,5,6];</script>
<?php init_tail(); ?>
<script>
    $(document).ready(function(){
        // Expenses additional server params
        Expenses_ServerParams = {
            'custom_view': '[name="custom_view"]',
        };

        initDataTable('.table-expenses', window.location.href, 'undefined', 'undefined', Expenses_ServerParams, [2, 'DESC']);
        Dropzone.autoDiscover = false;
        init_expense();
    });
    function init_expense(id) {
        var _expenseid = $('body').find('input[name="expenseid"]').val();
            // Check if expense passed from url, hash is prioritized becuase is last
            if (_expenseid !== '' && !window.location.hash) {
                id = _expenseid;
            } else {
                // check first if hash exists and not id is passed, becuase id is prioritized
                if(window.location.hash && !id) {
                    id = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
                }
            }
            if (typeof(id) == 'undefined' || id == '') {
                return;
            }
            $('body').find('input[name="expenseid"]').val('');
            if (!$('body').hasClass('small-table')) {
                toggle_small_view('.table-expenses','#expense');
            }
            $('input[name="expenseid"]').val(id);
            do_hash_helper(id);
            $('#expense').load(admin_url + 'expenses/get_expense_data_ajax/' + id);
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
              $('html, body').animate({
                scrollTop: $('#expense').offset().top + 150
            }, 600);
          }

      }
      function convert_expense(id){
        $.get(admin_url+ 'expenses/get_convert_data/'+id,function(response){
            $('#convert_helper').html(response);
            $('body').find('#convert_to_invoice').modal('show');
        });
    }
</script>
</body>
</html>
