<html>
<head>
<title> Response from php page </title>
</head>

<body>
<h2>The information you submitted is now processed.</h2>

<?php


$name = $_POST['name'];
$age = $_POST['age']; 
$gender = $_POST['gender'];
$zone = $_POST['zone'];
$red = $_POST['red'];
$blue  = $_POST['blue'];
$childblue = $_POST['childblue'];
  
if(empty($name))

	{ 
		echo "Error please enter name";
	}
		elseif(is_int($name))
			{
				echo "Error please enter valid name";
			}	
		elseif(empty($age))
			{
				echo "Error please enter age";
			}
			
	
			
			
			else
				{
					echo"\n\nOk ";
					print "\n\nAll done, $name $age \n$gender \n$zone \n $red  \n$blue  \n$childblue";
				}


?>

</body>
</html>