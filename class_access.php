<?php 
/**Class Mobil
 * 
 */
class Mobil {

	public $wheel_count = 4; //open to whole script
	private $door_count = 4; //only to self 
	protected $seat_count = 2; //onnly to self and its child
	
	//methods
	function detil_mobil(){
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
	}
}

$odong = new Mobil();

// echo $odong->seat_count;

$odong->detil_mobil();

?>