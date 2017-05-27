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

	$result=mysql_query("SELECT * FROM student where studentID='3'",$link);   //select all record
	
	//reads firdt rcord
	$myrow=mysql_fetch_array($result);
	
		if(!$myrow["studentID"])
			{
				print"\n\No record  found!!!";
			}
			
			else 
			
			{
				print"<table border=1><br/>";
				print"<tr><td>Student ID</td><td>Name</td>";
				print"<td>Surname</td><td>groupID</td>";
				print"<td>Gender</td><td>Age</td></tr><br/>";
			}
	
	while($myrow["studentID"])
		{
				
			printf("<tr><td>%5d</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%3d</td></tr>", 
			$myrow["studentID"],$myrow["name"],$myrow["surname"],$myrow["groupID"],$myrow["gender"],$myrow["age"]);
								
				
				
			$myrow=mysql_fetch_array($result);
		}	
			print"</table>\n";
			
// close connection
mysql_close($link);
print "The link to MySQL is now closed";
?>
</body>
</html>