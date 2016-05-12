<?php
include ("conexion.php");
?>
<?php
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$editorial = $_POST['editorial'];
$fecha = $_POST['fecha'];

$consulta = "INSERT INTO l (autor,titulo,editorial,fecha_edicion)
    VALUES('$autor','$titulo','$editorial','$fecha')";

$resultado = mysql_query($consulta)or die ("Consulta fallida:".mysql_error());

//echo "<h2>Se ha agregado un libro</h2>";


 ?>
