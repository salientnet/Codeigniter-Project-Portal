<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <?php include_once(APPPATH . 'views/admin/includes/alerts.php'); ?>
            <div class="col-md-5 left-column">
                <div class="panel_s">
                    <div class="panel-heading">
                        <?php echo $title; ?>
                    </div>
                    <div class="panel-body">
                        <?php if(isset($contract)) { ?>
                         <?php if(has_permission('contracts', '', 'create')){ ?>
                            <div class="_buttons">
                                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#renew_contract_modal">
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </div>
                            <hr />
                        <?php } ?>
                        <div class="clearfix"></div>
                        <?php } ?>
                        <?php echo form_open($this->uri->uri_string(),array('id'=>'contract-form')); ?>
                        <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="trash" name="trash" data-toggle="tooltip" title="<?php echo _l('contract_trash_tooltip'); ?>" <?php if(isset($contract)){if($contract->trash == 1){echo 'checked';}}; ?>>
                                <label for="trash"><?php echo _l('contract_trash'); ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="not_visible_to_client" id="not_visible_to_client" <?php if(isset($contract)){if($contract->not_visible_to_client == 1){echo 'checked';}}; ?>>
                                <label for="not_visible_to_client"><?php echo _l('contract_not_visible_to_client'); ?></label>
                            </div>
                        </div>
                        <?php
                        $selected = (isset($contract) ? $contract->client :'');
                        if($selected == ''){
                            $selected = (isset($customer_id) ? $customer_id: '');
                        }
                        ?>
                        <?php $auto_toggle_class = (isset($contract) || isset($do_not_auto_toggle) ? '' : 'auto-toggle'); ?>
                        <?php echo render_select('client',$clients,array('userid','company'),'contract_client_string',$selected,array(),array(),'',$auto_toggle_class); ?>
                        <?php $value = (isset($contract) ? $contract->subject : ''); ?>
                        <?php echo render_input('subject','contract_subject',$value,'text',array('data-toggle'=>'tooltip','title'=>'contract_subject_tooltip')); ?>
                        <div class="form-group">
                            <label for="contract_value"><?php echo _l('contract_value'); ?></label>
                            <div class="input-group" data-toggle="tooltip" title="<?php echo _l('contract_value_tooltip'); ?>">
                                <input type="number" class="form-control" name="contract_value" value="<?php if(isset($contract)){echo $contract->contract_value; }?>">
                                <div class="input-group-addon">
                                    <?php echo $base_currency->symbol; ?>
                                </div>
                            </div>
                        </div>
                        <?php $selected = (isset($contract) ? $contract->contract_type : ''); ?>
                        <?php echo render_select('contract_type',$types,array('id','name'),'contract_type',$selected); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?php $value = (isset($contract) ? _d($contract->datestart) : _d(date('Y-m-d'))); ?>
                                <?php echo render_date_input('datestart','contract_start_date',$value); ?>
                            </div>
                            <div class="col-md-6">
                                <?php $value = (isset($contract) ? _d($contract->dateend) : ''); ?>
                                <?php echo render_date_input('dateend','contract_end_date',$value); ?>
                            </div>
                        </div>
                        <?php $value = (isset($contract) ? $contract->description : ''); ?>
                        <?php echo render_textarea('description','contract_description',$value,array('rows'=>10)); ?>
                        <?php $rel_id = (isset($contract) ? $contract->id : false); ?>
                        <?php echo render_custom_fields('contracts',$rel_id); ?>
                        <button type="submit" class="btn btn-info pull-right"><?php echo _l('submit'); ?></button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <?php if(isset($contract)) { ?>
            <div class="col-md-7 right-column">
                <div class="panel_s">
                    <div class="panel-heading"><?php echo _l('contract_edit_overview'); ?></div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab_content" aria-controls="tab_content" role="tab" data-toggle="tab">
                                <?php echo _l('contract_content'); ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab_attachments" aria-controls="tab_attachments" role="tab" data-toggle="tab">
                                <?php echo _l('contract_attachments'); ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab_renewals" aria-controls="tab_renewals" role="tab" data-toggle="tab">
                                <?php echo _l('no_contract_renewals_history_heading'); ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab_tasks" aria-controls="tab_tasks" role="tab" data-toggle="tab">
                                <?php echo _l('tasks'); ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab_equipment" aria-controls="tab_equipment" role="tab" data-toggle="tab">
                                <?php echo _l('custom_field_equipment'); ?>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane ptop10 active" id="tab_content">
                                <div class="row">
                                    <div class="col-md-12 text-right _buttons">
                                        <a href="<?php echo admin_url('contracts/pdf/'.$contract->id.'?print=true'); ?>" target="_blank" class="btn btn-default mright5 btn-with-tooltip" data-toggle="tooltip" title="<?php echo _l('print'); ?>" data-placement="bottom"><i class="fa fa-print"></i></a>
                                        <a href="<?php echo admin_url('contracts/pdf/'.$contract->id); ?>" class="btn btn-default mright5 btn-with-tooltip" data-toggle="tooltip" title="<?php echo _l('view_pdf'); ?>" data-placement="bottom"><i class="fa fa-file-pdf-o"></i></a>
                                        <a href="#" class="btn btn-default mright5" data-target="#contract_send_to_client_modal" data-toggle="modal"><span class="btn-with-tooltip" data-toggle="tooltip" data-title="<?php echo _l('contract_send_to_email'); ?>" data-placement="bottom"><i class="fa fa-envelope"></i></span></a>
                                    </div>
                                    <div class="col-md-12">
                                    <a href="#" onclick="contract_full_view(); return false;" class="toggle_view">
                                    <i class="fa fa-expand"></i> <?php echo _l('toggle_full_view'); ?></a>
                                        <?php if(isset($contract_merge_fields)){ ?>
                                        <p class="bold mtop10"><a href="#" onclick="slideToggle('.avilable_merge_fields'); return false;"><?php echo _l('available_merge_fields'); ?></a></p>
                                        <div class=" avilable_merge_fields mtop15 hide">
                                            <ul class="list-group">
                                                <?php
                                                    foreach($contract_merge_fields as $field){
                                                    	foreach($field as $f){
                                                    		echo '<li class="list-group-item"><b>'.$f['name'].'</b>  <a href="#" class="pull-right" onclick="insert_merge_field(this); return false">'.$f['key'].'</a></li>';
                                                    	}
                                                    } ?>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <hr />
                                <div class="editable" style="border:1px solid #f0f0f0;">
                                    <?php echo $contract->content; ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane ptop10" id="tab_attachments">
                                <?php echo form_open(admin_url('contracts/add_contract_attachment/'.$contract->id),array('id'=>'contract-attachments-form','class'=>'dropzone')); ?>
                                <?php echo form_close(); ?>
                                <div id="contract_attachments" class="mtop30">
                                    <?php
                                        $data = '<div class="row">';
                                        foreach($contract->attachments as $attachment) {
                                        	$data .= '<div class="display-block contract-attachment-wrapper" style="padding:0px;">';
                                        	$data .= '<div class="col-md-10">';
                                        	$data .= '<div class="pull-left"><i class="'.get_mime_class($attachment['filetype']).'"></i></div>';
                                        	$data .= '<a href="'.site_url('download/file/contract/'.$attachment['id']).'">'.$attachment['file_name'].'</a>';
                                        	$data .= '<p class="text-muted">'.$attachment["filetype"].'</p>';
                                        	$data .= '</div>';
                                        	$data .= '<div class="col-md-2 text-right">';
                                        	if(has_permission('contracts','','delete')){
                                        	$data .= '<a href="#" class="text-danger" onclick="delete_contract_attachment(this,'.$attachment['id'].'); return false;"><i class="fa fa fa-times"></i></a>';
                                        	}
                                        	$data .= '</div>';
                                        	$data .= '<div class="clearfix"></div><hr/>';
                                        	$data .= '</div>';
                                        }
                                        $data .= '</div>';
                                        echo $data;
                                        ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane ptop10" id="tab_renewals">
                                <?php
                                    if(count($contract_renewal_history) == 0){
                                    	echo _l('no_contract_renewals_found');
                                    }
                                    foreach($contract_renewal_history as $renewal){ ?>
                                <div class="display-block">
                                    <a href="<?php echo admin_url('profile/'.$renewal['renewed_by']); ?>">
                                    <?php echo staff_profile_image($renewal['renewed_by'],array('staff-profile-image-small','pull-left mright10')); ?>
                                    </a>
                                    <div class="media-body">
                                        <div class="display-block">
                                            <?php
                                                echo
                                                _l('contract_renewed_by',"<a href=".admin_url('profile/'.$renewal['renewed_by']).">".$renewal['firstname'] . ' ' . $renewal['lastname']."</a>");
                                                ?>
                                            <?php if(has_permission('contracts','','delete')){ ?>
                                            <a href="<?php echo admin_url('contracts/delete_renewal/'.$renewal['id'] . '/'.$renewal['contractid']); ?>" class="pull-right _delete text-danger"><i class="fa fa-remove"></i></a>
                                            <br />
                                            <?php } ?>
                                            <small class="text-muted"><?php echo _dt($renewal['date_renewed']); ?></small>
                                            <hr />
                                            <span class="text-success bold" data-toggle="tooltip" title="<?php echo _l('contract_renewal_old_start_date',_d($renewal['old_start_date'])); ?>">
                                            <?php echo _l('contract_renewal_new_start_date',_d($renewal['new_start_date'])); ?>
                                            </span>
                                            <br />
                                            <?php if(is_date($renewal['new_end_date'])){
                                                $tooltip = '';
                                                if(is_date($renewal['old_end_date'])){
                                                	$tooltip = _l('contract_renewal_old_end_date',_d($renewal['old_end_date']));
                                                }
                                                ?>
                                            <span class="text-success bold" data-toggle="tooltip" title="<?php echo $tooltip; ?>">
                                            <?php echo _l('contract_renewal_new_end_date',_d($renewal['new_end_date'])); ?>
                                            </span>
                                            <br/>
                                            <?php } ?>
                                            <?php if($renewal['new_value'] > 0){
                                                $contract_renewal_value_tooltip = '';
                                                if($renewal['old_value'] > 0){
                                                	$contract_renewal_value_tooltip = ' data-toggle="tooltip" data-title="'._l('contract_renewal_old_value',_format_number($renewal['old_value'])).'"';
                                                } ?>
                                            <span class="text-success bold"<?php echo $contract_renewal_value_tooltip; ?>>
                                            <?php echo _l('contract_renewal_new_value',_format_number($renewal['new_value'])); ?>
                                            </span>
                                            <br />
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                                <?php } ?>
                            </div>
                            <div role="tabpanel" class="tab-pane ptop10" id="tab_tasks">
                                <?php init_relation_tasks_table(array('data-new-rel-id'=>$contract->id,'data-new-rel-type'=>'contract')); ?>
                            </div>
                            <div role="tabpanel" class="tab-pane ptop10" id="tab_equipment">
                              <?php $table_data = array(_l('name'));
                                $custom_fields = get_custom_fields('equipment',array('show_on_table'=>1));
                                foreach($custom_fields as $field){
                                 array_push($table_data,$field['name']);
                                }
                                array_push($table_data,_l('options'));
                                render_datatable($table_data,'contract-equipments');
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php init_tail(); ?>
<?php if(isset($contract)){ ?>
<!-- init table tasks -->
<script>
   $(document).ready(function() {
      init_rel_tasks_table(<?php echo $contract->id; ?>,'contract');
      var not_sortable_tasks = ($('body').find('.table-contract-equipments').find('th').length - 1);
      initDataTable('.table-contract-equipments', admin_url + 'contracts/init_relation_equipments/' + <?php echo $contract->id; ?>, [not_sortable_tasks], [not_sortable_tasks]);
      _validate_form($('#contract-equipments-form'),{name:'required'},manage_contract_equipments);
      $('#contract_equipment').on('hidden.bs.modal', function(event) {
          $('#additional').html('');
          $('#contract_equipment input[name="name"]').val('');
          $('.add-title').removeClass('hide');
          $('.edit-title').removeClass('hide');
      });
   });
   function manage_contract_equipments(form) {
      var data = $('#contract-equipments-form').serialize();
      var url = form.action;
      $.post(url, data).success(function(response) {
           response = $.parseJSON(response);
           if(response.success == true){
               alert_float('success',response.message);
           }
           $('.table-contract-equipments').DataTable().ajax.reload();
           $('#contract_equipment').modal('hide');
      });
      return false;
   }
   function new_equipment(){
      $.ajax({
         url: '<?php echo admin_url('contracts/equipment_custom_fields'); ?>',
         type: 'get',
         dataType: 'html',
         success: function(res) {
            $('.equipment-custom-fields').html(res);
            $('#contract_equipment').modal('show');
            $('.edit-title').addClass('hide');
         }
      });
   }
   function edit_type(invoker,id){
      var name = $(invoker).data('name');
      $('#additional').append(hidden_input('id',id));
      $('#contract_equipment input[name="name"]').val(name);
      $.ajax({
         url: '<?php echo admin_url('contracts/equipment_custom_fields'); ?>/' + id,
         type: 'get',
         dataType: 'html',
         success: function(res) {
            $('.equipment-custom-fields').html(res);
            $('#contract_equipment').modal('show');
            $('.add-title').addClass('hide');
         }
      });
   }
</script>
<div class="modal fade" id="contract_equipment" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open(admin_url('contracts/contract_equipment'),array('id'=>'contract-equipments-form')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo _l('edit_equipments'); ?></span>
                    <span class="add-title"><?php echo _l('new_equipments'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="additional"></div>
                        <input type="hidden" name="contractid" value="<?php echo $contract->id; ?>"/>
                        <?php echo render_input('name','name'); ?>
                        <div class="equipment-custom-fields"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
            </div>
        </div><!-- /.modal-content -->
        <?php echo form_close(); ?>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="renew_contract_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <?php echo form_open(admin_url('contracts/renew'),array('id'=>'renew-contract-form')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    <?php echo _l('contract_renew_heading'); ?>
                </h4>
            </div>
            <div class="modal-body">
                <?php
                    $new_end_date_assume = '';

                    if(!empty($contract->dateend)){
                    	$dStart                      = new DateTime($contract->datestart);
                    	$dEnd                        = new DateTime($contract->dateend);
                    	$dDiff                       = $dStart->diff($dEnd);
                    	$new_end_date_assume = _d(date('Y-m-d', strtotime(date('Y-m-d', strtotime('+' . $dDiff->days . 'DAY')))));
                    }
                    ?>
                <?php echo render_date_input('new_start_date','contract_start_date',_d(date('Y-m-d'))); ?>
                <?php echo render_date_input('new_end_date','contract_end_date',_d($new_end_date_assume)); ?>
                <?php echo render_input('new_value','contract_value',$contract->contract_value,'number'); ?>
                <?php echo form_hidden('contractid',$contract->id); ?>
                <?php echo form_hidden('old_start_date',$contract->datestart); ?>
                <?php echo form_hidden('old_end_date',$contract->dateend); ?>
                <?php echo form_hidden('old_value',$contract->contract_value); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-info" onclick="update_lead_status_canban(); return false;"><?php echo _l('submit'); ?></button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<div class="modal fade email-template" data-editor-id=".<?php echo 'tinymce-'.$contract->id; ?>" id="contract_send_to_client_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <?php echo form_open('admin/contracts/send_to_email/'.$contract->id); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">
                    <span class="edit-title"><?php echo _l('contract_send_to_client_modal_heading'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php
                                $selected = array();
                                $contacts = $this->clients_model->get_contacts($contract->client);
                                foreach($contacts as $contact){
                                	if(has_contact_permission('contracts',$contact['id'])){
                                		array_push($selected,$contact['id']);
                                	}
                                }
                                echo render_select('sent_to[]',$contacts,array('id','email','firstname,lastname'),'contract_send_to',$selected,array('multiple'=>true),array(),'','',false);

                                ?>
                        </div>
                        <hr />
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" name="attach_pdf" id="attach_pdf" checked>
                            <label for="attach_pdf"><?php echo _l('contract_send_to_client_attach_pdf'); ?></label>
                        </div>
                        <h5 class="bold"><?php echo _l('contract_send_to_client_preview_template'); ?></h5>
                        <hr />
                        <?php echo render_textarea('email_template_custom','',$template->message,array(),array(),'','tinymce-'.$contract->id); ?>
                        <?php echo form_hidden('template_name',$template_name); ?>
                    </div>
                </div>
                <?php if(count($contract->attachments) > 0){ ?>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="bold no-margin"><?php echo _l('include_attachments_to_email'); ?></h5>
                        <hr />
                        <?php foreach($contract->attachments as $attachment) { ?>
                        <div class="checkbox checkbox-primary">
                            <input type="checkbox" value="<?php echo $attachment['id']; ?>" name="email_attachments[]">
                            <label for=""><a href="<?php echo site_url('download/file/contract/'.$attachment['id']); ?>"><?php echo $attachment['file_name']; ?></a></label>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" autocomplete="off" data-loading-text="<?php echo _l('wait_text'); ?>" class="btn btn-info"><?php echo _l('send'); ?></button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<?php } ?>
<script>
    Dropzone.autoDiscover = false;
    if($('#contract-attachments-form').length > 0){
        var contractAttachmentsForm = new Dropzone("#contract-attachments-form", {
        	addRemoveLinks: true,
            dictDefaultMessage:drop_files_here_to_upload,
            dictFallbackMessage:browser_not_support_drag_and_drop,
            dictRemoveFile:remove_file,
            dictMaxFilesExceeded:you_can_not_upload_any_more_files,
        	success:function(file){
        		if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
        			var location = window.location.href;
                    window.location.href= location+'?tab=tab_attachments';
        		}
        	},
        	acceptedFiles:allowed_files,
        	error:function(file,response){
        		alert_float('danger',response);
        	},
        });
    }
    $(document).ready(function(){
    	_validate_form($('#contract-form'),{client:'required',datestart:'required',subject:'required'});
    	_validate_form($('#renew-contract-form'),{new_start_date:'required'});

    	tinymce.init({
    		selector: 'div.editable',
    		inline: true,
    		theme: 'modern',
    		skin: 'lightgray',
    		relative_urls: false,
    		remove_script_host: false,
    		file_browser_callback: elFinderBrowser,
    		table_class_list: [{
    			title: 'Flat',
    			value: 'table'
    		}, {
    			title: 'Table Bordered',
    			value: 'table table-bordered'
    		}],
    		table_default_styles: {
    			width: '100%'
    		},
    		setup: function(ed) {
    			ed.on('init', function() {
    				this.getDoc().body.style.fontSize = '14px';
    			});
    		},
    		removed_menuitems: 'newdocument',
    		fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
        	plugins: [
                'advlist autolink autoresize lists link image charmap hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking save table contextmenu directionality',
                'paste textcolor colorpicker textpattern imagetools'
            ],
    		autoresize_bottom_margin: 50,
    		  toolbar1: 'save_button fontselect fontsizeselect insertfile | styleselect',
        toolbar2:'bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        toolbar3: 'media image | forecolor backcolor link ',
    		setup: function(editor) {
    			editor.addButton('save_button', {
    				text: contract_save,
    				icon: false,
    				onclick: function() {
    					var data = {};
    					data.contract_id = $('input[name="contractid"]').val();
    					data.content = editor.getContent();
    					$.post(admin_url + 'contracts/save_contract_data', data).success(function(response) {
    						response = $.parseJSON(response);
    						if (response.success == true) {
    							alert_float('success', response.message);
    						}
    					})
    				}
    			});
    		},
    	});

    });
    function delete_contract_attachment(wrapper,id){
    	var r = confirm(confirm_action_prompt);
    	if (r == false) {
    		return false;
    	} else {
    		$.get(admin_url + 'contracts/delete_contract_attachment/'+id,function(response){
    			if(response.success == true){
    				$(wrapper).parents('.contract-attachment-wrapper').remove();
    			} else {
    				alert_float('danger',response.message);
    			}
    		},'json');
    	}
    }
    function insert_merge_field(field){
    	var key = $(field).text();
    	tinymce.activeEditor.execCommand('mceInsertContent', false, key);
    }
    function contract_full_view(){
        $('.left-column').toggleClass('hide');
        $('.right-column').toggleClass('col-md-7');
        $('.right-column').toggleClass('col-md-12');
    }
</script>
</body>
</html>
