<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <title>ADMIN</title>
        <link rel="stylesheet" type="text/css" href="../res/css/admin/header.css">
         <link rel="stylesheet" type="text/css" href="../res/css/admin/users.css">
         <link rel="stylesheet" type="text/css" href="../res/css/admin/informatives.css">
         <link rel="stylesheet" type="text/css" href="../res/css/admin/legislacoes.css">
         <script src="../res/js/informatives.js" ></script>
           <script src="../res/js/users.js" ></script>
             <script src="../res/js/legislacoes.js" ></script>     
          
        <!-- Bootstrap -->
          <link href="../res/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
            <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="../res/bootstrap/js/bootstrap.min.js"></script> 

       <!--para configurar o select de conselhos-->
     <link href="../res/select2/css/select2.min.css" rel="stylesheet" />
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
    <script src="../res/select2/js/select2.min.js"></script>



        <meta charset="utf-8">
      </head>


<body>

<header class='headerResponsive'>
 <div style="float: right;margin-top: 0px;">
              <label><small><?php echo htmlspecialchars( $deslogin, ENT_COMPAT, 'UTF-8', FALSE ); ?>  <?php echo htmlspecialchars( $date_today, ENT_COMPAT, 'UTF-8', FALSE ); ?></small></label>
        </div>


      <div class="menup" > 
<input type="checkbox" id="check2"/>
<label for="check2" id="icone2">MENU</label>
<div class="barra2">  
  <nav>

    <ul class="itensMenu">
      
      <li>
          <a   href="/myuserupdate" ><div class="link2">Meus dados</div></a>   

      </li>


      <li>
          <a   href="/myinformative" ><div class="link2">Meus contéudos</div></a>   

      </li>


       <li class="mostraColegiado" >
            <a   href="/" ><div class="link2">Meus contéudos</div></a> 
             <ul class="colegiados">
                <li><div ><a class="link3" href="/myinformative" >Noticías</a></div></li>
                <li><div ><a class="link3" href="/mylegislacao" >Legislações</a></div></li>
                
                
                
            </ul> 

        </li>


      <li>
          <a   href="/logout" ><div class="link2">Sair</div></a>   

      </li>




    </ul>
     
    
  </nav>  
</div>
</div>



</header>



<!--header-->
<header class="header sticky sticky--top js-header">
<div style="float: right;margin-top: 0px;">
              <label><small><?php echo htmlspecialchars( $deslogin, ENT_COMPAT, 'UTF-8', FALSE ); ?>  <?php echo htmlspecialchars( $date_today, ENT_COMPAT, 'UTF-8', FALSE ); ?></small></label>
        </div>

<div class="grid">

  <nav class="navigation">
      <ul class="navigation__list">
          <li class="navigation__item"><a href="/myuserupdate" class='navigation__link<?php if( $is_active==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>' >Meus Dados</a></li>

        <!--  <li class="navigation__item"><a href="/myinformative" class='navigation__link<?php if( $is_active==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>'>Meus contéudos</a></li>-->

           <li class="navigation__item">
                <div class="dropdown1">
                  <a href="" class='navigation__link<?php if( $is_active1==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active1, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>' >Meus contéudos</a>
                   <div class="dropdown-content1">
                     <div ><a href="/myinformative" >Notícias</a></div>

                      <div ><a href="/mylegislacao">Legislações</a></div>
                  </div>
                

                 
                </div>  
              </li>



            <li class="navigation__item"><a href="/logout" class='navigation__link' >Sair</a></li>
          
      </ul>


  </nav>

</div>
  

</header>
<!--header-->