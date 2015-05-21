
<?php

    require_once (__DIR__ . "/../model/config.php");
    
    unset($_SESSION["authenticated"]);
        //the code below restarts everything so that you have to sign in again
    session_destroy();
        //redirects to index.php
    header("Location: " . $path . "index.php");
    
    if($session_destroy){
        echo"successfully logged out";
    }
        
    
    