<html>
<head>
<title>Edit_Confirm</title>


</head>
<body>

<?php


$dbServer='localhost';

$dbUser='root';
$dbPass='root';

 


	
$dbName='lidcombedb';
  $con= mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
  mysql_select_db("$dbName") or die("Could not select database");


// escape variables for security	
$AccountName = $_POST['AccountName'];          
$Username = $_POST['Username'];    
$Password = $_POST['Password']; 
	
     mysql_query("UPDATE student SET Password='$Password'
			WHERE AccountName='$AccountName' AND Username='$Username'",$con);

    

header('Location: database1.html');

// close connection
mysql_close($con);

?>







</body>
</html>
