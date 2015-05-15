<?php
  require_once(__DIR__ ."/../model/config.php");
  
  
  function authenticateUser(){
      if(!isset($_SESSION["authenticated"])){
          return false;
      }
     //checks if the info. in the database is correct to let the user in 
      else{
          if($_SESSION["authenticated"] !=true){
              return false;
          }
          else {
              return true;
          }
      }
  }
