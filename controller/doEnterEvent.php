<?php
include "./../database/db.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $eventid = $_POST['eventid'];
    
    $sql = "SELECT * FROM events WHERE eventID = '$eventid'";
    $result = $conn->query($sql);

    session_start();
    session_regenerate_id();
    
    $row=$result->fetch_assoc();
    
    if($eventid==$row['eventID'])
    {
        $_SESSION['eventid'] = $eventid;
        header("location: ./../view.php?eventid=$eventid");
    }
    else
    {
        //prompt membuat event baru
        $_SESSION['eventid'] = $eventid;
        header("location: ./../eventnotexist.php?eventid=$eventid");
        // die ("event tidak ditemukan");
    }
}

?>