<html lang="en">
    <head>
        <title>App HUB</title>
        <link rel="shortcut icon" href="IMG/Logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.theme.min.css">
        <!--        <link type="text/css"  rel="stylesheet" href="css/custom-style.css">-->
        <link type="text/css" rel="stylesheet" href="css/forum.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    <body>
        <div class="blog-masthead">
            <nav class="blog-nav" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a  href="index.php" id='APP'><img src="IMG/Logo.png" alt="Logo" class="img-rounded" height="48" width="80" id='APP' ></a>
                        <a class="blog-nav-item" href="index.php">Home</a>
                        <a class="blog-nav-item" href="register.php">Register</a>
                        <a class="blog-nav-item active" href="index.php">Forum</a>
                        
                        <!--the code in navigation.php makes both links post.php and logout-user.php visible only once the user has been signed in-->
                        <a class="blog-nav-item" href="<?php echo $path . "controller/logout-user.php" ?>">logout</a>
                        <a class="blog-nav-item" href="<?php echo $path . "post.php" ?>">Post</a>
                    </div>
                </div>
             </div>
</nav>

    <?php
        require_once (__DIR__ . "/controller/login-verify.php");
        ?><!--these are the variables that make index.php receive information from other files-->
        <?php
        require_once (__DIR__ . "/view/header.php");

        if (authenticateUser()) {
            require_once(__DIR__ . "/view/navigation.php");
        }

        require_once (__DIR__ . "/controller/create-db.php");

        require_once (__DIR__ . "/view/footer.php");

        require_once (__DIR__ . "/controller/read-posts.php");
        ?>
        
       
        
</body>
</html>