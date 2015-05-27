
<html lang="en">
    <head>
        <title>App HUB</title>
        <link rel="shortcut icon" href="IMG/Logo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css"  rel="stylesheet" href="CSS/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="CSS/bootstrap.theme.min.css">
        <link type="text/css" rel="stylesheet" href="CSS/form.css">
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    <body>
        
        <nav>
        <div class="blog-masthead">
            <nav class="blog-nav" class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a  href="index.php" id='APP'><img src="IMG/Logo.png" alt="Logo" class="img-rounded" height="48" width="80" id='APP' ></a>
                        <a class="blog-nav-item" href="index.php">Home</a>
                        <a class="blog-nav-item" href="register.php">Register</a>
                        <a class="blog-nav-item active" href="index.php">Forum</a>
                        <!--the code in navigation.php makes both links post.php and logout-user.php visible only once the user has been signed in-->
                        <a class="blog-nav-item" href="view/form.php">Post</a>
                    </div>
                </div>
                </nav>
             </div>
            </nav>
          

<h1>Create Blog post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title"></label>
        <!--here is the form for the blog  post  form where our posts are sent to the database-->
        <input type="text" placeholder="Name your post" name="title"/>
    </div>
    
    <div>
        <label for="post"></label>
        <!--here is the form for the blog  post  form where our posts are sent to the database-->
        <textarea placeholder="Say/Ask something smart" name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>   
</form>

<?php
require_once(__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>
    </body>
</html>     