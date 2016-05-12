<html>

<head>
<title>Actualizacion completada.</title>
<META name='robot' content='noindex, nofollow'>
</head>

<body>

<?php
// Actualizamos en funcion del id que recibimos

$id = $_POST['id'];

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$editorial = $_POST['editorial'];
$fecha = $_POST['fecha'];

include('conexion.php');

$sSQL="Update l Set autor='$autor',titulo='$titulo',editorial='$editorial',fecha_edicion='$fecha' where id='$id'";
mysql_query($sSQL);


echo "
<p>Los datos han sido actualizados con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>

<p><a href='javascript:history.go(-2)'>INICIO</a></p>
";
?>

</body>

</html>
