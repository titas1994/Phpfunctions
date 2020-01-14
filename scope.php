<?php

$x = "outside"; //global scope outside

function convert(){

	global $x;
	$x= "inside"; // local scope inside
}

echo "The global variable :"."&nbsp".$x;
echo "<br>";
convert();
echo "The local variable :"."&nbsp".$x;

?>