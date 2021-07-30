<?php 
session_start();
if($_SESSION['eventid'] == NULL)
{
    header("location: ./../signup.php");
}

else
{ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Guestbook</title>
</head>
<body>

    <form action="controller/doLogout.php" method="POST">
        <div class="signoutbutton">
            <input type="submit" value="Sign Out" class="btn">
        </div>
    </form>

    <div class="body">
        <div class="heading">
            <h2>GUESTBOOK</h2>
            <h4>Event ID: <?=$_SESSION['eventid']?></h4>
        </div>
        <br>
        <div class="form">
            <form action="controller/addGuest.php"  method="POST">
                <div class="form-content">
                    <label for="name" class="label-heading">Name</label>
                    <br>
                    <input type="text" name="name" class="form-text">
                </div>
                <br>
                <div class="form-content">
                    <label for="Message" class="label-heading">Message</label>
                    <br>
                    <input type="text" name="message" class="form-text">
                </div>
                <br>
                <input type="submit" value="Submit" class="btn" id="submitbtn">
            </form>
        </div>
        <br>
        <div class="results">
            <h3>Messages</h3>
            <br>
            <table>
                <tr>
                    <th id="time">Time</th>
                    <th id="name">Name</th>
                    <th id="message">Message</th>
                </tr>
                <tr>
                    <td class="td-spacing">8:00PM</td>
                    <td class="td-spacing">Budi</td>
                    <td class="td-spacing">Congratulations!</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>

<?php 
}
?>