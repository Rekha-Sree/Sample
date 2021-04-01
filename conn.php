<?php

$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['ph'];
$Date=$_POST['month'];
$Day=$_POST['day'];
$Year=$_POST['year'] ;
$Time=$_POST['Time'];
$Location=$_POST['location'];
$data=$Name.",".$Email.",".$Phone.",".$Date."-".$Day."-s".$Year.",".$Time.",".$Location;


$file="sample.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);


    include("Front Page.html");



?>

