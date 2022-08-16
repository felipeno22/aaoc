<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Informative;
use \felipeno22\Model\Conselho;



$app->get('/informatives', function() {

	User::verifyLogin();

	$u=User::getFromSession();

	$search= (isset($_GET['search'])) ? $_GET['search'] :'';
 	$page= (isset($_GET['page'])) ? (int)$_GET['page'] :1;

 	if($search != ''){

 			
 			$informatives=Informative:: getPageSearch(0,$search,$page);	
 			

 		}else{

 			//if($u->getinadmin()=='1'){
 			
 				$informatives=Informative:: getPage(0,$page);
 			/*}else{
 					
 				$informatives=Informative:: getPage($u->getiduser(),$page);
 			}*/

 		}

	
 			$pages=[];

for ($x=0; $x < $informatives['totalPages'] ; $x++) { 

	array_push($pages, ["href"=>"/informatives?".http_build_query(["page"=>$x+1,"search"=>$search]),
						"text"=>$x+1]);
}
 	

 	$pageAdmin= new PageAdmin(array('footer'=>false),'/views/admin/',$u->getdeslogin());

 	$pageAdmin->setTpl("informatives",array("informatives"=>$informatives['data'],
 								  "search"=>$search,
 									"pages"=>$pages));



});




$app->get('/informative/insert', function() {

	User::verifyLogin();
	$u=User::getFromSession();
	$conselhos=Conselho:: listAll();



	$pageAdmin= new PageAdmin(array('footer'=>false),'/views/admin/',$u->getdeslogin());

	
	
	
$pageAdmin->setTpl("insert_informative",["iduser"=>$_SESSION[User::SESSION]['iduser'],
"deslogin"=>$_SESSION[User::SESSION]['deslogin'],"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});



$app->post('/informative/insert', function() {

	User::verifyLogin();


try {
	
 $u=User::getFromSession();
	

				
 		



	$informative = new Informative();


 	
 	$informative->setData($_POST);

 	
	
	

	
	if($_FILES['imginformation']['name']!=''){
		$informative->save('C:/AAOC/res/img_informatives/');
		$informative->changePhoto($_FILES['imginformation']);
		
	}else{
		
		$informative->save('C:/AAOC/res/img/');	
	}



	User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}


 	header("Location: /informative/insert");
 	exit;


    
});




$app->get('/updateInfo/:idinformative',function($idinformative) {

	User::verifyLogin();
	$u=User::getFromSession();
	$informative = new Informative();
	$conselhos=Conselho:: listAll();

	$informative->get((int)$idinformative);//convertendo o id passado para int 
	

	$pageAdmin= new PageAdmin(array('footer'=>false),'/views/admin/',$u->getdeslogin());



	
	
$pageAdmin->setTpl("update_informative",["informative"=>$informative->getValues(),"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});




$app->post('/updateInfo/:idinformative',function($idinformative) {


User::verifyLogin();

try{

 $u=User::getFromSession();
	

			 		
 	



	$informative = new Informative();
	
	

	

	$informative->setData($_POST);

	if($_FILES['imginformation']['name']!=''){
		$informative->update('C:/AAOC/res/img_informatives/');
		$informative->changePhoto($_FILES['imginformation']);
		
	}else{
		$informative->update($_POST['imgInfo']);	
	}


	
User::setMsgError('deu certo');
	
		}catch(Exception $e){

		

			User::setMsgError($e->getMessage());

		

	}

 

header("Location: /updateInfo/".$informative->getidinformative());
 	exit;


    
});



$app->get("/informative/delete/:idinformative", function ($idinformative) {

 User::verifyLogin();


 $u=User::getFromSession();
	
	

 	



	$informative = new Informative();

	

	

	
	$informative->delete($idinformative);

 	header("Location: /informatives");
 	exit;




});










?>