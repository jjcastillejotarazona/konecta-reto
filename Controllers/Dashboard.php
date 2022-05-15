<?php 


class Dashboard extends Controllers{
	public function __construct()
	{
		parent::__construct(); //le dice que ejecute el metodo constructor
							 //de su padre
	}

	public function dashboard(){
		
		$data['page_id'] = 2;
		$data['page_tag'] = "Dashboard";
		$data['page_title']= "Dashboard - Ventas";
		$data['page_name'] = "home";
		$data['page_content'] = "Lorem ipsum";
		$this->views->getView($this,"dashboard",$data);
	}


}

?>