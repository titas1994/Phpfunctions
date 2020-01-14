<?php

function greeting($message){ //passing single parameter into the function

	echo $message;

}
$i=0;
for ($i=0;$i<=10;$i++) {

 	echo greeting("Hello World")."<br>";
 	
 	# code...
}
echo "<br>";
function cal($num,$num1){ //passing Multiple parameter into the function

	$sum = $num + $num1;
	echo "The Addtion of two number is :".$sum."<br>";
}
cal(100,200);


?>