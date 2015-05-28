<html lang="en">
    <head>
        <title>APPhub</title>
        <link rel="shortcut icon" href="IMG/APPhub2.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.theme.min.css">
<!--        <link type="text/css"  rel="stylesheet" href="css/custom-style.css">-->
            <link type="text/css" rel="stylesheet" href="css/register.css" rel="stylesheet">
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    <body>
    <div class="blog-masthead">
        <nav class="blog-nav" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a  href="index.php" id='APP'><img src="IMG/APPhub2.png" class="img-rounded" alt="Logo" height="48" width="60" id='APP' ></a>
                        <a class="blog-nav-item" href="index.php">Home</a>
                        <a class="blog-nav-item active" href="index.php">Register</a>
                        <a class="blog-nav-item" href="forum.php">Forum</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <form class="navbar-form navbar-right">
                        </form>
                    </div>
                </div>
        </nav>
    </div>

</html>

<?php
    require_once(__DIR__ ."/view/header.php");
    ?><!--this makes login.php receive information from other files--><?php
    require_once(__DIR__ ."/view/register-form.php");
    
    require_once(__DIR__ ."/view/footer.php");
?>
  
</body>
