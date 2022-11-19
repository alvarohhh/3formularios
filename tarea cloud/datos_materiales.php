<!DOCTYPE html>
<html>
<head>
	<title>Registrar restaurante</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>DATOS MATERIALES</h1>
    	<input type="text" name="silla" placeholder="cantidad de sillas">
        <input type="text" name="mesa" placeholder="cantidad de mesas">
    	<input type="text" name="parqueadero" placeholder="Con/Sin parqueadero">
    
    <input type="submit" name="register">
    <li><a href="datos_comerciales.php?">Siguiente</a></li>

    </form>
        <?php 
        include("registrarmaterial.php");
        ?>
</body>
</html>