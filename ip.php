<?php 
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
 echo $name= gethostbyaddr($ip) ;
?>