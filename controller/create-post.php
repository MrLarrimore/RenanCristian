<?php
    require_once(__DIR__ ."/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        
        header("Location: " . $path . "index.php");
        die();
    } 
    //used to insert posts
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
  

    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title',  post = '$post'");
    
    
    if($query){
        header("Location: " . $path . "index.php");
  //i changed it so that once the user has inserted a post it wont say "successfully inserted post" and it will take the user back to the home page

    }
    else{    

        die();
    }


