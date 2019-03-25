<?php 

$time_start = microtime(true); ;

$numbers = array("1","2","3","4","5","6","7","8","9","0");
$h = 0;
$printed = "";
$target = "1000000";
$counter = 1;
// for($h=0;$h < count($numbers_f);$h++) {
while($printed != $target){
	for($i=0;$i < count($numbers);$i++) {

		$printed = $h . $numbers[$i];

		// echo $h != 0 ?  $printed . " => {$counter} <br>" : $numbers[$i] . " => $counter <br>";
		$counter++;

	}
	$h++;
}

echo $printed . " => " . intval($counter-1). "<br>";

echo 'Total execution time in seconds: ' . (microtime(true) - $time_start) ;

?>