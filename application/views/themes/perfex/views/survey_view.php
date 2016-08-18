<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php if (isset($title)){
                echo $title;
                }
                ?>
        </title>
        <link href="<?php echo site_url(); ?>assets/css/reset.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo site_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href='<?php echo site_url(); ?>assets/plugins/open-sans-fontface/open-sans.css' rel='stylesheet' type='text/css'>
        <link href="<?php echo template_assets_url(); ?>css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="col-md-8 col-md-offset-2 survey">
                <div class="row">
                    <?php echo form_open($this->uri->uri_string()); ?>
                    <div class="col-md-12">
                        <div id="company-logo">
                            <?php get_company_logo(); ?>
                        </div>
                        <h1 class="text-center no-margin bold"><?php echo $survey->subject; ?></h1>
                        <div class="text-muted">
                            <?php echo $survey->viewdescription; ?>
                        </div>
                        <?php if(count($survey->questions) > 0){
                            $question_area = '<ul class="list-unstyled mtop25">';
                            foreach($survey->questions as $question){
                            	$question_area .= '<li>';
                            	$question_area .= '<div class="form-group">';
                            	$question_area .= '<h4 class="bold">'.$question['question'].'</h4>';
                            	if($question['boxtype'] == 'textarea'){
                            		$question_area .= '<textarea class="form-control" rows="6" name="question['.$question['questionid'].'][]" id="'.$question['questionid'].'" data-required="'.$question['required'].'"></textarea>';
                            	} else if($question['boxtype'] == 'checkbox' || $question['boxtype'] == 'radio'){
                            		$question_area .= '<div class="row box" data-boxid="'.$question['boxid'].'">';
                            		foreach($question['box_descriptions'] as $box_description){
                            			$question_area .= '<div class="col-md-12">';
                            			$question_area .= '<div class="'.$question['boxtype'].' '.$question['boxtype'].'-primary">';
                            			$question_area .=
                            			'<input type="'.$question['boxtype'].'"
                            			name="selectable['.$question['boxid'].']['.$question['questionid'].'][]" value="'.$box_description['questionboxdescriptionid'].'"data-isboxed="true" data-required="'.$question['required'].'" id="chk_'.$question['boxtype'].'_'.$box_description['questionboxdescriptionid'].'"/>';
                            			$question_area .= '
                            			<label for="chk_'.$question['boxtype'].'_'.$box_description['questionboxdescriptionid'].'">
                            				'.$box_description['description'].'
                            			</label>';
                            			$question_area .= '</div>';
                            			$question_area .= '</div>';
                            		}
                            	// end box row
                            		$question_area .= '</div>';
                            	} else {
                            		$question_area .= '<input type="text" class="form-control" name="question['.$question['questionid'].'][]" id="'.$question['questionid'].'" data-required="'.$question['required'].'">';
                            	}
                            	$question_area .= '</div>';
                            	$question_area .= '<hr /></li>';
                            }
                            $question_area .= '</ul>';
                            echo $question_area; ?>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info"><?php echo _l('survey_submit'); ?></button>
                            </div>
                        </div>
                        <?php } else { ?>
                        <p class="no-margin text-center text-info mtop20"><?php echo _l('survey_no_questions'); ?></p>
                        <?php } ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <script src="<?php echo site_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
            	$('form').submit(function(){
            		valid = validate_survey_form();
            		if(!valid){
            			return false;
            		}
            	});

            	$('input[type="checkbox"],input[type="radio"],input[type="text"],textarea').on('focusout change keyup',function(){
            		validate_survey_form($(this));
            	})
            });


            function validate_survey_form(field){
            	var questions = $('form [data-required="1"]');
            	var error_class = 'has-error';
            	var error_message = '<p class="error text-danger"><?php echo _l("clients_required_field"); ?></p>';
            	var wrapper = '.form-group';
            	var valid = true;
            	$.each(questions,function(){
            		var input = $(this);

            		if(typeof(field) !== 'undefined'){
            			input = $(field);
            		}
            		if(input.data('isboxed') !== true){
            			var value = input.val();
            			if(value == ''){
            				valid = false;
            				input.parents(wrapper).addClass(error_class);
            				var error_exists = input.parents(wrapper).find('p.error');
            				if(error_exists.length == 0){
            					input.parents(wrapper).append(error_message);
            				}
            			} else {
            				input.parents(wrapper).removeClass(error_class);
            				input.parents(wrapper).find('p.error').remove();;
            			}
            		}
            		if(input.data('isboxed') == true) {
            			if(input.parents(wrapper).find('input:checked').length == 0){
            				valid = false;
            				input.parents(wrapper).addClass(error_class);
            				var error_exists = input.parents(wrapper).find('p.error');
            				if(error_exists.length == 0){
            					input.parents(wrapper).append(error_message);
            				}
            			} else {
            				input.parents(wrapper).removeClass(error_class);
            				input.parents(wrapper).find('p.error').remove();;
            			}
            		}
            	});

            return valid;
            }
        </script>
    </body>
</html>
