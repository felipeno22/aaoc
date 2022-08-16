<?php 


namespace felipeno22;

use Rain\Tpl;
use \felipeno22\Model\User;

date_default_timezone_set('America/Cuiaba');	

class Page{
	


		private $tpl;
		private $defaults=[
				"header"=>true,
				"header2"=>false,
				"footer"=>true,
				"inadmin"=>0,
				"data"=>[]];
		private $options=[];
	
	public function __construct($a='',$opts= array(),$tpl_dir="/views/",$deslogin=null){
		
		$this->options=array_merge($this->defaults,$opts);
		
		$config=array(
		"tpl_dir"=>$_SERVER['DOCUMENT_ROOT'].$tpl_dir,
		"cache_dir"=>$_SERVER['DOCUMENT_ROOT']."/cache-views/",
		 "debug"=> false

	);


	Tpl::configure($config);
	$this->tpl=new Tpl();
	
	 
	$is_active;
	$is_active1;
	$is_active2;
	$is_active3;
	$is_active4;
	$is_active5;
	$is_active6;

	if($a=='0'){
		$this->options['data']['is_active']='--is-active';
	}else{
		$this->options['data']['is_active']='';
	}

	if($a=='1'){
		$this->options['data']['is_active1']='--is-active';
	}else{
		$this->options['data']['is_active1']='';
	}


	if($a=='2'){
		$this->options['data']['is_active2']='--is-active';
	}else{
		$this->options['data']['is_active2']='';
	}


	if($a=='3'){
		$this->options['data']['is_active3']='--is-active';
	}else{
		$this->options['data']['is_active3']='';
	}


	if($a=='4'){
		$this->options['data']['is_active4']='--is-active';
	}else{
		$this->options['data']['is_active4']='';
	}


	 
	 if($a=='5'){
		$this->options['data']['is_active5']='--is-active';
	}else{
		$this->options['data']['is_active5']='';
	}

	
	if($deslogin!=null){
		$this->options['data']['deslogin']=$deslogin;
		$this->options['data']['date_today']=date('d/m/Y H:i:s',time());
	}


	//$dataCriacao=$user->getdtregister();
 
    /*$this->tpl->assign("user", $user->getdeslogin());
	 $this->tpl->assign("dtregister", $user->getdtregister());
	 $this->tpl->assign("desphoto", $user->getdesphoto());
	*/

	

	
	if ($this->options['data']){
		
		$this->setData($this->options['data']);
	}




	
	if ($this->options['header'] === true){

			if($tpl_dir=="/views/admin/"){
				$this->tpl->draw('headerAdm');
			}else{
				$this->tpl->draw('header');	
			}
			
		 }



	if ($this->options['header2'] === true){
			$this->tpl->draw('headerComum');
		 }	 
	
		
	}
	
	
	
	

	private function setData($data = array())
	{	
		

		foreach ($data as $key => $value) {
			$this->tpl->assign($key, $value);
			
		}

	}


	

	public function setTpl($name,$data=array(),$returnHtml=false){


			$this->setData($data);

		

			return $this->tpl->draw($name,$returnHtml);





	}
	
	public function __destruct(){
		
			if ($this->options['footer'] === true){
				
					$this->tpl->draw("footer");
					
			} 
		
	}
	
	
	
}




?>