<?php 
//dump($_SESSION);
if ( Yii::app()->functions->isClientLogin()){
	header("Location: ".Yii::app()->request->baseUrl."/store/PaymentOption");
	die();
}

echo CHtml::hiddenField('mobile_country_code',Yii::app()->functions->getAdminCountrySet(true));
$guest_checkout=Yii::app()->functions->getOptionAdmin('website_disabled_guest_checkout');
?>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo Yii::app()->request->baseUrl;?>/assets/front/img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_2.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.html" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->


    <div id="position">
        <div class="container">
            <ul>
                <li><a href="<?php echo Yii::app()->createUrl('store'); ?>">Home</a></li>
                <li><a href="javascript:void(0)">Checkout</a></li>
               <!--  <li>Page active</li> -->
            </ul>
        </div>
    </div><!-- Position -->

<!-- Content ================================================== -->

<div class="container margin_60_35">
    <div id="container_pin">
        <div class="row">
            
<div class="page-right-sidebar checkout-page">
  <div class="main">
  <div class="inner">
     <div class="uk-grid">
       <div class="uk-width-1-2">  
          <form id="forms" class="forms uk-panel uk-panel-box uk-form" method="POST">
             <?php echo CHtml::hiddenField('action','clientLogin')?>
             <?php echo CHtml::hiddenField('currentController','store')?>
             <?php echo CHtml::hiddenField('redirect',Yii::app()->request->baseUrl."/store/paymentOption")?>
             <h3><?php echo Yii::t("default","Log in to your account")?></h3>
             <div class="uk-form-row">
               <?php echo CHtml::textField('username','',
                array('class'=>'uk-width-1-1','placeholder'=>Yii::t("default","Email"),
               'data-validation'=>"required"))?>
             </div>
             <div class="uk-form-row">
             <?php echo CHtml::passwordField('password','',
             array('class'=>'uk-width-1-1','placeholder'=>Yii::t("default","Password"),'data-validation'=>"required"))?>
             </div>
             
             <?php if ( getOptionA('captcha_customer_login')==2):?>
            <div class="recaptcha" id="RecaptchaField1"></div>
             <?php endif;?>
             
             <div class="uk-form-row">
             <input type="submit" value="<?php echo Yii::t("default","Login")?>" class="uk-button uk-width-1-1 uk-button-success">
             </div>
             
			<?php $fb_flag=Yii::app()->functions->getOptionAdmin('fb_flag');?>				
			<?php $fb_app_id=Yii::app()->functions->getOptionAdmin('fb_app_id');?>
			<?php if ( $fb_flag=="" && !empty($fb_app_id)):?>
			
			<div class="or"><span></span><?php echo Yii::t("default","OR")?><span class="r"></span></div>
			
			<div class="sigin-fb-wrap">
			<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"><?php echo Yii::t('default',"Sign in with Facebook")?></fb:login-button>
			</div> <!--sigin-fb-wrap-->
			
			<?php if ( yii::app()->functions->getOptionAdmin('google_login_enabled')==2):?>
		   <a class="google-login" href="<?php echo websiteUrl()."/store/GoogleLogin"; ?>">
		   <i class="fa fa-google-plus"></i> <?php echo t("Sign in with Google")?>
		   </a>
		   <?php endif;?>
			
			<?php endif;?>     
             
          </form>
        
        <!-- ADD FORGOT PASSWORD  -->
        <a href="javascript:;" class="forgot-pass-link2 right"><?php echo Yii::t("default","Forgot Password")?>?</a>      
		  
		<div style="height:10px;"></div>          
		
		<div class="section-forgotpass" style="display:none;">
		<form id="frm-modal-forgotpass" class="frm-modal-forgotpass uk-panel uk-panel-box uk-form" method="POST" onsubmit="return false;" style="min-height:inherit;">
		<?php echo CHtml::hiddenField('action','forgotPassword')?>
		<?php echo CHtml::hiddenField('do-action',$_GET['do-action'])?>     
		<h3><?php echo Yii::t("default","Forgot Password")?></h3>
		 
		<div class="uk-form-row">
		<?php echo CHtml::textField('username-email','',
		array('class'=>'uk-width-1-1','placeholder'=>Yii::t("default","Email address"),
		'data-validation'=>"email"))?>
		</div>
		 
		<div class="uk-form-row">
		<input type="submit" value="<?php echo Yii::t("default","Retrieve Password")?>" class="uk-button uk-width-1-1 uk-button-success">
		</div>     
		
		</form>
		
		<a href="javascript:;" class="back-link left"><i class="fa fa-angle-left"></i> <?php echo Yii::t("default","Close")?></a>      
		<div style="height:10px;"></div>
		
		</div> <!--section-forgotpass-->          
		<!-- END FORGOT PASSWORD  -->
                    
       </div><!-- uk-width-1-2-->
       <div class="uk-width-1-2">
          <form id="form-signup" class="form-signup uk-panel uk-panel-box uk-form" method="POST">
            <?php echo CHtml::hiddenField('action','clientRegistration')?>
            <?php echo CHtml::hiddenField('currentController','store')?>
            <?php echo CHtml::hiddenField('redirect',Yii::app()->request->baseUrl."/store/paymentOption")?>
            <?php 
		    $verification=Yii::app()->functions->getOptionAdmin("website_enabled_mobile_verification");	    
		    if ( $verification=="yes"){
		        echo CHtml::hiddenField('verification',$verification);
		    }
		    ?>
            
            <?php if ( $guest_checkout=="") :?>
            <h3 style="text-align:center;"><?php echo t("Guest Checkout")?></h3>
            <p style="text-align:center;"><?php echo t("Proceed to checkout, and you will have an option to create an account at the end.")?></p>
            
            <a href="<?php echo $this->createUrl('/store/guestcheckout');?>" class="uk-button uk-width-1-1 uk-button-danger"><?php echo t("Continue")?></a>
            
            <div class="spacer"></div>
            
            <?php endif;?>
                        
            
             <h3><?php echo Yii::t("default","Sign up")?></h3>
             <div class="uk-form-row">
              <?php echo CHtml::textField('first_name','',array(
               'class'=>'uk-width-1-1',
               'placeholder'=>Yii::t("default","First Name"),
               'data-validation'=>"required",
               'onkeypress' => "return onlyAlphabets(event,this);"
              ))?>
             </div>
             <div class="uk-form-row">
              <?php echo CHtml::textField('last_name','',array(
               'class'=>'uk-width-1-1',
               'placeholder'=>Yii::t("default","Last Name"),
               'data-validation'=>"required",
               'onkeypress' => "return onlyAlphabets(event,this);"
              ))?>
             </div>
             
             <div class="uk-form-row">
		      <?php echo CHtml::textField('contact_phone','',array(
		       'class'=>'uk-width-1-1 mobile_inputs',
		       'placeholder'=>yii::t("default","Mobile"),
		       'data-validation'=>"required",
           'maxlength'=>"13",
           'onkeypress' => "return event.charCode >= 48 && event.charCode <= 57"
		      ))?>
		     </div>
             
             <div class="uk-form-row">
              <?php echo CHtml::textField('email_address','',array(
               'class'=>'uk-width-1-1',
               'placeholder'=>Yii::t("default","Email address"),
               'data-validation'=>"email"               
              ))?>
             </div>
             
             
             <div class="uk-form-row">
              <?php echo CHtml::passwordField('password','',array(
               'class'=>'uk-width-1-1',
               'placeholder'=>Yii::t("default","Password"),
               'data-validation'=>"required"
              ))?>
             </div>
             
             <div class="uk-form-row">
		      <?php echo CHtml::passwordField('cpassword','',array(
		       'class'=>'uk-width-1-1',
		       'placeholder'=>Yii::t("default","Confirm Password"),
		       'data-validation'=>"required"       
		      ))?>      
		     </div>
                  
             <?php if (getOptionA('captcha_customer_signup')==2):?>
              <div class="recaptcha" id="RecaptchaField2"></div>
             <?php endif;?> 
             
             <p class="uk-text-muted" style="text-align: left;">
             <?php echo Yii::t("default","By creating an account, you agree to receive sms from vendor.")?>
             </p>
             
  <?php if ( Yii::app()->functions->getOptionAdmin('website_terms_customer')=="yes"):?>
  <?php 
  $terms_link=Yii::app()->functions->getOptionAdmin('website_terms_customer_url');
  $terms_link=Yii::app()->functions->prettyLink($terms_link);
  ?>
  <div class="uk-form-row">
  <label class="uk-form-label"></label>
  <?php 
  echo CHtml::checkBox('terms_n_condition',false,array(
   'value'=>2,
   'class'=>"",
   'data-validation'=>"required"
  ));
  echo " ". t("I Agree To")." <a href=\"$terms_link\" target=\"_blank\">".t("The Terms & Conditions")."</a>";
  ?>  
  </div>  
  <?php endif;?>             
             
             <div class="uk-form-row">
             <input type="submit" value="<?php echo Yii::t("default","Create Account")?>" class="uk-button uk-width-1-1 uk-button-primary">
             </div>
          </form>
       </div>
     </div>
     </div>
  </div> <!--main-->
</div> <!--menu-wrapper-->
		</div><!-- End row -->
	</div><!-- End container pin -->
</div><!-- End container -->
<!-- End Content =============================================== -->
 <script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>