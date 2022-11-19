<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['categoria']) >= 1 && strlen($_POST['concepto']) >= 1 && strlen($_POST['ubicacion']) >= 1 && strlen($_POST['horario']) >= 1) {
	    $categoria = trim($_POST['categoria']);
	    $concepto = trim($_POST['concepto']);
	    $ubicacion = trim($_POST['ubicacion']);
	    $horario = trim($_POST['horario']);
	    $consulta = "INSERT INTO datoscomerciales(categoria, concepto, ubicacion, horario) VALUES ('$categoria','$concepto','$ubicacion','horario')";
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