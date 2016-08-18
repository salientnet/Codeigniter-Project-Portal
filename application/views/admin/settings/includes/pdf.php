<div class="row">
    <div class="col-md-6">
        <?php $fonts = $this->pdf->get_fonts_list(); ?>
        <label class="control-label"><?php echo _l('settings_pdf_font'); ?></label>
        <select name="settings[pdf_font]" class="selectpicker" data-width="100%" data-live-search="true" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
            <?php
            foreach($fonts as $font){
                $selected = '';
                if(get_option('pdf_font') == $font){
                    $selected = 'selected';
                }
                echo '<option value="'.$font.'" '.$selected.'>'.$font.'</option>';
            }
            ?>
        </select>
         <hr />
        <?php echo render_input('settings[pdf_font_size]','settings_pdf_font_size',get_option('pdf_font_size'),'number'); ?>

        <hr />
        <?php echo render_color_picker('settings[pdf_table_heading_color]',_l('settings_pdf_table_heading_color'),get_option('pdf_table_heading_color')); ?>
        <hr />
        <?php echo render_color_picker('settings[pdf_table_heading_text_color]',_l('settings_pdf_table_heading_text_color'),get_option('pdf_table_heading_text_color')); ?>
        <hr />

        <?php echo render_input('settings[custom_pdf_logo_image_url]','settings_custom_pdf_logo_image_url',get_option('custom_pdf_logo_image_url'),'text',array('data-toggle'=>'tooltip','title'=>'settings_custom_pdf_logo_image_url_tooltip')); ?>
        <hr />
        <?php echo render_input('settings[pdf_logo_width]','pdf_logo_width',get_option('pdf_logo_width'),'number'); ?>
        <hr />
        <?php render_yes_no_option('show_status_on_pdf_ei','show_invoice_estimate_status_on_pdf'); ?>
    </div>
</div>
