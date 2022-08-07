<?php 

$servidor = "localhost";
$user = "root";
$password = "";

$banco = "nacionalgas";//nome do banco 
$con = mysqli_connect($servidor,$user,$password);
$sql = mysqli_select_db($con,$banco);
 



?>