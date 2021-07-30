<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.php">
    <title>Event ID doesn't Exist</title>

    <style>
        .container{
            width: 100%;
            padding: 10px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1.5px solid black;
            border-radius: 15px;
            background-color: transparent;
            display: center;
        }

        .btnYes, .btnNo{
            padding: 10px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1.5px solid black;
            border-radius: 15px;
            background-color: transparent;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="heading">
            <b>GUESTBOOK</b>
        </div>
        
        <div class="col-md-12">
            <p>Event ID does not exist.</p>
            <br>
            <p>Do you want to create an event?</p>
            <br>
            <?php $userid = $_GET['userid']; ?>
            <button class="btn btn-outline-info"><a href="controller/createEvent.php?userid=<?=$userid?> ">Yes</a></button>
            <br>
            <button class="btn btn-outline-info"><a href="login.php">No</a></button>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>