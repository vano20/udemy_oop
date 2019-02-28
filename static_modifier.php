<?php 
/**Class Mobil
 * 
 */
class Mobil {

	static $wheel_count = 4;
	static $door_count = 4; //static property
	
	
	//methods
	static function detil_mobil(){
		echo Mobil::$wheel_count;
		echo Mobil::$door_count;
	}
}

// echo Mobil::$door_count;

Mobil::detil_mobil();

?>