<?php $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]."<br>"; // piece1
echo $pieces[1]; // piece2
echo count($pieces);
?>