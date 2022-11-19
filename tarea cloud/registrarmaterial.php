<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['silla']) >= 1 && strlen($_POST['mesa']) >= 1 && strlen($_POST['parqueadero']) >= 1) {
	    $silla = trim($_POST['silla']);
	    $mesa = trim($_POST['mesa']);
	    $parqueadero = trim($_POST['parqueadero']);
	    $consulta = "INSERT INTO datosmateriales(sillas, mesas, parqueadero) VALUES ('$silla','$mesa','$parqueadero')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>