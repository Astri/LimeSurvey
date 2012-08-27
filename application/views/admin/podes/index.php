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
            echo CHtml::link(CHtml::image($add['src'], $add['alt']), $this->createURL('admin/podes/index'));
            ?>
        </div>	
    </div>    
</div>

<?php $form=$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'potensi-form-index-form',
	'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'focus'=>array($model,'provinsiid'),
	'htmlOptions'=>array(
		'class'=>'form-inline',
	),
)); ?>

	<div class='header ui-widget-header header_statistics'>
        <div style='float:right;'><img src='<?php echo $sImageURL; ?>/maximize.png' id='showlfilter' alt='<?php $clang->eT("Maximize"); ?>'/><img src='<?php echo $sImageURL; ?>/minimize.png' id='hidelfilter' alt='<?php $clang->eT("Minimize"); ?>'/></div>
        <?php $clang->eT("Village Resources Viewer"); ?>
    </div>
	
	<div id='podeslocationfilters' class='statisticsfilters' <?php if ($output) { echo " style='display:none' "; } ?>>
        <div id='statistics_general_filter'>
            <?php
                $error = '';
                if (!function_exists("gd_info")) {
                    $error .= '<br />'.$clang->gT('You do not have the GD Library installed. Showing charts requires the GD library to function properly.');
                    $error .= '<br />'.$clang->gT('visit http://us2.php.net/manual/en/ref.image.php for more information').'<br />';
                }
                else if (!function_exists("imageftbbox")) {
                    $error .= '<br />'.$clang->gT('You do not have the Freetype Library installed. Showing charts requires the Freetype library to function properly.');
                    $error .= '<br />'.$clang->gT('visit http://us2.php.net/manual/en/ref.image.php for more information').'<br />';
                }
            ?>
            <fieldset style='clear:both;'>
                <legend><?php $clang->eT("Location Filter"); ?></legend>			
				
				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->errorSummary($model); ?>
				<?php 
					$dataprov=CHtml::listData(Provinsi::model()->findAll(),'id','nama'); 
					$datakosong = array(''=>'');
				?>

				<li>					
					<?php echo $form->dropDownListRow($model, 'provinsiid',  $dataprov); ?>
										
				</li>

				<li>
					<?php echo $form->labelEx($model,'kabupatenid'); ?>
					<?php echo $form->dropDownList($model,'kabupatenid',$datakosong); ?>					
				</li>

				<li>
					<?php echo $form->labelEx($model,'kecamatanid'); ?>
					<?php echo $form->dropDownList($model,'kecamatanid',$datakosong); ?>					
				</li>

				<li>
					<?php echo $form->labelEx($model,'desaid'); ?>
					<?php echo $form->dropDownList($model,'desaid',$datakosong); ?>					
				</li>
			</fieldset>
			<fieldset style='clear:both;'>
                <legend><?php $clang->eT("Output Selection"); ?></legend>
				<li>
					<?php echo $form->labelEx($model,'katAll'); ?>
					<?php echo $form->checkBox($model,'katAll',array('class'=>'checkall')); ?>
					<?php echo $form->error($model,'katAll'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat3'); ?>
					<?php echo $form->checkBox($model,'kat3'); ?>
					<?php echo $form->error($model,'kat3'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat4'); ?>
					<?php echo $form->checkBox($model,'kat4'); ?>
					<?php echo $form->error($model,'kat4'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat5'); ?>
					<?php echo $form->checkBox($model,'kat5'); ?>
					<?php echo $form->error($model,'kat5'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat6'); ?>
					<?php echo $form->checkBox($model,'kat6'); ?>
					<?php echo $form->error($model,'kat6'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat7'); ?>
					<?php echo $form->checkBox($model,'kat7'); ?>
					<?php echo $form->error($model,'kat7'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat8'); ?>
					<?php echo $form->checkBox($model,'kat8'); ?>
					<?php echo $form->error($model,'kat8'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat9'); ?>
					<?php echo $form->checkBox($model,'kat9'); ?>
					<?php echo $form->error($model,'kat9'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat10'); ?>
					<?php echo $form->checkBox($model,'kat10'); ?>
					<?php echo $form->error($model,'kat10'); ?>
				</li>

				<li>
					<?php echo $form->labelEx($model,'kat12'); ?>
					<?php echo $form->checkBox($model,'kat12'); ?>
					<?php echo $form->error($model,'kat12'); ?>				
				<li>
				
					<li>
						<?php echo $form->labelEx($model,'outputtype'); ?>
						<?php echo $form->radioButtonList($model,'outputtype', array('xlsx'=>'Excel','html'=>'HTML'), array('template'=>'{input} {label}    ')); ?>
						<?php echo $form->error($model,'outputtype'); ?>				
						<li>
				
				<div align="center"> 
					<?php echo CHtml::submitButton('Submit'); ?>
				</div>
				</li>
			</fieldset>
		</div>
	</div>
<?php $this->endWidget(); ?>

<div style='clear: both'></div>

<div class='header ui-widget-header header_statistics'>
    <div style='float:right'><img src='<?php echo $sImageURL; ?>/maximize.png' id='showrfilter' alt='<?php $clang->eT("Maximize"); ?>'/><img src='<?php echo $sImageURL; ?>/minimize.png' id='hiderfilter' alt='<?php $clang->eT("Minimize"); ?>'/></div>
    <?php $clang->eT("Result"); ?>
</div>

<div id='podesoutput' class='resultfilters'<?php if (!$output) { echo " style='display:none' "; } ?>>

<?php if ($output && $output['outputtype']=='html') { 
/* BEGIN HTML OUTPUT */
?>

<h1 align="center" id="biodata">Village Resources</h1>
<hr />
<?php $Desa = loadModel('Desa',$output['id']); ?>
<table class="table">
<thead align="right">
	<tr>
	<th colspan=2><h3>Biodata Desa</h3></th>
	</tr>
</thead>
<tbody>
	<tr>
	<th scope="row">Provinsi</td>
	<td><?php echo $Desa->kecamatan->kabupaten->provinsi->nama ?></td>
	</tr>
	<tr>
	<th scope="row">Kabupaten</td>
	<td><?php echo $Desa->kecamatan->kabupaten->nama ?></td>
	</tr>
	<tr>
	<th scope="row">Kecamatan</td>
	<td><?php echo $Desa->kecamatan->nama ?></td>
	</tr>
	<tr>
	<th scope="row">Desa</td>
	<td><?php echo $Desa->nama ?></td>
	</tr>
	</tbody>
</table>

<hr />

<?

/* Load output */
	
	displayR($output['kat3'],3,$output['id']);
	displayR($output['kat4'],4,$output['id']);
	displayR($output['kat5'],5,$output['id']);
	displayR($output['kat6'],6,$output['id']);
	displayR($output['kat7'],7,$output['id']);
	displayR($output['kat8'],8,$output['id']);
	displayR($output['kat9'],9,$output['id']);
	displayR($output['kat10'],10,$output['id']);
	displayR($output['kat12'],12,$output['id']);
	
	//print_r($output);
} 

if ($output && $output['outputtype']=='xlsx') {
	/* BEGIN EXCEL OUTPUT */
	
	// Load Village Data
	$DesaExcel = loadModel('Desa',$output['id']);	
	$dataDesa = array();
	array_push($dataDesa,
		$DesaExcel->kecamatan->kabupaten->provinsi->nama,
		$DesaExcel->kecamatan->kabupaten->nama,
		$DesaExcel->kecamatan->nama,
		$DesaExcel->nama
	);
	
	// get a reference to the path of PHPExcel classes 
	$phpExcelPath = Yii::getPathOfAlias('application.third_party.phpexcel');
	
	// Turn off our amazing library autoload 
	spl_autoload_unregister(array('YiiBase','autoload'));        
	
	//
	// making use of our reference, include the main class
	// when we do this, phpExcel has its own autoload registration
	// procedure (PHPExcel_Autoloader::Register();)
	include($phpExcelPath . DIRECTORY_SEPARATOR . 'PHPExcel.php');
	
	// Create new PHPExcel object
	$excel = new PHPExcel();
	$excel->setActiveSheetIndex(0);		
	
	// Set properties
	$excel->getProperties()->setCreator("ECB JNA Database")
		->setLastModifiedBy("ECB JNA Database")
		->setCategory("Approve by ");
	
	// Design Cell
	$excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);;
	$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);;
	$excel->getActiveSheet()->mergeCells('A1:B1');
	
	$styleHeading = array(
		'font' => array(
			'bold' => true,
		),
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
		'borders' => array(
			'top' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
			),
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,			
			'startcolor' => array(
				'rgb' => 'CAD9D2',
			),			
		),
	);
	
	$excel->getActiveSheet()->getStyle('A1')->applyFromArray($styleHeading);

	/* Add Data */
	
	// Column begin from 0
	// Row begin from 1
	$excel->getActiveSheet()
	->setCellValueByColumnAndRow(0, 1, 'Village Resources')
	->setCellValueByColumnAndRow(0, 2, 'Provinsi')->setCellValueByColumnAndRow(1, 2, $DesaExcel->kecamatan->kabupaten->provinsi->nama)
	->setCellValueByColumnAndRow(0, 3, 'Kabupaten')->setCellValueByColumnAndRow(1, 3, $DesaExcel->kecamatan->kabupaten->nama)
	->setCellValueByColumnAndRow(0, 4, 'Kecamatan')->setCellValueByColumnAndRow(1, 4, $DesaExcel->kecamatan->nama)
	->setCellValueByColumnAndRow(0, 5, 'Desa')->setCellValueByColumnAndRow(1, 5, $DesaExcel->nama);	
	
	ob_end_clean();
	
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="Report.xlsx"');
	
	$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	ob_end_clean();
	
	$objWriter->save('php://output');
	$excel->disconnectWorksheets();
	unset($excel);
	Yii::app()->end();
	
	 
	// Once we have finished using the library, give back the 
	// power to Yii... 
	spl_autoload_register(array('YiiBase','autoload'));	
}

?>
?>
</div>

<script type="text/javascript">
	$(function() {		
		
		$('.checkall').click(function () {
			$(this).parents('fieldset:eq(0)').find(':checkbox').attr('checked', this.checked);
		});
		
		$('#PotensiForm_provinsiid').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('potensi/getkabupaten') ?>",
				data: {provinsiid : $('#PotensiForm_provinsiid').val()},
				success: function(data) {
					$("#PotensiForm_kabupatenid").val(null).trigger("change"); 
					$('#PotensiForm_kabupatenid option:gt(0)').remove();
					$("#PotensiForm_kabupatenid").append(data);
				}
			});
		});

		$('#PotensiForm_kabupatenid').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('potensi/getkecamatan') ?>",
				data: {kabupatenid : $('#PotensiForm_kabupatenid').val()},
				success: function(data) {
					$("#PotensiForm_kecamatanid").val(null).trigger("change"); 
					$('#PotensiForm_kecamatanid option:gt(0)').remove();
					$("#PotensiForm_kecamatanid").append(data);
				}
			});
		});
		
		$('#PotensiForm_kecamatanid').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('potensi/getdesa') ?>",
				data: {kecamatanid : $('#PotensiForm_kecamatanid').val()},
				success: function(data) {
					$("#PotensiForm_desaid").val(null).trigger("change"); 
					$('#PotensiForm_desaid option:gt(0)').remove();
					$("#PotensiForm_desaid").append(data);
				}
			});
		});
	});
	
	
</script>