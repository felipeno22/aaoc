<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="divformInfo">


<form  id="idFormInfo" name="idFormInfo"  onsubmit="return insert_update_info('update')"  class="formInfo" action="/updateInfo/:idinformative" method="post" enctype="multipart/form-data">
		



	<fieldset>
		
		<legend>Alterar Informativo</legend>


  <?php if( $error!= ''  ){ ?>
  	<?php if( $error== 'deu certo'  ){ ?>
  			<div class="alert alert-success" role="alert">Informativo alterado com sucesso!!!</div>
  	<?php }else{ ?>
  			<div class="alert alert-danger" role="alert"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>
  	<?php } ?>		
 <?php }else{ ?>
		 <div> </div>
 <?php } ?>	
			

			<input type="text" hidden  id="idinformative" name="idinformative"  value="<?php echo htmlspecialchars( $informative["idinformative"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

			<label>Titulo:</label>
			<input type="text" id="title" name="title"  value="<?php echo htmlspecialchars( $informative["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required><br>


			<label>Informação:</label><br>
			<textarea id="information" name="information" maxlength="1400" required>
				
			</textarea><br>


			<label>Data Informativo:</label>
			 <input type="date" id="dtinformation" name="dtinformation" value="<?php echo htmlspecialchars( $informative["dtinformation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required><br>

			  <label>Conselho:</label>
			<select id="conselhos" name="conselhos">
						
				 <?php $counter1=-1;  if( isset($conselhos) && ( is_array($conselhos) || $conselhos instanceof Traversable ) && sizeof($conselhos) ) foreach( $conselhos as $key1 => $value1 ){ $counter1++; ?>
    		 
    				<option value="<?php echo htmlspecialchars( $value1["idconselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  <?php if( $value1["idconselho"] == $informative["idconselho"] ){ ?>selected<?php } ?> ><?php echo htmlspecialchars( $value1["name_conselho"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
    					
      			<?php } ?>

		    </select><br>


			 <label>Foto:</label>
			 <input type="file" id="imginformation" name="imginformation" accept="image/*" onchange="mostraImg()" ><br>
			 <img class="img-responsive" id="image-previewInfo"  name="image-previewInfo" src="<?php echo htmlspecialchars( $informative["imginformation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="image not found">

			<input type="text" hidden  id="imgInfo" name="imgInfo" value="<?php echo htmlspecialchars( $informative["imginformation"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			<input type="text" hidden  id="iduser" name="iduser" value="<?php echo htmlspecialchars( $informative["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
			


	</fieldset>


	<input id='btcadInfo' type="submit" value="Alterar">


</form>


<script>
        $(document).ready(function() {
            $('#conselhos').select2();
        });

        var campo = document.querySelector('textarea');
			campo.value = '<?php echo htmlspecialchars( $informative["information"], ENT_COMPAT, 'UTF-8', FALSE ); ?>';
    </script>