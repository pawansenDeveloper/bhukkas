
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo Yii::app()->request->baseUrl;?>/assets/front/img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
           <h1>Restaurant Signup</h1>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="<?php echo Yii::app()->createUrl('store'); ?>">Home</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('store/MerchantRegister'); ?>">Merchant</a></li>
        </ul>
    </div>
</div><!-- Position -->
<!-- Content ================================================== -->
<div class="container margin_60_35">
    	<div class="row">
		<div class="col-md-12">
      
<div class="page">
  <div class="main">   
  <div class="inner">
  <div class="spacer"></div>
  <?php //if ( $res=Yii::app()->functions->getPackagesById($_GET['id'])):?>
 
  <div  class="signup-merchant-wrap"> 
  
  <form class="uk-form uk-form-horizontal forms" id="forms" onsubmit="return false;">
      
  <?php echo CHtml::hiddenField('action','merchantRegister')?>
  <?php echo CHtml::hiddenField('currentController','store')?>
      
    <?php if ($res=Yii::app()->functions->getPackagesList()):?>   
      
    <?php echo CHtml::hiddenField('package_id',$res[0]['package_id'])?>
      
    <?php endif;?>  
<!--  <div class="uk-form-row">
  <label class="uk-form-label"><?php //echo Yii::t("default","Selected Package")?></label>
  <span class="uk-text-bold"><?php //echo ucwords($res['title'])?></span>
  </div>-->
  
<!--  <div class="uk-form-row">
  <label class="uk-form-label"><?php //echo Yii::t("default","Price")?></label>
       <?php //if ( $res['promo_price']>=1):?>
       <span class="normal-price uk-text-danger">
       <?php //echo Yii::app()->functions->adminCurrencySymbol().standardPrettyFormat($res['price'])?>
       </span>
       <span class="uk-text-success"><?php //echo Yii::app()->functions->adminCurrencySymbol().standardPrettyFormat($res['promo_price'])?></span>
       <?php //else :?>
       <span class="uk-text-success"><?php //echo Yii::app()->functions->adminCurrencySymbol().standardPrettyFormat($res['price'])?></span>
       <?php //endif;?>
  </div>-->
  
<!--  <div class="uk-form-row">
  <label class="uk-form-label"><?php //echo Yii::t("default","Membership Limit")?></label>
  <?php //if ( $res['expiration_type']=="year"):?>
  <span class="uk-text-bold"><?php //echo $res['expiration']/365?> <?php //echo Yii::t("default",ucwords($res['expiration_type']))?></span>
  <?php //else :?>
  <span class="uk-text-bold"><?php //echo $res['expiration']?> <?php //echo Yii::t("default",ucwords($res['expiration_type']))?></span>
  <?php //endif;?>
  </div>-->
  
