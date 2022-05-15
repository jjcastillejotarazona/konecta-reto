<?php 

	class MasVendidosModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectMasVendido()
		{
			$sql = "
					SELECT p.nombre, 
					SUM(v.cantidad_vendido) as cantidad 
					FROM venta v 
					INNER JOIN
					producto p
					ON v.id_producto = p.id
					GROUP BY v.id_producto
					ORDER BY SUM(v.cantidad_vendido) DESC LIMIT 1";
					$request = $this->select_all($sql);
			return $request;
		}


	



	}
 ?>