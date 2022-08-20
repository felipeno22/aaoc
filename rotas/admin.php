<?php




use \felipeno22\Page;
use \felipeno22\PageAdmin;
use \felipeno22\Model\User;



//rota para login

$app->get('/admin/login', function() {

	
	$pageAdmin= new PageAdmin("a",array('header'=>false,'footer'=>false));

	
$pageAdmin->setTpl("login",["error"=>User::getMsgError()]);
    
});



$app->post("/admin/login", function (){
	

try {

	$u=User::login($_POST['login'],$_POST['password']);

	if($u=='logado'){
			User::setMsgError('');
			header("Location: /admin/panel");
			exit;
		}else{
			User::setMsgError($u);
				header("Location: /admin/login");
				exit;
		}


			
} catch (Exception $e) {
			User::setMsgError($e->getMessage());
}		

	
		header("Location: /admin/login");
				exit;
		
		


});



$app->get("/admin/panel", function (){

	User::verifyLogin();

$user=User::getFromSession();



	if($user->getinadmin()=='1'){

		$pageAdmin= new PageAdmin("a",array('footer'=>false),'/views/admin/',$user->getdeslogin());		

	}else{
			$pageAdmin= new PageAdmin("a",array('header'=>false,'header2'=>true,'footer'=>false),'/views/admin/',$user->getdeslogin());					
	}

$pageAdmin->setTpl("panel");
		

});


$app->get('/logout', function() {

	
	User::logout();
	

	header("Location: /admin/login");
	exit;

});


?>