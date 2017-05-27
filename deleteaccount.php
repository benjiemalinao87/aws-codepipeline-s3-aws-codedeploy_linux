<html>
<head>
<title>Deleting Account</title>


</head>
<body>

<?php

$SID = $_POST['SID'];


$dbServer='localhost';

$dbUser='root';
$dbPass='root';

$dbName='lidcombedb';

$link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    mysql_select_db("$dbName") or die("Could not select database");

	
	


	$result=mysql_query("DELETE  FROM student WHERE Account=$SID",$link);   //deletes the record
$myrow=mysql_query($result);
	
	

       	
	print "Record is deleted!!";
header('Location: read_stud1.php');
	

	



	// Close the database connection
	mysql_close();
	?>






</body>
</html>
