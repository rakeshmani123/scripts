<?php 
mysql_connect("localhost","root","");
mysql_select_db("bid");
 $sp=$_REQUEST['sp'];
 $id=$_REQUEST['id'];
 if(isset($_REQUEST['apply'])){
	$query="insert into `bids` (`sp_id`,`sr_id`) values ('$sp','$id')"; 
	$res=mysql_query($query);
	if($res){
	echo "your application aplied successfully";	
	}
	else {
	echo "You are not eligible to apply";	
	}
 } 
 ?>
 <form action="" method="post">
 <input type="submit" name="apply" value="Apply Here"> 
 </form>