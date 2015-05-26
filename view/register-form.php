<link type="text/css"  rel="stylesheet" href="CSS/register.css"> 
<?php
    require_once(__DIR__ . "/../model/config.php");
    ?>
<div class="container">
<h1 id="Register">Register</h1>
<form class="navbar-form navbar-left" method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    
    <div  class="form-group" id="Register">
        <label for="email"></label>
        <!--this is the form to submit information that you want to send to the database-->
        <input type="text" class="form-control" placeholder="Email" type="text" name="email" />          
    </div>
       
    <div  class="form-group" id="Register">
        <label for="username"></label>
        <!--where you put your username in when you are regestering-->
        <input class="form-control" placeholder="Username"  type="text" name="username" />
    </div>
    
    <div  class="form-group" id="Register">
         <label for="password"></label>
         <!--where you input your password-->
         <input class="form-control" placeholder="Password"  type="password" name="password" />
    </div>
   
    <div  class="form-group" id="Register">
        <button class="btn btn-default" type="submit">Submit</button>
        <!--SUBMIT!!!-->
    </div>
    
</form>
</div>
   <!-- <div class="container">
        <h1 id="Register">Register</h1>
        <form  method="post" action="<?php/* echo $path . "controller/create-user.php"; ?>">
            <div class="form-group" id="Register">
                <input type="text" method="post" placeholder="Email" class="form-control">
            </div>

            <div class="form-group" id="Register">
                <input type="text" method="post" placeholder="Username" class="form-control">
            </div>
            <div class="form-group" id="Register">
                <input type="password" method="post" placeholder="Password" class="form-control">
            </div>

            <div id='Register'>
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div> -->
    </body>
</html>
        
<!--    <h1>Register</h1>

    <form class="navbar-form navbar-left" method="post" action="">

        <div class="form-group" id="Register">
            this is the form to submit information that you want to send to the database
            <input type="text" class="form-control" type="text" placeholder="email" />          
        </div>

        <div class="form-group" id="Register">
            where you put your username in when you are regestering
            <input  type="text" class="form-control" type="text" placeholder="username" />
        </div>

        <div class="form-group" id="Register">
            where you input your password
            <input type="text" class="form-control" type="text" placeholder="password" />
        </div>

        <div>
            <button class="btn btn-default" type="submit">Submit</button>
            SUBMIT!!!
        </div>
            <div class="alert alert-info" role="alert">NOTE: Usernames and passwords are case sensitive.</div>
    </form>
-->
