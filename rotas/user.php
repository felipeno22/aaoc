<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Conselho;



$app->get('/users', function() {

	User::verifyLogin();
	$u=User::getFromSession();

		$search= (isset($_GET['search'])) ? $_GET['search'] :'';
 	$page= (isset($_GET['page'])) ? (int)$_GET['page'] :1;


 		if($search != ''){

 		$users=User:: getPageSearch($search,$page);	

 		}else{


 		$users=User:: getPage($page);

 		}

	
 			$pages=[];

for ($x=0; $x < $users['totalPages'] ; $x++) { 

	array_push($pages, ["href"=>"users?".http_build_query(["page"=>$x+1,"search"=>$search]),
						"text"=>$x+1]);
}
 	

 	$pageAdmin= new PageAdmin("au",array('footer'=>false),'/views/admin/',$u->getdeslogin());

 	$pageAdmin->setTpl("users",array("users"=>$users['data'],
 								  "search"=>$search,
 									"pages"=>$pages));



	



    
});




$app->get('/user/insert', function() {

	User::verifyLogin();
	$user=User::getFromSession();
	//trazendo os conselhos para mostrar no form de cadastro
	$conselhos=Conselho:: listAll();
	
		

	
	$pageAdmin= new PageAdmin("au",array('footer'=>false),'/views/admin/',$user->getdeslogin());


$pageAdmin->setTpl("insert_user",['conselhos'=>$conselhos,"line"=>0,"line2"=>0,'cons'=>[],"error"=>User::getMsgError()]);
    
});



$app->post('/user/insert', function() {

	User::verifyLogin();

	
try {

	$user = new User();
	



 

 	if(!isset($_POST["inadmin"])){
 		$_POST["inadmin"]='0';

 	} 

 	if(!isset($_POST["status_user"])){
 		$_POST["status_user"]='inativo';

 	} 


 	$user->setData($_POST);

 	
 	
	
	$u=$user->save();

	


	

if($u!=0){//se o retorno nao for zero houve alteração entao pode alterar os conselhos tbm



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
    					$conselho = new Conselho();
    					$conselho->save($u,$cons[$i]);
			
    		}
    
        
	
	}
	
	



}

User::setMsgError('deu certo');

}else{


User::setMsgError('Usuário e/ou email ja existem !!!');


}

	
	
}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}

 	header("Location: /user/insert");
 	exit;


    
});




$app->get('/update/:iduser',function($iduser) {

	User::verifyLogin();
	$u=User::getFromSession();
	$user = new User();

	$conselhos=Conselho:: listAll();

	$user->get((int)$iduser);//convertendo o id passado para int 
	
	$conselho=new Conselho();
	$cons=$conselho->getConselhos((int)$iduser);


	
	$pageAdmin= new PageAdmin("au",array('footer'=>false),'/views/admin/',$u->getdeslogin());
	

	

	
$pageAdmin->setTpl("update_user",['conselhos'=>$conselhos,"line"=>0,"line2"=>0,"user"=>$user->getValues(),'cons'=>$cons,"error"=>User::getMsgError(),"errorPass"=>User::getMsgPassError()]);
    
});




$app->post('/update/:iduser',function($iduser) {


User::verifyLogin();

try{

	$user = new User();
	
	



	$user->setData($_POST);

	//var_dump($user);
	$u=$user->update();
	
	

	$conselho = new Conselho();
	$conselho->update($u);


if($u!=0){
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
    					
   					
    					$conselho->save($u,$cons[$i]);
			
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




 header("Location:/update/".$user->getiduser());
 	exit;


    
});



$app->get("/user/delete/:iduser", function ($iduser) {

 User::verifyLogin();


	$user = new User();

	

	

	
	$user->delete($iduser);

 	header("Location: /users");
 	exit;




});


$app->post("/updatepassword/:iduser", function($iduser){

	User::verifyLogin();


try{
	$user = new User();


	$id_user=$user->updatepassword($iduser,$_POST['despasswordnovo'],$_POST['despasswordnovoconf']);
	
	if($id_user!=0){

		User::setMsgPassError('senha alterada');

	}else{

		User::setMsgPassError('erro ao alterar senha!!');

	}



		
		}catch(Exception $e){

		

			User::setMsgPassError($e->getMessage());

		

	}


 
 header("Location:/update/".$id_user);
 	exit;




});


$app->post("/myupdatepassword/:iduser", function($iduser){

	User::verifyLogin();


try{
	$user = new User();


	$id_user=$user->updatepassword($iduser,$_POST['despasswordnovo'],$_POST['despasswordnovoconf']);
	
	if($id_user!=0){

		User::setMsgPassError('senha alterada');

	}else{

		User::setMsgPassError('erro ao alterar senha!!');

	}



		
		}catch(Exception $e){

		

			User::setMsgPassError($e->getMessage());

		

	}


 
 header("Location: /myuserupdate");
 	exit;






});




?>