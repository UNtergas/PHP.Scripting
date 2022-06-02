<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
</head>
<style>
    body {
        height: 100vh;
        background-image: url("https://www.gouvernement.fr/sites/default/files/styles/plein-cadre/public/locale/image/2021/12/paris_afp.jpg?itok=UeoDMcF0");
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
<?php
    require_once "db.php";
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password)
                     VALUES (NULL,'$username', '" . md5($password) . "' )";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">ALREADY HAVE AN ACCOUNT ??Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>