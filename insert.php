<?php
 $conn = mysqli_connect("localhost","root","","dpmapas") or die("Couldn't connect");
$pos = $_GET['pos'];
$nombre= $_GET['nombre'];
$latitud = $_GET['latitud'];
$longitud = $_GET['longitud'];
$clase = $_GET['clase'];
$ruta = $_GET['ruta'];
     $string = "INSERT INTO ubicaciones(Id,Nombre,Latitude,Longitude,Clase,Ruta) VALUES ('".$pos."','".$nombre."','".$latitud."','".$longitud."','".$clase."','".$ruta."');";
	echo $string;      
$query = mysqli_query($conn,$string);

    	
?>