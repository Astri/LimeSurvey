<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'DESAID',
			'value'=>$model->dESA->nama,
		),
		array(
			'name'=>'R401A',
			'value'=>$model->R401A.' orang',
		),
		array(
			'name'=>'R401B',
			'value'=>$model->R401B.' orang',
		),
		array(
			'name'=>'R401C',
			'value'=>$model->R401C,
		),
		array(
			'name'=>'R401D',
			'value'=>$model->R401D,
		),
		array(
			'name'=>'R401E',
			'value'=>$model->R401E,
		),
		array(
			'name'=>'R403A',
			'value'=>$model->r403A->nama,
		),
		array(
			'name'=>'R403B',
			'value'=>$model->r403B->nama,
			'visible'=>($model->R403A==1),
		),
	),
)); ?> 