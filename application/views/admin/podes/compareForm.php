<h1 align="center">Village Resources Comparation</h1>
<br />
<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/potensi.css');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'potensi-form-index-form',
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'focus'=>array($model,'provinsiid'),
	'htmlOptions'=>array(
        'class'=>'well',
		'style'=>'margin: 2%',
    ),
)); ?>
<h3>Select location to compare</h3>
	<p class="note"><em>Fields with <span class="required">*</span> are required.</em></p>
	
	<!-- BEGIN MULTIPLE LOCATION -->
	<div class="row-fluid">
	<div class="span4">
	<h4>Location 1</h4>
	<div id="location1">
	<?php 
	echo $form->errorSummary($model);

	// Provinsi
	echo $form->labelEx($model,'provinsiid1');
	$dataprov['']='';	
	$dataprov=$dataprov+CHtml::listData(Provinsi::model()->findAll(),'id','nama');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'provinsiid1',
		'data'=>$dataprov,					
		'options'=>array(
			'placeholder'=>'Pilih Provinsi',
			'allowClear'=>true,				
		),
		'htmlOptions'=>array(
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),
	));
	echo $form->error($model,'provinsiid1');

	// Kabupaten
	echo $form->labelEx($model,'kabupatenid1');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'kabupatenid1',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Kabupaten',
			'allowClear'=>true,
		),
		'htmlOptions'=>array(						
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),					
	));
	echo $form->error($model,'kabupatenid1');

	// Kecamatan
	echo $form->labelEx($model,'kecamatanid1');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'kecamatanid1',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Kecamatan',
			'allowClear'=>true,
		),
		'htmlOptions'=>array(						
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),					
	));
	echo $form->error($model,'kecamatanid1');

	// Desa	
	echo $form->labelEx($model,'desaid1');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'desaid1',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Desa',
			'allowClear'=>true,				
		),
		'htmlOptions'=>array(
			'multiple'=>'multiple',
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),		
		),
	));
	echo $form->error($model,'desaid1');

	?>
	</div>
	
	</div>
	<div class="span4">
	<h4>Location 2</h4>
	<div id="location2">
	<?php 
	echo $form->errorSummary($model);

	// Provinsi
	echo $form->labelEx($model,'provinsiid2');
	$dataprov['']='';	
	$dataprov=$dataprov+CHtml::listData(Provinsi::model()->findAll(),'id','nama');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'provinsiid2',
		'data'=>$dataprov,					
		'options'=>array(
			'placeholder'=>'Pilih Provinsi',
			'allowClear'=>true,				
		),
		'htmlOptions'=>array(
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),
	));
	echo $form->error($model,'provinsiid2');

	// Kabupaten
	echo $form->labelEx($model,'kabupatenid2');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'kabupatenid2',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Kabupaten',
			'allowClear'=>true,
		),
		'htmlOptions'=>array(						
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),					
	));
	echo $form->error($model,'kabupatenid2');

	// Kecamatan
	echo $form->labelEx($model,'kecamatanid2');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'kecamatanid2',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Kecamatan',
			'allowClear'=>true,
		),
		'htmlOptions'=>array(						
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),					
	));
	echo $form->error($model,'kecamatanid2');

	// Desa	
	echo $form->labelEx($model,'desaid2');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'desaid2',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Desa',
			'allowClear'=>true,				
		),
		'htmlOptions'=>array(
			'multiple'=>'multiple',		
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),	
		),
	));
	echo $form->error($model,'desaid2');

	?>
	</div>
	</div>
	<div class="span4">
	<h4>Location 3</h4>
	<div id="location3">
	<?php 
	echo $form->errorSummary($model);

	// Provinsi
	echo $form->labelEx($model,'provinsiid3');
	$dataprov['']='';	
	$dataprov=$dataprov+CHtml::listData(Provinsi::model()->findAll(),'id','nama');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'provinsiid3',
		'data'=>$dataprov,					
		'options'=>array(
			'placeholder'=>'Pilih Provinsi',
			'allowClear'=>true,				
		),
		'htmlOptions'=>array(
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),
	));
	echo $form->error($model,'provinsiid3');

	// Kabupaten
	echo $form->labelEx($model,'kabupatenid3');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'kabupatenid3',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Kabupaten',
			'allowClear'=>true,
		),
		'htmlOptions'=>array(						
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),					
	));
	echo $form->error($model,'kabupatenid3');

	// Kecamatan
	echo $form->labelEx($model,'kecamatanid3');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'kecamatanid3',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Kecamatan',
			'allowClear'=>true,
		),
		'htmlOptions'=>array(						
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),
		),					
	));
	echo $form->error($model,'kecamatanid3');

	// Desa	
	echo $form->labelEx($model,'desaid3');
	$this->widget('ext.select2.ESelect2',array(	
		'model'=>$model,
		'attribute'=>'desaid3',
		'data'=>array(''=>''),					
		'options'=>array(
			'placeholder'=>'Pilih Desa',
			'allowClear'=>true,				
		),
		'htmlOptions'=>array(
			'multiple'=>'multiple',		
			'options'=>array(
				''=>array('value'=>null,'selected'=>null),
			),	
		),
	));
	echo $form->error($model,'desaid3');

	?>
	</div>
	</div>
	</div>
	
	<br />
	<?php 
	// New Location
	/* $this->widget('bootstrap.widgets.BootButton', array(
		'label'=>'New Location',
		'type'=>'danger', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'size'=>'large', // '', 'large', 'small' or 'mini'
		'htmlOptions'=>array(
			'id'=>'btn-new-location',
		),
	));  */?>
	<hr />
	<h3>Tick resources to compare</h3>
	<p class="note">Tick <strong>All</strong> to compare all resources.</p>
	<fieldset class='form-horizontal' style='border: 1px solid #DDD; padding: 10px; margin: 0 0 10px 0;'>
		<?php echo $form->checkboxRow($model, 'katAll',array('class'=>'checkall')); ?>
		<?php echo $form->checkboxRow($model, 'kat3', array('text-align'=>'left')); ?>
		<?php echo $form->checkboxRow($model, 'kat4'); ?>
		<?php echo $form->checkboxRow($model, 'kat5'); ?>
		<?php echo $form->checkboxRow($model, 'kat6'); ?>
		<?php echo $form->checkboxRow($model, 'kat7'); ?>
		<?php echo $form->checkboxRow($model, 'kat8'); ?>
		<?php echo $form->checkboxRow($model, 'kat9'); ?>
		<?php echo $form->checkboxRow($model, 'kat10'); ?>
		<?php echo $form->checkboxRow($model, 'kat12'); ?>
	</fieldset>
	<div align="center">
	<?php $this->widget('bootstrap.widgets.BootButton', array(
		'buttonType'=>'submit', 
		'icon'=>'ok', 
		'label'=>'View',
	)); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
