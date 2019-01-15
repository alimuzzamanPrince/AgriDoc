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
        <title>Welcome -
            <?php echo $userRow['username']; ?>
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

    <body style="background-color: #04283d">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="background-color: #001521">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                    <a style="color: white" class="navbar-brand" href="../index.html">AgriDoc</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="upmessage.php">Messages</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Welcome &nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="margin-top:150px;text-align:left;font-color: mat-blue-grey;font-family:lucida;font-size:18px;">

            <h2 style="color:#97c950;text-align:center;">Messages</h2>
            <br>

            <table class="table table-hover">

            <?php
            $query2 = $DBcon->query("SELECT * FROM adminupsolution WHERE upid=".$userRow['user_id']);
            while($data=$query2->fetch_array()){
            echo "<tr style='width:100%;border: 1px solid black;padding: 15px;font-color: mat-blue-grey;'>
                        <td>" . $data['message'] ."</td>
                  </tr>"; 
            }
            
            ?>
        </table>

        </div>

    </body>

    </html>