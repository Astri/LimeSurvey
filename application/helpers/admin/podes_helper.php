<?php
/*
* LimeSurvey
* Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
* All rights reserved.
* License: GNU/GPL License v2 or later, see LICENSE.php
* LimeSurvey is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*
*	$Id$
*/

/**
 * Returns the data model based on the primary key given in the GET variable.
 * If the data model is not found, an HTTP exception will be raised.
 * @class string the model to be loaded
 * @id integer the ID of the model to be loaded
 */
function loadModel($class,$id)
{
	$model=$class::model()->findByPk($id);
	if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
	return $model;
}

/**
 * Fungsi untuk mengambil array model dari array desaid yang disediakan
 * @classname String nama kelas
 * @desaids Array String berisi daftar id 
 * @return array of object dari class classname
 */
function LoadModels($classname, $desaids)
{
	$models = array();
	foreach ($desaids as $id)
	{
		$model = loadModel($classname,$id);
		array_push($models, $model);
	}
	return $models;
}

/**
 * Display corresponding view from request in actionIndex()
 * @kat string kategori
 * @R int potensi number
 * @id int primary key of potensi
 */
function displayR($kat,$R,$id) {
	if ($kat) {
		$model=loadModel("PotensiR".$R,$id);
		$Form = new PotensiForm;
		$kategoriLabel = $Form->getAttributeLabel("kat".$R);
		$kategoriId = "kat".$R;
		echo "<h3 id='".$kategoriId."' style='display:block; height:50px;'>".$kategoriLabel."</h3>";
		echo Yii::app()->getController()->renderPartial('podes/_viewR'.$R, array('model'=>$model));
		echo '<hr />';
		
	}
}

/**
 * Fungsi untuk menampilkan element yang dibandingkan pada table
 * perbandingan. Catatan: pada tampilan perbandingan tidak terdapat logic untuk mengecek field 
 * sebelumnya (semua field akan ditampilkan) ini juga logic yang digunakan di output Excel.
 * @modelarray array berisi model yang akan dibandingkan
 * @label string label yang akan dibandingkan
 * @relation boolean tampilkan relasinya atau tidak
 */
function displayElement($modelarray, $label, $relation=false) {
	echo '<tr>';
	echo '<th scope="row">'.$modelarray[0]->getAttributeLabel($label).'</th>';
	if ($relation) {
		foreach ($modelarray as $model) { // tampilkan nilai dari relasinya
			$relation = lcfirst($label); // Relasi pada objek selalu diawali dengan huruf pertama jadi kecil
			echo '<td>'.$model->$relation->nama.'</td>';
		}
	} else { // tampilkan nilai aslinya
		foreach ($modelarray as $model) {
			echo '<td>'.$model->$label.'</td>';
		}
	}
	
	echo '</tr>';
}

/** 
 * Fungsi untuk menampilkan perbandingan biodata
 * @modelarray array berisi model Desa yang akan dibandingkan
 */
function compareBiodata($modelarray)
{
	biodataHeader($modelarray, 'Desa');
	
	echo '<tr>';
	echo '<th scope="row">Provinsi</th>';
	foreach ($modelarray as $model) {
		echo '<td>'.$model->kecamatan->kabupaten->provinsi->nama.'</td>';
	}
	echo '</tr>';
	
	echo '<tr>';
	echo '<th scope="row">Kabupaten</th>';
	foreach ($modelarray as $model) {
		echo '<td>'.$model->kecamatan->kabupaten->nama.'</td>';
	}
	echo '</tr>';
	
	echo '<tr>';
	echo '<th scope="row">Kecamatan</th>';
	foreach ($modelarray as $model) {
		echo '<td>'.$model->kecamatan->nama.'</td>';
	}
	echo '</tr>';
	
	displayElement($modelarray, 'nama', false);
	
	compareFooter();
}

/**
 * Fungsi untuk menampilkan header fungsi perbandingan compareBiodata
 * @modelarray array berisi model yang akan dibandingkan
 * @kat string kategori perbandingan
 */
