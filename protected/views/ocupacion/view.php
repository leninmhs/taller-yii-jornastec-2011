<?php
$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->id_ocupacion,
);

$this->menu=array(
	array('label'=>'List Ocupacion', 'url'=>array('index')),
	array('label'=>'Create Ocupacion', 'url'=>array('create')),
	array('label'=>'Update Ocupacion', 'url'=>array('update', 'id'=>$model->id_ocupacion)),
	array('label'=>'Delete Ocupacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ocupacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ocupacion', 'url'=>array('admin')),
);
?>

<h1>View Ocupacion #<?php echo $model->id_ocupacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ocupacion',
		'descripcion',
	),
)); ?>
