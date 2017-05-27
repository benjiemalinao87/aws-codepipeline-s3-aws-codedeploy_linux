<html>
<head>
<title>The Platypu Web Site</title>





</head>
<body>


<?php


$dbServer='localhost';

$dbUser='root';
$dbPass='root';

$SID = $_POST['SID'];


$dbName='lidcombedb';
  $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    print "Connected successfully to MySQL(lidcombedb)<br /><br />";
    mysql_select_db("$dbName") or die("Could not select database");
    print "The $dbName Database selected successfully<br /><br />";


	$result=mysql_query("SELECT * FROM student where Account=$SID",$link);   //select all record
	
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
				print"<td>Username</td><td>Password</td>";
			
			}
	
	while($myrow["Account"])
		{
				
			printf("<tr><td>%5d</td><td>%s</td><td>%s</td><td>%s</td></tr>", 
			$myrow["Account"],$myrow["AccountName"],$myrow["Username"],$myrow["Password"]);
								
				
				
			$myrow=mysql_fetch_array($result);
		}	
			print"</table>\n";
			
// close connection
mysql_close($link);
print "<br/>The link to MySQL is now closed";
?>














</td>
</tr>
<tr> 
<td height="44" valign="top" bgcolor="#FFFFFC"><a href="index.html">Home</td>
</tr>
</table>
</body>
</html>
