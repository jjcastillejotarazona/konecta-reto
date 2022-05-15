<?php 


class Roles extends Controllers{
	public function __construct()
	{
		parent::__construct(); //le dice que ejecute el metodo constructor
							 //de su padre
	}

	public function Roles(){
		
		$data['page_id'] = 3;
		$data['page_tag'] = "Roles Usuario";
		$data['page_name'] = "rol_usuario";
		$data['page_title']= "Roles usuario <small>Ventas</small>";
		$data['page_name'] = "rol_usuario";
		$this->views->getView($this,"roles",$data);
	}


}

?>