<?php 


class Errors extends Controllers{
	public function __construct()
	{
		parent::__construct(); //le dice que ejecute el metodo constructor
							 //de su padre
	}

	public function notFound()
	{
		$this->views->getView($this,"error");

	}

}

$notFound = new Errors();
$notFound->notFound();

?>