$(document).ready(function() {
	$('.checkall').click(function () {
		$(this).parents('fieldset:eq(0)').find(':checkbox').attr('checked', this.checked);
	});	
	
	// Location 1
	$('#CompareForm_provinsiid1').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getKabupaten') ?>",
				data: {provinsiid : $('#CompareForm_provinsiid1').val()},
				success: function(data) {
					$("#CompareForm_kabupatenid1").val(null).trigger("change"); 
					$('#CompareForm_kabupatenid1 option:gt(0)').remove();
					$("#CompareForm_kabupatenid1").append(data);
				}
			});
		});

	$('#CompareForm_kabupatenid1').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getKecamatan') ?>",
				data: {kabupatenid : $('#CompareForm_kabupatenid1').val()},
				success: function(data) {
					$("#CompareForm_kecamatanid1").val(null).trigger("change"); 
					$('#CompareForm_kecamatanid1 option:gt(0)').remove();
					$("#CompareForm_kecamatanid1").append(data);
				}
			});
		});
		
	$('#CompareForm_kecamatanid1').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getDesa') ?>",
				data: {kecamatanid : $('#CompareForm_kecamatanid1').val()},
				success: function(data) {
					$('#CompareForm_desaid1 option:gt(0)').remove();
					$("#CompareForm_desaid1").append(data);
					$("#CompareForm_desaid1").val(null).trigger("change"); 
				}
			});
		});
		
	//// LOCATION 2
	$('#CompareForm_provinsiid2').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getKabupaten') ?>",
				data: {provinsiid : $('#CompareForm_provinsiid2').val()},
				success: function(data) {
					$("#CompareForm_kabupatenid2").val(null).trigger("change"); 
					$('#CompareForm_kabupatenid2 option:gt(0)').remove();
					$("#CompareForm_kabupatenid2").append(data);
				}
			});
		});

	$('#CompareForm_kabupatenid2').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getKecamatan') ?>",
				data: {kabupatenid : $('#CompareForm_kabupatenid2').val()},
				success: function(data) {
					$("#CompareForm_kecamatanid2").val(null).trigger("change"); 
					$('#CompareForm_kecamatanid2 option:gt(0)').remove();
					$("#CompareForm_kecamatanid2").append(data);
				}
			});
		});
		
	$('#CompareForm_kecamatanid2').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getDesa') ?>",
				data: {kecamatanid : $('#CompareForm_kecamatanid2').val()},
				success: function(data) {
					$('#CompareForm_desaid2 option:gt(0)').remove();
					$("#CompareForm_desaid2").append(data);
					$("#CompareForm_desaid2").val(null).trigger("change"); 
				}
			});
		});
		
	//// LOCATION 3
	$('#CompareForm_provinsiid3').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getKabupaten') ?>",
				data: {provinsiid : $('#CompareForm_provinsiid3').val()},
				success: function(data) {
					$("#CompareForm_kabupatenid3").val(null).trigger("change"); 
					$('#CompareForm_kabupatenid3 option:gt(0)').remove();
					$("#CompareForm_kabupatenid3").append(data);
				}
			});
		});

	$('#CompareForm_kabupatenid3').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getKecamatan') ?>",
				data: {kabupatenid : $('#CompareForm_kabupatenid3').val()},
				success: function(data) {
					$("#CompareForm_kecamatanid3").val(null).trigger("change"); 
					$('#CompareForm_kecamatanid3 option:gt(0)').remove();
					$("#CompareForm_kecamatanid3").append(data);
				}
			});
		});
		
	$('#CompareForm_kecamatanid3').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('getDesa') ?>",
				data: {kecamatanid : $('#CompareForm_kecamatanid3').val()},
				success: function(data) {
					$('#CompareForm_desaid3 option:gt(0)').remove();
					$("#CompareForm_desaid3").append(data);
					$("#CompareForm_desaid3").val(null).trigger("change"); 
				}
			});
		});
});
</script>