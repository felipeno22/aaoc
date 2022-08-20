<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="divformLegis">


<form id="idFormLegis" name="idFormLegis"  onsubmit="return insert_update_legis('update')" class="formLegis" action="/myupdateLegis/:idlegislacao" method="post" enctype="multipart/form-data">
	

	<fieldset>
		
		<legend>Alterar Legislação</legend>

		
  <?php if( $error!= ''  ){ ?>
  	<?php if( $error== 'deu certo'  ){ ?>
  			<div class="alert alert-success" role="alert">Legislacao alterada com sucesso!!!</div>
  	<?php }else{ ?>
  			<div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
  	<?php } ?>		
 <?php }else{ ?>
		 <div> </div>
 <?php } ?>	


			<input type="text" hidden  id="idlegislacao" name="idlegislacao"  value="<?php echo htmlspecialchars( $legislacao["idlegislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

			<label>Legislação</label>
			<input type="text" id="legislacao" name="legislacao"  value="<?php echo htmlspecialchars( $legislacao["legislacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>


		

		

			  <label>Conselho:</label>
			<select id="conselhos" name="conselhos">
	
				 <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
    		
    				<option value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"   <?php if( $value1["idconselho"] == $legislacao["idconselho"] ){ ?>selected<?php } ?> ><?php echo htmlspecialchars( $value1["name_conselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
    					
      			<?php } ?>

		    </select><br>


			

		
			<input type="text" hidden  id="iduser" name="iduser" value="<?php echo htmlspecialchars( $legislacao["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			


	</fieldset>


	<input id='btcadLegis' type="submit" value="Alterar">


</form>


<script>
        $(document).ready(function() {
            $('#conselhos').select2();
        });
    </script>