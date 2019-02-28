<?php 
/**Class Mobil
 * 
 */
class Mobil {
	
	//properties
	var $wheels = 4;
	
	//methods
	function gretting(){
		return "halo";
	}
}

$inova = new Mobil();

class Truk extends Mobil{

}

$dyna = new Truk();

echo $dyna->wheels;

?>