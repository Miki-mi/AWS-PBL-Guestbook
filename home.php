<?php 
// session_start();

// $_SESSION['userid'] = NULL;
// $userid = $_SESSION['userid'];
// if($userid != NULL)
// {
//     header("location: ./view.php?userid=$userid");
// }

// else
// { 
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
    <title>GUESTBOOK</title>
   
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

<!-- event Form -->
<div class="bg-register">
    <div class="container">
        <div class="box-register">
            <div class="box">
        <div class="heading">
            <b>ENTER EVENT</b>
        </div>
            <form method="POST" action="controller/doEnterEvent.php">
                <div class="form-group">
                    <label>Event ID</label>
                    <br>
                    <input type="text" name="eventid" id="eventid" class="form" placeholder="Input Event ID">
                </div>

                <button type="submit" name="btnLogin" class="btn btn-success"> Submit </button>
            </form>
        </div>
    </div>
</body>
</html>

<?php //} ?>