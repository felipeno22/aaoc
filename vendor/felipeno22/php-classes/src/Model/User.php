<?php

namespace felipeno22\Model;
use \felipeno22\DB\Sql;
use \felipeno22\Model;

class User extends Model{

		const SESSION = "User";
		const SESSION_ERROR_USER = "UserError";
		const SESSION_ERROR_USER_PASS = "UserPassError";


public static function getFromSession()
	{

		$user = new User();

		if (isset($_SESSION[User::SESSION]) && (int)$_SESSION[User::SESSION]['iduser'] > 0) {

			
			//se tiver idcusuario passa ele para bscar no banco pelo metodo get()
			$user->get((int)$_SESSION[User::SESSION]['iduser']);

		}

		return $user;

	}


//para salvar user usando procedure	
public  function save(){


	$sql=new Sql();


	$res =$sql->select("SELECT * FROM user u
		inner join person p on u.idperson=p.idperson  WHERE  u.deslogin = :deslogin or p.desemail = :desemail ", array(
					":deslogin"=>$this->getdeslogin(),":desemail"=>$this->getdesemail()
		));

		if (count($res) > 0) {

			//throw new \Exception("O login ".$this->getdeslogin()." e/ou email:".$this->getdesemail()." ja existem !!");
			//return "O login ".$this->getdeslogin()." e/ou email:".$this->getdesemail()." ja existem !!";
			return 0;

		}

		




	$u=$sql->select("call sp_users_save(
		:pdesperson, 
		:pdeslogin, 
		:pdespassword, 
		:pdesemail, 
		:pnrphone,
		:pstatus_user,
		:pinadmin)",array(":pdesperson"=>$this->getdesperson(),
			":pdeslogin"=>$this->getdeslogin(),
			":pdespassword"=>User::getPasswordHash($this->getdespassword()),
			//password_hash($this->getdespassword(), PASSWORD_DEFAULT,['cost'=>12]),
			//md5($this->getdespassword()),
			":pdesemail"=>$this->getdesemail(),
			":pnrphone"=>$this->getnrphone(),
			":pstatus_user"=>$this->getstatus_user(),
			":pinadmin"=>$this->getinadmin()));
	
	

	return $u[0]['iduser'];

	}




public  function update($perfil="admin"){

	if($perfil=="comum"){
		$this->setstatus_user('ativo');
		$this->setinadmin(0);

		}

	$sql=new Sql();
	
	$user_email_equal_bd='';
	$r=[];
	
	//echo "verificando se user e/ou email existe no banco <br>";
	$res =$sql->select("SELECT * FROM user u
		inner join person p  on u.idperson=p.idperson WHERE  (u.deslogin = :deslogin or p.desemail = :desemail)    ", array(
					":deslogin"=>$this->getdeslogin(),":desemail"=>$this->getdesemail()
		));

		if (count($res) > 0) {

			//echo "user e/ou email existe no banco <br>";

			//verificando  o login e email  que o usuario esta tentando alterar é  as informações que estão no cadastro dele.
			$r=$sql->select("SELECT * FROM user u inner join person p on u.idperson=p.idperson WHERE  (u.deslogin = :deslogin and p.desemail = :desemail) and (u.iduser= :iduser)   ", array(
					":deslogin"=>$this->getdeslogin(),":desemail"=>$this->getdesemail(),":iduser"=>$this->getiduser()));
			
			//echo "verificando se user e/ou email do user ".$this->getiduser()." existe no banco com os mesmos dados inseridos <br>";


			if (count($r) > 0) {

			
					//echo "user e/ou email do user ".$this->getiduser()." existe no banco com os mesmos dados inseridos <br>";
				//se os dados inseridos  login/email do user especifico for o mesmo deixa alterar
				$user_email_equal_bd="yes";
			

			
		
			
			}else{	

				//echo "user e/ou email do user ".$this->getiduser()." existe no banco mas pertence  a outro user <br>";
					//se os dados inseridos  login/email do user especifico for o mesmo mas sim de outro user nao deixa alterar	
				//throw new \Exception("O login ".$this->getdeslogin()." e/ou email:".$this->getdesemail()." ja existem !!");
			
				$user_email_equal_bd="no";
				
				
			}


			
		}else{
				$user_email_equal_bd="yes_user_email_new";
		}

if($user_email_equal_bd=='yes' || $user_email_equal_bd=="yes_user_email_new"){


$result=$sql->select("call sp_usersupdate_save(
		:piduser,
		:pdesperson, 
		:pdeslogin, 
		:pdesemail, 
		:pnrphone,
		:pstatus_user,
		:pinadmin)",array(":piduser"=>$this->getiduser(),
			":pdesperson"=>$this->getdesperson(),
			":pdeslogin"=>$this->getdeslogin(),
			//":pdespassword"=>User::getPasswordHash($this->getdespassword()),
			":pdesemail"=>$this->getdesemail(),
			":pnrphone"=>$this->getnrphone(),
			":pstatus_user"=>$this->getstatus_user(),
			":pinadmin"=>$this->getinadmin()));

	return $result[0]['iduser'];
	
	




}else{
	return 0;

}
	

	}
	
	


public  function delete($iduser){

	
	$sql=new Sql();

	$result=$sql->select("call sp_users_delete(
		:iduser)",array(":iduser"=>$iduser));
	
	

	}



