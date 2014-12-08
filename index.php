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
	
	echo 'naujas';

	$funk = new bandymas();

	$funk->edvinas('edvinukas')	;

<<<<<<< HEAD
 	echo "json_decod(json)";
=======

>>>>>>> parent of fbc04ab... dddd


?>