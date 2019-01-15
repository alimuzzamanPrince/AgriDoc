<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	
	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);
	
	$email = $DBcon->real_escape_string($email);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT user_id, email, password FROM tbl_users WHERE email='$email'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns 1
	
	if (password_verify($password, $row['password']) && $count==1 && $row['user_id']==1 )  {
		$_SESSION['userSession'] = $row['user_id'] ;
		header("Location: agriculture.php");
	} 

	else if (password_verify($password, $row['password']) && $count==1 && $row['user_id']==2 )  {
		$_SESSION['userSession'] = $row['user_id'] ;
		header("Location: fish.php");
	} 

	else if (password_verify($password, $row['password']) && $count==1 && $row['user_id']==3 )  {
		$_SESSION['userSession'] = $row['user_id'] ;
		header("Location: cattle.php");
	} 

	else if (password_verify($password, $row['password']) && $count==1 && $row['user_id']==4 )  {
		$_SESSION['userSession'] = $row['user_id'] ;
		header("Location: upmessage.php");
	} 

	else if (password_verify($password, $row['password']) && $count==1 && $row['user_id']==5 )  {
		$_SESSION['userSession'] = $row['user_id'] ;
		header("Location: upmessage.php");
	} 

	else if (password_verify($password, $row['password']) && $count==1 && $row['user_id']==6 )  {
		$_SESSION['userSession'] = $row['user_id'] ;
		header("Location: upmessage.php");
	} 


	else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$DBcon->close();
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AgriDoc</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body style="background-color: #063013">

        <div class="signin-form">

            <div class="container">


                <form class="form-signin" method="post" id="login-form" style="background-color: #4c4b06">

                    <h2 class="form-signin-heading" style="font-family: cursive;">Sign In</h2>
                    <hr />

                    <?php
		if(isset($msg)){
			echo $msg;
		}
		?>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email address" name="email" required />
                            <span id="check-e"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                        </div>

                        <hr />

                        <div class="form-group">
                            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login"><span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In</button>
                            <a href="register.php" class="btn btn-default" style="float:right;"><span class="glyphicon glyphicon-edit"></span> &nbsp; Sign Up </a>
                            <br>
                            <a href="../user/index.php" class="btn btn-default" style="float:left;"><span class="glyphicon glyphicon-user"></span> &nbsp; Sign In as User</a>
                            <a href="../index.html" class="btn btn-default" style="float:right;"><span class="glyphicon glyphicon-home"></span> &nbsp; Home</a>

                        </div>



                </form>

            </div>

        </div>

    </body>

    </html>
