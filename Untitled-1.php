<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="#" method="post">
<input type="text" name="user"  />
<br />
<input type="password" name="pass" />
<input type="submit" name="submit" value="login" />
</form>
</body>
</html>
<?php if(isset($_REQUEST['submit'])){
$name=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$query="select * from sp where `name`='$user' ";
$res=mysql_query($query);
$result=mysql_num_rows($res);
	if($result=='1'){
		while($row=mysql_fetch_assoc($res)){
			$id=$row['sp_id'];
			header("location:bids.php?sp=$id");	
		}
	}
	
}