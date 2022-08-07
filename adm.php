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
	

?> 
  </a> 
   <?php

	
	if(isset($_GET['id']) == 1 ){
session_start();
session_destroy();
header('location:index.php');


}


?>
            </li>
                   
                    
                </ul> 
                <ul class="nav navbar-nav navbar-right">
   
      <li><a href="usuario.php?id=1" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-log-in"> SAIR</a></li>
      
      
      
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

           <center>     
  <?php
require_once "conexao.php";








$sql = "SELECT ID,NOME,BAIRRO,RUA,QUANTIDADE FROM COMPRA;";
$resultado = mysqli_query($con, $sql); 
		
if($resultado){
	?>
    
    
  
 
            
            <div class="container">
  <h1 class="page-header">Pedidos!</h1>
  <div class="table-responsive">

     <div style="overflow: auto; width: 800px; height: 500px; border:solid 1px">
    <table class="table table-striped table-bordered table-hover">
      <thead>
      <tr>
        <td align="center"><h2>NOME</h2></td>
            <td align="center"><h2>BAIRRO</h2></td>
            <td align="center"><h2>RUA</h2></td>
            <td align="center"><h2>QUANTIDADE</h2></td>
      </tr>
      </thead>
      <tbody>
       <?php
   while($linha = mysqli_fetch_assoc($resultado)){
	     
	   ?>
        <tr>
        
         
            <td align="center" bgcolor="#00CCFF"><font color="#000000"size="+2"><?php echo $linha['NOME']; ?></font></td>
            <td align="center" bgcolor="#00CCFF"><font color="#000000" size="+2"><?php echo $linha['BAIRRO'];?></font></td>
            <td align="center" bgcolor="#00CCFF" s><font color="#000000" size="+2"><?php echo $linha['RUA']; ?></font></td>
            <td align="center" bgcolor="#00CCFF"><font color="#000000" size="+2"><?php echo $linha['QUANTIDADE']; ?></font></td>
            

          
            
            

</tr>
		<?php
		
  
  }?>
  </table>
  
   
  </center>
  <?php
}

?>
      </tbody>
    </table>
  		</div>
	</div>
</div>   



     
            
         
 </center>   
        
</body>	
</html>
