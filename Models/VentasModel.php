<?php 

	class VentasModel extends Mysql
	{
		private $intIdProducto;
		private $strNombre;
		private $intCantidad;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectVentas(){
			$sql = "SELECT 
					v.id as id, 
					p.nombre as nombre, 
					p.stock as stock
					FROM venta v 
					INNER JOIN producto p 
					ON p.id = v.id_producto
					GROUP BY v.id_producto;";
					$request = $this->select_all($sql);
			return $request;
		}

		public function insertVenta(int $nombre, int $cantidad){
			$this->strNombre = $nombre;
			$this->intCantidad = $cantidad;
			$return = 0;
			$arrProducto  = $this->selectProducto($this->strNombre);
			$stockActual  = $arrProducto['stock'];
			$stockDisponible  = $stockActual - $this->intCantidad;
			if($stockDisponible > -1){
				$query_insert  = "INSERT INTO venta(id_producto, cantidad_vendido) VALUES(?,?)";
	        	$arrData = array($this->strNombre,$this->intCantidad);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
	        	$resta_stock = $this->restarStockProducto($this->strNombre,$this->intCantidad);
			}
	        return $return;
		}
		
		function restarStockProducto($idProd,$getCantidad){
			if($getCantidad && $idProd){
				$arrProducto  = $this->selectProducto($idProd);
				$stockActual  = $arrProducto['stock'];
				$restarStock  = $stockActual - $getCantidad;
				$result_resta = $this->updateStockProducto($idProd,$restarStock);
			}
		}

		public function updateStockProducto(int $idproducto, int $stock){
			$this->intIdProducto = $idproducto;
			$this->intStock = $stock;
			$return = 0;

				$sql = "UPDATE producto 
						SET stock=?
						WHERE id = $this->intIdProducto";

				$arrData = array($this->intStock);

	        	$request = $this->update($sql,$arrData);
	        	return $request;
		}

		public function selectProducto(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "SELECT p.id,
						   p.stock as stock
					FROM producto p
					WHERE id = $this->intIdProducto";
			$request = $this->select($sql);
			return $request;
		}
	}
 ?>