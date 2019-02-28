<?php 
/**Class Mobil
 * 
 */
class Mobil {

	private $door_count = 4; //only to self 
	
	//methods
	function get_values(){
		echo $this->door_count;
	}

	function set_values(){
		$this->door_count = 10;
	}
}

$odong = new Mobil();
$odong->set_values();

$odong->get_values();


?>