<!-- recebe o alterar da pagina do professor -->

<!DOCTYPE html>
<html>
<head>
<title>Página</title>
<meta charset="utf-8">


</head>
<body>
    




<?php
include_once 'conexao.php';

$id = $_POST['ID'];
$cpf = $_POST['CPF'];
$senha = $_POST['SENHA'];
$nome = $_POST['NOME'];





$sql = "UPDATE USUARIO SET CPF = '$cpf', SENHA = '$senha', NOME = '$nome'  WHERE ID = $id";


$res = mysqli_query($con, $sql);

if($res){
echo "ATUALIZAÇÃO COMPLETA";
     header('Location:usuario.php');
}else{
	echo "Não ATUALIZADO";}
	header('Location:usuario.php');
	


?>



	

</body>
</html>