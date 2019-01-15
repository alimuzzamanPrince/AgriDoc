<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
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
                        <li class="active"><a href="solution.php">Solution</a></li>
                        <li class="icon-bar"><a style="color: " href="home.php">Report</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a style="color: " href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['username']; ?></a></li>
                        <li><a style="color: " href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="margin-top:150px;text-align:left;font-color:yellow;font-family: veranda;border-spacing: 2; font-size:18px;">

            <h2 style="color:#97c950;text-align:center;">Solution</h2>
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
            $query2 = $DBcon->query("SELECT * FROM adminsolution WHERE usrid=".$userRow['user_id']);
            while($data=$query2->fetch_array()){
            echo "<tr style='border: solid 0.18em #0a4f03;background-color: #0a010f;color:#99504a;font-family:lucida;'>
                    <td>" . $data['message'] . "</td>
                  </tr>";  
            }
            
            ?>
        </table>
       

        </div>

    </body>

    </html>