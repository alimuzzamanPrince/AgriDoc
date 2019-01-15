<?php

session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}
$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

?>
<!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
        </title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            img {
                height: 300px;
                width: 400px;
            }

        </style>
    </head>

    <body style="background-color: #510315">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="background-color: #6d0f08">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="../index.html" style="color: white">AgriDoc</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Upload</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a style="color: white" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a style="color: white" href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="margin-top:150px;text-align:left;font-color:yellow;font-family: veranda;border-spacing: 2; font-size:18px;">

            <br>
            

   <!--    <?php
            //$query2 = $DBcon->query("SELECT * FROM adminsolution WHERE usrid=".$userRow['user_id']);
            //while($data=$query2->fetch_array()){
               // echo "<table>";
           //echo "<tr><td> Solution </td></tr>"."<tr><td>".$data['message'] ."</td></tr>"; 
                //echo "</table>";

       //}
            
        ?>  -->


        <table class="table table-hover">
               <!-- <tr style="width:100%;border: 1px solid black;padding: 15px;">
                    <th>Message</th>
                </tr>-->
    <?php
    error_reporting(0);
    if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
     
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        
        
        //DB details
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'Agridoc';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
   
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $userid = mysqli_real_escape_string($db, $_POST['userid']);
        $catagory = mysqli_real_escape_string($db, $_POST['catagory']);
        $report = mysqli_real_escape_string($db, $_POST['report']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $dateTime = date("Y-m-d H:i:s");
        
/*
        $insert = $db->query("INSERT into images (username,report,image, created,catagory,phone,address,userid) VALUES ('$username','$report','$imgContent', '$dateTime','$catagory','$phone','$address','$userid')");
        
            if($insert && !empty($_POST["pic"])){
                echo "<h1 style='color:#e28106;text-align:center;'>"."File uploaded successfully</h1><br><p style='color:;text-align:center;'><a href=\"home.php\">  Submit Another Report </a></p><br><p style='color:;text-align:center;'><a href=\"../index.html\">  Home </a></p>";
            }else{
                echo "<h2 style='color:#d87c08;text-align:center'>You Forgot to Insert Something! Please <a href=\"home.php\">  Try Again </a></h2>";
            }*/
    
       $insert = $db->query("INSERT into images (username,report,image, created,userid,catagory,phone,address) VALUES ('$username','$report','$imgContent', '$dateTime','$userid','$catagory','$phone','$address')");
        if($insert){
            echo "<h1 style='color:#e28106;text-align:center;'>"."File uploaded successfully</h1><br><p style='color:;text-align:center;'><a href=\"home.php\">  Submit Another Report </a></p><br><p style='color:;text-align:center;'><a href=\"../index.html\">  Home </a></p>";
        }else{
            echo "<h2 style='color:#d87c08;text-align:center'>File upload failed! Please <a href=\"home.php\">  Try Again </a></h2>";
        } 
    }else{
        echo "<h2 style='color:#d87c08;text-align:center'>You Forgot to Insert an image! Please <a href=\"home.php\">  Try Again </a></h2>";
    }
}
        
        
    ?>
        </table>
       

        </div>

    </body>

    </html>
