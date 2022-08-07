
<!-- EXCLUIR O ALUNO QUANDO E LISTADO NA PAGINA DO PROFESSOR -->





<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Excluir </title>
</head>
<body>


	<?php
	
	require_once 'conexao.php';
		$codigo = $_GET['id'];
		
	
		
		$sql1 = "SELECT * FROM USUARIO WHERE ID = '$codigo' ";
		$r = mysqli_query($con, $sql1);
		
		
		
	if(mysqli_num_rows($r) > 0){
	 $sql_deletar_aluno = "DELETE FROM USUARIO WHERE ID = $codigo ";
		
		mysqli_query($con, $sql_deletar_aluno);
		
		
		?>	
		
		<script>
		
			alert("Dados exluido com sucesso");         
			
		</script>
		
		<?php
		
		header('Location:index.php');
		
		
		
		
	}		
    ?>

</body>
</html>





