<?php
class Model {
		public $hostname="";
		public $database;
 		public $username;
 		public $password="";
 		public $conectar;
		public function __construct(){
		//echo $this->hostname;
		$this->hostname = "localhost";
		$this->database = "tienda";
		$this->username = "root";
		$this->password = "";
		$this->conectar=mysqli_connect($this->hostname,$this->username, $this->password, $this->database);
		 print_r($this->conectar);// mostrar variables complejas 
		       mysqli_query($this->conectar,"SET NAMES 'utf8'");
	}
	public function consulta($sql){
		$rs = mysqli_query($this->conectar,$sql);
		print_r($rs);
		return $rs;
	}	
}
?>