function biodataHeader($modelarray, $kat)
{
	$Form = new PotensiForm;
	echo "<h3 id='biodata' style='display:block; height:50px;'>".'BIODATA DESA'."</h3>"; 
	echo '<table class="table table-striped">
		  <thead>
		  <tr>
		  <th></th>';
	foreach ($modelarray as $model) {
		echo '<th scope="col">'.$model->nama.'</th>';
	}
	
	echo '</tr>
		  </thead>
		  <tbody>';
}

/**
 * Fungsi untuk menampilkan header table dari fung perbandingan
 * @modelarray array berisi model yang akan dibandingkan
 * @kat string kategori perbandingan
 */
function compareHeader($modelarray, $kat)
{
	$Form = new PotensiForm;
	echo "<h3 id='$kat' style='display:block; height:50px;'>".$Form->getAttributeLabel($kat)."</h3>"; 
	echo '<table class="table table-striped">
		  <thead>
		  <tr>
		  <th></th>';
	foreach ($modelarray as $model) {
		echo '<th scope="col" valign="center">'.$model->dESA->nama.'</th>';
	}
	
	echo '</tr>
		  </thead>
		  <tbody>';
}
	
/**
 * Fungsi untuk menampilkan footer table perbandingan
 */
function compareFooter()
{
	echo '</tbody>
		  </table>';
	echo '<a class="top" href="#top">Back to top &uarr;</a>';
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R3
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR3($modelarray) {
	compareHeader($modelarray, 'kat3');
		  
	displayElement($modelarray, 'R301', true);
	displayElement($modelarray, 'R302A');
	displayElement($modelarray, 'R304A', true);
	displayElement($modelarray, 'R305A', true);
	displayElement($modelarray, 'R305B', true);
	displayElement($modelarray, 'R305D', true);
	displayElement($modelarray, 'R305E1', true);
	displayElement($modelarray, 'R305E2A', true);
	displayElement($modelarray, 'R305E2B', true);
	displayElement($modelarray, 'R305E2C', true);
	displayElement($modelarray, 'R305E2D', true);
	displayElement($modelarray, 'R305E2E', true);
	displayElement($modelarray, 'R305E3', true);
	displayElement($modelarray, 'R306A', true);
	displayElement($modelarray, 'R306B', true);
	
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R4
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR4($modelarray) {
	compareHeader($modelarray, 'kat4');
		  
	displayElement($modelarray, 'R401A');
	displayElement($modelarray, 'R401B');
	displayElement($modelarray, 'R401C');
	displayElement($modelarray, 'R401D');
	displayElement($modelarray, 'R401E');
	displayElement($modelarray, 'R403A', true);
	displayElement($modelarray, 'R403B', true);
	
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R5
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR5($modelarray) {
	compareHeader($modelarray, 'kat5');
		  
	displayElement($modelarray, 'R501A');
	displayElement($modelarray, 'R501B');
	displayElement($modelarray, 'R504', true);
	displayElement($modelarray, 'R505A', true);
	displayElement($modelarray, 'R505B', true);
	displayElement($modelarray, 'R506AK2', true);
	displayElement($modelarray, 'R506B1K2', true);
	displayElement($modelarray, 'R506B2K2', true);
	displayElement($modelarray, 'R506B3K2', true);
	displayElement($modelarray, 'R506B4K2', true);
	displayElement($modelarray, 'R506B5K2', true);
	displayElement($modelarray, 'R506AK3', true);
	displayElement($modelarray, 'R506B1K3', true);
	displayElement($modelarray, 'R506B2K3', true);
	displayElement($modelarray, 'R506AK4', true);
	displayElement($modelarray, 'R506B1K4', true);
	displayElement($modelarray, 'R506B2K4', true);
	displayElement($modelarray, 'R506B3K3', true);
	displayElement($modelarray, 'R506B3K4', true);
	displayElement($modelarray, 'R506B4K3', true);
	displayElement($modelarray, 'R506B4K4', true);
	displayElement($modelarray, 'R506B5K4', true);
	displayElement($modelarray, 'R508A', true);
	displayElement($modelarray, 'R508B');
	displayElement($modelarray, 'R508C');
	displayElement($modelarray, 'R508D');
	displayElement($modelarray, 'R510A', true);
	displayElement($modelarray, 'R510B1');
	displayElement($modelarray, 'R510B2');
	displayElement($modelarray, 'R510B3');
	displayElement($modelarray, 'R511AK2', true);
	displayElement($modelarray, 'R511AK3', true);
	displayElement($modelarray, 'R511AK4', true);
	displayElement($modelarray, 'R511BK2', true);
	displayElement($modelarray, 'R511BK3', true);
	displayElement($modelarray, 'R511BK4', true);
	
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R6
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR6($modelarray) {
	compareHeader($modelarray, 'kat6');
		  
	displayElement($modelarray, 'R60101K2', true);
	displayElement($modelarray, 'R60101K3');
	displayElement($modelarray, 'R60101K4');
	displayElement($modelarray, 'R60101K5');
	displayElement($modelarray, 'R60102K2', true);
	displayElement($modelarray, 'R60102K3');
	displayElement($modelarray, 'R60102K4');
	displayElement($modelarray, 'R60102K5');
	displayElement($modelarray, 'R60103K2', true);
	displayElement($modelarray, 'R60103K3');
	displayElement($modelarray, 'R60103K4');
	displayElement($modelarray, 'R60103K5');
	displayElement($modelarray, 'R60104K2', true);
	displayElement($modelarray, 'R60104K3');
	displayElement($modelarray, 'R60104K4');
	displayElement($modelarray, 'R60104K5');
	displayElement($modelarray, 'R60105K2', true);
	displayElement($modelarray, 'R60105K3');
	displayElement($modelarray, 'R60105K4');
	displayElement($modelarray, 'R60105K5');
	displayElement($modelarray, 'R60106K2', true);
	displayElement($modelarray, 'R60106K3');
	displayElement($modelarray, 'R60106K4');
	displayElement($modelarray, 'R60106K5');
	displayElement($modelarray, 'R60107K2', true);
	displayElement($modelarray, 'R60107K3');
	displayElement($modelarray, 'R60107K4');
	displayElement($modelarray, 'R60107K5');
	displayElement($modelarray, 'R60108K2', true);
	displayElement($modelarray, 'R60108K3');
	displayElement($modelarray, 'R60108K4');
	displayElement($modelarray, 'R60108K5');
	displayElement($modelarray, 'R60109K2', true);
	displayElement($modelarray, 'R60109K3');
	displayElement($modelarray, 'R60109K4');
	displayElement($modelarray, 'R60109K5');
	displayElement($modelarray, 'R60110K2', true);
	displayElement($modelarray, 'R60110K3');
	displayElement($modelarray, 'R60110K4');
	displayElement($modelarray, 'R60110K5');
	displayElement($modelarray, 'R602A', true);
	displayElement($modelarray, 'R602B01K2', true);
	displayElement($modelarray, 'R602B01K3', true);
	displayElement($modelarray, 'R602B02K2', true);
	displayElement($modelarray, 'R602B02K3', true);
	displayElement($modelarray, 'R602B03K2', true);
	displayElement($modelarray, 'R602B03K3', true);
	displayElement($modelarray, 'R602B04K2', true);
	displayElement($modelarray, 'R602B04K3', true);
	displayElement($modelarray, 'R602B05K2', true);
	displayElement($modelarray, 'R602B05K3', true);
	displayElement($modelarray, 'R602B06K2', true);
	displayElement($modelarray, 'R602B06K3', true);
	displayElement($modelarray, 'R602B07K2', true);
	displayElement($modelarray, 'R602B07K3', true);
	displayElement($modelarray, 'R602B08K2', true);
	displayElement($modelarray, 'R602B08K3', true);
	displayElement($modelarray, 'R602B09K2', true);
	displayElement($modelarray, 'R602B09K3', true);
	displayElement($modelarray, 'R602B10K2', true);
	displayElement($modelarray, 'R602B10K3', true);
	displayElement($modelarray, 'R602B11K2', true);
	displayElement($modelarray, 'R602B11K3', true);
	displayElement($modelarray, 'R602B12K2', true);
	displayElement($modelarray, 'R602B12K3', true);
	displayElement($modelarray, 'R602B13K2', true);
	displayElement($modelarray, 'R602B13K3', true);
	displayElement($modelarray, 'R602BK4', true);	
	displayElement($modelarray, 'R603A1', true);
	displayElement($modelarray, 'R603A2', true);
	displayElement($modelarray, 'R603A3', true);
	displayElement($modelarray, 'R603A4', true);
	displayElement($modelarray, 'R603A5', true);
	displayElement($modelarray, 'R603B1', true);
	displayElement($modelarray, 'R603B2', true);
	displayElement($modelarray, 'R603B3', true);
	displayElement($modelarray, 'R603B4', true);
	displayElement($modelarray, 'R603B5', true);
	displayElement($modelarray, 'R603B6', true);
	displayElement($modelarray, 'R603B7', true);
	displayElement($modelarray, 'R603B8', true);
	displayElement($modelarray, 'R603B9', true);
	displayElement($modelarray, 'R603B10', true);
	displayElement($modelarray, 'R603B11', true);
	displayElement($modelarray, 'R603B12', true);
	displayElement($modelarray, 'R603B13', true);
				
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R7
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR7($modelarray) {
	compareHeader($modelarray, 'kat7');
		  
	displayElement($modelarray, 'R701AK2');
	displayElement($modelarray, 'R701AK3');
	displayElement($modelarray, 'R701AK4');
	displayElement($modelarray, 'R701BK2');
	displayElement($modelarray, 'R701BK3');
	displayElement($modelarray, 'R701BK4');
	displayElement($modelarray, 'R701CK2');
	displayElement($modelarray, 'R701CK3');
	displayElement($modelarray, 'R701CK4');
	displayElement($modelarray, 'R701DK2');
	displayElement($modelarray, 'R701DK3');
	displayElement($modelarray, 'R701DK4');
	displayElement($modelarray, 'R701EK2');
	displayElement($modelarray, 'R701EK3');
	displayElement($modelarray, 'R701EK4');
	displayElement($modelarray, 'R701FK2');
	displayElement($modelarray, 'R701FK3');
	displayElement($modelarray, 'R701GK2');
	displayElement($modelarray, 'R701GK3');
	displayElement($modelarray, 'R701HK3');
	displayElement($modelarray, 'R701IK3');
	displayElement($modelarray, 'R701JK3');
	displayElement($modelarray, 'R704AK2', true);
	displayElement($modelarray, 'R704AK3');
	displayElement($modelarray, 'R704AK4');
	displayElement($modelarray, 'R704AK5', true);
	displayElement($modelarray, 'R704BK2', true);
	displayElement($modelarray, 'R704BK3');
	displayElement($modelarray, 'R704BK4');
	displayElement($modelarray, 'R704BK5', true);
	displayElement($modelarray, 'R704CK2', true);
	displayElement($modelarray, 'R704CK3');
	displayElement($modelarray, 'R704CK4');
	displayElement($modelarray, 'R704CK5', true);
	displayElement($modelarray, 'R704DK2', true);
	displayElement($modelarray, 'R704DK3');
	displayElement($modelarray, 'R704DK4');
	displayElement($modelarray, 'R704DK5', true);
	displayElement($modelarray, 'R704EK2', true);
	displayElement($modelarray, 'R704EK3');
	displayElement($modelarray, 'R704EK4');
	displayElement($modelarray, 'R704EK5', true);
	displayElement($modelarray, 'R704FK2', true);
	displayElement($modelarray, 'R704FK3');
	displayElement($modelarray, 'R704FK4');
	displayElement($modelarray, 'R704FK5', true);
	displayElement($modelarray, 'R704GK2', true);
	displayElement($modelarray, 'R704GK3');
	displayElement($modelarray, 'R704GK4');
	displayElement($modelarray, 'R704GK5', true);
	displayElement($modelarray, 'R704HK2', true);
	displayElement($modelarray, 'R704HK3');
	displayElement($modelarray, 'R704HK4');
	displayElement($modelarray, 'R704HK5', true);
	displayElement($modelarray, 'R704IK2', true);
	displayElement($modelarray, 'R704IK3');
	displayElement($modelarray, 'R704IK4');
	displayElement($modelarray, 'R704IK5', true);
	displayElement($modelarray, 'R704JK2', true);
	displayElement($modelarray, 'R704JK3');
	displayElement($modelarray, 'R704KK2', true);
	displayElement($modelarray, 'R704KK3');
	displayElement($modelarray, 'R704KK4');
	displayElement($modelarray, 'R704KK5', true);
	displayElement($modelarray, 'R704LK2', true);
	displayElement($modelarray, 'R704LK4');
	displayElement($modelarray, 'R704LK5', true);
	displayElement($modelarray, 'R707A1');
	displayElement($modelarray, 'R707A2');
	displayElement($modelarray, 'R707B');
	displayElement($modelarray, 'R707C');
	displayElement($modelarray, 'R707D');
	displayElement($modelarray, 'R707E');
	displayElement($modelarray, 'R708AK2', true);
	displayElement($modelarray, 'R708AK3');
	displayElement($modelarray, 'R708AK4');
	displayElement($modelarray, 'R708BK2', true);
	displayElement($modelarray, 'R708BK3');
	displayElement($modelarray, 'R708BK4');
	displayElement($modelarray, 'R708CK2', true);
	displayElement($modelarray, 'R708CK3');
	displayElement($modelarray, 'R708CK4');
	displayElement($modelarray, 'R708DK2', true);
	displayElement($modelarray, 'R708DK3');
	displayElement($modelarray, 'R708DK4');
	displayElement($modelarray, 'R708EK2', true);
	displayElement($modelarray, 'R708EK3');
	displayElement($modelarray, 'R708EK4');
	displayElement($modelarray, 'R708FK2', true);
	displayElement($modelarray, 'R708FK3');
	displayElement($modelarray, 'R708FK4');
	displayElement($modelarray, 'R708GK2', true);
	displayElement($modelarray, 'R708GK3');
	displayElement($modelarray, 'R708GK4');
	displayElement($modelarray, 'R709');		
	displayElement($modelarray, 'R713A', true);
	displayElement($modelarray, 'R713B');
	displayElement($modelarray, 'R713C');
	displayElement($modelarray, 'R713D', true);
	displayElement($modelarray, 'R713E', true);
						
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R8
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR8($modelarray) {
	compareHeader($modelarray, 'kat8');
		  
	displayElement($modelarray, 'R803A');
	displayElement($modelarray, 'R803B');
	displayElement($modelarray, 'R803C');
	displayElement($modelarray, 'R803D');
	displayElement($modelarray, 'R803E');
	displayElement($modelarray, 'R803F');
	displayElement($modelarray, 'R803G');
	displayElement($modelarray, 'R803H');
	displayElement($modelarray, 'R805A');
	displayElement($modelarray, 'R805B');
	displayElement($modelarray, 'R805C');
	displayElement($modelarray, 'R805D');
	displayElement($modelarray, 'R805E');
	displayElement($modelarray, 'R805F');
	displayElement($modelarray, 'R805G');
	displayElement($modelarray, 'R805H');
	displayElement($modelarray, 'R805I');
				
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R9
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR9($modelarray) {
	compareHeader($modelarray, 'kat9');
		  
	displayElement($modelarray, 'R903AK2', true);
	displayElement($modelarray, 'R903BK2', true);
	displayElement($modelarray, 'R903CK2', true);
	displayElement($modelarray, 'R903DK2', true);
	displayElement($modelarray, 'R903EK2', true);
	displayElement($modelarray, 'R903FK2', true);
	
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R10
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR10($modelarray) {
	compareHeader($modelarray, 'kat10');
		  
	displayElement($modelarray, 'R1001B2', true);
	
	compareFooter();
}

/**
 * Fungsi untuk menampilkan table perbandingan Potensi R12
 * @modelarray array berisi model yang akan dibandingkan
 */
function compareR12($modelarray) {
	compareHeader($modelarray, 'kat12');
		  
	displayElement($modelarray, 'R1205A');
	displayElement($modelarray, 'R1205B');
	displayElement($modelarray, 'R1206');
	displayElement($modelarray, 'R1207');
	displayElement($modelarray, 'R1209');
	displayElement($modelarray, 'R1210');
	
	compareFooter();
}