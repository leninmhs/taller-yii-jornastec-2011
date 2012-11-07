<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
<?php 

$this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => array(
		'StaticTab 1' => 'Content for tab 1',
		'Observaciones' => array('content' => '<div class="observacion2"><div style="float: right"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/delete.png"  />  </div> 
	<div class="form-row">
        <label><b>Instrucci&oacute;n:</b>Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.</label>
        </div>
        <div class="form-row">
        <label><b>Observaci&oacute;n:</b>Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.</label>
        </div>
        <div class="form-row"><label><b>Creado por:</b> Lenin Hernandez - Confirmo asistencia.</label></div>
        <div class="form-row"><label><b>Ente Convocante:</b> OTIDO</label></div>
        <div class="form-row"><label><b>Fecha/Hora de Registro:</b> 31/10/2011 06:23 PM</label></div>
</div>', 'id' => 'tab2'),
		// panel 3 contains the content rendered by a partial view
		//'AjaxTab' => array('ajax' => $this->createUrl('/AjaxModule/ajax/reqTest01')),
		'Crear Persona' => array('ajax' => $this->createUrl('/persona/create')),
		//'Personas' => $this->renderPartial("/persona/create", array('model' => $model), $this),
		//'Render tab'=>$this->renderPartial('pages/contact',null,true),
		'Contacto' => array('ajax' => $this->createUrl('/site/contact')),
	),
	// additional javascript options for the tabs plugin
	'options' => array(
		'collapsible' => true,
	),
));


?>


<h1>OBSERVACIONES</h1>
<br/>
<div class="observacion" style="width: 100px;text-align: center; padding-top: 2px;padding-bottom: 2px;float: left;">Observación </div>
<div class="observacion2" style="width: 200px;text-align: center; padding-top: 2px;padding-bottom: 2px; float: left">Observación2 </div>
<div class="observacion3" style="width: 100px;text-align: center; padding-top: 2px;padding-bottom: 2px;float: left">Observación3 </div>
<div class="observacion4" style="width: 100px;text-align: center; padding-top: 2px;padding-bottom: 2px;float: left">Observación4 </div>
<br/><br/>



<div class="observacion2">
	<div style="float: right"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/delete.png"  />  </div> 
	<div class="form-row">
        <label><b>Instrucci&oacute;n:</b>Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.</label>
        </div>
        <div class="form-row">
        <label><b>Observaci&oacute;n:</b>Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.</label>
        </div>
        <div class="form-row"><label><b>Creado por:</b> Lenin Hernandez - Confirmo asistencia.</label></div>
        <div class="form-row"><label><b>Ente Convocante:</b> OTIDO</label></div>
        <div class="form-row"><label><b>Fecha/Hora de Registro:</b> 31/10/2011 06:23 PM</label></div>
</div>
<br>
<div class="observacion4">
	<div style="float: right"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/delete.png"  />  </div> 
	<div class="form-row">
        <label><b>Instrucci&oacute;n:</b>Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.Esta es la instrucción aqui texto puro infinito.</label>
        </div>
        <div class="form-row">
        <label><b>Observaci&oacute;n:</b>Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.Esta es la observacionnn aqui texto puro infinito.</label>
        </div>
        <div class="form-row"><label><b>Creado por:</b> Lenin Hernandez - Confirmo asistencia.</label></div>
        <div class="form-row"><label><b>Ente Convocante:</b> OTIDO</label></div>
        <div class="form-row"><label><b>Fecha/Hora de Registro:</b> 31/10/2011 06:23 PM</label></div>
</div>

<?php 

Yii::import('application.extensions.phpmailer.JPhpMailer'); 

$mail = new JPhpMailer; 
$mail->IsSMTP(); 
$mail->Host = 'smpt.gmail.com'; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = true; 
$mail->Username = 'leninmhs@gmail.com'; 
$mail->Port = '465'; 
$mail->Password = 'm4ld1t4s34'; 
$mail->SetFrom('lehernandez@gmail.com', 'lehernandez'); 
$mail->Subject = 'PHPMailer Test Subject via GMail, basic with authentication'; 
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
$mail->MsgHTML('JUST A TEST!'); 
$mail->AddAddress('lehernandez@mtc.gob.ve', 'Lenin Hernandez'); 
$mail->AddAddress('leninmhs@gmail.com', 'Leninmhs'); 
$mail->Send();


?>
