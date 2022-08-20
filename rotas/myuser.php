<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Conselho;









$app->get('/myuserupdate',function() {

	User::verifyLogin();
	$u=User::getFromSession();



	

	$user = new User();
	$user->get((int)$u->getiduser());//pegando dados do user 
	

	$conselho=new Conselho();
	$cons=$conselho->getConselhos((int)$u->getiduser());//pegando o(s) conselho(s) do user


	$conselhos=Conselho:: listAll();//trazendo todos os conselhos para  monter html


	$pageAdmin= new PageAdmin("cu",array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());

	

	
$pageAdmin->setTpl("myuserdata",['conselhos'=>$conselhos,"line"=>0,"line2"=>0,"user"=>$user->getValues(),'cons'=>$cons,"error"=>User::getMsgError(),"errorPass"=>User::getMsgPassError()]);

    
});




$app->post('/myuserupdate',function() {


User::verifyLogin();


try{

	$user = new User();
	


	$user->setData($_POST);

	
	$iduser=$user->update('comum');

	$conselho = new Conselho();
	$conselho->update($iduser);


if($iduser!=0){
//Declaramos a variável que vai receber o conteúdo da lista
$cons = null;


//Verificamos se o índice existe
if (isset($_POST['cons'])){
	
	
	//Atribuimos a variável todo conteúdo do índice
    $cons = $_POST['cons'];
   

	//Verificamos se a variável não é nula
	if ($cons !== null){
			//Percorremos todos os conteúdos do array
    		for ($i = 0; $i < count($cons); $i++){

    					//exibimos o valor atual na tela
    			    	//echo "<p>{$u} {$cons[$i]}</p>";
    			    
    			    	//$_POST["conselhos"][]=$cons[$i];
    					
   
    					$conselho->save($iduser,$cons[$i]);
			
    		}
    
        
	
	}



}

User::setMsgError('deu certo');
}else{

User::setMsgError('Usuário e/ou Senha ja existe !!');

}
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}



 header("Location: /myuserupdate");
 	exit;


    
});












?>