<html>

<head>
<title>Datos a actualizar.</title>
<META name='robot' content='noindex, nofollow'>
</head>

<?php
$id = $_POST['id'];

include('conexion.php');

    $query = "select * from l where id = '$id'";
    $result = mysql_query($query);

while ($registro = mysql_fetch_array($result)){

echo "
<body  >

<div align='center'>
    <table border='0' width='600' style='font-family: Verdana; font-size: 8pt' id='table1'>
        <tr>
            <td colspan='2'><h3 align='center'>Actualice los datos que considere</h3></td>
        </tr>
        <tr>
            <td colspan='2'>En los campos del formulario puede ver los valores actuales,
            si no se cambian los valores se mantienen iguales.</td>
        </tr>
        <form method='POST' action='Modificar.php'>
        <tr>
            <td width='50%'>&nbsp;</td>
            <td width='50%'>&nbsp;</td>
        </tr>
        <tr>
            <td width='50%'><p align='center'><b>Autor: </b></td>
            <td width='50%'><p align='center'><input type='text' name='autor' size='20' value='".$registro['autor']."'></td>
        </tr>
        <tr>
            <td width='50%'><p align='center'><b>Titulo:</b></td>
            <td width='50%'><p align='center'><input type='text' name='titulo' size='20' value='".$registro['titulo']."'></td>
        </tr>
        <tr>
          <td width='50%'><p align='center'><b>Editorial:</b></td>
          <td width='50%'><p align='center'><input type='text' name='editorial' size='20' value='".$registro['editorial']."'></td>
          </tr>
          <tr>
            <td width='50%'><p align='center'><b>Fecha edicion:</b></td>
            <td width='50%'><p align='center'><input type='text' name='fecha' size='20' value='".$registro['fecha_edicion']."'></td>
            <td width='50%'>&nbsp;</td>
            <td width='50%'>&nbsp;</td>
        </tr>
        <input type='hidden' name='id' value='$id'>
        <tr>
            <td width='100%' colspan='2'>
            <p align='center'>
            <input type='submit' value='Modificar datos' name='B1'></td>
        </tr>
        </form>
    </table>
</div>
";
}

?>
</body>

</html>
