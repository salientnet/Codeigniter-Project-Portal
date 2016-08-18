<ul class="nav nav-tabs" role="tablist">
 <li role="presentation" class="active">
    <a href="#payment_modes_general" aria-controls="payment_modes_general" role="tab" data-toggle="tab"><?php echo _l('settings_group_general'); ?></a>
  </li>
  <li role="presentation">
    <a href="#online_payments_paypal_tab" aria-controls="online_payments_paypal_tab" role="tab" data-toggle="tab">Paypal</a>
  </li>
  <li role="presentation">
    <a href="#online_payments_stripe_tab" aria-controls="online_payments_stripe_tab" role="tab" data-toggle="tab">Stripe</a>
  </li>
</ul>
<div class="tab-content mtop30">
 <div role="tabpanel" class="tab-pane active" id="payment_modes_general">
  <?php render_yes_no_option('notification_when_customer_pay_invoice','notification_when_customer_pay_invoice'); ?>
 </div>
  <!-- Paypal -->
  <div role="tabpanel" class="tab-pane" id="online_payments_paypal_tab">
    <div class="row">
      <div class="col-md-6">
       <h4>Paypal</h4>
       <hr />
       <?php render_yes_no_option('paymentmethod_paypal_active','settings_paymentmethod_active'); ?>
       <?php echo render_input('settings[paymentmethod_paypal_label]','settings_paymentmethod_mode_label',get_option('paymentmethod_paypal_label')); ?>
       <?php echo render_input('settings[paymentmethod_paypal_username]','settings_paymentmethod_paypal_username',$this->encryption->decrypt(get_option('paymentmethod_paypal_username'))); ?>

       <?php echo render_input('settings[paymentmethod_paypal_password]','settings_paymentmethod_paypal_password',$this->encryption->decrypt(get_option('paymentmethod_paypal_password'))); ?>

       <?php echo render_input('settings[paymentmethod_paypal_signature]','settings_paymentmethod_paypal_signature',$this->encryption->decrypt(get_option('paymentmethod_paypal_signature'))); ?>

       <?php echo render_input('settings[paymentmethod_paypal_currencies]','settings_paymentmethod_currencies',get_option('paymentmethod_paypal_currencies')); ?>

       <?php render_yes_no_option('paymentmethod_paypal_test_mode_enabled','settings_paymentmethod_testing_mode'); ?>
     </div>
   </div>
 </div>
 <!-- Stripe -->
 <div role="tabpanel" class="tab-pane" id="online_payments_stripe_tab">
  <div class="row">
    <div class="col-md-6">
     <h4>Stripe</h4>
     <hr />
     <?php render_yes_no_option('paymentmethod_stripe_active','settings_paymentmethod_active'); ?>

     <?php echo render_input('settings[paymentmethod_stripe_label]','settings_paymentmethod_mode_label',get_option('paymentmethod_stripe_label')); ?>

     <?php echo render_input('settings[paymentmethod_stripe_api_secret_key]','settings_paymentmethod_stripe_api_secret_key',$this->encryption->decrypt(get_option('paymentmethod_stripe_api_secret_key'))); ?>

     <?php echo render_input('settings[paymentmethod_stripe_api_publishable_key]','settings_paymentmethod_stripe_api_publishable_key',$this->encryption->decrypt(get_option('paymentmethod_stripe_api_publishable_key'))); ?>

     <?php echo render_input('settings[paymentmethod_stripe_currencies]','settings_paymentmethod_currencies',get_option('paymentmethod_stripe_currencies')); ?>

     <?php render_yes_no_option('paymentmethod_stripe_test_mode_enabled','settings_paymentmethod_testing_mode'); ?>
   </div>
 </div>
</div>
</div>

