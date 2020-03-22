<?php

date_default_timezone_set("Asia/Hong_Kong");

$b = time();
$hour = date("G",$b);
$greetings = '';

if ($hour>=0 && $hour<=11){
	$greetings = "Selamat Pagi ";
}elseif($hour >=12 && $hour<=14){
	$greetings = "Selamat Siang ";
}elseif ($hour >=15 && $hour<=17){
	$greetings = "Selamat Sore ";
}elseif ($hour >=17 && $hour<=18){
	$greetings = "Selamat Petang ";
}elseif ($hour >=19 && $hour<=23){
	$greetings = "Selamat Malam ";
}

?>