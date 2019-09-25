<?php
	namespace Repositories;

	require_once("../Config/Autoload.php");

	use Repositories\IBillRepository as Interfaz;

	class BillRepository implements Interfaz{

		private $itemArray = array();


	public function salutation(){
		echo "hola";
	}


	}

?>