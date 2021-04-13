<?php
session_start(); /* First we must start the session */
session_destroy(); /* Destroy started session */

header("location:login.php");  /* Redirect to login page */
exit;
