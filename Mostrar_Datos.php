<html>
<head>
<TITLE>LIBROS.</TITLE>
</head>

<body>
<div align='center'>
 <table border='2' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='black'>
    <tr>
      <td width='150' style='font-weight: bold'>ID</td>
      <td width='150' style='font-weight: bold'>Autor</td>
      <td width='150' style='font-weight: bold'>Titulo</td>
      <td width='150' style='font-weight: bold'>Editorial</td>
      <td width='150' style='font-weight: bold'>Fecha edicion</td>
      
    </tr>
<?php
include('conexion.php');

   $query = "select * from l";
    $result = mysql_query($query);

    while ($contar = mysql_fetch_array($result)){
echo "	
    <tr>
      <td width='150'>".$contar['id']."</td>
      <td width='150'>".$contar['autor']."</td>
      <td width='150'>".$contar['titulo']."</td>
      <td width='150'>".$contar['editorial']."</td>
      <td width='150'>".$contar['fecha_edicion']."</td>
     

    </tr>";

}

?>

</div>
</body>

</html>
