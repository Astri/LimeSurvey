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
	$DesaExcel = $output['DesaExcel'];
	if (array_key_exists('DesaExcelKat3',$output)) $DesaExcelKat3 = $output['DesaExcelKat3'];
	if (array_key_exists('DesaExcelKat4',$output)) $DesaExcelKat4 = $output['DesaExcelKat4'];
	if (array_key_exists('DesaExcelKat5',$output)) $DesaExcelKat5 = $output['DesaExcelKat5'];
	if (array_key_exists('DesaExcelKat6',$output)) $DesaExcelKat6 = $output['DesaExcelKat6'];
	if (array_key_exists('DesaExcelKat7',$output)) $DesaExcelKat7 = $output['DesaExcelKat7'];
	if (array_key_exists('DesaExcelKat8',$output)) $DesaExcelKat8 = $output['DesaExcelKat8'];
	if (array_key_exists('DesaExcelKat9',$output)) $DesaExcelKat9 = $output['DesaExcelKat9'];
	if (array_key_exists('DesaExcelKat10',$output)) $DesaExcelKat10 = $output['DesaExcelKat10'];
	if (array_key_exists('DesaExcelKat12',$output)) $DesaExcelKat12 = $output['DesaExcelKat12'];
			
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
	
	// Set column width, varies wheter another category checked or not. if yes, then set it autosize.
	if (isset($DesaExcelKat3) || isset($DesaExcelKat4) || isset($DesaExcelKat5) || isset($DesaExcelKat6) || 
	isset($DesaExcelKat7) || isset($DesaExcelKat8) || isset($DesaExcelKat9) || isset($DesaExcelKat10) || 
	isset($DesaExcelKat12) ) {
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(163);
		$excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
	}
	else {
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(13);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(26);
	}
	
	// Set alignment
	$excel->getActiveSheet()->getStyle('B')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	
	// 1st Heading Style
	$styleHeading1 = array(
		'font' => array(
			'bold' => true,
			'size'=>20
		),
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
		'borders' => array(
			'top' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
			),
		),	
	);
	
	// 2nd Heading Style
	$styleHeading2 = array(
		'font' => array(
			'bold' => true,
			'size'=>15
		),
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
		'borders' => array(
			'bottom' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
			),
		),
		/*'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,			
			'startcolor' => array(
				'rgb' => 'CAD9D2',
			),			
		),*/
	);
	
	
	/* Create Zebra Stripe */
	$stripeColour = 'F5F5F5';
	$objConditional1 = new PHPExcel_Style_Conditional();
	$objConditional1->setConditionType(PHPExcel_Style_Conditional::CONDITION_EXPRESSION);
	$objConditional1->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_NONE);
	$objConditional1->setCondition( 'MOD(ROW(),2)=0');
	
	/* Initializes Column and Row */
	
	$columnTitle = 0;
	$columnContent = 1;
	$rowActive = 0;
	
	/*****************************
	* BEGIN Identification Data  *
	******************************/
	
	// Fill Header Data and Style
	$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Village Resources');
	$excel->getActiveSheet()->mergeCells("A$rowActive:B$rowActive");
	$excel->getActiveSheet()->getStyle("A$rowActive:B$rowActive")->applyFromArray($styleHeading1);
	
	$rowActive++;
	
	$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Biodata Desa');
	$excel->getActiveSheet()->mergeCells("A$rowActive:B$rowActive");
	$excel->getActiveSheet()->getStyle("A$rowActive:B$rowActive")->applyFromArray($styleHeading2);
	
	
	// Fill Data
	$rowStart = $rowActive;
	$excel->getActiveSheet()
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Provinsi')->setCellValueByColumnAndRow($columnContent, $rowActive, $DesaExcel->kecamatan->kabupaten->provinsi->nama)
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Kabupaten')->setCellValueByColumnAndRow($columnContent, $rowActive, $DesaExcel->kecamatan->kabupaten->nama)
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Kecamatan')->setCellValueByColumnAndRow($columnContent, $rowActive, $DesaExcel->kecamatan->nama)
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Desa')->setCellValueByColumnAndRow($columnContent, $rowActive, $DesaExcel->nama);
	$rowFinish = $rowActive;
	
	// Give zebra stripe
	$objConditional1->getStyle( "A$rowStart:B$rowFinish" )->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getEndColor()->setARGB( $stripeColour );
	$conditionalStyles = $excel->getActiveSheet()->getStyle("A$rowStart:B$rowFinish")->getConditionalStyles();
	array_push($conditionalStyles, $objConditional1);
	$excel->getActiveSheet()->getStyle("A$rowStart:B$rowFinish")->setConditionalStyles($conditionalStyles);
	
	/*****************************
	*   END Identification Data  *
	******************************/
	
	/*****************************
	* BEGIN Looping Potensi Data *
	******************************/
	foreach ($output['potensiR'] as $potensi) {
		if (array_key_exists("DesaExcelKat$potensi",$output)) {
			// Give space
			$rowActive++;
			
			// Fill Header Data and Style
			$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, $output["DesaExcelKat$potensi"."Header"]);
			$excel->getActiveSheet()->mergeCells("A$rowActive:B$rowActive");
			$excel->getActiveSheet()->getStyle("A$rowActive:B$rowActive")->applyFromArray($styleHeading2);
			
			// Fill data
			$rowStart = $rowActive+1; // begin from first data
			$DesaExcelField = $output["DesaExcelKat$potensi"."Field"];
			foreach ($output["DesaExcelKat$potensi"."Field"] as $field) {			
				if (ctype_lower(substr($field,0,1))) {
					// Convert first character back to Capital
					$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, $output["DesaExcelKat$potensi"]->getAttributeLabel(ucfirst($field)))->setCellValueByColumnAndRow($columnContent, $rowActive, $output["DesaExcelKat$potensi"]->$field->nama);
				} else {
					$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, $output["DesaExcelKat$potensi"]->getAttributeLabel(ucfirst($field)))->setCellValueByColumnAndRow($columnContent, $rowActive, $output["DesaExcelKat$potensi"]->$field);
				}
			}
			$rowFinish = $rowActive;		
			
			// Give zebra stripe
			$objConditional1->getStyle( "A$rowStart:B$rowFinish" )->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getEndColor()->setARGB( $stripeColour );
			$conditionalStyles = $excel->getActiveSheet()->getStyle("A$rowStart:B$rowFinish")->getConditionalStyles();
			array_push($conditionalStyles, $objConditional1);
			$excel->getActiveSheet()->getStyle("A$rowStart:B$rowFinish")->setConditionalStyles($conditionalStyles);
		}
	}
	/*****************************
	*  END Looping Potensi Data  *
	******************************/
	
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