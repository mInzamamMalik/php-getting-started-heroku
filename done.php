<html>

<head>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>


<body>
<!--//fb sdk code start///////////////////////////-->
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=923667797705278";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--////fb sdk code end////////////////////////////-->
<!--///////fb like button code start/////////-->
<div align="center">
    <div class="fb-like"
         data-href="https://www.facebook.com/MInzamamMalik"
         data-layout="standard"
         data-action="like"
         data-show-faces="true"
         data-share="true"></div>
    <!--///////fb like button code start/////////-->
    <br>
    <br>
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
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo " Successfully Connected to Cloud Server ";


    $sql = "INSERT INTO `classroom`(`name`, `roll`, `gender`) VALUES('$_POST[fname]','$_POST[roll]','$_POST[gender]')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3><br>"."Congo ". $_POST['fname'] ."! Your Record is Added to Database". "<br></h3>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql = "SELECT `gr`, `name`, `roll`, `gender` FROM `classroom` WHERE 1";
    $result = $conn->query($sql);

    ?>

    <table style="width:100%">
        <tr>
            <th>GR#</th>  <th>Name</th>  <th>Roll#</th>  <th>Gender</th>
        </tr>


        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //echo "id: " . $row["gr"] . " - Name: " . $row["name"] . " " . $row["roll"] . "<br>";
                echo "<tr><td>" . $row["gr"] . "</td><td>" . $row["name"] . "</td><td>"  . $row["roll"] . "</td><td>";


                if( $row["gender"] ==1 ){
                    echo "male";

                }else{
                    echo "female";
                }

                echo "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>

    </table>


        <?php

        //close connection
        $conn->close();

        ?>
</body>
</html>


























