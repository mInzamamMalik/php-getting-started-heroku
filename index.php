<html>
<body>
<!--//fb sdk code start///////////////////////////-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=923667797705278";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<!--////fb sdk code end////////////////////////////-->
<!--///////fb like button code start/////////-->
<div align="center">
  <div  class="fb-like"
        data-href="https://www.facebook.com/MInzamamMalik"
        data-layout="standard"
        data-action="like"
        data-show-faces="true"
        data-share="true"></div>
  <!--///////fb like button code start/////////-->

<br><br>
<h4>Data Insertion Web Application | powered by php</h4>
<form action="done.php" method="post">

  Name : <input type="text" required="true" name="fname">

  <br>

  Roll :<input type="number" required="true" name="roll">

  <br>

  Gender :
  <input type="radio" name="gender" value="1" checked> Male
  <input type="radio" name="gender" value="0"> Female<br>

  <br><br>

  <input type="submit">

</form>

<h3>an Special thanks to Mam Aniqa Sheerazi</h3>
    <p>she is really Sincere professor</p>
<!--

<?php
/*
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

*/?>



</body>
</html>








