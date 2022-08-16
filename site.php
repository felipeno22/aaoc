<?php




use \felipeno22\Page;
use \felipeno22\PageAdmin;
use \felipeno22\Model\Informative;
use \felipeno22\Model\Conselho;



$app->get('/', function() {

	
	/*$page= new Page('0');

	
$page->setTpl("index");*/


	$page= new Page('0');
	$informative=Informative::listAllByIdConselho(1);


	

	
$page->setTpl("aaoc",["noticias"=>$informative]);
    
});




$app->get('/colegiados/aaoc', function() {

	
	$page= new Page('1');
	$informative=Informative::listAllByIdConselho(1);


	

	
$page->setTpl("aaoc",["noticias"=>$informative]);
    
});







$app->get('/colegiados/cmdca', function() {

	
	$page= new Page('1');

	$informative=Informative::listAllByIdConselho(2);

	
$page->setTpl("cmdca",["noticias"=>$informative]);
    
});






$app->get('/colegiados/cme', function() {

	
	$page= new Page('1');
	$informative=Informative::listAllByIdConselho(3);

	
$page->setTpl("cme",["noticias"=>$informative]);
    
});




$app->get('/colegiados/cms', function() {

	
	$page= new Page(1);
$informative=Informative::listAllByIdConselho(4);
	
$page->setTpl("cms",["noticias"=>$informative]);
    
});




$app->get('/colegiados/comad', function() {

	
	$page= new Page('1');

	$informative=Informative::listAllByIdConselho(5);
$page->setTpl("comad",["noticias"=>$informative]);
    
});




$app->get('/colegiados/cmi', function() {

	
	$page= new Page('1');
	$informative=Informative::listAllByIdConselho(6);

	
$page->setTpl("cmi",["noticias"=>$informative]);
    
});



$app->get('/colegiados', function() {

	
	$page= new Page('1');

	$conselhos=Conselho:: listAll();

	
$page->setTpl("colegiados",['conselhos'=>$conselhos,"line"=>0,"line2"=>0,'cons'=>[]]);
    
});



$app->get('/historia', function() {

	
	$page= new Page('0');

	
$page->setTpl("historia");
    
});




$app->get('/fale_conosco', function() {

	
	$page= new Page('2');

	
$page->setTpl("fale_conosco");
    
});



?>