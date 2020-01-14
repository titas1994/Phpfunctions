<?php

function say_something(){

	echo "Hello World"."<br>";

	number();
	address();
}

function number(){
	echo "My name is Titas Ganguly"."<br>";
	$num = 123456789;
	echo "My phone number is : ".$num."<br>";
}

function address(){
	$addr= "Bangalore,India.";
	echo "My address is : ". $addr;
}

say_something();


?>