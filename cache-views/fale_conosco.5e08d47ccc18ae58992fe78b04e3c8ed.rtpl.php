<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="divPrincipal">
 <article>
<section id="faleConosco">
<h3>Fale Conosco</h3>

<form method="post" id="formContato" action="/"   >

<fieldset id="dados">
   	
   	<p><label for="nome" class="form-label"> Nome:</label>  <input type="text" class="form-control" name="nome" id="nome" size="45" maxlength="45" placeholder="Nome Completo" value="" /></p> 
   	<p> <label for="email" class="form-label">E-mail:</label> <input type="email" class="form-control" name="email" id="email" size="45" maxlength="45" placeholder="exemplo@gmail.com"  value=""/></p>
   		<p> <label for="telefone" class="form-label">Telefone:</label> <input type="text" class="form-control" name="telefone" id="telefone" size="30" maxlength="30" placeholder="(**)*****-****"  value=""/></p>
	<p> <label for="cidade" class="form-label">Cidade:</label> <input type="text" class="form-control" name="cidade" id="cidade" size="30" maxlength="30" placeholder="cidade/estado"  value=""/></p> 

	 <p><label for="msg"  class="form-label"> Mensagem:</label>
	 	
	 	<textarea name="msg" id="msg" cols="45" rows="5" placeholder="digite sua mensagem" class="form-control" value=""></textarea></p>
	 	<br>

	 	 <input id="btFaleConosco" type="submit"  value="Enviar" name="enviar" >

   </fieldset> 




</form>
</section>

</article>
</div>