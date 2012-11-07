<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('persona-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $foto='<img src="$data->foto">'; ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'persona-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_persona',
		'nombre',
		'apellido',
		'cedula',
		'sexo',
		'fecha_nacimiento',
		
		'foto',
                array('name'=>'foto','sortable'=>'true',
                    'header'=>'Fotico', 'type'=>'image',
                    'value'=>'"images/" . $data->foto',
                    'htmlOptions'=>array('style'=>'text-align: center'),
                ),
            
		/*array('name'=>'id_ocupacion','sortable'=>'true','value'=>'$data->idOcupacion->descripcion'),  */
           /* array ('name'=>'id_estado','value'=>'$data->id_estado->descripcion','type'=>'text',),*/
                'id_ocupacion',
		'id_estado',

		array(
          'class'=>'CButtonColumn',
                  'template' => '{view} {update} {delete} {pdf}',
              'buttons'=>array(
                      'pdf' => array(
                              'label'=>'Generar PDF', 
                              'url'=>"CHtml::normalizeUrl(array('pdf', 'id'=> \$data->id_persona))",
                              'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf.png', 
                              'options' => array('class'=>'pdf'),
                      ),
              ),
      ),
	),
)); ?>
