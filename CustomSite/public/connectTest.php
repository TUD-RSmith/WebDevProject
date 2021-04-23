<?php

require "config.php";
require "common.php";

try {
    $pdo = new PDO("mysql:host=$host", $username, $password, $options);
    echo 'DB connected';
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

//$myusername = $_POST['username']; - This will be username input from form
//$mypassword = $_POST['password']; - this will be password input from form

$myusername = "Graham";
$mypassword = "Dublin";

escape($mypassword);
escape($myusername);


$stmt = $pdo->query("SELECT username FROM databasetest.login WHERE username = '$myusername' and password = '$mypassword'");
while ($row = $stmt->fetch())
{

    if($row > 0){
        session_start();
        $_SESSION["username"] =  $myusername;
        header("location: index.php");
    }
    else {
        $error = "Your Login Name or Password is invalid";
    }
}

?>