//reponsavel por pegar os dados atraves do id do user
	public  function get($iduser){

	$sql=new Sql();

$result=$sql->select('SELECT * FROM user u inner join person p on p.idperson=u.idperson  where u.iduser= :iduser',array("iduser"=>$iduser));

	//$data['desperson'] = utf8_encode($data['desperson']);
	
	
	$this->setData($result[0]);

	
	}






	public  static function login($login,$password){

			$sql=new Sql();

			
	


		$results = $sql->select("SELECT * FROM user WHERE deslogin = :LOGIN   and (status_user=:status) ", array(
			":LOGIN"=>$login,"status"=>'ativo'
		));

		if (count($results) === 0) {
		//	throw new \Exception("Não foi possível fazer login.Obs: Usuário não cadastrado!!");
			//return "Não foi possível fazer login.Obs: Usuário não cadastrado!!";
			return "Não foi possível fazer login.Obs: Usuário ou Senha inválido!!";
		}

		$data = $results[0];

		/*echo $password."<br>";
		echo User::getPasswordHash($password)."<br>";
		echo $data["despassword"]."<br>";
		var_dump(password_verify($password, $data["despassword"]));
		exit;*/

		if (password_verify($password, $data["despassword"])) {
		//if($data['despassword']==$password){
		
				$user = new User();
			$user->setData($data);

			
			$_SESSION[User::SESSION] = $user->getValues();
			//return $user;
			return 'logado';

		} else {

			//throw new \Exception("Não foi possível fazer login.Obs: Senha não confere com a cadastrada!!");
			//return "Não foi possível fazer login.Obs: Senha não confere com a cadastrada!!";
			return "Não foi possível fazer login.Obs: Usuário ou Senha inválido!!";

		}


	}




public static function listAll(){

	$sql=new Sql();
	


return $sql->select('SELECT * FROM user u inner join person p on p.idperson=u.idperson  order by u.idperson;
 ');


}



public function getValues()
	{


		$values = parent::getValues();

		return $values;

	}



	public static function checkLogin(){		
				

		if (!isset($_SESSION[User::SESSION]) || !$_SESSION[User::SESSION] ||
			!(int)$_SESSION[User::SESSION]["iduser"] > 0 ) {
			
			
			//Não está logado
			return false;

		}else{


			//se estiver logado e a rota for da adminitração
			if ((bool)$_SESSION[User::SESSION]['inadmin'] === true) {

				return true;

				//se estiver  logado e a rota nao  for da adminitração
			} else if ((bool)$_SESSION[User::SESSION]['inadmin'] === false) {

				return true;

				//se estiver  deslogado e  rota for da administração
			} else {
				
		
				return false;

			}
		
			
		}

	}
	



public static function verifyLogin()
	{
			
		
		if (!User::checkLogin()) {

	
				header("Location: /admin/login");
			
		
			exit;

		}


	}
	
	


public static function logout()
	{
		
		$_SESSION[User::SESSION] = NULL;
		//self::limpa_cookie();
		

	}



	public static function getPasswordHash($password)
	{

		return password_hash($password, PASSWORD_DEFAULT, [
			'cost'=>12
		]);


}







		public  static function getPage($page=1, $itemsToPage=10){

			$sql= new Sql();
			$start=($page-1)* $itemsToPage;

			

			$result= $sql->select("select sql_calc_found_rows * from user u inner join person p 
				on p.idperson=u.idperson  order by u.idperson limit ".$start.",".$itemsToPage." ");
		
			$result2= $sql->select("select found_rows() as nrtotal");


	
			return ["data"=>$result,
					"totalItems"=> (int)$result2[0]['nrtotal'],
					"totalPages"=> ceil($result2[0]['nrtotal']/$itemsToPage)];


									


	}


		public  static function getPageSearch($search ,$page=1, $itemsToPage=10){

			$sql= new Sql();
			$start=($page-1)* $itemsToPage;

			

			$result= $sql->select("select sql_calc_found_rows * from user u inner join person p 
				on p.idperson=u.idperson   where p.desperson like :search 
				or p.desemail like :search or u.deslogin like :search order by u.idperson limit ".$start.",".$itemsToPage." ", ["search"=> "%".$search."%"] );
		
			$result2= $sql->select("select found_rows() as nrtotal");


	
			return ["data"=>$result,
					"totalItems"=> (int)$result2[0]['nrtotal'],
					"totalPages"=> ceil($result2[0]['nrtotal']/$itemsToPage)];


									


	}




public  function updatepassword($iduser,$password,$passwordConf){

	

			
		$sql=new Sql();
		$password=User::getPasswordHash($password);
	
	$updatepwd='update user set despassword= :password  where iduser= :iduser ';
	$data=[':password'=>$password,":iduser"=>$iduser];

	$result=$sql->query($updatepwd,$data);
	


	if($result==null){
			return $iduser;
	}else{

		return 0;
	}
	
		
}
	
	






public static function setMsgError($msg)
	{

		$_SESSION[User::SESSION_ERROR_USER] = $msg;

	}

	public static function getMsgError()
	{

		$msg = (isset($_SESSION[User::SESSION_ERROR_USER])) ? $_SESSION[User::SESSION_ERROR_USER] : "";

		User::clearMsgError();

		return $msg;

	}

	public static function clearMsgError()
	{

		$_SESSION[User::SESSION_ERROR_USER] = NULL;

	}




public static function setMsgPassError($msg)
	{

		$_SESSION[User::SESSION_ERROR_USER_PASS] = $msg;

	}

	public static function getMsgPassError()
	{

		$msg = (isset($_SESSION[User::SESSION_ERROR_USER_PASS])) ? $_SESSION[User::SESSION_ERROR_USER_PASS] : "";

		User::clearMsgPassError();

		return $msg;

	}

	public static function clearMsgPassError()
	{

		$_SESSION[User::SESSION_ERROR_USER_PASS] = NULL;

	}










	


}








?>