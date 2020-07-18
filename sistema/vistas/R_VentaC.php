<?php
ob_start();
session_start();

$con = mysqli_connect('localhost','root','');

if(!$con)
{ 
	echo 'No conectado'; 
}

if(!mysqli_select_db($con,'dbsistema')) 
{ 
	echo 'Database no seleccionada' ;
}

$idusuario=$_SESSION["idusuario"];
$total_venta=$_POST["total_venta"];
$fecha_hora=$_POST["fecha_hora"];

$idarticulo=$_POST["idarticulo"];
$cantidad=$_POST["cantidad"];
$precio_venta=$_POST["precio_venta"];
$descuento=$_POST["descuento"];


	function ejecutarConsulta_retornarID($sql)
	{
		global $con;
		$query = $con->query($sql);		
		return $con->insert_id;			
	}




$sql="INSERT INTO venta (idcliente,idusuario,fecha_hora,total_venta,estado)
VALUES ('$idusuario','$idusuario','$fecha_hora','$total_venta','Aceptado')";

$idventanew=ejecutarConsulta_retornarID($sql);
$num_elementos=0;
$sw=true;

while ($num_elementos < count($idarticulo))
{
	$sql_detalle = "INSERT INTO detalle_venta(idventa, idarticulo,cantidad,precio_venta,descuento) VALUES ('$idventanew', '$idarticulo[$num_elementos]','$cantidad[$num_elementos]','$precio_venta[$num_elementos]','$descuento[$num_elementos]')";
if(!mysqli_query($con,$sql_detalle))
{
	echo 'No insertado';
}
	$num_elementos=$num_elementos + 1;
}
echo 'Productos Reservados';

echo "<br/><br/><a href=\"javascript:history.go(-1)\">Regresar</a>";
?>
