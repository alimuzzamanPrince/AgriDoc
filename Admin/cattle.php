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

    <body style="background-color:#092b28">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container" style="background-color: #0f2321">
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
                        <li class="active"><a href="cattle.php">Report</a></li>
                        <li><a href="adminsln.php" style="color: #5b6310">Give Solution</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" style="color: #5b6310"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a href="logout.php?logout" style="color: #5b6310"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="margin-top:150px;text-align:left;font-family:Verdana, Geneva, sans-serif;font-size:20px;">

            <h2 style="color:#97c950;text-align:center;">Report Data</h2>
            <br>
                    <table width="100%" class="table table-hover">
                                <?php
                                $query2 = $DBcon->query("SELECT * FROM images WHERE catagory=3");
                                while($data=$query2->fetch_array()){
                               echo "<tr style='border:solid 0.15em #226656;background-color: ;color:#5b6310;'> 
                                            <td style=''>Posting Time:<br>" . $data['created'] . "</td>
                                            <td style='border: 1px solid #150121;'> Username :<br>" . $data['username'] ."</td>
                                            <td style='border: 1px solid #150121;'> User Id : <br>".$data['userid'] ."</td>
                                            <td style='border: 1px solid #150121;'> Problem Id :<br>" . $data['id']."</td>
                                    </tr>
                                    <tr style='border:solid 0.15em #226656;color:#5b6310;font-size:15px;height:100px'>
                                            <td>Problem Description : <br>".$data['report']."</td>
                                            <td style='border: 1px solid #150121;'>Phone : <br>".$data['phone']."</td>".
                                            "<td colspan='2'>Address:<br>". $data['address'] ."</td>
                                    </tr>
                                    <tr style='text-align:center;background-color:#09332e'>
                                            <td colspan='4'><img src=\"../user/view.php?id=".$data['id'] . " \"><br/><a style='color:white;' href=\"../user/view.php?id=".$data['id'] ."\" target=\"_blank\">Click here to view large Image</a></td>
                                    </tr>"; 
                                
                                }
                                
                            ?>
                    </table>

        </div>

        <img src="" alt="">

    </body>

    </html>
