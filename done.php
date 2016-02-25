<html>
<body>


<?php
//isset($_POST[name]) ? $_POST[name] : '';

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



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO `classroom`(`name`, `roll`, `gender`) VALUES('$_POST[fname]','$_POST[roll]','$_POST[gender]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//close connection
$conn->close();

?>
</body>
</html>


























