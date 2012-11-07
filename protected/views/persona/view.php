<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_persona,
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->id_persona)),
	array('label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_persona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>Persona #<?php echo $model->id_persona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_persona',
		'nombre',
		'apellido',
		'cedula',
		'sexo',
		'fecha_nacimiento',
		'foto',
		'id_ocupacion',
		'id_estado',
	),
)); ?>

<b><?php echo CHtml::encode($model->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($model->foto); ?><br />
	<img src="<?php echo Yii::app()->request->baseUrl.'/images/'.CHtml::encode($model->foto); ?>" >
	<br />




<?php 

$this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => array(
		'StaticTab 1' => 'Content for tab 1',
		'Observaciones' => array('content' => '<b>Instrucci&oacute;n:</b>Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.<br><br><b>Observaci&oacute;n:</b>Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.', 'id' => 'tab2'),
		// panel 3 contains the content rendered by a partial view
		//'AjaxTab' => array('ajax' => $this->createUrl('/AjaxModule/ajax/reqTest01')),
		'Crear Persona' => array('ajax' => $this->createUrl('/persona/create')),
		'Personas' => $this->renderPartial("/persona/create", array('model' => $model), $this),
		//'Render tab'=>$this->renderPartial('/persona/create',null,true),
		//'Contacto' => array('ajax' => $this->createUrl('/site/contact')),
		'Contacto' => array('ajax' => $this->createUrl('/site/contact')),
	),
	// additional javascript options for the tabs plugin
	'options' => array(
		'collapsible' => true,
	),
));


?>
