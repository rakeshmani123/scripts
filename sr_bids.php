<?php 
echo "your Bids :- ";
mysql_connect("localhost","root","");
mysql_select_db("bid");
 $sp=$_REQUEST['sp'];
 $id=$_REQUEST['id'];
	$query="SELECT a . * , b . * , c . * FROM sr a, sp b, bids c WHERE a.sr_id = '$id' AND c.sr_id = '$id' AND b.sp_id='$sp'";
	$res=mysql_query($query);
   $row	=mysql_fetch_assoc($res);
  
		echo $row['b_id'].'&nbsp&nbsp&nbsp&nbsp&nbsp'. $row['project']. '&nbsp&nbsp&nbsp&nbsp&nbsp' .	$row['name'].'&nbsp&nbsp&nbsp&nbsp&nbsp' ;
		echo '<br>' ;
		
 ?>
