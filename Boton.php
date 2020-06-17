<?php


$opcion=$_POST['operaciones'];

$Resultado="Su resultado es:";

if($opcion == 'administrador')
{
 header("location:Administrador.html");
}

else if($opcion == 'trabajador')
{
    header("location:Trabajador.php");
}  


?>