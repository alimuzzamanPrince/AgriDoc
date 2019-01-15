<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$query2 = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$admin=$query2->fetch_array();


$DBcon->close();

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
    </head>

    <body style="background-color: #210444">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="background-color: #100121">
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
                        <li class="active"><a href="adminupmsg.php">Admin Message</a></li>
                        <li class="icon-bar"><a href="adminsln.php">Back</a></li>
                   </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" style="color: "><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $admin['username']; ?></a></li>
                        <li><a href="logout.php?logout" style="color: "><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top:150px;font-family:Verdana, Geneva, sans-serif;font-size:15px;">
            <h1 style="color:#9e544d;text-align:center;">Message Upazilla Officer</h1>

            <br>
            <br>
            <form class="form-signin" method="post" action="adminupupload.php" enctype='multipart/form-data' name="aumessage" style="background-color: #462170">

                <div class="form-group">


                    <input class="form-control" type="text" name="userid" placeholder="upadminid" >
                    Message:
                    <textarea class="form-control" type="text" name="message" placeholder="Write your message" style="height:120px;"></textarea>
                    <input type="submit" class="form-control" name="submit" value="SEND" />
                    <input type="reset"  class="form-control" value="Reset">
                </div>

            </form>

        </div>

    </body>

    </html>