<?php

namespace felipeno22\Model;
use \felipeno22\DB\Sql;
use \felipeno22\Model;

class Conselho extends Model{

	public static function listAll(){

		$sql=new Sql();

		return $sql->select('SELECT * FROM conselhos  order by idconselho');
	}


	public static function listAllByIdUser($iduser){

		$sql=new Sql();

		return $sql->select("SELECT c.idconselho,c.name_conselho FROM users_conselhos uc
inner join conselhos c on c.idconselho=uc.idconselho where uc.iduser= :iduser  and  uc.remove_usercons is :remove_usercons
 order by c.idconselho ",array("iduser"=>$iduser,'remove_usercons'=>null));
	}



	//para salvar user usando procedure	
public  function save($iduser,$idcons){

	$sql=new Sql();

	$insert='insert into users_conselhos(iduser,idconselho)values(:iduser,:idconselho)';
	$params = array('iduser'=>$iduser,'idconselho'=>$idcons);
	$sql->query($insert,$params);
	
		

	
}


//para salvar user usando procedure	
public  function update($iduser){

	$sql=new Sql();

	$update='update users_conselhos set   remove_usercons= :remove_usercons where iduser= :iduser and remove_usercons is null  ';
	$params = array('remove_usercons'=>0,'iduser'=>$iduser);
	$sql->query($update,$params);
	
		

	
}




//reponsavel por pegar os dados atraves do id do user
	public  function getConselhos($iduser){

	$sql=new Sql();

$result=$sql->select('SELECT * FROM users_conselhos  where iduser= :iduser and remove_usercons is :remove_usercons ',array("iduser"=>$iduser,'remove_usercons'=>null));
$arr=[0=>0, 1=>0,2=>0,3=>0,4=>0,5=>0];




	//$data['desperson'] = utf8_encode($data['desperson']);
	
//	$this->setData($result[0]);

foreach ($result as $key => $row) {
		foreach ($row as $k => $value){
			if($k=='idconselho'){
				
					$arr[($value-1)]=(int)$value;
					

						
			}
			
		}
}

	
return $arr;
	
	}


public function getValues()
	{

	//	$this->checkPhoto();

		$values = parent::getValues();

		return $values;

	}







}