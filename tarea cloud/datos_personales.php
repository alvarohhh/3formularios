<!DOCTYPE html>
<html>
<head>
	<title>Registrar restaurante</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>DATOS PERSONALES</h1>
    	<input type="text" name="name" placeholder="ingresar el nombre">
        <input type="text" name="apellido" placeholder="ingresar el apellido">
    	<input type="email" name="email" placeholder="Email">
    
    <input type="submit" name="register">
    <li><a href="datos_materiales.php?">Siguiente</a></li>
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>