<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="IMG/APPhub2.png">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.theme.min.css">
        <link type="text/css"  rel="stylesheet" href="css/custom-style.css">
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <?php
                require_once (__DIR__ . "/model/config.php");
                ?>
                <div class="navbar-header">
                    <a  href="index.php" id='APP'><img src="IMG/APPhub2.png" class="img-rounded" alt="Logo" height="48" width="60" id='APP' ></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <?php
                    require_once (__DIR__ . "/controller/login-verify.php");
                    if (!authenticateUser()) {
    //renan dont mess with this at all, it makes it so that you cant see the login form if you are logged in                    
                        ?>
                        <form class="navbar-form navbar-right" method='post' action='<?php echo $path . "controller/login-user.php" ?>'>
                            <div class="form-group">
                                <div>
                                    <label for="username"></label>
                                    <!--login form where you login-->
                                    <input type="text" placeholder="Username" class="form-control" name="username" />
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        require_once (__DIR__ . "/controller/login-verify.php");
                        if (!authenticateUser()) {
    //renan dont mess with this at all, it makes it so that you cant see the password form if you are logged in
                            ?>
                            <div class="form-group">
                                <div>
                                    <label for="password"> </label>
                                    <!--where you input your password-->
                                    <input type="password" placeholder="Password" class="form-control" name="password" />
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        require_once (__DIR__ . "/controller/login-verify.php");
                        if (!authenticateUser()) {
    //renan dont mess with this at all, it makes it so that you cant see the Sign in button if you are logged in
                            ?>
                            <button type="submit" class="btn btn-success">Sign in</button>
                            <?php
                        }
                        ?>
                        <?php
                        require_once (__DIR__ . "/controller/login-verify.php");
                        if (!authenticateUser()) {
    //renan dont mess with this at all, it makes it so that you cant see the Register button if you are logged in
                            ?>
                            <a type="submit" class="btn btn-info" href="register.php">Register</a>
                            <?php
                        }
                        ?>
                                    <?php
                            require_once (__DIR__ . "/controller/login-verify.php");
                            if (authenticateUser()) {
    //renan dont mess with this at all, it makes it so that you cant see the login form if you are logged in
                                ?>
                            <div class="navbar-form navbar-right">
                           <a class="btn btn-success" href="<?php echo $path . "controller/logout-user.php" ?>">logout</a>
                            </div>
                                <?php
                            }
                            ?>
                        </form>
                </div>
            </div>
        </nav>
    
    <div class="jumbotron" id="Jumbo2">
        <h1>Websites</h1>
        <h4>Here you will see all the websites APP Academy students have made</h4>
    </div>
    <div class="container">
    <hr>
    </div>
</html>