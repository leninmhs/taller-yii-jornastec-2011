<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('persona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_persona), array('view', 'id'=>$data->id_persona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?></br>
	<img src="<?php echo Yii::app()->request->baseUrl.'/images/'.CHtml::encode($data->foto); ?>" >
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado); ?>
	<br />

	*/ ?>

</div>

