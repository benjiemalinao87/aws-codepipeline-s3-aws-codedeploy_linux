
<html>
<head><title>select one record</title>
</head>
<body>
<?php

$name = $_POST['name'];
$address = $_POST['address'];
$pcwareID = $_POST['pcwareID'];
$quantity = $_POST['quantity'];

$dbServer='localhost';
$dbName='fruit_db';
$dbUser='root';
$dbPass='root';



  $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
  
   mysql_select_db("$dbName") or die("Could not select database");
   
	$result=mysql_query("SELECT * FROM fruit WHERE fruit_ID=$pcwareID",$link);   //select all record

	$record=mysql_fetch_array($result);
	
		if(!$record["fruit_ID"])
			{
				print"\n\The record for PCWare Item #$pcwareID was not  found!!!";
			}
			
			else 
			
			{
				
				//calculate the total cost
				$total_cost=$quantity*$record["kilo_price"];
				
		           print "Welcome <font color='red'>$name </font>to my Store!!!";
				   echo '<br/> ------------------------<br/> ';
				   print "<br/>Fruit ID #:\t<font color='red'>$pcwareID</font>";
				   print "<br/>Quantity:\t<font color='red'>$quantity</font>";
				   print "<br/>Delivery Address:\t<font color='red'>$address</font>";
				   print "<br/>------------------------<br/>";
			print " <br/>Please Benjie pay ===>>><font color='red'> \t$total_cost</font>";
			}
	

			
// close connection
mysql_close($link);
print "<br/><br/>The link to MySQL is now closed";
?>
</body>
</html>