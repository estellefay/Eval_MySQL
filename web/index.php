<?php
session_start();
include_once('controlers/database.ctrl.php');

if(isset($_GET['action']) && $_GET['action'] == 'logout') {
	session_destroy();
	header('Location: http://192.168.57.10/');
	exit();
}
if(isset($_POST['username']) && isset($_POST['password'])) {
	$result = connect_user($db, $_POST['username'], $_POST['password']);
}
?>

<header>
	<h1>Website</h1>
</header>


<main>
<?php if(isset($result) && $result !== true): ?>
	<?php if($result == 'username'): ?>
	<div style="border:1px solid red">Wrong username</div>
	<?php else: ?>
	<div style="border:1px solid red">Wrong password</div>
	<?php endif; ?>
<?php endif; ?>

<?php if(!isset($_SESSION['user'])): ?>
	<h3>Please login</h3>
	<form action="" method="POST">
		<input type='text' name="username"/>
		<input type='password' name="password"/>
		<input type='submit'/>
	</form>
<?php else: ?>
	<h3>Welcome <?= $_SESSION['user']['username'] ?> (<?= $_SESSION['user']['id'] ?>)</h3>
	<a href="?action=logout">Logout</a>
<?php endif; ?>

</main>
