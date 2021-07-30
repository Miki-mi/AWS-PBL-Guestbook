<?php
    include "./../database/db.php";
    session_start();

    $eventid = $_SESSION['eventid'];
        
    if($eventid == NULL)
    {
    	$_SESSION['failAddEvent'] = 'Event ID must be filled';
        header("Location: ./../login.php");
    }

    else
    {
        $sql = "INSERT INTO events VALUES(null,? )";    
	    $addGuest = $conn->prepare($sql);
        $addGuest->bind_param('s',$eventid);
        $addGuest->execute();
        $_SESSION['msg'] = 'add event Success!';

        header("location: ./../view.php");
    }  
        
?>