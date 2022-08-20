<?php

namespace felipeno22\Model;
use \felipeno22\DB\Sql;
use \felipeno22\Model;

class Legislacao extends Model{


public  function save(){
		
	$sql=new Sql();


		
	$insert="insert into legislacao(legislacao,iduser,idconselho) values(:plegislacao, :piduser,
		:pidconselho )";
	 $sql->query($insert,array(":plegislacao"=>$this->getlegislacao(),
			":piduser"=>$this->getiduser(),
			":pidconselho"=>$this->getconselhos()));

	}




public  function update(){


	$sql=new Sql();

	

	
		$update="update legislacao  set legislacao= :plegislacao, iduser= :piduser, idconselho= :pidconselho where idlegislacao= :pidlegislacao";
	 $sql->query($update,array(":plegislacao"=>$this->getlegislacao(),
			":piduser"=>$this->getiduser(),
			":pidconselho"=>$this->getconselhos(),
			":pidlegislacao"=>$this->getidlegislacao()));

	

	}
	
	



public  function delete($idlegislacao){

	
	$sql=new Sql();

		$delete="delete from legislacao  where  idlegislacao= :pidlegislacao";
	 $sql->query($delete,array(":pidlegislacao"=>$idlegislacao));
	
	

	}



//reponsavel por pegar os dados atraves do id do user
	public  function get($idlegislacao){

	$sql=new Sql();

$result=$sql->select('SELECT * FROM legislacao  where idlegislacao= :pidlegislacao',array(":pidlegislacao"=>$idlegislacao));

	
	
	$this->setData($result[0]);

	
	}






	

public static function listAll(){

	$sql=new Sql();
	


	return $sql->select('SELECT idlegislacao,legislacao,iduser,idconselho FROM legislacao   order by idlegislacao');


}





public static function listAllByIdConselho($idconselho){

	$sql=new Sql();
	


return $sql->select('SELECT idlegislacao,legislacao,iduser,idconselho FROM legislacao where idconselho= :pidconselho order by idlegislacao  ',array(":pidconselho"=>$idconselho));


}


public function getValues()
	{

		$values = parent::getValues();

		return $values;

	}







		public  static function getPage($iduser,$page=1, $itemsToPage=10){

			$sql= new Sql();
			$start=($page-1)* $itemsToPage;
			$where='';
			if($iduser!=0){
				$where=' where iduser='.$iduser." ";		
			}
			
			

			$result= $sql->select("select sql_calc_found_rows idlegislacao,legislacao, iduser,idconselho from legislacao ".$where." order by idlegislacao limit ".$start.",".$itemsToPage." ");
			
		
			$result2= $sql->select("select found_rows() as nrtotal");


	
			return ["data"=>$result,
					"totalItems"=> (int)$result2[0]['nrtotal'],
					"totalPages"=> ceil($result2[0]['nrtotal']/$itemsToPage)];


									


	}


		public  static function getPageSearch($iduser,$search ,$page=1, $itemsToPage=10){

			$sql= new Sql();
			$start=($page-1)* $itemsToPage;
			$where='';
			if($iduser!=0){
				$where='  (iduser='.$iduser.")  and  ";		
			}
		
			

			$result= $sql->select("select sql_calc_found_rows idlegislacao,legislacao, iduser,idconselho from legislacao    where ".$where." (legislacao like :search )  order by idlegislacao limit ".$start.",".$itemsToPage." ", ["search"=> "%".$search."%"] );
		
			$result2= $sql->select("select found_rows() as nrtotal");


	
			return ["data"=>$result,
					"totalItems"=> (int)$result2[0]['nrtotal'],
					"totalPages"=> ceil($result2[0]['nrtotal']/$itemsToPage)];


									


	}



}





?>