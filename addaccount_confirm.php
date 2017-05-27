<html>
<head>
<title>Add_Confirm</title>


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
    

$result= mysql_query("INSERT INTO student (AccountName,Username,Password) VALUES ('$AccountName', '$Username', '$Password')",$con);




// close connection
mysql_close($con);
print"You have added the account successfully!";
	
	header('Location: read_stud1.php');
?>







</body>
</html>
