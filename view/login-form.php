<?php

    require_once(__DIR__ . "/../model/config.php");
      if(authenticateUser()){?>
         <div class = "container">
                <div class = "jumbotron">              
                    
       if you wish to make a new account and/or login please logout of this account first!!!
<a class="btn btn-primary btn-md" type="button" href="controller/logout-user.php" class="btn btn-default">Logout</a>
<a class="btn btn-primary btn-md" type="button" href="index.php" class="btn btn-default">Home</a>
                </div>
          </div >
          <?php
            //this is to make the page redirect once the form has been sent to the  database
        die();
    }  
?>


