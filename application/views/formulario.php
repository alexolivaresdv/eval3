<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/estilos.css">

</head>
<body>

<div id="bg">
  <div class="module">
    <ul>
      <li class="tab activeTab"><img src="https://i.imgur.com/Fk1Urva.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="https://i.imgur.com/ZsRgIDD.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="https://i.imgur.com/34Q50wo.png" alt="" class="icon"/></li>
      <li class="tab" ><img src="https://i.imgur.com/LCCJ06E.png" alt="" class="icon"/></li>
    </ul>

    <?php echo form_open("Welcome/validar")?>

    <form class="form">
      <input type="text" placeholder="primer nombre" class="textbox" name="nombre" />
      <input type="text" placeholder="Apellido" class="textbox" name="apellido1" />
      <input type="text" placeholder="Direccion de Email" class="textbox" name="correo" />
      <input type="submit" value="Next" class="button"  />
    </form>
  </div>
</div>

<a href="http://dribbble.com/shots/1265587-Registration-Template-PSD?list=everyone" target="_blank">Design by: Asif Aleem</a>

<?php echo form_close() ?>

</body>
</html>