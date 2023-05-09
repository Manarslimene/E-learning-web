<?php
$user="root";
$mdp="";
$db="projetdv";
$server="localhost";


$link=mysqli_connect($server,$user,$mdp,$db);
if ($link)
{
	/*echo "conexion etablie";*/
}
else
{
	die (mysqli_connect_error());
}

?>