

<?php

//This function is used to read all files in a directory
function files($path,&$files = array()) {
    $dir = opendir($path."/.");
    while($item = readdir($dir))
        if(is_file($sub = $path."/".$item))
            $files[] = $item;else
            if($item != "." and $item != "..")
                files($sub,$files); 
    return($files);
}
//-----


$dirName = "./news_text";
$arrayNewFiles = files($dirName);

?>
<!DOCTYPE html>
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
					61 Victoria St, McMahons Point, NSW 2060<br />
					Phone: +61 2 9922 2022<br />
					Web site: www.cisinternational.com<br />
					Email: salesmanager@cisinternational.com
					


				</div>
				<div id="toplinks" class="smallgraytext">
				<a href="C:\Program Files\IPMsg\ipmsg.exe" type="application/octet-stream">Start IP Messaging</a> | <a href="T:\Peter\Scans\Optus Design 001.jpg">sample doc</a>
				</div>
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<a href="#">Home</a> | <a href="forms.html">Forms&Templates</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="submenu">
				<div align="right" class="smallgraytext" style="padding:9px;">
				
				
		<strong>Folders : </strong><a href="Z:\">CIS Business</a> |<a href="X:\">Client Apps</a> |<a href="Y:\">Finance Personnel</a> |<a href="file://///W:/">Users</a> | <a href="U:\">Field Operarion</a> |<a href="V:\">CIS FTP</a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					<span class="titletext">Welcome to CiS International Intranet</span>
					</div>
					<div class="bodytext" style="padding:12px;" align="justify">
					<strong>CiS (Communications Infrastructure Services) comprises a large network of staff, associates and partners with a home base in Australia, providing network design, integration, specialist technical knowledge and project management, working with live ICT networks in the Asia Pacific Region. 					</p>
			  </strong><br />
					<br />
					
We provide high value wireless and broadband consultancy services, and nationally has supplied over 2,000 fibre design services for backbone, GSM connect and customer connections, including surveys, drafting and environmental work, along with project management and quality control of contracted constructors					</p>
				</div>
			</div>
			<div id="leftpanel">
				<div align="justify" class="graypanel">
					<span class="smalltitle"> Goals for week</span><br /><br />
					<span class="smallredtext">August 3, 2014</span><br />
					<span class="bodytext">We provide high value wireless and broadband consultancy services,.</span><br />
					<a href="#" class="smallgraytext">More...</a><br /><br />
					
				</div>
				
				<div align="justify" class="graypanel">
					<span class="smalltitle"><a href="login.html"> Admin Section</a></span><br /><br />
				
					
				</div>
				
				
				<div id="leftpanel">
			<div id="leftpanel">
				<div align="justify" class="graypanel">
				<span class="smalltitle"><a href="news.php"> News</a></span><br /><br />
				
					<div class="newsContainer">
					
	<marquee onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=2" scrollamount="2" direction="up" loop="true">
		
		<?php foreach ($arrayNewFiles as $fileName) { ?>
			<b><?= substr_replace($fileName,    "", -4) ?></b>
			<br />
			<?php 
				$line = 3; //This the line display limit per news on the new box
				
				$file = fopen($dirName."/".$fileName ,"r");
				while(! feof($file)) {
				  $line--;
				  if($line != 0) {
					echo fgets($file). "<br />";
				  }
				  else {
					echo fgets($file). " <a href='news_full.php?newsFilename=".urlencode($fileName)."' />read more...</a> <br />";
					break;
				  }
				}
				fclose($file);
			?>
			<br />
		<?php } ?>
	</marquee>
					
					
				</div>
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