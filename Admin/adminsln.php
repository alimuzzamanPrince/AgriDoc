<!--DOCTYPE html>
<html>
<head>
    <title>Admin Solution</title>
</head>
<body>
    <button onclick="window.location.href='adminmsg.php'">Message User</button> 
    <button onclick="window.location.href='adminupmsg.php'"> Message Upazilla Officer</button>

</body>
</html-->
.ul {
  list-style-type: none;
}

<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
//$DBcon->close();

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

    <body style="background-color:#470629">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="background-color: #260115">
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
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" style="color: "><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a href="logout.php?logout" style="color: "><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>


        <div class="container" style="margin-top:150px;font-family:Verdana, Geneva, sans-serif;font-size:15px;text-align:center;">
            <h1 style="color:red;text-align:center;">Admin Solution Options</h1>

            <br>
            <br>
            

                <ul class="btn btn-default">
                        <li><a href="adminmsg.php"><b>Message User</b></a></li>
                        <li><a href="adminupmsg.php" ><b>Message Upazilla Officer</b></a></li>
                    </ul>

          

        </div>

    </body>

    </html>