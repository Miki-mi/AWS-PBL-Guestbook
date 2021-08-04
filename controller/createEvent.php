<?php
    include "./../database/db.php";
    session_start();
    
    $eventid = $_SESSION['eventid'];
    $sql = "INSERT INTO events VALUES(null,? )";    
	$addGuest = $conn->prepare($sql);
    $addGuest->bind_param('s',$eventid);
    $addGuest->execute();
    $_SESSION['msg'] = 'add event Success!';

    $createTable = "CREATE TABLE $eventid (
        `guestID` int(255) NOT NULL AUTO_INCREMENT,
        `date` varchar(255) NOT NULL,
        `name` varchar(50) NOT NULL,
        `message` varchar(255) NOT NULL,
        PRIMARY KEY (guestID)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    $addTable = $conn->query($createTable);

    $eventid = $_GET['eventid'];
    header("location: ./../view.php?eventid=$eventid");

        
?>