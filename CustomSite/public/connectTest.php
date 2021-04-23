<?php require_once('../templates/header2.php'); ?>

<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in <span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
        <label for="inputUsername" >Username</label>
        <input name="username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>

<?php
        require "config.php";
        require "common.php";
        
        escape($myusername = $_POST['username']);
        escape($mypassword = $_POST['password']);


        try {
            $pdo = new PDO("mysql:host=$host", $username, $password, $options);
            echo 'DB connected';
        } catch
        (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        $stmt = $pdo->query("SELECT username FROM databasetest.login WHERE username = '$myusername' and password = '$mypassword'");
        while ($row = $stmt->fetch()) {

            if ($row > 0) {
                session_start();
                $_SESSION["username"] = $myusername;
                $_SESSION['Active'] == true;
                header("location: index.php");
            } else {
                $error = "Your Login Name or Password is invalid";
            }
        }
