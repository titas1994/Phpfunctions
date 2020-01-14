<?php

/*function num($value,$value1){

	$value3 = $value +$value1;
	echo "The addition is :"."&nbsp".$value3."<br>";


}
return num(10,20);*/

function num1($number,$number1){

	$number3 = $number + $number1;
	return $number3;
}

$result = num1(100,200);
echo "The First addition is :"."&nbsp".$result."<br>";
$result = num1($result,400);
echo "The Second addition is :"."&nbsp".$result;


?>