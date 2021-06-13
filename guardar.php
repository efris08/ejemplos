<?php 
include "conexion.inc.php";

$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$edicion=$_GET["edicion"];
session_start();
echo "sesion ".$_SESSION["edicion"];
$s=$_SESSION["edicion"];
if(isset($_GET["Cancelar"]))
{
//header("Location: index.php");
}
if($s=="SI")
{
$sql="update alumno set nombre='".$nombre."',";
$sql.="paterno='$paterno' where ci='$ci'";
}
else
{
$sql="insert into alumno (ci,nombre,paterno)";
$sql.="values ('89','$nombre','$paterno')";	
}

mysqli_query($con,$sql);
 ?>
 <a href="index.php">RETORNAR</a>
