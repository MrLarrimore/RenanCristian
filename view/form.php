<?php
    require_once(__DIR__ ."/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    require_once (__DIR__ . "/../controller/create-post.php");

     
?>

<h1>Create Blog post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title"></label>
        <!--here is the form for the blog  post  form where our posts are sent to the database-->
        <input type="text" textholder="Name your post" name="title"/>
    </div>
    
    <div>
        <label for="post"></label>
        <!--here is the form for the blog  post  form where our posts are sent to the database-->
        <textarea textholder="Say/ask something smart" name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>   
</form>
