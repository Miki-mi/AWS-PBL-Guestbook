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

    $current_date = date("F j Y g:i a");
    $name = $_POST['name'];
    $message = $_POST['message'];

    if($name == NULL || $message == NULL)
    {
    	$_SESSION['failAddGuest'] = 'Every form must be filled!';
        header("Location: ./../view.php");
    }
    else
    {
        $eventid = $_SESSION['eventid'];
        $sql = "INSERT INTO $eventid VALUES (null, '$current_date', '$name', '$message')";
	    $addGuest = $conn->query($sql);
        $_SESSION['msg'] = 'add guest Success!';
	    header("location: ./../view.php");
    }
}

?>