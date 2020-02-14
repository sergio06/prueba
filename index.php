<html>
<head>
<title>Prueba de Contenedor PHP 5.4</title>
<style>
body{
	background-color:#434343;
	color:#cdcdcd;
}
</style>
</head>
<body>
<center><h2>Version de PHP <?php echo phpversion(); ?></h2></center> 
<center><h2>Contenedor corriendo satisfactoriamente.</h2></center>


<?php
$link = mysql_connect('mysql', 'root', 'TM1q2w3e.');
if (!$link) {
	echo "<center><h2>No se encuentra el servidor de base de datos</h2></center>";
}
else
{
echo '<center><h2>Servidor de base de datos encontrado satisfactoriamente</h2></center>';
}
mysql_close($link);
?>


</body>
</html>
