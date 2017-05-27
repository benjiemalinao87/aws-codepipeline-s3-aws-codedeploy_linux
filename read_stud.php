<html>
<head><title>Student List</title>
</head>
<body>
<?php


$dbServer='localhost';

$dbUser='root';
$dbPass='root';


$dbName='lidcombedb';
  $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    print "Connected successfully to MySQL(lidcombedb)<br /><br />";
    mysql_select_db("$dbName") or die("Could not select database");
    print "The $dbName Database selected successfully<br /><br />";

	$result=mysql_query("SELECT * FROM student",$link);   //select all record
	
	//reads firdt rcord
	$myrow=mysql_fetch_array($result);
	
		if(!$myrow["Account"])
			{
				print"\n\No record  found!!!";
			}
			
			else 
			
			{
				print"<table border=1><br/>";
				print"<tr><td>Account Number</td><td>Account Name</td>";
	
			
			}
	
	while($myrow["Account"])
		{
				
			printf("<tr><td>%5d</td><td>%s</td></tr>", 
			$myrow["Account"],$myrow["AccountName"]);
								
				
				
			$myrow=mysql_fetch_array($result);
		}	
			print"</table>\n";
			
// close connection
mysql_close($link);
print "The link to MySQL is now closed";
?>
</body>
</html>