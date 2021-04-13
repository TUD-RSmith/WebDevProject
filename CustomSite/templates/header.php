<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="header">
    <a href="index.php" class="logo">Grahamz Gamez</a>
    <div class="header-right">
        <a class="active" href="index.php">Home</a>
        <a href="gamelibrary.php">Game Library</a>
        <a href="accounts.php">User Accounts</a>
    </div>

</div>


<?php
if (!session_id()) {
    session_start();
}
if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in. Remember, we set $_SESSION['Active'] == true in login.php*/
    header("location:login.php");
    exit;
}
?>




