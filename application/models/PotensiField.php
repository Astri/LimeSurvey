<?php
/**
 * PotensiField
 * Class ini berfungsi untuk melakukan setting field yang tampil pada output Excel
 * di controller podes/index
 *
 * @package IncubatorSurvey
 * @author  Rahmat Awaludin (rahmat.awaludin@gmail.com)
 * @copyright 2012
 * @version $Id: podes.php 
 * @access public
 */
class PotensiField {
	/**
	 * This function will return avaible field 
	 * Field yang berawalan huruf kecil menandakan akan tampil relasinya
	 * @param  number specify potensi number
	 * @return  array
	 */
	public static function getKat($number) {
		switch ($number) {
			case 3: 
				return array(
					'r301',
					'R302A',
					'r304A',
					'r305A',
					'r305B',
					'r305D',
					'r305E1',
					'r305E2A',
					'r305E2B',
					'r305E2C',
					'r305E2D',
					'r305E2E',
					'r305E3',
					'r306A',
					'r306B'
				);
				break;
			case 4: 
				return array(
					'R401A',
					'R401B',
					'R401C',
					'R401D',
					'R401E',
					'r403A',
					'r403B'
				);
				break;
			case 5: 
				return array(
					'R501A',
					'R501B',
					'r504',
					'r505A',
					'r505B',
					'r506AK2',
					'r506B1K2',
					'r506B2K2',
					'r506B3K2',
					'r506B4K2',
					'r506B5K2',
					'r506AK3',
					'r506B1K3',
					'r506B2K3',
					'r506AK4',
					'r506B1K4',
					'r506B2K4',
					'r506B3K3',
					'r506B3K4',
					'r506B4K3',
					'r506B4K4',
					'r506B5K4',
					'r508A',
					'R508B',
					'R508C',
					'R508D',
					'r510A',
					'R510B1',
					'R510B2',
					'R510B3',
					'r511AK2',
					'r511AK3',
					'r511AK4',
					'r511BK2',
					'r511BK3',
					'r511BK4',
					'R501A',
					'R501B',
					'r504',
					'r505A',
					'r505B',
					'r506AK2',
					'r506B1K2',
					'r506B2K2',
					'r506B3K2',
					'r506B4K2',
					'r506B5K2',
					'r506AK3',
					'r506B1K3',
					'r506B2K3',
					'r506AK4',
					'r506B1K4',
					'r506B2K4',
					'r506B3K3',
					'r506B3K4',
					'r506B4K3',
					'r506B4K4',
					'r506B5K4',
					'r508A',
					'R508B',
					'R508C',
					'R508D',
					'r510A',
					'R510B1',
					'R510B2',
					'R510B3',
					'r511AK2',
					'r511AK3',
					'r511AK4',
					'r511BK2',
					'r511BK3',
					'r511BK4'
				);
				break;
			case 6: 
				return array (
					'r60101K2',
					'R60101K3',
					'R60101K4',
					'R60101K5',
					'r60102K2',
					'R60102K3',
					'R60102K4',
					'R60102K5',
					'r60103K2',
					'R60103K3',
					'R60103K4',
					'R60103K5',
					'r60104K2',
					'R60104K3',
					'R60104K4',
					'R60104K5',
					'r60105K2',
					'R60105K3',
					'R60105K4',
					'R60105K5',
					'r60106K2',
					'R60106K3',
					'R60106K4',
					'R60106K5',
					'r60107K2',
					'R60107K3',
					'R60107K4',
					'R60107K5',
					'r60108K2',
					'R60108K3',
					'R60108K4',
					'R60108K5',
					'r60109K2',
					'R60109K3',
					'R60109K4',
					'R60109K5',
					'r60110K2',
					'R60110K3',
					'R60110K4',
					'R60110K5',
					'r602A',
					'r602B01K2',
					'r602B01K3',
					'r602B02K2',
					'r602B02K3',
					'r602B03K2',
					'r602B03K3',
					'r602B04K2',
					'r602B04K3',
					'r602B05K2',
					'r602B05K3',
					'r602B06K2',
					'r602B06K3',
					'r602B07K2',
					'r602B07K3',
					'r602B08K2',
					'r602B08K3',
					'r602B09K2',
					'r602B09K3',
					'r602B10K2',
					'r602B10K3',
					'r602B11K2',
					'r602B11K3',
					'r602B12K2',
					'r602B12K3',
					'r602B13K2',
					'r602B13K3',
					'r602BK4',	
					'r603A1',
					'r603A2',
					'r603A3',
					'r603A4',
					'r603A5',
					'r603B1',
					'r603B2',
					'r603B3',
					'r603B4',
					'r603B5',
					'r603B6',
					'r603B7',
					'r603B8',
					'r603B9',
					'r603B10',
					'r603B11',
					'r603B12',
					'r603B13',
				);
				break;
			case 7: 
				return array (
					'R701AK2',
					'R701AK3',
					'R701AK4',
					'R701BK2',
					'R701BK3',
					'R701BK4',
					'R701CK2',
					'R701CK3',
					'R701CK4',
					'R701DK2',
					'R701DK3',
					'R701DK4',
					'R701EK2',
					'R701EK3',
					'R701EK4',
					'R701FK2',
					'R701FK3',
					'R701GK2',
					'R701GK3',
					'R701HK3',
					'R701IK3',
					'R701JK3',
					'r704AK2',
					'R704AK3',
					'R704AK4',
					'r704AK5',
					'r704BK2',
					'R704BK3',
					'R704BK4',
					'r704BK5',
					'r704CK2',
					'R704CK3',
					'R704CK4',
					'r704CK5',
					'r704DK2',
					'R704DK3',
					'R704DK4',
					'r704DK5',
					'r704EK2',
					'R704EK3',
					'R704EK4',
					'r704EK5',
					'r704FK2',
					'R704FK3',
					'R704FK4',
					'r704FK5',
					'r704GK2',
					'R704GK3',
					'R704GK4',
					'r704GK5',
					'r704HK2',
					'R704HK3',
					'R704HK4',
					'r704HK5',
					'r704IK2',
					'R704IK3',
					'R704IK4',
					'r704IK5',
					'r704JK2',
					'R704JK3',
					'r704KK2',
					'R704KK3',
					'R704KK4',
					'r704KK5',
					'r704LK2',
					'R704LK4',
					'r704LK5',
					'R707A1',
					'R707A2',
					'R707B',
					'R707C',
					'R707D',
					'R707E',
					'r708AK2',
					'R708AK3',
					'R708AK4',
					'r708BK2',
					'R708BK3',
					'R708BK4',
					'r708CK2',
					'R708CK3',
					'R708CK4',
					'r708DK2',
					'R708DK3',
					'R708DK4',
					'r708EK2',
					'R708EK3',
					'R708EK4',
					'r708FK2',
					'R708FK3',
					'R708FK4',
					'r708GK2',
					'R708GK3',
					'R708GK4',
					'R709',		
					'r713A',
					'R713B',
					'R713C',
					'r713D',
					'r713E',
				);
				break;
			case 8: 
				return array (
					'R803A',
					'R803B',
					'R803C',
					'R803D',
					'R803E',
					'R803F',
					'R803G',
					'R803H',
					'R805A',
					'R805B',
					'R805C',
					'R805D',
					'R805E',
					'R805F',
					'R805G',
					'R805H',
					'R805I',
				);
				break;
			case 9: 
				return array (
					'r903AK2',
					'r903BK2',
					'r903CK2',
					'r903DK2',
					'r903EK2',
					'r903FK2',
				);
				break;
			case 10: 
				return array (
					'r1001B2',
				);
				break;
			case 12: 
				return array(
					'R1205A',
					'R1205B',
					'R1206',
					'R1207',
					'R1209',
					'R1210',
				);
				break;
		}				
	}
	/**
	 * This function will return all table name suffix which will
	 * be processed
	 * @return  array of potensi class suffix
	 */
	public static function getField() {
		return array(3,4,5,6,7,8,9,10,12);
	}
	
}
?>