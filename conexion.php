<?php
     $servidor="localhost";
     $usuario="root";
     $clave="";
     $base="libros";
     mysql_connect($servidor,$usuario,$clave);
     mysql_select_db($base);
     echo"conexion exitosa";
?>