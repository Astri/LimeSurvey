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
        'style' => 'margin-left:0px',
        'style' => 'margin-right:1px');
    
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
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'focus'=>array($model,'provinsiid'),
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
				
				<h3>Select location to compare</h3>
				<p class="note"><em>Fields with <span class="required">*</span> are required.</em></p>
				
				<!-- BEGIN MULTIPLE LOCATION -->
				<?php echo $form->errorSummary($model); ?>
				<div class="row-fluid">
				<div class="span4">
				<h4>Location 1</h4>
				<div id="location1">
				<?php 
				$dataprov['']='';	
				$dataprov=$dataprov+CHtml::listData(Provinsi::model()->findAll(),'id','nama');
				$datakosong = array(''=>'');

				// Provinsi
				echo $form->dropDownListRow($model, 'provinsiid1',  $dataprov);

				// Kabupaten
				echo $form->dropDownListRow($model,'kabupatenid1',$datakosong);

				// Kecamatan
				echo $form->dropDownListRow($model,'kecamatanid1',$datakosong);

				// Desa	
				echo $form->labelEx($model,'desaid1');
				$this->widget('application.third_party.select2.ESelect2',array(	
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

				// Provinsi
				echo $form->dropDownListRow($model, 'provinsiid2',  $dataprov);

				// Kabupaten
				echo $form->dropDownListRow($model,'kabupatenid2',$datakosong);

				// Kecamatan
				echo $form->dropDownListRow($model,'kecamatanid2',$datakosong);

				// Desa	
				echo $form->labelEx($model,'desaid2');
				$this->widget('application.third_party.select2.ESelect2',array(	
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

				// Provinsi
				echo $form->dropDownListRow($model, 'provinsiid3',  $dataprov);

				// Kabupaten
				echo $form->dropDownListRow($model,'kabupatenid3',$datakosong);

				// Kecamatan
				echo $form->dropDownListRow($model,'kecamatanid3',$datakosong);

				// Desa	
				echo $form->labelEx($model,'desaid3');
				$this->widget('application.third_party.select2.ESelect2',array(	
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
			</fieldset>
			<fieldset style='clear:both;'>
                <legend><?php $clang->eT("Resources Selection"); ?></legend>
				<p>Tick <strong>All</strong> to compare all resources.</p>
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
				<?php echo $form->radioButtonListRow($model, 'outputtype', array('xlsx'=>'Excel','html'=>'HTML'), array('class'=>'inline')); ?>
				
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

<div id='podesoutput' class='resultfilters' <?php if (!$output) { echo " style='display:none' "; } ?>>

<?php if ($output['outputtype']=='html') { 
	/* BEGIN HTML OUTPUT */
	
	echo '<h1 align="center" id="biodata">Village Resources Comparison</h1>';
	echo '<hr />';
	compareBiodata(LoadModels('Desa',$output['desaids']));	
	if ($output['kat3']) compareR3(LoadModels('PotensiR3',$output['desaids']));
	if ($output['kat4']) compareR4(LoadModels('PotensiR4',$output['desaids']));
	if ($output['kat5']) compareR5(LoadModels('PotensiR5',$output['desaids']));
	if ($output['kat6']) compareR6(LoadModels('PotensiR6',$output['desaids']));
	if ($output['kat7']) compareR7(LoadModels('PotensiR7',$output['desaids']));
	if ($output['kat8']) compareR8(LoadModels('PotensiR8',$output['desaids']));
	if ($output['kat9']) compareR9(LoadModels('PotensiR9',$output['desaids']));
	if ($output['kat10']) compareR10(LoadModels('PotensiR10',$output['desaids']));
	if ($output['kat12']) compareR12(LoadModels('PotensiR12',$output['desaids']));
	
	/* END HTML OUTPUT */
	
	} elseif ($output['outputtype']=='xlsx') { 		
	
	/* BEGIN EXCEL OUTPUT */
		
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
	$maxColumn = count($output['DesaExcels']);
	
	/*****************************
	* BEGIN Identification Data  *
	******************************/
	
	// Fill Header Title Data and Style
	$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Village Resources Comparison');	
	$excel->getActiveSheet()->mergeCells(
		$excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowActive)->getCoordinate()
		.":".
		$excel->getActiveSheet()->getCellByColumnAndRow($maxColumn,$rowActive)->getCoordinate());
		
	$excel->getActiveSheet()->getStyle(
		$excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowActive)->getCoordinate()
		.":".
		$excel->getActiveSheet()->getCellByColumnAndRow($maxColumn,$rowActive)->getCoordinate()
		)->applyFromArray($styleHeading1);
	
	$rowActive++;
	
	// Biodata Header Style and Data
	$beginCell = $excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowActive)->getCoordinate();
	$endCell = $excel->getActiveSheet()->getCellByColumnAndRow($maxColumn,$rowActive)->getCoordinate();
	$rangeCell = $beginCell.":".$endCell;
	$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Biodata Desa');
	$excel->getActiveSheet()->mergeCells($rangeCell);
	$excel->getActiveSheet()->getStyle($excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowActive)->getCoordinate()
		.":".
		$excel->getActiveSheet()->getCellByColumnAndRow($maxColumn,$rowActive)->getCoordinate())->applyFromArray($styleHeading2);
	
	// Set Column Width to autosize	
	$i = $columnTitle;
	while ($i <= $maxColumn) {
		$excel->getActiveSheet()->getColumnDimensionByColumn($i)->setAutoSize(true);
		$i++;
	}
	
	// Fill Title
	$rowStart = $rowActive;
	$excel->getActiveSheet()
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Provinsi')
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Kabupaten')
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Kecamatan')
		->setCellValueByColumnAndRow($columnTitle, ++$rowActive, 'Desa');
	$rowFinish = $rowActive;
	
	$columnActive = $columnContent;	// Mark active column because we will increment it for multiple village data
	foreach ($output['DesaExcels'] as $DesaExcel) {
		$rowActiveData = $rowStart;				
		$excel->getActiveSheet()
			->setCellValueByColumnAndRow($columnActive, ++$rowActiveData, $DesaExcel->kecamatan->kabupaten->provinsi->nama)
			->setCellValueByColumnAndRow($columnActive, ++$rowActiveData, $DesaExcel->kecamatan->kabupaten->nama)
			->setCellValueByColumnAndRow($columnActive, ++$rowActiveData, $DesaExcel->kecamatan->nama)
			->setCellValueByColumnAndRow($columnActive, ++$rowActiveData, $DesaExcel->nama);				
		$columnActive++;
	}
	$columnActive--;	
	
	// Give Zebra Stripe
	$beginCell = $excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowStart)->getCoordinate();
	$endCell = $excel->getActiveSheet()->getCellByColumnAndRow($columnActive,$rowFinish)->getCoordinate();
	$rangeCell = $beginCell.":".$endCell;
	$objConditional1->getStyle($rangeCell)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getEndColor()->setARGB( $stripeColour );
	$conditionalStyles = $excel->getActiveSheet()->getStyle($rangeCell)->getConditionalStyles();
	array_push($conditionalStyles, $objConditional1);
	$excel->getActiveSheet()->getStyle($rangeCell)->setConditionalStyles($conditionalStyles);	
	
	/*****************************
	 *  END Identification Data  *
	 *****************************/
	 
	/********************************************
	 * BEGIN Looping Potensi Data and Villages  *
	 ********************************************/ 
	//Header and Title Cell
	$rowBegin = $rowActive+3;
	foreach ($output['potensiR'] as $potensi) {		
		// Give space
		$rowActive++;
		
		// Header Cell //		
		// Fill Header Data and Style
		$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, $output["DesaExcelKat$potensi"."Header"]);		
		
		// Give Header Style
		$beginCell = $excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowActive)->getCoordinate();
		$endCell = $excel->getActiveSheet()->getCellByColumnAndRow($maxColumn,$rowActive)->getCoordinate();
		$rangeCell = $beginCell.":".$endCell;
		$excel->getActiveSheet()->mergeCells($rangeCell);
		$excel->getActiveSheet()->getStyle($rangeCell)->applyFromArray($styleHeading2);		
				
		$kat = 'kat'.$potensi;
		$rowStart = $rowActive+1;
		
		// Title Cell //		
		$desaid = $output['desaids'][0]; // This will make title cell only writtten once
		$DesaExcelField = $output["DesaExcel$desaid"."Kat$potensi"."Field"];
		foreach ($output["DesaExcel$desaid"."Kat$potensi"."Field"] as $field) {
			if (ctype_lower(substr($field,0,1))) {
				// Convert first character back to Capital
				$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, $output["DesaExcel$desaid"."Kat$potensi"]->getAttributeLabel(ucfirst($field)));
			} else {
				$excel->getActiveSheet()->setCellValueByColumnAndRow($columnTitle, ++$rowActive, $output["DesaExcel$desaid"."Kat$potensi"]->getAttributeLabel($field));
			}
		}		
		
	}
	
	// Content Cell //
	$rowActive = $rowBegin;
	$columnActive = $columnTitle+1;		
	foreach ($output['desaids'] as $desaid) {				
		$rowActive = $rowBegin; // 
		foreach ($output['potensiR'] as $potensi) {						
			$rowStart = $rowActive; // mark start of Zebra Stripe
			foreach ($output["DesaExcel$desaid"."Kat$potensi"."Field"] as $content) {				
				if (ctype_lower(substr($content,0,1))) {
					// Get relation value
					$excel->getActiveSheet()->setCellValueByColumnAndRow($columnActive, $rowActive++, $output["DesaExcel$desaid"."Kat$potensi"]->$content->nama);
				} else {
					// Get real value
					$excel->getActiveSheet()->setCellValueByColumnAndRow($columnActive, $rowActive++, $output["DesaExcel$desaid"."Kat$potensi"]->$content);
				}
			}
			$rowFinish = $rowActive-1; // Mark end of Zebra Stripe
			$rowActive = $rowActive+2;
			
			// Give Zebra Stripe
			$beginCell = $excel->getActiveSheet()->getCellByColumnAndRow($columnTitle,$rowStart)->getCoordinate();
			$endCell = $excel->getActiveSheet()->getCellByColumnAndRow($columnActive,$rowFinish)->getCoordinate();
			$rangeCell = $beginCell.":".$endCell;
			$objConditional1->getStyle($rangeCell)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getEndColor()->setARGB( $stripeColour );
			$conditionalStyles = $excel->getActiveSheet()->getStyle($rangeCell)->getConditionalStyles();
			array_push($conditionalStyles, $objConditional1);
			$excel->getActiveSheet()->getStyle($rangeCell)->setConditionalStyles($conditionalStyles);	
			
		}
		$columnActive++;				
	}

	/********************************************
	 *  END Looping Potensi Data and Villages   *
	 ********************************************/ 
	
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
		
	/* END EXCEL OUTPUT */	
	}
?> 
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('.checkall').click(function () {
		$(this).parents('fieldset:eq(0)').find(':checkbox').attr('checked', this.checked);
	});	
	
	// Location 1
	$('#CompareForm_provinsiid1').change(function() {
			$.ajax({
				type: 'POST',
				url: "<?php echo CController::createUrl('potensi/getkabupaten') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getkecamatan') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getdesa') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getkabupaten') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getkecamatan') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getdesa') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getkabupaten') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getkecamatan') ?>",
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
				url: "<?php echo CController::createUrl('potensi/getdesa') ?>",
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