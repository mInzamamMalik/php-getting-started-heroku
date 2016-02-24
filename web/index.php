<?php

echo "hello world hosted by github";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "this page is created by inzamam malik ";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


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

////////////////////////////////////////////////////////////
$sql = "INSERT INTO `classroom`(`gr`, `name`, `roll`, `gender`) VALUES (1,'name',23,1)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
////////////////////////////////////////////////////////////////////////


//close connection
$conn->close();