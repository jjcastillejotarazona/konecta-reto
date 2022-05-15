<?php 
	class Masstock extends Controllers
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Masstock()
		{
			$data['page_tag'] = "Producto con más Stock";
			$data['page_title'] = "Producto con más Stock - <small>Konecta</small>";
			$data['page_name'] = "masstock";
			$data['page_functions_js'] = "functions_masstock.js";
			$this->views->getView($this,"masstock",$data);
		}

		public function getMasStock()
		{
			$arrData = $this->model->selectMasStock();
			//dep($arrData);
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			
			die();
		}
	}

 ?>