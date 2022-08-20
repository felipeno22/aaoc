<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Legislacao;
use \felipeno22\Model\Conselho;



$app->get('/legislacoes', function() {

	User::verifyLogin();

	$u=User::getFromSession();

	$search= (isset($_GET['search'])) ? $_GET['search'] :'';
 	$page= (isset($_GET['page'])) ? (int)$_GET['page'] :1;

 	if($search != ''){

 			
 			$legislacoes=Legislacao:: getPageSearch(0,$search,$page);	
 			

 		}else{

 			//if($u->getinadmin()=='1'){
 			
 				$legislacoes=Legislacao:: getPage(0,$page);
 			/*}else{
 					
 				$informatives=Informative:: getPage($u->getiduser(),$page);
 			}*/

 		}

	
 			$pages=[];

for ($x=0; $x < $legislacoes['totalPages'] ; $x++) { 

	array_push($pages, ["href"=>"/legislacoes?".http_build_query(["page"=>$x+1,"search"=>$search]),
						"text"=>$x+1]);
}
 	

 	$pageAdmin= new PageAdmin("al",array('footer'=>false),'/views/admin/',$u->getdeslogin());

 	$pageAdmin->setTpl("legislacoes",array("legislacoes"=>$legislacoes['data'],
 								  "search"=>$search,
 									"pages"=>$pages));



});




$app->get('/legislacao/insert', function() {

	User::verifyLogin();
	$u=User::getFromSession();
	$conselhos=Conselho:: listAll();



	$pageAdmin= new PageAdmin("al",array('footer'=>false),'/views/admin/',$u->getdeslogin());

	
	
	
$pageAdmin->setTpl("insert_legislacao",["iduser"=>$_SESSION[User::SESSION]['iduser'],
"deslogin"=>$_SESSION[User::SESSION]['deslogin'],"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});



$app->post('/legislacao/insert', function() {

	User::verifyLogin();


try {
	
 $u=User::getFromSession();
	

				
 	
	$legislacao = new Legislacao();


 	
 	$legislacao->setData($_POST);

 	
	
	

	

		
		$legislacao->save();	




	User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}


 	header("Location: /legislacao/insert");
 	exit;


    
});




$app->get('/updateLegis/:idlegislacao',function($idlegislacao) {

	User::verifyLogin();
	$u=User::getFromSession();
	$legislacao = new Legislacao();
	$conselhos=Conselho:: listAll();

	$legislacao->get((int)$idlegislacao);//convertendo o id passado para int 
	

	$pageAdmin= new PageAdmin("al",array('footer'=>false),'/views/admin/',$u->getdeslogin());



	
	
$pageAdmin->setTpl("update_legislacao",["legislacao"=>$legislacao->getValues(),"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});




$app->post('/updateLegis/:idlegislacao',function($idlegislacao) {


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

 

header("Location: /updateLegis/".$legislacao->getidlegislacao());
 	exit;


    
});



$app->get("/legislacao/delete/:idlegislacao", function ($idlegislacao) {

 User::verifyLogin();


 $u=User::getFromSession();
	
	

 	



	$legislacao = new Legislacao();

	

	

	
	$legislacao->delete($idlegislacao);

 	header("Location: /legislacoes");
 	exit;




});










?>