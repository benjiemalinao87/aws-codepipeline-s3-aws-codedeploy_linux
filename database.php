<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Blakletterpress Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="motto">
				<a href="index.html" class="sitename"><img src="images/blakletterpress.png" height="24" width="142" alt="SiteName"></a>
				<p>
					<img src="images/header-text.png" height="14" width="218" alt="Text">
				</p>
			</div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<div id="searchbar">
				<form action="#" method="post">
					<input type="text" value="Enter search query" class="txtfield" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
					<input type="submit" value="Search" class="btn">
				</form>
			</div>
		</div>
		<div id="contents">
			<div id="main">
				<div class="body">
					<ul id="list">
						<li>
							
							



<?php


$dbServer='localhost';

$dbUser='root';
$dbPass='root';

$SID = $_POST['SID'];


$dbName='lidcombedb';
  $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    mysql_select_db("$dbName") or die("Could not select database");
  


	$result=mysql_query("SELECT * FROM student where Account=$SID",$link);   //select all record
	
	//reads firdt rcord
	$myrow=mysql_fetch_array($result);
	
				if(!$myrow["Account"])
			{
				print"\nNo record  found!!!";
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

?>










							
							
					
						
						</li>
					</ul>
					<div id="pagination">
						<a href="blog.html">&lt;&lt;</a> <a href="blog.html">First</a> <a href="blog.html">1</a> <a href="blog.html">2</a> <a href="blog.html">3</a> <a href="blog.html">4</a> <a href="blog.html">5</a> <a href="blog.html">6</a> <a href="blog.html">7</a> <a href="blog.html">8</a> <a href="blog.html">9</a> <a href="blog.html">10</a> <a href="blog.html">11</a> <a href="blog.html">12</a> <a href="blog.html">13</a> <a href="blog.html">14</a> <a href="blog.html">15</a> <a href="blog.html">16</a> <a href="blog.html">17</a> <a href="blog.html">18</a> <a href="blog.html">19</a> <a href="blog.html">20</a> <a href="blog.html">Last</a> <a href="blog.html">&gt;&gt;</a>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div id="navigation">
					<div>
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="news.html">News</a>
							</li>
							<li class="selected">
								<a href="blog.html">Blog</a>
							</li>
								<li class="selected">
								<a href="blog.html">Database</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="section">
					<div id="connect">
						<h2>Connect with us:</h2>
						<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
					</div>
				</div>
				<div class="section">
					<div id="posts">
						<h2>Placeholder</h2>
						<ul>
							<li>
								<h5>Title Sample One</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend ligula vel velit varius
								</p>
								<a href="news.html" class="more">Read more</a>
							</li>
							<li>
								<h5>Title Sample One</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend ligula vel velit varius
								</p>
								<a href="news.html" class="more">Read more</a>
							</li>
						</ul>
						<a href="news.html" class="btn2">View More</a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul id="featured">
					<li>
						<a href="index.html" class="home"></a>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
						</p>
					</li>
					<li>
						<a href="index.html" class="bell"></a>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
						</p>
					</li>
					<li>
						<a href="index.html" class="globe"></a>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
						</p>
					</li>
					<li>
						<a href="index.html" class="pencil"></a>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
						</p>
					</li>
				</ul>
				<p id="footnote">
					© Copyright © 2011.Company name all rights reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>