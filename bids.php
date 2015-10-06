<?php 
			mysql_connect("localhost","root","");
			mysql_select_db("bid");
			$ids=$_REQUEST['sp'];
			
			$q="select * from `sp` where `sp_id`='$ids' ";
			$r=mysql_query($q);
				if(mysql_num_rows($r)>0) {
					$query= "SELECT * FROM `sr`";
					$res=mysql_query($query);
					while($result=mysql_fetch_assoc($res)){
					echo $id=$result['sr_id'];	echo '&nbsp&nbsp&nbsp&nbsp&nbsp';  echo $result['sr_name'];	echo '&nbsp&nbsp&nbsp&nbsp&nbsp';  echo $result['project'];	echo '&nbsp&nbsp&nbsp&nbsp&nbsp';  
					echo '<a href="apply.php?id='.$id.'&sp='.$ids.'"> Apply</a>'; echo '<br>';
						}
					}
					else {
					header("location:login.php");	
				}
?>