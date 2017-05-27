<html>
<head><title>Data Base Connectivity</title>
</head>
<body>
<?php
// The following are common lines in a PHP program for connecting to a MySQL DB
// hostname or ip of server (for local testing, localhost is used)

$dbServer='localhost';

// username and password to log onto db server – depends on entries during
// MySQL installation but use ‘root’, easy to remember

$dbUser='root';
$dbPass='root';

// name of database – MySQL creates this db when it was installed

$dbName='lidcombedb';

    $link = mysql_connect("$dbServer", "$dbUser", "$dbPass") or die("Could not connect");
    print "Connected successfully to MySQL(lidcombedb)<br /><br />";
    mysql_select_db("$dbName") or die("Could not select database");
    print "The $dbName Database selected successfully<br /><br />";

// close connection
mysql_close($link);
print "The link to MySQL is now closed";
?>
</body>
</html>
