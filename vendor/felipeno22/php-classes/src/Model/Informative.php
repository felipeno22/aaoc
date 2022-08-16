<?php

namespace felipeno22\Model;
use \felipeno22\DB\Sql;
use \felipeno22\Model;

class Informative extends Model{


public  function save($img){
		
	$sql=new Sql();


	$res=$sql->select("call sp_informatives_save(
		:ptitle, 
		:pinformation, 
		:pdtinformation,
		:pimginformation, 
		:piduser,:pidconselho)",array(":ptitle"=>$this->gettitle(),
			":pinformation"=>$this->getinformation(),
			":pdtinformation"=>$this->getdtinformation(),
			":pimginformation"=>$this->getimginformation(),
			":piduser"=>$this->getiduser(),
			":pidconselho"=>$this->getconselhos()));
		
		
	
		$this->setidinformative($res[0]['idinformative']);


if($img=='C:/AAOC/res/img_informatives/'){
			$img='/res/img_informatives/'.''.$this->getidinformative().".jpg";
		}else{
			$img='/res/img/fundopmcg.jpg';

		}


	$update="update informative set imginformation= :pimginformation  where idinformative= :pidinformative";
	 $sql->query($update,array(":pimginformation"=>$img ,":pidinformative"=>$this->getidinformative()));

	}




public  function update($img){


if($img=='C:/AAOC/res/img_informatives/'){
			$img='/res/img_informatives/'.''.$this->getidinformative().".jpg";
		}else{
			

		}

	

	$sql=new Sql();

	
	$result=$sql->select("call sp_informativesupdate_save(
		:pidinformative,
		:ptitle, 
		:pinformation, 
		:pdtinformation,
		:pimginformation, 
		:piduser,:pidconselho)",array(
			":pidinformative"=>$this->getidinformative(),
			":ptitle"=>$this->gettitle(),
			":pinformation"=>$this->getinformation(),
			":pdtinformation"=>$this->getdtinformation(),
			":pimginformation"=>$img,
			":piduser"=>$this->getiduser(),
			":pidconselho"=>$this->getconselhos()));

	

	

	}
	
	



public  function delete($idinformative){

	
	$sql=new Sql();

	$result=$sql->select("call sp_informatives_delete(
		:pidinformative)",array(":pidinformative"=>$idinformative));
	
	

	}



//reponsavel por pegar os dados atraves do id do user
	public  function get($idinformative){

	$sql=new Sql();

$result=$sql->select('SELECT * FROM informative  where idinformative= :idinformative',array("idinformative"=>$idinformative));

	
	
	$this->setData($result[0]);

	
	}






	

public static function listAll(){

	$sql=new Sql();
	


return $sql->select('SELECT idinformative,title,information,DATE_FORMAT(dtinformation, "%d/%m/%Y") as dtinformation,iduser,imginformation FROM informative   order by idinformative');


}





public static function listAllByIdConselho($idconselho){

	$sql=new Sql();
	


return $sql->select('SELECT idinformative,title,information,DATE_FORMAT(dtinformation, "%d/%m/%Y") as dtinformation,iduser,idconselho,imginformation FROM informative where idconselho= :idconselho order by idinformative  ',array(":idconselho"=>$idconselho));


}


public function getValues()
	{

		$values = parent::getValues();

		return $values;

	}





public function checkPhoto(){
	$caminho='';
//função para verificar se existe foto 

	//verifica se existe foto nesse caminho no caso a foto com nome do id  do produto
	if(file_exists($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'res'.DIRECTORY_SEPARATOR.'img_informatives'.DIRECTORY_SEPARATOR.$this->getidinformative().".jpg")){

		 $caminho="/res/img_informatives/".$this->getidinformative().".jpg";


	}else{

			 $caminho="/res/img/fundopmcg.jpg";

	}

		return $this->setdesphoto($caminho);



}	

public function changePhoto($file){
$image='';
	$extension=explode(".",$file['name']);
	$extension=end($extension);

	switch ($extension) {
		case 'jpg':
		case 'jpeg':
			
				$image=imagecreatefromjpeg($file['tmp_name']);
				

			break;
		case 'gif':
				$image=imagecreatefromgif($file['tmp_name']);
				


			break;
		case 'png':
			

				$image=imagecreatefrompng($file['tmp_name']);
				



			break;
	
	}


					$destinity=$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'res'.DIRECTORY_SEPARATOR.'img_informatives'.DIRECTORY_SEPARATOR.$this->getidinformative().".jpg";
					imagejpeg($image,$destinity);
					imagedestroy($image);
					$this->checkPhoto();




	
}





		public  static function getPage($iduser,$page=1, $itemsToPage=10){

			$sql= new Sql();
			$start=($page-1)* $itemsToPage;
			$where='';
			if($iduser!=0){
				$where=' where iduser='.$iduser." ";		
			}
			
			

			$result= $sql->select("select sql_calc_found_rows idinformative,title,information,DATE_FORMAT(dtinformation, '%d/%m/%Y') as dtinformation,iduser,imginformation from informative".$where." order by idinformative limit ".$start.",".$itemsToPage." ");
			
		
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
		
			

			$result= $sql->select("select sql_calc_found_rows idinformative,title,information,DATE_FORMAT(dtinformation, '%d/%m/%Y') as dtinformation,iduser,imginformation from informative    where ".$where." (information like :search 
				or title like :search)  order by idinformative limit ".$start.",".$itemsToPage." ", ["search"=> "%".$search."%"] );
		
			$result2= $sql->select("select found_rows() as nrtotal");


	
			return ["data"=>$result,
					"totalItems"=> (int)$result2[0]['nrtotal'],
					"totalPages"=> ceil($result2[0]['nrtotal']/$itemsToPage)];


									


	}



}





?>