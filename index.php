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
    <link href="css/rodape.css" rel="stylesheet">
    
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
                    <li class="active">
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="servico.php">Serviços</a>
                    </li>
                    <li>
                        <a href="sobre.php">Sobre</a>
                    </li>
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#myyModal" class="glyphicon glyphicon-log-in"> Cadastre-se</a></li>
      <li><a href="#" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-log-in"> Login</a></li>
    </ul>
                
            </div>
        </div>
        
        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">

          <h4><b>Faça seu login:</b></h4>

          <center>
         
         
         
         <a href="index.php?id=1"> 
 
            <div id="dialog"> 
 

         </a>
         
         <table>
         

         
      <form  name="cadastro" action="index.php" method="POST">

          <tr>
            <td><label>Usuário:</label></td>
            <td><input type="text" name="usuario" id="usuario" placeholder="Digite o CPF"></td>
          </tr>
          
          <tr>
          <td><label>Senha:</label></td>
          <td><input type="password" name="senha" id="senha" placeholder="Digite a Senha"></td>
          </tr>
          
          </table>
          <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                            
                            </div>
                            </div>
                            </div>
                           
         <center>
          <button type="submit" value="Cadastrar">Logar</button>
         
         </center>

        </form>
        
   
 
       
        <?php

include_once "conexao.php";
//isset verifica se algum campo esta em branco
// ! --> e para dentro do if  
if(isset($_POST['usuario']) && isset($_POST['senha'])){
	
	$usuario = $_POST['usuario'];
	$senha =   $_POST['senha'];
	

	
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$usuario' AND SENHA = '$senha' ";
	$result = mysqli_query($con, $sql);
	 
	 if (mysqli_num_rows($result) > 0) {
		  
		  $dados = mysqli_fetch_assoc($result);
		  $nome =  $dados['NOME'];
		  $tipo =  $dados['TIPO'];
		  $codigo = $dados['ID'];
		  




		  //inicia a sessao 
		  session_start();
		  $_SESSION["nome"] = $nome;
		    $_SESSION["codigo"] = $codigo;
		
              	 
		  if($tipo== 1){

   //header leva para outra pagina que do adm; ADM.PHP E O NOME DA OUTRA PAGINA  
   //se n for ADM leva para a pagina do usuario  
           
			  header('Location:adm.php');
			  
			  }
		else{
			
			header('Location:usuario.php');
			
			}
		  
		 
	}
	
}


?>


</div>
</div>

 
        </center>

        </div>

        

      </div>
      
    </div>
  </div>
  
</div>

	<div class="modal fade" id="myyModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro</h4>
        </div>
        <div class="modal-body">
          <h4><b>Faça seu Cadastro:</b></h4>
		  
          <center>
        <table>
          <form action="#" method="POST" enctype="multipart/form-data" >

      		<tr>
              <td> <label>Nome:</label></td>
              <td><input type="text"  id="nome" name="nome" placeholder="Digite seu nome" size="30" maxlength="60" required></td>
             
    	   </tr>   
     		  <tr>                   
                <td><label >Cpf:</label></td>
         	     <td> <input type="text" id="cpf" name="cpf" placeholder="Digite seu cpf" size="30" maxlength="25" required></td>
     		  </tr>  
             
                   <tr>                
                     <td><label>Senha:</label></td>
                     <td><input type="password" id="senha" name="senha" placeholder="Digite uma senha" size="30" maxlength="10" required></td>
                   </tr> 
                   
                     
             </table>
        <?php     
           if(                 isset($_POST['nome']) && isset($_POST['cpf'])  && isset($_POST['senha'])                         ){
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$senha = $_POST['senha'];
		
		
		
		$sqlAluno = "INSERT INTO USUARIO(CPF, SENHA, NOME, TIPO) VALUES ($cpf, $senha, '$nome', 2)";
		mysqli_query($con, $sqlAluno);
		
		$codigo = "SELECT ID FROM USUARIO WHERE CPF = $cpf ";
		$cod = mysqli_query($con, $codigo);
		
		 $linha1= mysqli_fetch_assoc($cod);
		 
		
		$linha= mysqli_fetch_assoc($cod);
		
		$codigoaluno = $linha1['ID'];
		
		
	
		} 


?>  
             
             
             
             
             
  <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                            
                            </div>
                            </div>
                           
                            </div>
<center>
          <button type="submit" value="Cadastrar"  style="top:1000px">Cadastrar</button>
         <input name="limpar" type="reset" id="limpar" value="Limpar Campos" /> 
         </center>

 
       </form>
         
       </center>
    
        
    </nav>
    
      
  
    

    <div class="container">
        
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1>Sistema de Entrega de Gás</h1>
                <hr class="small">
            </div>
        </div>
        
        <section id="sliderhome">            <div id="meuSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#meuSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#meuSlider" data-slide-to="1"></li>
                    <li data-target="#meuSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="imgs/bo.jpg" alt="Slider 1" /></div>
                    <div class="item"><img src="imgs/bot.jpg" alt ="Slide 2" /></div>
                    <div class="item"><img src="imgs/gas.jpg" alt="Slide 3" /></div>
                </div>
                <a class="left carousel-control" href="#meuSlider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

        </section>
        

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    
    
               
               <center>
                  <div class="container">
                <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1>Localização</h1>
                <hr class="small">
            </div>
        </div>
               
              
    
     <section id="map" class="map">

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:500px;width:1150px;'><div id='gmap_canvas' style='height:500px;width:1150px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google map							</a></small></div><div><small><a href="http://www.proxysitereviews.com /categories/scrapebox-proxies/">scrapebox proxies</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-7.3820242,-38.77192630000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-7.3820242,-38.77192630000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Mauriti Gás</strong><br>Brasil,Mauriti,R.Multirão Seis,2-8<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>		<small>
        </small>
        </iframe>
    </section>
    </div>
  </center>  


      



</br>



 <div class="navbar navbar-inverse navbar-fixed">
  <div class="container">

    <div class="navbar-text pull-left">
           <span> © 2018 | Desenvolvido Por ABCI </span>  &nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="nav navbar-nav navbar-right">
            <a href="https:www.facebook.com.br"><img src="  icones/face.png  "  width='30' height='30' title="Facebook!"></a> &nbsp;
            <a href="https:twitter.com/login?lang=pt"><img src="  icones/twit.png  " align="center"width='30' height='30' title="Twitter!"> </a>
        </ul>
        
    </div>
  </div>
</div> 










</body>

</html>


