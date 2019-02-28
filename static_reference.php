<?php 
/**Class Mobil
 * 
 */
class Mobil {

	static $wheel_count = 4;
	
	//methods
	static function detil_mobil(){
		return self::$wheel_count; //call its own variable
	}
}

class Truk extends Mobil {

	static function display() {
		echo parent::detil_mobil(); //call parents methods
	}

}

// $dyna = new Truk();
Truk::display();

?>