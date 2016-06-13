<?php

// Accquire the config.php file

require 'config.php';

// Find users IP

$ip = $_SERVER[REMOTE_ADDR];

// Find the date 

$date = date("m/d/Y");

// Check if config needs the date

if($usedate == "0"){
// If the config has the date, write it.
$file = fopen("$log", "a");
$filewrite = fwrite($file, "$ip - $date\n");
fclose($file);

}elseif($usedate == "1"){
// If config doesnt have the date, dont write it
$file = fopen("$log", "a");
$filewrite = fwrite($file, "$ip\n");
fclose($file);

}

?>