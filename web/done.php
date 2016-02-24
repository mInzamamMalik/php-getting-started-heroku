<html>
<body>


<?php

////app link:
////https://stark-bayou-99693.herokuapp.com/
////
////myAdmin link:
////http://www.phpmyadmin.co/

$servername = "sql6.freemysqlhosting.net";
$username = "sql6108017";
$password = "qy4WKEwXIR";
$dbname = "sql6108017";
//
//Host: sql6.freemysqlhosting.net
//Database name: sql6108017
//Database user: sql6108017
//Database password: qy4WKEwXIR
//Port number: 3306




$con = mysql_connect($servername,$username,$password);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($dbname, $con);

$sql="INSERT INTO classroom (fname, lname)
VALUES
('$_POST[name]','$_POST[roll]','$_POST[gender]')";

if (!mysql_query($sql,$con))
{
    die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con)
?>
</body>
</html>
