<?php
	
	
	class bandymas{
		public $name;
		public function __construct(){

			echo "konstruktorius <br>";
		}
		public function edvinas($name){

			echo 'labas as vel gryzau ' . $name;

		}

		public function __destruct(){

			echo "<br> destruktorius ";
		}
	    
	}
	

	$funk = new bandymas();

	$funk->edvinas('edvinukas')	;

 




?>
