<?php 
	class Ventas extends Controllers
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function Ventas()
		{
			$data['page_tag'] = "Ventas";
			$data['page_title'] = "Ventas <small>Konecta</small>";
			$data['page_name'] = "ventas";
			$data['page_functions_js'] = "functions_ventas.js";
			$this->views->getView($this,"ventas",$data);
		}

		public function getVentas()
		{
			$arrData = $this->model->selectVentas();
			//$arrData = $arrData['stock'] < 0 ? $arrData['stock']=0 : $arrData['stock'];
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			
			die();
		}

		public function setVenta(){
			if($_POST){
				//dep($_POST);
				if(empty($_POST['listProducto']) || empty($_POST['txtCantidad']))
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{
					
				//	$idProducto = intval($_POST['idProducto']);
					$strNombre = intval($_POST['listProducto']);
					$strCantidad = intval($_POST['txtCantidad']);
					$request_venta = "";
	
					$request_venta = $this->model->insertVenta($strNombre,$strCantidad);
					if($request_venta > 0 )
					{
						$arrResponse = array('status' => true, 'idproducto' => $request_venta, 'msg' => 'Datos guardados correctamente.');
						
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos, Stock insuficiente.');
					}
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		
	}

		public function getProducto($idproducto){
			
				$idproducto = intval($idproducto);
				if($idproducto > 0){
					$arrData = $this->model->selectProducto($idproducto);
					if(empty($arrData)){
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			
			die();
		}
		
	}

 ?>