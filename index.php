 <?php 


//iniciando sessao
session_start();
require_once("vendor/autoload.php");


//use Hcode\DB\Sql;
use \Slim\Slim;


$app = new Slim();

$app->config('debug', true);


require_once("site.php");
//require_once("admin.php");


$app->run();//dps dde carregado os arquivos ele roda

 ?>