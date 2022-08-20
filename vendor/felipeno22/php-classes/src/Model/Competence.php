<?php

namespace felipeno22\Model;
use \felipeno22\DB\Sql;
use \felipeno22\Model;

class Compentence extends Model{



public  function save(){
		
	$sql=new Sql();


		
	$insert="insert into competence(compentece,iduser,idconselho) values(:pcompetence, :piduser,
		:pidconselho )";
	 $sql->query($insert,array(":pcompetence"=>$this->getcompetence(),
			":piduser"=>$this->getiduser(),
			":pidconselho"=>$this->getconselhos()));

	}




public  function update(){


	$sql=new Sql();

	

	
		$update="update competence  set competence= :pcompetence, iduser= :piduser, idconselho= :pidconselho where idcompetence= :pidcompetence";
	 $sql->query($update,array(":pcompetence"=>$this->getcompetence(),
			":piduser"=>$this->getiduser(),
			":pidconselho"=>$this->getconselhos(),
			":pidcompetence"=>$this->getidcompetence()));

	

	}
	
	



public  function delete($getidcompetence){

	
	$sql=new Sql();

		$delete="delete from compentece  where  idcompetence= :pidcompetence ";
	 $sql->query($delete,array(":pidcompetence"=>$getidcompetence));
	
	

	}



//reponsavel por pegar os dados atraves do id do user
	public  function get($getidcompetence){

	$sql=new Sql();

$result=$sql->select('SELECT * FROM competence  where idcompetence= :pidcompetence',array(":pidcompetence"=>$getidcompetence));

	
	
	$this->setData($result[0]);

	
	}






	

public static function listAll(){

	$sql=new Sql();
	


	return $sql->select('SELECT idcompetence,competence,iduser,idconselho FROM competence   order by idcompetence');


}





public static function listAllByIdConselho($idconselho){

	$sql=new Sql();
	


return $sql->select('SELECT idcompetence,competence,iduser,idconselho FROM competence where idconselho= :pidconselho order by idcompetence  ',array(":pidconselho"=>$idconselho));


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
			
			

			$result= $sql->select("select sql_calc_found_rows idcompetence,compentece, iduser,idconselho from compentece ".$where." order by idcompetence limit ".$start.",".$itemsToPage." ");
			
		
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
		
			

			$result= $sql->select("select sql_calc_found_rows idcompetence ,compentece, iduser,idconselho from compentece    where ".$where." (compentece like :search )  order by idcompetence limit ".$start.",".$itemsToPage." ", ["search"=> "%".$search."%"] );
		
			$result2= $sql->select("select found_rows() as nrtotal");


	
			return ["data"=>$result,
					"totalItems"=> (int)$result2[0]['nrtotal'],
					"totalPages"=> ceil($result2[0]['nrtotal']/$itemsToPage)];


	}



}



?>