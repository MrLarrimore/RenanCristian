<?php
    require_once(__DIR__ ."/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        ?><!--This is to make sure the user is first signed in--><?php
        die();
    } 
    
    
  
?>

