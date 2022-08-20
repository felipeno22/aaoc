<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Legislacao;
use \felipeno22\Model\Conselho;


$app->get('/mylegislacao', function() {

	User::verifyLogin();

	$u=User::getFromSession();
	
	

	$search= (isset($_GET['search'])) ? $_GET['search'] :'';
 	$page= (isset($_GET['page'])) ? (int)$_GET['page'] :1;


 		if($search != ''){

 			$legislacoes=Legislacao:: getPageSearch($u->getiduser(),$search,$page);	
 		

 		}else{

 		
 				
 			$legislacoes=Legislacao:: getPage($u->getiduser(),$page);
 	

 		}

	
 			$pages=[];

for ($x=0; $x < $legislacoes['totalPages'] ; $x++) { 

	array_push($pages, ["href"=>"/mylegislacao?".http_build_query(["page"=>$x+1,"search"=>$search]),
						"text"=>$x+1]);
}
 	

 	$pageAdmin= new PageAdmin("cl",array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());

 	$pageAdmin->setTpl("mylegislacao",array("legislacoes"=>$legislacoes['data'],
 								  "search"=>$search,
 									"pages"=>$pages));



});


$app->get('/mylegislacao/insert', function() {

	User::verifyLogin();
	$u=User::getFromSession();
	$conselhos=Conselho::listAllByIdUser($u->getiduser());

	$pageAdmin= new PageAdmin("cl",array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());


	
	
$pageAdmin->setTpl("insert_mylegislacao",["iduser"=>$_SESSION[User::SESSION]['iduser'],
"deslogin"=>$_SESSION[User::SESSION]['deslogin'],"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});



$app->post('/mylegislacao/insert', function() {

	User::verifyLogin();


try{
 $u=User::getFromSession();
	

 		 		
 	



	$legislacao = new Legislacao();


 	
 	$legislacao->setData($_POST);


	
	

	
	
		
		$legislacao->save();	
	

	User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}



 	header("Location: /mylegislacao/insert");
 	exit;


    
});




$app->get('/myupdateLegis/:idlegislacao',function($idlegislacao) {

	User::verifyLogin();
	$u=User::getFromSession();
	$legislacao = new Legislacao();
	$conselhos=Conselho::listAllByIdUser($u->getiduser());


	$legislacao->get((int)$idlegislacao);//convertendo o id passado para int 


	$pageAdmin= new PageAdmin("cl",array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());



	
	
$pageAdmin->setTpl("update_mylegislacao",["legislacao"=>$legislacao->getValues(),"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});




$app->post('/myupdateLegis/:idlegislacao',function($idlegislacao) {


User::verifyLogin();


try{
 $u=User::getFromSession();
	
	

 	
 				 		
 		



	$legislacao = new Legislacao();
	
	

	

	$legislacao->setData($_POST);

		$legislacao->update();	
	

		
User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}


 header("Location: /myupdateLegis/".$legislacao->getidlegislacao());
 	exit;


    
});



$app->get("/mylegislacao/delete/:idlegislacao", function ($idlegislacao) {

 User::verifyLogin();


 $u=User::getFromSession();
	

 						

	$legislacao = new Legislacao();

	

	

	
	$legislacao->delete($idlegislacao);

 	header("Location: /mylegislacao");
 	exit;




});








?>