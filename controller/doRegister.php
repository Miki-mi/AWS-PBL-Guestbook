<?php
include "./../database/db.php";
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnSignUp']))
{
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conPass = $_POST['ConPassword'];

    if(strcmp($conPass,$pass)!=0){
        
        $_SESSION['ConPassErr'] = 'Password does not match!';
        header("Location: ./../signup.php");
    }
    else{
        
        $sql = "INSERT INTO user VALUES(null,? , ? , ?)";    
        $addUser = $conn->prepare($sql);
        $hashpass = sha1($pass);
        $addUser->bind_param('sss',$name, $email, $hashpass);
        $addUser->execute();
        $_SESSION['success_create_acc'] = 'Create Account Success!';
        //die("3");
	    header("location: ./../login.php");
    }



}

?>