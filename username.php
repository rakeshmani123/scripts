<?php $str = 'rakeshacn123@gmail.com';
$s = explode("@",$str);
array_pop($s); #remove last element.
$s = implode("@",$s);
print $s;
?>