<?php
include "./../database/db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnSignUp'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $eventID = $_POST['eventid'];
    //$hashpassword=sha1($password);

    //$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$hashpassword'";
    //select nya belum ada db event ID
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $connection->query($sql);

    $sql2 = "SELECT * FROM events WHERE eventID = '$eventID'";
    $result2 = $connection->query($sql2);

    session_start();

    if($result->num_rows > 0) {
        // login successful

        $row=$result->fetch_assoc();
        $dbpass=$row['password'];
        if($dbpass==sha1($password))
        {
            session_regenerate_id();
            $_SESSION['username'] = $username;

            if($result2->num_rows > 0)
            {
                $row2=$result2->fetch_assoc();
                if($eventID==$row2['eventID'])
                {
                    header("location:./../view.php");
                }
            }
            else
            {
                //prompt membuat event baru
                die ("event tidak ditemukan");
            }
        }
        else
        {
            header("location:./../login.php");
        }
    }
    else
    {
        header("location:./../login.php");
    }
}
?>