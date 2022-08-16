<?php




use \felipeno22\PageAdmin;
use \felipeno22\Model\User;
use \felipeno22\Model\Informative;
use \felipeno22\Model\Conselho;


$app->get('/myinformative', function() {

	User::verifyLogin();

	$u=User::getFromSession();
	
	

	$search= (isset($_GET['search'])) ? $_GET['search'] :'';
 	$page= (isset($_GET['page'])) ? (int)$_GET['page'] :1;


 		if($search != ''){

 			$informatives=Informative:: getPageSearch($u->getiduser(),$search,$page);	
 		

 		}else{

 		
 				
 			$informatives=Informative:: getPage($u->getiduser(),$page);
 	

 		}

	
 			$pages=[];

for ($x=0; $x < $informatives['totalPages'] ; $x++) { 

	array_push($pages, ["href"=>"/myinformative?".http_build_query(["page"=>$x+1,"search"=>$search]),
						"text"=>$x+1]);
}
 	

 	$pageAdmin= new PageAdmin(array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());

 	$pageAdmin->setTpl("myinformative",array("informatives"=>$informatives['data'],
 								  "search"=>$search,
 									"pages"=>$pages));



});


$app->get('/myinformative/insert', function() {

	User::verifyLogin();
	$u=User::getFromSession();
	$conselhos=Conselho::listAllByIdUser($u->getiduser());

	$pageAdmin= new PageAdmin(array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());


	
	
$pageAdmin->setTpl("insert_myinformative",["iduser"=>$_SESSION[User::SESSION]['iduser'],
"deslogin"=>$_SESSION[User::SESSION]['deslogin'],"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});



$app->post('/myinformative/insert', function() {

	User::verifyLogin();


try{
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



 	header("Location: /myinformative/insert");
 	exit;


    
});




$app->get('/myupdateInfo/:idinformative',function($idinformative) {

	User::verifyLogin();
	$u=User::getFromSession();
	$informative = new Informative();
	$conselhos=Conselho::listAllByIdUser($u->getiduser());


	$informative->get((int)$idinformative);//convertendo o id passado para int 


	$pageAdmin= new PageAdmin(array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$u->getdeslogin());



	
	
$pageAdmin->setTpl("update_myinformative",["informative"=>$informative->getValues(),"conselhos"=>$conselhos,"error"=>User::getMsgError()]);
    
});




$app->post('/myupdateInfo/:idinformative',function($idinformative) {


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


 header("Location: /myupdateInfo/".$informative->getidinformative());
 	exit;


    
});



$app->get("/myinformative/delete/:idinformative", function ($idinformative) {

 User::verifyLogin();


 $u=User::getFromSession();
	

 						
 	



	$informative = new Informative();

	

	

	
	$informative->delete($idinformative);

 	header("Location: /myinformative");
 	exit;




});








?>