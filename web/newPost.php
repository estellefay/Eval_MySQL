
<?php 
session_start();
include_once('controlers/user.ctrl.php');
include_once('controlers/database.ctrl.php');
redirect_login();

if(check('title') && check('author') && check('category') && check('content')) {
    insertPublish($db);
    echo"Ton article est posté";
} else {
    echo"Remplire les champs vide";
}

?>
 
<h2>New Publish</h2>

<form method=POST action="?action=plublish">
<input type="text" name="title" placeholder="Title">
<input type="text" name="author" placeholder="Author">
<input type="text" name="category" placeholder="Category">
<textarea name="content" placehotlder="Content"></textarea>

<input type="submit">



</form>