<!DOCTYPE html>
<html lang="en">
    <head>
        <title>APPhub</title>
        <link rel="shortcut icon" href="IMG/APPhub2.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.theme.min.css">
        <link type="text/css"  rel="stylesheet" href="css/custom-style.css">
        <link href="jumbotron.css" rel="stylesheet">
    </head>

    <body>

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
                                <a class="btn btn-success" href="<?php echo $path . "controller/logout-user.php" ?>">Logout</a>
                            </div>
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </nav>


        <div class="jumbotron">
            <div class="container">
                <h1 id='H1'>Welcome</h1>
                <p>Here you will be able to learn more about students of the APP Academy by having the ability to look at projects they have made.</p>
                <p><a class="btn btn-danger btn-lg" href="LearnMore.php" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
        <div class='container'>
            <hr>        
        </div>
        <div class="container" id='bottom'>
            <div class="row">
                <div class="col-md-4">
                    <h2>Websites</h2>
                    <p>This will take you to a list of viewable websites created by APP Academy students.</p>
                    <p><a class="btn btn-default" href="websiteView.php" role="button">View Websites &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Games</h2>
                    <p>This will take you to a list of playable games made by APP Academy students</p>
                    <p><a class="btn btn-default" href="gameView.php" role="button">View Games &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Forum</h2>
                    <p>This will take you to a forum where you can create random topic or simply create a post asking for help on how how to solve and certain error or implement a certain feature</p>
                    <p><a class="btn btn-default" href="Forum.php" role="button">View Forum &raquo;</a></p>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Sainz & Robles Inc. 2015</p>
            </footer>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>


    </body>
