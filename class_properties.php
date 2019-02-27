<?php 
/**Class Mobil
 * 
 */
class Mobil {

	var $wheel_count = 4; //inside class need to instance the variables type
	var $door_count =  4;
	
	//methods
	function detil_mobil(){
		echo "hello world!";
	}
}

$odong = new Mobil(); 
$bajaj = new Mobil(); 

echo $odong->wheel_count = 10 . "<br>"; //calling property or setting instance
echo $bajaj->wheel_count . "<br>";
?>