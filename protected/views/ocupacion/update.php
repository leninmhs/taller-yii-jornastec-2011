<?php
$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->id_ocupacion=>array('view','id'=>$model->id_ocupacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ocupacion', 'url'=>array('index')),
	array('label'=>'Create Ocupacion', 'url'=>array('create')),
	array('label'=>'View Ocupacion', 'url'=>array('view', 'id'=>$model->id_ocupacion)),
	array('label'=>'Manage Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Update Ocupacion <?php echo $model->id_ocupacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>