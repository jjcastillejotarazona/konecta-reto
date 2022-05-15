<?php 


class Home extends Controllers{
	public function __construct()
	{
		parent::__construct(); //le dice que ejecute el metodo constructor
							 //de su padre
	}

	public function home(){
		
		$data['page_id'] = 1;
		$data['page_tag'] = "Home";
		$data['page_title']= "Página principal";
		$data['page_name'] = "home";
		$data['page_content'] = "Lorem ipsum";
		$this->views->getView($this,"home",$data);
	}


}

?>

