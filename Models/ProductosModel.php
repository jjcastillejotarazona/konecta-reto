<?php 

	class ProductosModel extends Mysql
	{
		private $intIdProducto;
		private $strNombre;
		private $strReferencia;
		private $intPeso;
		private $categoria;
		private $intPrecio;
		private $intStock;
		private $intStatus;


		public function __construct()
		{
			parent::__construct();
		}

		public function selectProductos(){
			$sql = "SELECT p.id,
							p.nombre,
							p.referencia,
							p.precio,
							p.peso,
							p.categoria,
							p.stock,
							p.fecha_creacion,
							p.status
					FROM producto p ";
					$request = $this->select_all($sql);
			return $request;
		}

		public function insertProducto(string $nombre, string $referencia, int $peso, string $categoria, string $precio, int $stock, int $status){
			$this->strNombre = $nombre;
			$this->strReferencia = $referencia;
			$this->intPeso = $peso;
			$this->categoria = $categoria;
			$this->intPrecio = $precio;
			$this->intStock = $stock;
			$this->intStatus = $status;
			$return = 0;
			$sql = "SELECT * FROM producto WHERE id = '{$this->intIdProducto}'";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$query_insert  = "INSERT INTO producto(categoria,
														referencia,
														nombre,
														peso,
														precio,
														stock,
														status,
														fecha_creacion) 
								  VALUES(?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->categoria,
	        		        	$this->strReferencia,
        						$this->strNombre,
        						$this->intPeso,
        						$this->intPrecio,
        						$this->intStock,
        						$this->intStatus,
        						date("Y-m-d H:i:s"));
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function updateProducto(int $idproducto, string $nombre, string $descripcion, int $codigo, string $categoriaid, string $precio, int $stock, int $status){
			$this->intIdProducto = $idproducto;
			$this->strNombre = $nombre;
			$this->strDescripcion = $descripcion;
			$this->intCodigo = $codigo;
			$this->intCategoriaId = $categoriaid;
			$this->strPrecio = $precio;
			$this->intStock = $stock;
			$this->intStatus = $status;
			$return = 0;

				$sql = "UPDATE producto 
						SET categoria=?,
							peso=?,
							nombre=?,
							referencia=?,
							precio=?,
							stock=?,
							status=?,
							fecha_creacion=?
						WHERE id = $this->intIdProducto ";

				$arrData = array($this->intCategoriaId,
        						$this->intCodigo,
        						$this->strNombre,
        						$this->strDescripcion,
        						$this->strPrecio,
        						$this->intStock,
        						$this->intStatus,
        						date("Y-m-d H:i:s")
        						);

	        	$request = $this->update($sql,$arrData);
	        	return $request;
		}

		public function selectProducto(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "SELECT p.id,
							p.nombre,
							p.referencia,
							p.precio,
							p.peso,
							p.categoria,
							p.stock,
							p.fecha_creacion,
							p.status
					FROM producto p
					WHERE id = $this->intIdProducto";
			$request = $this->select($sql);
			return $request;

		}
		public function deleteProducto(int $idproducto){
			$this->intIdProducto = $idproducto;
			$sql = "UPDATE producto SET status = ? WHERE id = $this->intIdProducto ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}
	}
 ?>