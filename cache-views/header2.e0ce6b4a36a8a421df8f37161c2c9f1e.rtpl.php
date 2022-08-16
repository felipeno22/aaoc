<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <title>ADMIN</title>
        <link rel="stylesheet" type="text/css" href="../res/css/style.css">
         <link rel="stylesheet" type="text/css" href="../res/css/users.css">
         <link rel="stylesheet" type="text/css" href="../res/css/informatives.css">
         <script src="../res/js/informatives.js" ></script>
           <script src="../res/js/users.js" ></script>   
        

       
        <meta charset="utf-8">
      </head>


<body>

<header class='headerResponsive'>
 

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


<div class="grid">

  <nav class="navigation">
      <ul class="navigation__list">
          <li class="navigation__item"><a href="/myuserupdate" class='navigation__link<?php if( $is_active==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>' >Meus Dados</a></li>

          <li class="navigation__item"><a href="/myinformative" class='navigation__link<?php if( $is_active==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>'>Meus contéudos</a></li>

            <li class="navigation__item"><a href="/logout" class='navigation__link' >Sair</a></li>
          
      </ul>


  </nav>

</div>
  

</header>
<!--header-->