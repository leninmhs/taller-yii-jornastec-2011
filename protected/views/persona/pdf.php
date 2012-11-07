<?php
$pdf = Yii::createComponent('application.extensions.MPDF52.mpdf');

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_persona,
);


$html = '
<link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />    
<table id="yw0" class="detail-view"><tbody><tr class="odd"><th>Id Persona</th><td>3</td></tr>
<tr class="even"><th>Nombre</th><td>'.$model->nombre.'</td></tr>
<tr class="odd"><th>Apellido</th><td>'.$model->apellido.'</td></tr>
<tr class="even"><th>Cedula</th><td>'.$model->cedula.'</td></tr>
<tr class="odd"><th>Sexo</th><td>'.$model->sexo.'</td></tr>
<tr class="even"><th>Fecha Nacimiento</th><td>'.$model->foto.'</td></tr>
<tr class="odd"><th>Foto</th><td>favicon.png</td></tr>
<tr class="even"><th>Id Ocupacion</th><td>1</td></tr>
<tr class="odd"><th>Id Estado</th><td>2</td></tr>
</tbody></table>'.$model->foto.'</b><br>';


$mpdf=new mPDF(); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
