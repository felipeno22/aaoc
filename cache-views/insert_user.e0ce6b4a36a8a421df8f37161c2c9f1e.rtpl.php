<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div id="iddivformUser" class="divformUser">




<form id="idFormUser" name="idFormUser"  onsubmit="return insert_update('insert')"  class='formUser' action="/user/insert" method="post">
	

<!--esse modal de conselho deve ser sempre dentro do form para enviar os checkbox dos conselhos pra ser salvo-->
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
    	
    				<input type="checkbox"  name="cons[]"  value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  >
      				<label for="<?php echo htmlspecialchars( $value1["name_conselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["name_conselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?></label>
       
      				<?php } ?>



    				<label label="<?php echo htmlspecialchars( $line++, ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden></label>
      		<?php } ?>


		</div>


		<div class="line">

			 <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
    		
    	 			<?php if( $line2 >= 3  ){ ?>
    	
    				<input type="checkbox"  name="cons[]"  value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >
      				<label for="<?php echo htmlspecialchars( $value1["name_conselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["name_conselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?></label>
       
      				<?php } ?>



    				<label label="<?php echo htmlspecialchars( $line2++, ENT_COMPAT, 'UTF-8', FALSE ); ?>" hidden></label>
      		<?php } ?>


		</div>
	
	
   

      <input type="button" id="btconselhos"  onclick="close_modalConselhos()" name="btconselhos" value="CONCLUIR" >


</div>
</div>
<!--end modal conselhos-->







	<fieldset>
		
		<legend>Cadastrar Usuário</legend>
			


	
  <?php if( $error!= ''  ){ ?>
  	<?php if( $error== 'deu certo'  ){ ?>
  			<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!!!</div>
  	<?php }else{ ?>
  			<div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
  	<?php } ?>		
 <?php }else{ ?>
		 <div> </div>
 <?php } ?>	
	
  

  	

	
			<label>Nome:</label>
			<input type="text" id="desperson" name="desperson" required><br>


			<label>Login:</label>
			<input type="text" id="deslogin" name="deslogin" required><br>


			<label>Senha:</label>
			<input type="text" id="despassword" name="despassword" required><br>


			<label>Email:</label>
			<input type="email" id="desemail" name="desemail" required><br>

			<label>Telefone:</label>
			<input type="tel" id="nrphone" name="nrphone"     maxlength="14" ><br>
			
			<div>
				Administrador:
				<input type="radio" id="inadmin" name="inadmin"  value="1">
				<label for="inadmin">Sim</label>
				<input type="radio" id="inadmin" name="inadmin"   checked value="0">
				<label for="inadmin">Não</label>
		  </div>

		  <div>
				Status:
				<input type="radio" id="status_user" name="status_user" checked value="ativo">
				<label for="status">Ativo</label>
				<input type="radio" id="status_user" name="status_user" value="inativo">
				<label for="status">Inativo</label>
		  </div>






<input id='btopenModal' onclick="open_modalConselhos()" type="button" value="Selecione os conselhos">



<input id='btcadUser' type="submit" value="Salvar">


	</fieldset>



</form>




</div>


