<?php
	$dirName = "./news_text";
	$fileName = $_GET['newsFilename'];
?>


<!DOCTYPE html>
<html>
<body>
	<h3>News (Full)</h3>
	<b><i><?= substr_replace($fileName, "", -4) ?></i></b>
	<br />
	<br />
	<span>
	<?php
		$file = fopen($dirName."/".$fileName,"r");
		while(! feof($file)) {
			echo fgets($file). "<br />";
		}
		fclose($file);
	?>
	</span>
</body>
</html>