<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SEG</title>

    <link href="css/estilos.css" rel="stylesheet">
    
  

</head>

<body>

                   
                            
                            
                           
       <form action="usuario.php" method="POST" >


<?php


include_once 'conexao.php';
		$codigo = $_GET['id'];	
			
		$sql = "SELECT * FROM USUARIO WHERE ID = $codigo ";
		$resultado = mysqli_query($con, $sql);
		
		if($resultado){
			
			?>
			
			
    <table class="table table-striped table-bordered table-hover">
      <thead>
      <tr>
        <td align="center"><h2>ID</h2></td>
            <td align="center"><h2>CPF</h2></td>
            <td align="center"><h2>SENHA</h2></td>
            <td align="center"><h2>NOME</h2></td>
      </tr>
     </thead>
      <tbody>
                      
            
            <?php 
			
			while($row = mysqli_fetch_assoc($resultado)){
				?>
                
                 <tr>
			<td> <input readonly type="text" id="id" name="id" value="<?php echo $row['ID'];?>"/>    </td>
            <td> <input type="text" id="cpf" name="cpf" value="<?php echo $row['CPF'];?>"/>   </td>
            <td> <input type="text" id="senha" name="senha" value="<?php echo $row['SENHA'];?>"/>    </td>
            <td> <input type="text" id="nome" name="nome" value="<?php echo $row['NOME'];?>"/>   </td>
          
		
           
            <input type="submit" value="Alterar" style="position:absolute; left: 850px; top: 300px;"> </td>
         
		
        
		<?php  
		       
			}
		}
?>

    
</form>
</table>
    </tbody>



    

</body>

</html>
