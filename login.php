<?php 
session_start();

$_SESSION['userid'] = NULL;
$userid = $_SESSION['userid'];
if($userid != NULL)
{
    header("location: ./view.php?userid=$userid");
}

else
{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUESTBOOK</title>
    <style>
        *{
            margin: 5px;
            padding: 0;
        }

        .container{
            display:flex;
            justify-content: flex-end;
            align-items: baseline;
            width:100%;
        }

        .btnLogin, .btnSignUp, .btnCancel{
            padding-left: 12px;
            padding-right: 12px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 50px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .container{
            display:flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .heading{
            width: 100%;
            text-align: center;
        }

        input[type=text] {
            width: 100%;
            padding: 10px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1.5px solid black;
            border-radius: 15px;
        }

        .form-text{
            width: 400px;
            border-radius: 7px;
            padding: 5px; 
            font-size: 18px;
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <b>GUESTBOOK</b>
        </div>
        
        <div class="col-md-12">
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
                <div class="form-group">
                    <label>Event ID</label>
                    <br>
                    <input type="text" name="eventid" id="eventid" class="form"
                    placeholder="Input Event ID">
                </div>

                <button type="submit" name="btnLogin" class="btn btn-success">Log In</button>
                <br>
                <a href="signup.php">Sign Up</a>
            </form>
        </div>
    </div>
</body>
</html>

<?php } ?>