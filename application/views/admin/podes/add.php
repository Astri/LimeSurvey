<div class="menubar">
    <div class='menubar-title ui-widget-header'>
            <strong><?php $clang->eT("Podes panel"); ?> </strong>
    </div>
    <?php
    $home = array('src' => $sImageURL.'home.png',
        'alt' => 'Home Page',
        'title' => 'Home Page',
        'style' => 'margin-left:2px');   

    $view = array('src' => $sImageURL.'podes_view.png',
        'alt' => 'View Podes Data',
        'title' => 'View Podes Data',
        'style' => 'margin-left:0px',
        'style' => 'margin-right:1px');

    $compare = array('src' => $sImageURL.'podes_compare.png',
        'alt' => 'Compare Podes Data',
        'title' => 'Compare Podes Data',
        'name' => 'export',
        'id' => 'export',
        'style' => 'margin-left:0px',
        'style' => 'margin-right:1px');    

    $seperator = array('src' => $sImageURL.'separator.gif',
        'alt' => '',
        'options'=> array(
        'class' => 'separator'),
        'title' => '');
	
	$add = array('src' => $sImageURL.'podes_add.png',
        'alt' => 'Add Podes Data',
        'title' => 'Add Podes Data',
        'height' => 35,
        'width' => 35,
        'style' => 'margin-left:5px');
    
    ?>
    <div class='menubar-main'>
        <div class='menubar-left'>
            <?php
            echo CHtml::link(CHtml::image($home['src'], $home['alt']), Yii::app()->getController()->createUrl("/admin"));            
            echo CHtml::image($seperator['src'], $seperator['alt'], $seperator['options']);
            echo CHtml::link(CHtml::image($view['src'], $view['alt']), $this->createURL('admin/podes/index'));
            echo CHtml::link(CHtml::image($compare['src'], $compare['alt']), $this->createURL('admin/podes/compare'));         
            echo CHtml::link(CHtml::image($add['src'], $add['alt']), $this->createURL('admin/podes/add'));
            ?>
        </div>	
    </div>    
</div>
<br />
<?php if (isset($output['successmessage'])) { ?>
<div class="row">
	<div class="span8 offset4">
		<div class="alert">
		  <button type="button" class="close" data-dismiss="alert">×</button>
		  <?php echo $output['successmessage']; ?>
		</div>
	</div>
</div>
<?php } ?>

<div class="header">
Add Location
	<ul class="nav nav-tabs" id="myTab">
	  <li class="active"><a href="#provinsi">Provinsi</a></li>
	  <li><a href="#kabupaten">Kabupaten</a></li>
	  <li><a href="#kecamatan">Kecamatan</a></li>
	  <li><a href="#desa">Desa</a></li>
	</ul>
</div>
<div class="tab-content" id="statistics_general_filter">
	<div class="tab-pane active" id="provinsi">	
	<div class="form>
		<?php 	  
		$provinsi = $output['provinsi'];
		$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'provinsi-form',
			'enableAjaxValidation'=>false,
			'htmlOptions'=>array(
				'class'=>'form-inline',
			),
		)); ?>
		<h4>Add Provinsi</h4>  
		<p class="help-block">Fields with <span class="required">*</span> are required.</p>
		  
		<?php echo $form->errorSummary($provinsi); ?>
		  
		<?php echo $form->textFieldRow($provinsi,'id',array('class'=>'span5','maxlength'=>2)); ?>
		<br/>
		  
		<?php echo $form->textFieldRow($provinsi,'nama',array('class'=>'span5','maxlength'=>100)); ?>
		  
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$provinsi->isNewRecord ? 'Create' : 'Save',
			)); ?>
		</div>
		  
		<?php $this->endWidget(); ?>  
		</div>
	</div>
	<div class="tab-pane" id="kabupaten">
		<?php 	  
		  $dataprov=CHtml::listData(Provinsi::model()->findAll(),'id','nama'); 
		  $datakosong = array(''=>'');
		  
		  $kabupaten = $output['kabupaten'];
		  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			  'id'=>'provinsi-form',
			  'enableAjaxValidation'=>false,
		  )); ?>
		  
		  <p class="help-block">Fields with <span class="required">*</span> are required.</p>
		  
		  <?php echo $form->errorSummary($kabupaten); ?>
		  
		  <?php echo $form->dropDownListRow($kabupaten, 'provinsiid',  $dataprov); ?>
		  <?php echo $form->textFieldRow($kabupaten,'id',array('class'=>'span5','maxlength'=>4)); ?>
		  
		  <?php echo $form->textFieldRow($kabupaten,'nama',array('class'=>'span5','maxlength'=>100)); ?>
		  
		  <div class="form-actions">
			  <?php $this->widget('bootstrap.widgets.TbButton', array(
				  'buttonType'=>'submit',
				  'type'=>'primary',
				  'label'=>$provinsi->isNewRecord ? 'Create' : 'Save',
			  )); ?>
		  </div>
		  
		  <?php $this->endWidget(); ?>
  
	</div>
	<div class="tab-pane" id="kecamatan">isi kecamatan</div>
	<div class="tab-pane" id="desa">isi desa</div>
</div>


 
<script>
  $(function () {
    $('#myTab a[href="#provinsi"]').tab('show');
	$('a[href="#provinsi"]').click(function() {
		$('#myTab a[href="#provinsi"]').tab('show');
	});
	$('a[href="#kabupaten"]').click(function() {
		$('#myTab a[href="#kabupaten"]').tab('show');
	});
	$('a[href="#kecamatan"]').click(function() {
		$('#myTab a[href="#kecamatan"]').tab('show');
	});
	$('a[href="#desa"]').click(function() {
		$('#myTab a[href="#desa"]').tab('show');
	});
  });
</script>