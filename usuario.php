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


   
    
   

    
    <script>
    
 function MudaLabeL(LabelID, value)
    {
        var Total = value * 60;   //valor de exemplo
     
            document.getElementById(LabelID).innerHTML = formatDinheiro(Total, "R$");
			

    }

    function formatDinheiro(n, currency) {
        return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
		
    }
    
    
    
    
    
    
    </script>
    
    
    
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/corpo.css">
    
    <script type="text/javascript" src="js/jquery.12.04.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/login.js"></script>

<script src="JAVA S/jquery.js"></script>
<script src="JAVA S/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="JAVA S/jquery-ui/jquery-ui.min.css" >
    


</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SEG</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="navbar-brand" >
				<?php
session_start();

if($_SESSION['nome']){
	echo " Bem Vindo " . $_SESSION['nome'];
	}else{
	
		header('Location:index.php');
		
		
	}
	


?> </a> 
            </li>
                   
                    
                </ul> 
                <ul class="nav navbar-nav navbar-right">
   
      <li><a href="usuario.php?id=1" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-log-in"> SAIR</a></li>
       <li><font color="#FFFFFF"> </br>    <div class="data" > <p id="d"> </p> </div> </font> </li>
      
      
      <?php

	
	if(isset($_GET['id']) == 1 ){
session_start();
session_destroy();
header('location:index.php');


}



?>

    </ul>
    

              
            </div>
        </div>
       
    
     <!-- vem id da pessoa logado -->
      
          <center>
            <a href="index.php?id=1"> 
 
            <div id="dialog"> 
 

         </a>       
</nav>


 <div class="container">
        
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1>Faça seu Pedido!</h1>
                <hr class="small">
            </div>
        </div>
        <center>
        
  
        
        
    <table>
          <form action="usuario.php" method="POST">

      		<tr>
              <td> <label>Nome:</label></td>
              <td><input type="text"  id="nome" name="nome" placeholder="Digite seu nome" size="30" maxlength="60" required></td>
             
    	   </tr>   
     		  <tr>                   
                <td><label >Bairro:</label></td>
         	     <td> <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro" size="30" maxlength="25" required></td>
     		  </tr>  
             
                   <tr>                
                     <td><label>Rua:</label></td>
                     <td><input type="text" id="rua" name="rua" placeholder="Digite sua rua" size="30" maxlength="10" required></td>
                   </tr> 
                   
                   
                 
                   <tr>                
                     <td><label>Quantidade:</label></td>
                     <td><input id="txt_qtd_1" type="number" onChange="MudaLabeL('compl_Preco_1',this.value)"  required max="5" min="1" value="1" id="quantidade" name="quantidade"></td>
                   </tr> 
                   
                   <!--  <tr>                
                     <td><label>DATA:</label></td>
                     <td><input id="data" type="text"  name="data"></td>
                   </tr> -->
                   
                    <tr>                
                     <td><label>Preço:</label></td>    <td><label id="compl_Preco_1"  class="negrito">R$ 60,00</label> </td>
                    
                   </tr> 
                   
                   <tr>                
                     <td></td> <td><input type="submit" value="PEDIR"></input></td>
                    
                   </tr> 
 
             </table> 
             
           <?php
		   include_once 'conexao.php';
if(                 isset($_POST['nome']) && isset($_POST['bairro'])  && isset($_POST['rua'])   && isset($_POST['quantidade'])                       ){
                  

$nome = $_POST['nome'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$quantidade = $_POST['quantidade'];
//$data = $_POST['data'];


//$da .= substr($data, 6, 4);
//$da .= "-";
//$da .= substr($data, 3, 2);
//$da .= "-";
//$da .= substr($data, 0, 2);





//$preco = $_POST['preco'];

//$precoAlterado .= substr($preco, 3);








$sql = "INSERT INTO COMPRA (`NOME`, `BAIRRO`, `RUA`, `QUANTIDADE` ) VALUES ('$nome', '$bairro', '$rua', '$quantidade');";	

	$s = mysqli_query($con, $sql);	
	if($s){
		echo "PEDIDO REALIZADO COM SUCESSO";
	}
}
 
?>
             
             
       
             
                

         </form>
      </center> 
      
      
 <div class="container">
        
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1>Alteração dos seus dados ou Excluir a sua Conta!</h1>
                <hr class="small">
            </div>
        </div> 
        
        
    <center>      
      
        
      
      <?php
require_once "conexao.php";







$sql = "SELECT ID,CPF,SENHA,NOME FROM USUARIO   ;";
$resultado = mysqli_query($con, $sql); 
		
		
if($resultado){
	?>
    
    
  
    
   
    
	 <div style="overflow: auto; width: 800px; height: 350px; border:solid 1px">
    <table class="table table-striped table-bordered table-hover">
      <thead>
      <tr>
        <td align="center"><h2>ID</h2></td>
            <td align="center"><h2>CPF</h2></td>
            <td align="center"><h2>SENHA</h2></td>
            <td align="center"><h2>NOME</h2></td>
            <td align="center"><h2>EDITAR</h2></td>
            <td align="center"><h2>EXCLUIR</h2></td>
      </tr>
      </thead>
      <tbody>
      

            
          
            <?php
   while($linha = mysqli_fetch_assoc($resultado)){
	     
	   ?>
        <tr>
        
            
        
         
            <td align="center"><font color="#000000"size="+2"><?php echo $linha['ID']; ?></font></td>
            <td align="center" ><font color="#000000" size="+2"><?php echo $linha['CPF'];?></font></td>
            <td align="center" ><font color="#000000" size="+2"><?php echo $linha['SENHA']; ?></font></td>
            <td align="center" ><font color="#000000" size="+2"><?php echo $linha['NOME']; ?></font></td>
            <td align="center"> <a href="AlterarAluno.php?id=<?php echo $linha['ID'];?>"> <img src="alterar.png"> </a>  </td>
            <td align="center"> <a href="ExcluirAluno.php?id=<?php echo $linha['ID'];?>"> <img src="lixeira.png"> </a>  </td>
          
     
 
</tr>
		<?php
		
  
  }?>
  </table>
    </tbody>
    </table>
  </div>
  
   
  </center>
  <?php
}

?>

 </center> 
 
 
  

</body>		
</html>
