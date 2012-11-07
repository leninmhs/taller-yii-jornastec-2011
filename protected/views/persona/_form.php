<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' =>array('enctype'=>"multipart/form-data" )
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php /*echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); */
            echo $form->dropDownList($model,'sexo',array('M'=>'Masculino','F'=>'Femenino'), array('options' => array('2'=>array('selected'=>true))));
            ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php //echo $form->textField($model,'fecha_nacimiento'); 
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
'model'=>$model,
'attribute'=>'fecha_nacimiento',
'value'=>$model->fecha_nacimiento,
'language' => 'es',
'htmlOptions' => array('readonly'=>"readonly"),
'options'=>array(
'autoSize'=>true,
'defaultDate'=>$model->fecha_nacimiento,
'dateFormat'=>'dd-mm-yy',
'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
'buttonImageOnly'=>true,
'buttonText'=>'Fecha',
'selectOtherMonths'=>true,   
'showAnim'=>'slide',
'showButtonPanel'=>true,
'showOn'=>'button',
'showOtherMonths'=>true,
'changeMonth' => 'true',
'changeYear' => 'true',
//'minDate'=>'-50Y', //fecha minima
'maxDate'=> 'date("Y-m-d")',
//fecha maxima
),
)); ?>

<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php //echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->fileField($model,'foto',array('size'=>25)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ocupacion'); ?>
<?php echo $form->dropDownList($model, 'id_ocupacion', 
CHtml::listData(Ocupacion::model()->findAll(), 'id_ocupacion', 'descripcion'), array('prompt' => 'Seleccione Ocupación') ); ?>

		<?php echo $form->error($model,'id_ocupacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado'); ?>
<?php echo $form->dropDownList($model, 'id_estado', 
CHtml::listData(Estado::model()->findAll(), 'id_estado', 'descripcion'), array('prompt' => 'Seleccione Estado') ); ?>

		<?php echo $form->error($model,'id_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
