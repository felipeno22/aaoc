<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <title>ADMIN</title>
        <link rel="stylesheet" type="text/css" href="../res/css/style.css">
         <link rel="stylesheet" type="text/css" href="../res/css/users.css">
         <link rel="stylesheet" type="text/css" href="../res/css/informatives.css">
         <script src="../res/js/informatives.js" ></script>
           <script src="../res/js/users.js" ></script>   
            <script src="../res/js/xss.js" ></script>   
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
          <a   href="/users" ><div class="link2">Usuários</div></a>   

      </li>


      <li>
          <a   href="/informatives" ><div class="link2">Informativo Site</div></a>   

      </li>


      <li>
          <a   href="/logout" ><div class="link2">Sair</div></a>   

      </li>

      <!--<li class="mostraColegiado" >
          <a  href=""  ><div class="link2">Colegiados</div></a>    
          <ul class="colegiados">
              <li><div ><img  height="20px" width="20px" src="../res/img/logo_aaoc.jpeg" alt="image not found" ><a class="link3" href="/colegiados/aaoc" >AAOC</a></div></li>
              <li><div ><img  height="20px" width="20px" src="../res/img/logo_cmdca.jpg" alt="image not found" ><a class="link3" href="/colegiados/cmdca" >CMDCA</a></div></li>
              <li><div ><img  height="20px" width="20px" src="../res/img/logo_cmi.jpeg" alt="image not found" ><a class="link3" href="/colegiados/cmi" >CMI</a></div></li>
              <li><div ><img  height="20px" width="20px" src="../res/img/logo_comad.png" alt="image not found" ><a class="link3" href="/colegiados/comad" >COMAD</a></div></li>
              <li><div ><img  height="20px" width="20px" src="../res/img/logo_cms.png" alt="image not found" ><a class="link3" href="/colegiados/cms" >CMS</a></div></li>
              <li><div ><img  height="20px" width="20px" src="../res/img/fundopmcg.jpg" alt="image not found" ><a class="link3" href="/colegiados/cme" >CME</a></div></li>
              
              
          </ul>

      </li>-->




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
          <li class="navigation__item"><a href="/users" class='navigation__link<?php if( $is_active==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>' >Usuários</a></li>

          <li class="navigation__item"><a href="/informatives" class='navigation__link<?php if( $is_active==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>'>Informativo Site</a></li>

            <li class="navigation__item"><a href="/logout" class='navigation__link' >Sair</a></li>
           

          <!--<li class="navigation__item">
               <div class="dropdown">
                <a href="" class='navigation__link<?php if( $is_active1==null ){ ?><?php }else{ ?><?php echo htmlspecialchars( $is_active1, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?>' >Colegiados</a>
                <div class="dropdown-content">
                  <div ><img  height="20px" width="20px" src="../res/img/logo_aaoc.jpeg" alt="image not found" ><a href="/colegiados/aaoc" >AAOC</a></div>

                  <div ><img  height="20px" width="20px" src="../res/img/logo_cmdca.jpg" alt="image not found" ><a href="/colegiados/cmdca">CMDCA</a></div>

                  <div ><img  height="20px" width="20px" src="../res/img/logo_cmi.jpeg" alt="image not found" ><a href="/colegiados/cmi">CMI</a></div>

                  <div ><img  height="20px" width="20px" src="../res/img/logo_comad.png" alt="image not found" ><a href="/colegiados/comad">COMAD</a></div>

                  <div ><img  height="20px" width="20px" src="../res/img/logo_cms.png" alt="image not found" ><a href="/colegiados/cms">CMS</a></div>

                  <div ><img  height="20px" width="20px" src="../res/img/fundopmcg.jpg" alt="image not found" ><a href="/colegiados/cme">CME</a></div>
                </div>
              </div>
          </li>-->
      </ul>


  </nav>

</div>
  

</header>
<!--header-->