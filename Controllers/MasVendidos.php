<?php 
	class MasVendidos extends Controllers
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function MasVendidos()
		{
			$data['page_tag'] = "Producto con más Ventas";
			$data['page_title'] = "Producto con más Ventas - <small>Konecta</small>";
			$data['page_name'] = "masventas";
			$data['page_functions_js'] = "functions_masvendido.js";
			$this->views->getView($this,"masvendidos",$data);
		}

		public function getMasVendido()
		{
			$arrData = $this->model->selectMasVendido();
			//dep($arrData);
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			
			die();
		}
	}

 ?>