<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="<?php echo Yii::app()->request->baseUrl;?>/assets/front/img/sub_header_cart.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
         <h1>Cards</h1>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->
<div id="position">
    <div class="container">
        <ul>
            <li><a href="<?php echo Yii::app()->createUrl('store'); ?>">Home</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('store/Cards'); ?>">Cards</a></li>
        </ul>
    </div>
</div><!-- Position -->
<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row" id="contacts">
    	<div class="col-md-12 col-sm-6">

<div class="page-right-sidebar">
  <div class="main cc_page">
  <div class="inner">
  
<div class="uk-width-1">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/store/Cards/Do/Add" class="uk-button"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/store/Cards" class="uk-button"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
</div>  

  <?php $client_id=Yii::app()->functions->getClientId();?>
  <?php if (is_numeric($client_id)):?>
  
  <form id="frm_table_list" method="POST" >
  <input type="hidden" name="action" id="action" value="ClientCCList">
  <?php echo CHtml::hiddenField('currentController','store')?>

<input type="hidden" name="tbl" id="tbl" value="client_cc">
<input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
<input type="hidden" name="whereid"  id="whereid" value="cc_id">
<input type="hidden" name="slug" id="slug" value="store/Cards">
  
  <table id="table_list" class="uk-table uk-table-hover uk-table-striped uk-table-condensed">
  <thead>
  <tr>
   <th><?php echo Yii::t("default","Card name")?></th>
   <th><?php echo Yii::t("default","Card number")?></th>
   <th><?php echo Yii::t("default","Expiration")?></th>
  </tr>
  </thead>
  </table>
  
  <?php else :?>
  <p class="uk-text-danger"><?php echo Yii::t("default","Profile not available")?></p>
  <?php endif;?>

  </div>
  </div> <!--main-->
</div> <!--page-right-sidebar-->
    	</div>
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->