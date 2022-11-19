<!DOCTYPE html>
<html>
<head>
	<title>Registrar restaurante</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>DATOS COMERCIALES</h1>
    	<input type="text" name="categoria" placeholder="especificar la calidad/categoria">
        <input type="text" name="concepto" placeholder="especificar el concepto">
    	<input type="text" name="ubicacion" placeholder="ubicacion">
        <input type="text" name="horario" placeholder="horario de atencion">
    
    <input type="submit" name="register">
    <li><a href="datos_personales.php?">nueva inscripcion</a></li>

    </form>
        <?php 
        include("registrarcomercial.php");
        ?>
</body>
</html>