<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
*/

/**
* podes
*
* @package IncubatorSurvey
* @author  Rahmat Awaludin (rahmat.awaludin@gmail.com)
* @copyright 2012
* @version $Id: podes.php 
* @access public
*/
class Podes extends Survey_Common_Action
{
    /**
    * Initiates the survey action, checks for superadmin permission
    * Note: HTML and XLSX output use different method when getting field from database
	*       In HTML it use displayR method (to configure it you need to change 
	*       file _viewR3 - _viewR12. 
	*       While in XLSX its written inline, to change it you need to change line below
	*		To change it quickly, use search and replace method in Notepad++.
    * @access public
    * @param CController $controller
    * @param string $id
    * @return void
    */
    public function __construct($controller, $id)
    {
        parent::__construct($controller, $id);
    }
    
    /**
    * This function show form to select location for podes    
	* TODO: Add Permission
	*       Add link from admin page       
    */
    function index() 
    {
		// Load podes helper function
		Yii::app()->loadHelper('admin/podes');
		$output = false;
		
        /* if (!hasGlobalPermission('USER_RIGHT_CREATE_SURVEY'))
            $this->getController()->error('No permission'); */                      		
		$model=new PotensiForm;

		// uncomment the following code to enable ajax-based validation
		
		if(isset($_POST['ajax']) && $_POST['ajax']==='potensi-form-Index-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['PotensiForm']))
		{
			echo $model->outputtype;
            
			$model->attributes=$_POST['PotensiForm'];
			if($model->validate())
			{								
				$output = array(
					'id'=>$model->desaid,
					'kat3'=>$model->kat3,
					'kat4'=>$model->kat4,
					'kat5'=>$model->kat5,
					'kat6'=>$model->kat6,
					'kat7'=>$model->kat7,
					'kat8'=>$model->kat8,
					'kat9'=>$model->kat9,
					'kat10'=>$model->kat10,
					'kat12'=>$model->kat12,
					'outputtype'=>$model->outputtype,
				);
				
				

				if ($model->outputtype=='xlsx') {
					$potensiForm = new PotensiForm;
					$DesaExcel = loadModel('Desa',$output['id']);	
					
					// Because we are using PHPExcel all data must be reloaded first
					$dataDesa = array();
					array_push($dataDesa,
						$DesaExcel->kecamatan->kabupaten->provinsi->nama,
						$DesaExcel->kecamatan->kabupaten->nama,
						$DesaExcel->kecamatan->nama,
						$DesaExcel->nama
					);					
					$output['DesaExcel']=$DesaExcel;
					
					// Setup Data Model
					// Setup array containing list of potensi 
					$output['potensiR'] = PotensiField::getField(); 					
					foreach ($output['potensiR'] as $potensi) {
						$kat = 'kat'.$potensi;
						if ($model->$kat) {
							$output["DesaExcelKat$potensi"] = loadModel("PotensiR$potensi",$output['id']);									
							$output["DesaExcelKat$potensi"."Field"] = PotensiField::getKat($potensi);
							foreach ($output["DesaExcelKat$potensi"."Field"] as $field) {			
								if (ctype_lower(substr($field,0,1))) {								
									array_push($dataDesa,$output["DesaExcelKat$potensi"]->$field->nama);
								} else {
									// Convert first character back to Capital
									$field = ucfirst($field);
									array_push($dataDesa,$output["DesaExcelKat$potensi"]->$field);
								}
							}																	
						}
						$output["DesaExcelKat$potensi"."Header"] = $potensiForm->getAttributeLabel("kat$potensi");
					}
					
					
					
				}
			}
		}
		
		// Load Podes css and JS
		$this->getController()->_css_admin_includes(Yii::app()->getConfig('adminstyleurl')."podes.css");
        $this->getController()->_js_admin_includes(Yii::app()->getConfig('adminscripts') . 'podes.js');
		//$aData['display']['menu_bars']['browse'] = "Quick statistics";        
		
        $aData['model'] = $model;
		$aData['output'] = $output;
		
        $this->_renderWrappedTemplate('podes', 'index', $aData);
    }
	
	/**
	* Compare podes data from different village
	* TODO: Add Permission
	*       Add link from podes page
	*/
	function compare() {
		// Load podes helper function
		Yii::app()->loadHelper('admin/podes');
		$model = new CompareForm;
		$output = false;
		
		if(isset($_POST['ajax']) && $_POST['ajax']==='potensi-form-Index-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		if(isset($_POST['CompareForm']))
		{
			$model->attributes=$_POST['CompareForm'];
			
			if($model->validate())
			{
				$desaids = array();
			
				$desaid1 = $_POST['CompareForm']['desaid1'];
				if (array_key_exists('desaid2', $_POST['CompareForm']))
					$desaid2 = $_POST['CompareForm']['desaid2'];
				if (array_key_exists('desaid3', $_POST['CompareForm']))
					$desaid3 = $_POST['CompareForm']['desaid3'];
				
				if($desaid1) {
					foreach ($desaid1 as $id)
						if ($id)
							array_push($desaids, $id);
				}
				
				if(isset($desaid2) && $desaid2) {
					foreach ($desaid2 as $id)
						if ($id)
							array_push($desaids, $id);
				}
				
				if(isset($desaid3) && $desaid3) {
					foreach ($desaid3 as $id)
						if ($id)
							array_push($desaids, $id);
				}
				
				$output = array(
					'desaids'=>$desaids,
					'kat3'=>$model->kat3,
					'kat4'=>$model->kat4,
					'kat5'=>$model->kat5,
					'kat6'=>$model->kat6,
					'kat7'=>$model->kat7,
					'kat8'=>$model->kat8,
					'kat9'=>$model->kat9,
					'kat10'=>$model->kat10,
					'kat12'=>$model->kat12,	
					'outputtype'=>$model->outputtype,
				);
				
				if ($output['outputtype']=='xlsx') {
					$potensiForm = new PotensiForm;
					$output['DesaExcels'] = LoadModels('Desa',$output['desaids']);
					foreach ($output['DesaExcels'] as $DesaExcel) {
						// Because we are using PHPExcel all data must be reloaded first
						$dataDesa = array();
						array_push($dataDesa,
							$DesaExcel->kecamatan->kabupaten->provinsi->nama,
							$DesaExcel->kecamatan->kabupaten->nama,
							$DesaExcel->kecamatan->nama,
							$DesaExcel->nama
						);						
					}
					
					// Setup Data Model
					// Setup array containing list of potensi 
					$output['potensiR'] = PotensiField::getField(); 					
					foreach ($output['potensiR'] as $potensi) {
						$kat = 'kat'.$potensi;
						foreach ($output['desaids'] as $desaid) {
							$output["DesaExcel$desaid"] = $desaid;
							if ($model->$kat) {
									$output["DesaExcel$desaid"."Kat$potensi"] = loadModel("PotensiR$potensi",$desaid);
									$output["DesaExcel$desaid"."Kat$potensi"."Field"] = PotensiField::getKat($potensi);
									foreach ($output["DesaExcel$desaid"."Kat$potensi"."Field"] as $field) {		
										if (ctype_lower(substr($field,0,1))) {								
											array_push($dataDesa,$output["DesaExcel$desaid"."Kat$potensi"]->$field->nama);
										} else {
											// Convert first character back to Capital
											$field = ucfirst($field);
											array_push($dataDesa,$output["DesaExcel$desaid"."Kat$potensi"]->$field);
										}										
									}
							}						
						}
						$output["DesaExcelKat$potensi"."Header"] = $potensiForm->getAttributeLabel("kat$potensi");
					}
				}
			}
		}

		// Load Podes css and JS
		$this->getController()->_css_admin_includes(Yii::app()->getConfig('adminstyleurl')."podes.css");
        $this->getController()->_js_admin_includes(Yii::app()->getConfig('adminscripts') . 'podes.js');
		
		$aData['model'] = $model;
		$aData['output'] = $output;
		$this->_renderWrappedTemplate('podes', 'compare', $aData);
	}
	
	/**
    * This function show form to add podes data (provinsi, kabupaten, kecamatan, desa)
	* TODO: Add Permission
	*       Add link from admin page       
    */
    function add() 
    {		
		// Load podes helper function
		Yii::app()->loadHelper('admin/podes');
		$output = false;
		
		// Load Provinsi, Kabupaten, Kecamatan and Desa Dynamic Class
		$provinsi = new ProvinsiDynamic;
		$kabupaten = new KabupatenDynamic;
		$kecamatan = new KecamatanDynamic;
		$desa = new DesaDynamic;
		
		
		
		if (isset($_POST['ProvinsiDynamic'])) {
			$provinsi->attributes=$_POST['ProvinsiDynamic'];			
			
			if ($provinsi->validate()) {
				if ($provinsi->save()) { // Berhasil di save
					$namaProvinsi = $provinsi->nama;
					$successmessage = "<strong>Success!</strong> Provinsi $namaProvinsi berhasil di simpan!";
					$provinsi->unsetAttributes();
				}
			}			
		}
		
		if (isset($_POST['KabupatenDynamic'])) {
			$kabupaten->attributes=$_POST['KabupatenDynamic'];			
			
			if ($kabupaten->validate()) {
				if ($kabupaten->save()) { // Berhasil di save
					$namaKabupaten = $kabupaten->nama;
					$successmessage = "<strong>Success!</strong> Provinsi $namaKabupaten berhasil di simpan!";
					$kabupaten->unsetAttribute();
				}
			}			
		}
		
        /* if (!hasGlobalPermission('USER_RIGHT_CREATE_SURVEY'))
            $this->getController()->error('No permission'); */   
			
		// Load Podes css and JS
		$this->getController()->_css_admin_includes(Yii::app()->getConfig('adminstyleurl')."podes.css");
        $this->getController()->_js_admin_includes(Yii::app()->getConfig('adminscripts') . 'podes.js');
		
		if (isset($successmessage)) {
			$output['successmessage'] = $successmessage;
		}
		
		$output['provinsi']=$provinsi;
		$output['kabupaten']=$kabupaten;
		$output['kecamatan']=$kecamatan;
		$output['desa']=$desa;
		
		$aData['output'] = $output;
		
        $this->_renderWrappedTemplate('podes', 'add', $aData);
		
	}
	
    /**
    * Renders template(s) wrapped in header and footer
    *
    * @param string $sAction Current action, the folder to fetch views from
    * @param string|array $aViewUrls View url(s)
    * @param array $aData Data to be passed on. Optional.
    */
    protected function _renderWrappedTemplate($sAction = 'podes', $aViewUrls = array(), $aData = array())
    {
		
        //$this->getController()->_css_admin_includes(Yii::app()->getConfig('adminstyleurl')."superfish.css");
        $aData['display']['menu_bars'] = false;
        parent::_renderWrappedTemplate($sAction, $aViewUrls, $aData);
    }
}