<?php

require_once('userLogin.php');
require_once('../templates/header2.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>


<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>

    <?php

    if(isset($_POST['Submit']))
    {

        /* Check if the form's username and password matches */
        /* these currently check against variable values stored in config.php but later we will see how these can be checked against information in a database*/
        if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
        {

            /* Success: Set session variables and redirect to protected page */
            $_SESSION['Username'] = $Username;
            $_SESSION['Active'] = true;
            header("location:index.php");
            exit;
    }
        else
            echo 'Incorrect Username or Password';
    }

    ?>



</div>
</body>
</html>
