<?php 
session_start();

$_SESSION['userid'] = NULL;
$userid = $_SESSION['userid'];
if($userid != NULL)
{
    header("location: ./view.php?userid=$userid");
}

else
{ 
    $link = parse_ini_file( dirname(__FILE__).'/param.ini', false );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <title>Guestbooook</title>
   
</head>
<body>
    <!-- navbar -->
    <div class="navbar1">
        <div class="menu">
            <a href="signup.php" class="list">Sign Up</a>
            <a href="login.php" class="list">Login </a>
            <a href="#" class="list">About Us</a>
        </div>
        <a href="signup.php"><img src="./images/logo.png" alt="Logo" class="logo"></a>
    </div>

<!-- login Form -->
<div class="bg-register">
    <div class="container">
        <div class="box-register">
            <div class="box">
        <div class="heading">
            <b>LOGIN</b>
        </div>
            <form class="form" method="POST" action="controller/doLogin.php">
                <div class="form-group">
                    <label>Username</label>
                    <br>
                    <input type="text" name="username" id="username" class="form"
                    placeholder="Input Username / Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <br>
                    <input type="password" name="password" id="password" class="form"
                    placeholder="Input Password">
                </div>
                <!-- <div class="form-group">
                    <label>Event ID</label>
                    <br>
                    <input type="text" name="eventid" id="eventid" class="form"
                    placeholder="Input Event ID">
                </div> -->

                <button type="submit" name="btnLogin" class="btn btn-success"> Log In </button>
                <br><br>
                <a href="<?=$link['login'];?>">Login with Amazon Cognito</a>
                <br><br>
                <a href="signup.php">Don't have an account? Sign Up here!</a>
            </form>
        </div>
    </div>
</body>
</html>

<?php } ?>
