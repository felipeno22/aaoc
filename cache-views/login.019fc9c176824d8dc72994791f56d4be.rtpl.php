<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<link href="/../../res/css/login.css" rel="stylesheet" id="bootstrap-css">

 <!-- Bootstrap -->
          <link href="../res/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


	
</head>
<body>
	
  
  <?php if( $error!= ''  ){ ?>
   <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
 <?php }else{ ?>
    
 <?php } ?>  


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
   <!-- <div class="fadeIn logo">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>-->

    <!-- Login Form -->
   	<h2 class="fadeIn first" >Administraçao</h2>
    <form  action="/admin/login" method="post">
      <input type="text" id="login" name="login" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" name="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="acessar">
    </form>


    


    <!-- Remind Passowrd -->
   <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

  </div>
</div>

  

  <script src="../res/js/scripts.js" ></script>    
     <script src="../res/js/babels.js" ></script> 
      <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../res/js/bootstrap.min.js"></script> 
</body>
</html>






