<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div id="iddivformUser" class="divformUser">



<!--modal alterar senha-->
<div  id="containerModalSenha"   >
  <!-- conteúdo do modal aqui -->
  
  

 <div id="divtitlemodalSenha">
 		<h3>Alterar Senha:</h3>
 	

 </div>	
 
   
<div id="contentmodalSenha" >
  
			 		
<form id="idFormUserPass" name="idFormUserPass"  onsubmit="return update_password()" action="/updatepassword/<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST" >
	<input type="text" id="iduser" name="iduser" hidden value="<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"/>
			<label>Nova Senha:</label>
			<input class="inputsUser" type="text" id="despasswordnovo" name="despasswordnovo" required /><br>

			<label>Confirme Nova Senha:</label>
			<input  class="inputsUser"type="text" id="despasswordnovoconf" name="despasswordnovoconf" required /><br>

	
        <input type="submit" id="btConcluirSenha"   name="btConcluirSenha" value="CONCLUIR" />
        <input  type="button" id="btCancelarSenha"   name="btCancelarSenha" value="CANCELAR" onclick="close_modalSenha()" />
</form>     

</div>
</div>

<!--end modal alterar senha-->



 			
 



<form   id="idFormUser" name="idFormUser"  class='formUser'  onsubmit="return insert_update('update')"  action="/myuserupdate" method="post">



<!--modal conselhos-->
<div id="containerModalConselhos" >
  <!-- conteúdo do modal aqui -->
   		 
 <div id="divtitlemodal">
 		<h3>Selecione os conselhos:</h3>
 	
 </div>	

  
  <div class="contentmodalConselhos">
   


		<div class="line">

			 <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
    		
    	 			<?php if( $line < 3 ){ ?>
    	
    				<input type="checkbox"  name="cons[]"  value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  <?php if( $cons["$line"]==$value1["idconselho"] ){ ?>checked<?php } ?>>
      				<label for="<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></label>
       
      				<?php } ?>



    				<label label="<?php echo htmlspecialchars( $line++, ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden></label>
      		<?php } ?>


		</div>
	



		<div class="line">

			 <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
    		
    	 			<?php if( $line2 >= 3  ){ ?>
    	
    				<input type="checkbox"  name="cons[]"  value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  <?php if( $cons["$line2"]==$value1["idconselho"] ){ ?>checked<?php } ?>>
      				<label for="<?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></label>
       
      				<?php } ?>



    				<label label="<?php echo htmlspecialchars( $line2++, ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden></label>
      		<?php } ?>


		</div>
	
	
        <input type="button" id="btconselhos"  onclick="close_modalConselhos()" name="btconselhos" value="CONCLUIR" >


</div>
</div>

<!--end modal conselhos-->


	

	<fieldset>
		
		<legend>Meus Dados</legend>



	
  <?php if( $error!= ''  ){ ?>
  	<?php if( $error== 'deu certo'  ){ ?>
  			<div class="alert alert-success" role="alert">Usuário alterado com sucesso!!!</div>
  	<?php }else{ ?>
  			<div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
  	<?php } ?>		
 <?php }else{ ?>
		 <div> </div>
 <?php } ?>	
	

	<?php if( $errorPass!= ''  ){ ?>
  	<?php if( $errorPass== 'senha alterada'  ){ ?>
  			<div class="alert alert-success" role="alert">Senha alterada com sucesso!!!</div>
  	<?php }else{ ?>
  			<div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
  	<?php } ?>		
 <?php }else{ ?>
		 <div> </div>
 <?php } ?>	


			
			<input type="text" id="iduser" name="iduser" hidden value="<?php echo htmlspecialchars( $user["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>

			<label>Nome:</label>
			<input class="inputsUser" type="text" id="desperson" name="desperson" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required><br>


			<label>Login:</label>
			<input class="inputsUser" type="text" id="deslogin" name="deslogin" value="<?php echo htmlspecialchars( $user["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required><br>


		

			<label>Email:</label>
			<input class="inputsUser" type="email" id="desemail" name="desemail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required><br>

			<label>Telefone:</label>
				<input class="inputsUser"  type="tel" id="nrphone" name="nrphone" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"   maxlength="14" ><br>
<br>
		

<input id='btopenModal' onclick="open_modalConselhos()" type="button" value="Selecione os conselhos">

<input id='btopenModalSenha'  onclick="open_modalSenha()"  type="button" value="Alterar Senha">



<input id='btcadUser' type="submit" value="Alterar">



	</fieldset>


	



</form>
</div>

