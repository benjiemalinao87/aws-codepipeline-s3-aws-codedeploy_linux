<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title> CiS International</title>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	
</head>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo">
				<div style="margin-top:70px" class="whitetitle">   </div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<strong>CiS International Pty Ltd</strong><br />
					P.O. Box 7104, McMahons Point, NSW 2060<br />
					61 Victoria St, McMahons Point, NSW 2060<br />
					Phone: +61 2 9922 2022<br />
					Web site: www.cisinternational.com<br />
					Email: salesmanager@cisinternational.com
					
				


				</div>
				<div id="toplinks" class="smallgraytext">
					<a href="database1.html">Database</a> | <a href="#">Sitemap</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="submenu">
				<div align="right" class="smallgraytext" style="padding:9px;">
				
				
					<a href="Z:\">CIS Business</a> | <a href="X:\">Client Apps</a> | <a href="Y:\">Finance Personnel</a> | <a href="W:\">Users</a> | <a href="U:\">Field Operarion</a> | <a href="V:\">CIS FTP</a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					
					All Account Informationa
			
				</div>
					<div class="bodytext" style="padding:12px;" align="justify">
					
<?php


$dbServer='localhost';

$dbUser='root';
$dbPass='root';


$dbName='lidcombedb';
  $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    print " You are Connected successfully to MySQL Database<br /><br />";
    mysql_select_db("$dbName") or die("Could not select database");
  

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

?>



					</p>
				</div>
			</div>
		<div id="leftpanel">
				<div align="justify" class="graypanel">
					<span class="smalltitle">News</span><br /><br />
					<span class="smallredtext">August 3, 2014</span><br />
					<span class="bodytext">We provide high value wireless and broadband consultancy services,.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">August 3, 2014</span><br />
					<span class="bodytext">We provide high value wireless and broadband consultancy services,.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					<span class="smallredtext">August 3, 2014</span><br />
					<span class="bodytext">We provide high value wireless and broadband consultancy services,.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
				</div>
			</div>
			</div>
			<div id="footer" class="smallgraytext">
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				|CiS International Pty Ltd
 
				&copy; 2014 <a href="http://www.benjiemalinao87.blogspot.com" target="_blank">Designed by: Benjie Malinao, MCP, MTA</a> 
			</div>
		</div>
	</div>
</body>
</html>