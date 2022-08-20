 <?php 


//iniciando sessao
session_start();
require_once("vendor/autoload.php");


//use Hcode\DB\Sql;
use \Slim\Slim;


$app = new Slim();

$app->config('debug', true);


require_once("rotas/site.php");
require_once("rotas/admin.php");
require_once("rotas/user.php");
require_once("rotas/myuser.php");
require_once("rotas/informative.php");
require_once("rotas/myinformative.php");
require_once("rotas/legislacao.php");
require_once("rotas/mylegislacao.php");
require_once("rotas/competence.php");




$app->run();//dps dde carregado os arquivos ele roda

 ?>