<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
</head>
<style>
    body {
        height: 100vh;
        background-image: url("https://www.fodors.com/assets/destinations/703674/wine-road-ammerschwihrkayserberg-alsace-lorraine-france_980x650.jpg");
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
    }

    #heading1 {
        text-align: center;
    }

    #content {
        margin-left: 100px;
    }

    .doneList {
        text-decoration: line-through;
    }
</style>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>