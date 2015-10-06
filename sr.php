<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
			mysql_connect("localhost","root","");
			mysql_select_db("bid");
			$ids=$_REQUEST['sp'];
			$q="select * from `sr` where `sr_id`='$ids' ";
			$r=mysql_query($q);
				if(mysql_num_rows($r)>0) {
					$query= "SELECT * FROM `sr`";
					$res=mysql_query($query);
					while($result=mysql_fetch_assoc($res)){
					echo $id=$result['sr_id'];	echo '&nbsp&nbsp&nbsp&nbsp&nbsp';  echo $result['sr_name'];	echo '&nbsp&nbsp&nbsp&nbsp&nbsp';  echo $result['project'];	echo '&nbsp&nbsp&nbsp&nbsp&nbsp';  
					echo '<a href="sr_bids.php?id='.$id.'&sp='.$ids.'"> Biddings </a>'; echo '<br>';
						}
					}
					else {
					header("location:login.php");	
				}
?>

</body>
</html>