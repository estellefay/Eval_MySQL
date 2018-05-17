<?php
session_start();
include_once('controlers/user.ctrl.php');
include_once('controlers/database.ctrl.php');
redirect_login();
//function listPost($db)
?>

<h1>Hello</h1>
<h2>List of my post</h2>


<?php foreach(listPostAll($db) as $post): ?>
<li>
        <a href="?action=delete&id=<?= $post['id'] ?>" style="color:red">Delete</a>
		<a href="?action=update&id=<?= $post['id'] ?>" style="color:green">Update</a>
		<a href="#"><?= $post['title'] ?>(<?= $post['category'] ?>)</a>
</li> 
<?php endforeach; ?>
</ul>

<?php if (isset($_GET['action']) && $_GET['action'] == "delete" &&  isset($_GET['id'])) { // Si j'ai action et qu'il est egaler à delete et que j'ai l'info du iD
    echo('Deleting id: ' . $_GET['id'] . '<br/>');
     deletePost($db, $_GET['id']); // faire la fonction en fonction de l'id cliquer 
}

if (isset($_GET['action']) && $_GET['action'] == "update" &&  isset($_GET['id'])): ?>   
<?php $post = getPost($db, $_GET['id']); ?>
    <form method="POST" action="?action=do-update">
        <h2>Update your post</h2>
        <fieldset>
            <input type="hidden" value="<?= $post['id'] ?>" style="width: 16px"/>
            <input type="text" name="title" value="<?= $post['title'] ?>"> <p>Title</p>
            <input type="text" name="category" value="<?= $post['category'] ?>"> <p>Category</p>
            <input type="submit"/>   
        </fieldset>
    </form>
<?php endif; ?>

<?php if (isset($_GET['action']) && $_GET['action'] == "do-update") {
   utdateToNew($db, $post['id']);
}