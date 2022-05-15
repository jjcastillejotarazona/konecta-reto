<?php 

	class MasstockModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectMasStock()
		{
			$sql = "SELECT p.id as id, p.nombre as nombre, p.stock as stock
					FROM producto p
					WHERE p.stock = ( 
					SELECT MAX(stock) FROM producto)";
					$request = $this->select_all($sql);
			return $request;
		}


	



	}
 ?>