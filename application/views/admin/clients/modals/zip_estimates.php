<!-- Zip Estimates -->
<div class="modal fade" id="client_zip_estimates" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <?php echo form_open('admin/clients/zip_estimates/'.$client->userid); ?>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo _l('client_zip_estimates'); ?></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="estimate_zip_status"><?php echo _l('client_zip_status'); ?></label>
                        <div class="radio radio-primary">
                            <input type="radio" value="all" id="all" checked name="estimate_zip_status">
                            <label for="all"><?php echo _l('client_zip_status_all'); ?></label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" value="1" id="s_1" name="estimate_zip_status">
                            <label for="s_1"><?php echo _l('estimate_status_draft'); ?></label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" value="2" id="s_2" name="estimate_zip_status">
                            <label for="s_2"><?php echo _l('estimate_status_sent'); ?></label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" value="3" id="s_3" name="estimate_zip_status">
                            <label for="s_3"><?php echo _l('estimate_status_declined'); ?></label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" value="4" id="s_4" name="estimate_zip_status">
                            <label for="s_4"><?php echo _l('estimate_status_accepted'); ?></label>
                        </div>
                        <div class="radio radio-primary">
                            <input type="radio" value="5" id="s_5" name="estimate_zip_status">
                            <label for="s_5"><?php echo _l('estimate_status_expired'); ?></label>
                        </div>
                    </div>
                    <?php
                        if($client->company != ''){
                            $file_name = slug_it($client->company);
                        } else {
                            $file_name = slug_it($client->firstname . ' ' .$client->lastname);
                        }
                        ?>
                    <?php include(APPPATH .'views/admin/clients/modals/modal_zip_date_picker.php'); ?>
                    <?php echo form_hidden('file_name',$file_name); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
