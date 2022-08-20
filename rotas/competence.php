<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Competence;
use \felipeno22\Model\Conselho;



$app->get('/competences', function() {

	User::verifyLogin();

	$u=User::getFromSession();

	$search= (isset($_GET['search'])) ? $_GET['search'] :'';
 	$page= (isset($_GET['page'])) ? (int)$_GET['page'] :1;

 	if($search != ''){

 			
 			$competences= Competence:: getPageSearch(0,$search,$page);	
 			

 		}else{

 		
 			
 				$competences= Competence:: getPage(0,$page);
 			

 		}

	
 			$pages=[];

for ($x=0; $x < $competences['totalPages'] ; $x++) { 

	array_push($pages, ["href"=>"/competences?".http_build_query(["page"=>$x+1,"search"=>$search]),
						"text"=>$x+1]);
}
 	

 	$pageAdmin= new PageAdmin("acomp",array('footer'=>false),'/views/admin/',$u->getdeslogin());

 	$pageAdmin->setTpl("competences",array("competences"=>$competences['data'],
 								  "search"=>$search,
 									"pages"=>$pages));



});




$app->get('/competence/insert', function() {

	User::verifyLogin();
	$u=User::getFromSession();
	$conselhos=Conselho:: listAll();



	$pageAdmin= new PageAdmin("acomp",array('footer'=>false),'/views/admin/',$u->getdeslogin());

	
	
	
$pageAdmin->setTpl("insert_competence",["iduser"=>$_SESSION[User::SESSION]['iduser'],
"deslogin"=>$_SESSION[User::SESSION]['deslogin'],"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});



$app->post('/competence/insert', function() {

	User::verifyLogin();


try {
	
 $u=User::getFromSession();
	

				
 	
	$competence = new Competence();


 	
 	$competence->setData($_POST);

 	
	
	

	

		
		$competence->save();	




	User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}


 	header("Location: /competence/insert");
 	exit;


    
});




$app->get('/updateComp/:idcompetence',function($idcompetence) {

	User::verifyLogin();
	$u=User::getFromSession();
	$competence = new Competence();
	$conselhos=Conselho:: listAll();

	$competence->get((int)$idcompetence);//convertendo o id passado para int 
	

	$pageAdmin= new PageAdmin("acomp",array('footer'=>false),'/views/admin/',$u->getdeslogin());



	
	
$pageAdmin->setTpl("update_competence",["competence"=>$competence->getValues(),"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});




$app->post('/updateComp/:idcompetence',function($idcompetence) {


User::verifyLogin();

try{

 $u=User::getFromSession();
	

			 		
 	

$competence = new Competence();
	
	


	$competence->setData($_POST);

	

		$competence->update();	


	
User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}

 

header("Location: /updateComp/".$competence->getidcompetence());
 	exit;


    
});



$app->get("/competence/delete/:idcompetence", function ($idcompetence) {

 User::verifyLogin();


 $u=User::getFromSession();
	


	$competence = new Competence();


	
	$competence->delete($idcompetence);

 	header("Location: /competences");
 	exit;




});










?>