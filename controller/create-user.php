<?php

require_once(__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");

//gathers all info. to make a new user

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//the code below makes a salted password for the db. so thaat hackers cant see it

$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users SET "
        . "email = '$email',"
        . "username = '$username',"
        . "password = '$hashedPassword',"
        . "salt = '$salt'");
if ($query) {
    
  header("Location: " . $path . "index.php");
    
} else {

    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
    
    
    