<!--  <?php //$ListlimitedPost=Yii::app()->functions->ListlimitedPost();?>
  <div class="uk-form-row">
  <label class="uk-form-label"><?php //echo Yii::t("default","Usage")?></label>
  <?php //if ( $res['unlimited_post']==2):?>
  <span class="uk-text-bold"><?php //echo $ListlimitedPost[$res['unlimited_post']]?></span>
  <?php //else :?>
  <span class="uk-text-bold"><?php //echo $ListlimitedPost[$res['unlimited_post']] . " (".$res['post_limit']." item )"?></span>
  <?php //endif;?>
  </div>-->
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Restaurant name")?></label>
  <?php echo CHtml::textField('restaurant_name',
  isset($data['restaurant_name'])?$data['restaurant_name']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>
  
 <?php if ( Yii::app()->functions->getOptionAdmin('merchant_reg_abn')=="yes"):?>
 <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","ABN")?></label>
  <?php echo CHtml::textField('abn',
  isset($data['restaurant_name'])?$data['abn']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required",
  'onkeypress' => "return onlyAlphabets(event,this);"
  ))?>
  </div>  
  <?php endif;?>
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Restaurant phone")?></label>
  <?php echo CHtml::textField('restaurant_phone',
  isset($data['restaurant_phone'])?$data['restaurant_phone']:""
  ,array(
  'class'=>'uk-form-width-large',
  'maxlength' => '10',
  'onkeypress' => "return event.charCode >= 48 && event.charCode <= 57" 
  ))?>
  </div>  
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Contact name")?></label>
  <?php echo CHtml::textField('contact_name',
  isset($data['contact_name'])?$data['contact_name']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required",
  'onkeypress' => "return onlyAlphabets(event,this);"
  ))?>
  </div>    
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Contact phone")?></label>
  <?php echo CHtml::textField('contact_phone',
  isset($data['contact_phone'])?$data['contact_phone']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required",
  'maxlength' => '10',
  'onkeypress' => "return event.charCode >= 48 && event.charCode <= 57"
  ))?>
  </div>      
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Contact email")?></label>
  <?php echo CHtml::textField('contact_email',
  isset($data['contact_email'])?$data['contact_email']:""
  ,array(
  'class'=>'uk-form-width-large user-email',
  'data-validation'=>"email"
  ))?>
      <span><input type="checkbox" name="isUserName" id="isUserName"/> Make Username</span>
  <p class="uk-text-muted uk-text-small"><?php echo Yii::t("default","Important: Please enter your correct email. we will sent an activation code to your email")?></p>
  </div>        
    
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Street address")?></label>
  <?php echo CHtml::textField('street',
  isset($data['street'])?$data['street']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>          

  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","City")?></label>
  <?php echo CHtml::textField('city',
  isset($data['city'])?$data['city']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required",
  'onkeypress' => "return onlyAlphabets(event,this);"
  ))?>
  </div>            
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Post code/Zip code")?></label>
  <?php echo CHtml::textField('post_code',
  isset($data['post_code'])?$data['post_code']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>              
      
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Country")?></label>
  <?php echo CHtml::dropDownList('country_code',
  getOptionA('merchant_default_country'),
  (array)Yii::app()->functions->CountryListMerchant(),          
  array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>              
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","State/Region")?></label>
  <?php echo CHtml::textField('state',
  isset($data['state'])?$data['state']:""
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>              
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Cuisine")?></label>
  <?php echo CHtml::dropDownList('cuisine[]',
  isset($data['cuisine'])?(array)json_decode($data['cuisine']):"",
  (array)Yii::app()->functions->Cuisine(true),          
  array(
  'class'=>'uk-form-width-large chosen',
  'multiple'=>true,
  'data-validation'=>"required"  
  ))?>
  </div>
  
<div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Services Pick Up or Delivery?")?></label>
  <?php echo CHtml::dropDownList('service',
  isset($data['service'])?$data['service']:"",
  (array)Yii::app()->functions->Services(),          
  array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required",
  'onkeypress' => "return onlyAlphabets(event,this);"
  ))?>
</div>

<h2><?php echo Yii::t("default","Login Information")?></h2>
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Username")?></label>
  <?php echo CHtml::textField('username',
  ''
  ,array(
  'class'=>'uk-form-width-large user-class',
  'data-validation'=>"required"
  ))?>
  </div>          
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Password")?></label>
  <?php echo CHtml::passwordField('password',
  ''
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>            
  
  <div class="uk-form-row">
  <label class="uk-form-label"><?php echo Yii::t("default","Confirm Password")?></label>
  <?php echo CHtml::passwordField('cpassword',
  ''
  ,array(
  'class'=>'uk-form-width-large',
  'data-validation'=>"required"
  ))?>
  </div>            
  
  <?php if (getOptionA('captcha_merchant_signup')==2):?>
  <div style="margin-left:200px;">
  <div class="recaptcha" id="RecaptchaField1"></div>  
  </div>
  <?php endif;?> 
  
  <?php if ( Yii::app()->functions->getOptionAdmin('website_terms_merchant')=="yes"):?>
  <?php 
  $terms_link=Yii::app()->functions->getOptionAdmin('website_terms_merchant_url');
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
<label class="uk-form-label"></label>
<input type="submit" value="<?php echo Yii::t("default","Next")?>" class="uk-button uk-form-width-medium uk-button-success">
</div>  
  
  </form>  
  </div> <!-- signup-merchant-wrap-->
  
  <?php //else :?>
<!--  <p class="uk-text-danger"><?php //echo Yii::t("default","Sorry but we cannot find what you are looking for.")?></p>-->
  <?php //endif;?>
  
  </div>
  </div> <!--main-->
</div> <!--page-->

</div> <!--page-->
	</div><!-- End row -->
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