<html>
<head>
<title>The Platypu Web Site</title>





</head>
<body bgcolor="teal">
<br>
<table width="825" border="0" align="center" cellpadding="4" cellspacing="2" style="text-align: center">

<tr> 






<td  BACKGROUND="./images/Header.jpg" border="0" cellspacing="0" height="150" width="889" alt="header" height="70" colspan="3" align="center" valign="middle" > 




</td>


</tr>
<tr> 
<td width="150" rowspan="3" valign="top" bgcolor="#FFFFFC"> 
<p align="left"><a href='selectrecord.html' target='#'>Select one record</a></p>
<p align="left"><a href='deleterecord.html' target='#'>Delete one record</a></p>
<p align="left"><a href='insertrecord.html' target='#'>Insert Rescor to database</a></p>


<p align="left"><a href="http://en.wikipedia.org/wiki/Platypus" target="#">Others</a></p>
<p align="left">OTHER LINKS</p>
<p align="left"><a href="http://www.benjiemalinao87.blogspot.com" target="#">Benjie's Blogspot</a></p>
<p align="bottom"> HTML/mySQL/PHP/Apache Practical Test by: &copy; Benjie Malinao</p>

</td>


<td width="459" height="118" valign="top" bgcolor="#FFFFFC" style="text-align: center"> 
<img src="images/platypus4.jpg" alt="platypus" height="100" hspace="5" vspace="5"> 



</td>
<td width="153" rowspan="3" valign="top" bgcolor="#FFFFFC">Picture of the Month
<br><img src="images/plastus.jpg" alt="platypus" height="100" hspace="5" vspace="5"> 


</td>


</tr>
<tr> 
<td height="600" valign="top" bgcolor="#FFFFFC">
</br>


<?php


$dbServer='localhost';

$dbUser='root';
$dbPass='root';



$AccountName = $_POST['AccountName'];
$Password = $_POST['Password'];


	
$dbName='lidcombedb';
  $con= mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    mysql_select_db("$dbName") or die("Could not select database");
   
	

$result=mysql_query("UPDATE  student SET Account='$SID' WHERE AccountName='$AccountName'")or die("Could not update record");



echo "1 record Updated";


// close connection
mysql_close($con);
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

