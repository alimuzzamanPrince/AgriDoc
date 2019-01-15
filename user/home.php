<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome -
            <?php echo $userRow['username']; ?>
        </title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body style="background-color: #06514b">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="background-color: #36024c">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a class="navbar-brand" href="#" style="color: white">Agri Doc</a>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.php">Report</a></li>
                        <li><a style="color: white" href="solution.php">Solution</a></li>


                    </ul>
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a style="color: white" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Welcome &nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a style="color: white" href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="margin-top:150px;font-family:lucida;font-size:15px;">
            <h1 style="color:red;text-align:center;font-family: lucida">Report a problem</h1>

            <br>
            <br>
            <form class="form-signin" method="post" action="upload.php" enctype='multipart/form-data' name="pic" style="background-color: #220223">

                <div class="form-group" style="color: #a6b70b">


                    <input class="form-control" type="text" name="username" <?php echo "value='".$userRow['username']."'"; ?> >
                    <input class="form-control" type="text" name="userid" <?php echo "value='".$userRow['user_id']."'"; ?> >
                    <input class="form-control" type="text" name="phone" <?php echo "value='".$userRow['cellphone']."'"; ?> > 
                    <input class="form-control" type="text" name="address" <?php echo "value='".$userRow['address']."'"; ?>  style="height:50px;">
                    Problem Description(if any):
                    <input class="form-control" type="text" name="report" placeholder="Write your problem" style="height:120px;"> 
                    Problem Category:
                    <select name="catagory" id="" class="form-control">
                        <option value="1">Agriculture</option>
                        <option value="2">Fish</option>
                        <option value="3">Cattle</option>
                    </select> Select image to upload:
                    <input class="form-control" type="file" name="image" />
                    <input type="submit" class="form-control" name="submit" value="UPLOAD" />
                    <input type="reset"  class="form-control" value="Reset">
                </div>

            </form>

        </div>

    </body>

    </html>
