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
    <title>Sign Up</title>
</head>
<body>

<div class="navbar1">
        <div class="menu">
            <a href="signup.php" class="list">Sign Up</a>
            <a href="login.php" class="list">Login </a>
            <a href="#" class="list">About Us</a>
        </div>
        <a href="signup.php"><img src="./images/logo.png" alt="Logo" class="logo"></a>
</div>

<!-- Sign-up Form -->
<div class="bg-register">
    <div class="container">
        <div class="box-register">
            <div class="box">
                <div class="heading">
                    <b>SIGN UP</b>
                </div>
                <form class="form" method="POST" action="controller/doRegister.php">
                    <div class="form-group">
                        <label>Username</label>
                        <br>
                        <input type="text" name="username" id="username" class="form"
                        placeholder="Input Username / Email">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <br>
                        <input type="email" name="email" id="email" class="form"
                        placeholder="Input Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <br>
                        <input type="password" name="password" id="password" class="form"
                        placeholder="Input Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <br>
                        <input type="password" name="ConPassword" id="ConPassword" class="form"
                        placeholder="Confirm Password">
                    </div>

                    <button type="submit" name="btnSignUp" class="btn btn-success">Sign Up</button>
                    <br><br>
                    <!-- login -->
                    <a href="https://alpacaguestbook.auth.us-east-1.amazoncognito.com/signup?client_id=1qfajb1pike0of9nj625bk6ubi&response_type=token&scope=email+openid+profile&redirect_uri=https://web.alpacagb.site/home.php" class="login">Sign up with Amazon Cognito</a>
                    <br><br>
                    <a href="login.php" class="login">Already have an account? Login here</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
