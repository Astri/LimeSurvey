<?php
$this->pageTitle=Yii::app()->name . ' - Village Resources Comparation';
//Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/cdetailviewcustom-villageresourcescomparation.css');
?>
<div class="subnav well" style="position: fixed; right: 20px; top: 60px; width: 160px; z-index: 1030;">

	<ul class="nav nav-list">
	<li class="nav-header">Choose Item</li>
	<li class=""><a href="#biodata">Biodata Desa</a></li>
	<?php
	if ($kat3) {
		echo '<li class=""><a href="#kat3">III. Keterangan Umum Desa/Kelurahan</a></li>';
	}
	
	if ($kat4) {
		echo '<li class=""><a href="#kat4">IV. Kependudukan dan Ketenagakerjaan</a></li>';
	}
	
	if ($kat5) {
		echo '<li class=""><a href="#kat5">V. Perumahan dan Lingkungan Hidup</a></li>';
	}
	
	if ($kat6) {
		echo '<li class=""><a href="#kat6">VI. Bencana Alam dan Penanganan Bencana Alam</a></li>';
	}
	
	if ($kat7) {
		echo '<li class=""><a href="#kat7">VII. Pendidikan dan Kesehatan</a></li>';
	}
	
	if ($kat8) {
		echo '<li class=""><a href="#kat8">VIII. Sosial dan Budaya</a></li>';
	}
	
	if ($kat9) {
		echo '<li class=""><a href="#kat9">IX. Hiburan dan Olah Raga</a></li>';
	}
	
	if ($kat10) {
		echo '<li class=""><a href="#kat10">X. Angkutan, Komunikasi dan Informasi</a></li>';
	}
	
	if ($kat12) {
		echo '<li class=""><a href="#kat12">XII. Penggunaan Lahan</a></li>';
	}
	?>
</div>
<h1 align="center" id="top" style='display:block; height:50px;'>Village Resources Comparison</h1>
<hr />
<?php 
$this->compareBiodata($this->LoadModels('Desa',$desaids));	
?>

<?php 
	if ($kat3) {
		$this->compareR3($this->LoadModels('PotensiR3',$desaids));
	}
	
	if ($kat4) {
		$this->compareR4($this->LoadModels('PotensiR4',$desaids));
	}
	
	if ($kat5) {
		$this->compareR5($this->LoadModels('PotensiR5',$desaids));
	}
	
	if ($kat6) {
		$this->compareR6($this->LoadModels('PotensiR6',$desaids));
	}
	
	if ($kat7) {
		$this->compareR7($this->LoadModels('PotensiR7',$desaids));
	}
	
	if ($kat8) {
		$this->compareR8($this->LoadModels('PotensiR8',$desaids));
	}
	
	if ($kat9) {
		$this->compareR9($this->LoadModels('PotensiR9',$desaids));
	}
	
	if ($kat10) {
		$this->compareR10($this->LoadModels('PotensiR10',$desaids));
	}
	
	if ($kat12) {
		$this->compareR12($this->LoadModels('PotensiR12',$desaids));
	}

?>
<div align="center">
<?php 
	// Print Button
$this->widget('bootstrap.widgets.BootButton', array(
	'label'=>'Print Results',
	'icon'=>'print white',
	'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
	'size'=>'large', // '', 'large', 'small' or 'mini'
	'htmlOptions'=>array(
		'id'=>'btn-print',
		'onclick'=>'printpage()',		
	),
)); 
?>
</div>
<script type="text/javascript">
function printpage()
{
  window.print()
}

// Highliht navbar list
jQuery('body').attr('data-spy', 'scroll');
jQuery('body').attr('data-target', '.subnav');
jQuery('body').attr('data-offset', '50');
</script>