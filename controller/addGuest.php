<?php
session_start();
include "./../database/db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    date_default_timezone_set('America/Chicago');
    $info = getdate();
    $date = $info['mday'];
    $month = $info['mon'];
    $year = $info['year'];
    $hour = $info['hours'];
    $min = $info['minutes'];
    $sec = $info['seconds'];

    $current_date = date("F j, Y, g:i a");
    $name = $_POST['name'];
    $message = $_POST['message'];

    if($name == NULL || $message == NULL)
    {
    	$_SESSION['failAddGuest'] = 'Every form must be filled!';
        header("Location: ./../view.php");
    }
    else
    {
        $sql = "INSERT INTO guest VALUES(null,? , ? , ?)";    
	    $addGuest = $conn->prepare($sql);
        $addGuest->bind_param('sss',$current_date, $name, $message);
        $addGuest->execute();
        $_SESSION['msg'] = 'add guest Success!';
	    header("location: ./../view.php");
    }
}

?>