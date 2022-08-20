<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="divformLegis">

<form   id="idFormLegis" name="idFormLegis"  onsubmit="return insert_update_legis('insert')" class="formLegis" action="/competence/insert" method="post" enctype="multipart/form-data">
	

	<fieldset>
		
		<legend>Cadastrar Competência</legend>



	
  <?php if( $error!= ''  ){ ?>
  	<?php if( $error== 'deu certo'  ){ ?>
  			<div class="alert alert-success" role="alert">Competência cadastrada com sucesso!!!</div>
  	<?php }else{ ?>
  			<div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
  	<?php } ?>		
 <?php }else{ ?>
		 <div> </div>
 <?php } ?>	
		

 		

			<label>Competência:</label>
			<input  type="text" id="competence" name="competence" required><br>


			 <label>Conselho:</label>
			<select id="conselhos" name="conselhos">
					
				 <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
    		
    				<option value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["initials"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
    					
      			<?php } ?>

		    </select><br>


			
			<input type="text" hidden id="iduser" name="iduser" value="<?php echo htmlspecialchars( $iduser, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			


	</fieldset>


	<input id='btcadLegis' type="submit" value="Salvar">


</form>






</div>		



<script>
        $(document).ready(function() {
            $('#conselhos').select2();
        });
    </script>