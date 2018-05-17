<?php 
include_once('controlers/database.ctrl.php');

?>

<h1>Hello, look many comments</h1>

<li><a href="?action=order">Order</a></li>
	
<li><a href="?action=display10">Display only 10</a></li>

<li><a href="?action=displayAdmin">Diplay only comment Admin</a></li>
<li><a href="?action=removeAdmin">Remove comments Admin</a></li>
<li><a href="?action=insertComments">Add comments</a></li>
<li><a href="?action=changeAdmintoPierre">Replace Admin to Pierre</a></li>
<li><a href="?action=insertCommentsCustum">Add comments Dynamique</a></li>
</ul>


<ul>
	<?php if(!isset($_GET['action'])): ?>
		<?php foreach (recupComments($db) as $comments):?>
			<li>Comment : User - <?= $comments['user'] ?> Comments - <?= $comments['comments'] ?> Date <?= $comments['createdAt'] ?></li>
		<?php endforeach ; ?>
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'order'): ?>
		<?php foreach (orderComments($db) as $orderComments):?>
			<li>Comment : User - <?= $orderComments['user'] ?> Comments - <?= $orderComments['comments'] ?> Date <?= $orderComments['createdAt'] ?></li>
		<?php endforeach ; ?>
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'display10'): ?>
		<?php foreach (diplay10($db) as $display10):?>
			<li>Comment : User - <?= $display10['user'] ?> Comments - <?= $display10['comments'] ?> Date <?= $display10['createdAt'] ?></li>
		<?php endforeach ; ?>
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'displayAdmin'): ?>
		<?php foreach (diplayAdmin($db) as $diplayAdmin):?>
			<li>Comment : User - <?= $diplayAdmin['user'] ?> Comments - <?= $diplayAdmin['comments'] ?> Date <?= $diplayAdmin['createdAt'] ?></li>
		<?php endforeach ; ?>

	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'removeAdmin'): ?>
		<?php removeAdmin($db); ?>
		<?php foreach (recupComments($db) as $comments):?>
			<li>Comment : User - <?= $comments['user'] ?> Comments - <?= $comments['comments'] ?> Date <?= $comments['createdAt'] ?></li>
		<?php endforeach ; ?>
		
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'insertComments'): ?>
		<?php insertComments($db); ?>
		<?php foreach (recupComments($db) as $comments):?>
			<li>Comment : User - <?= $comments['user'] ?> Comments - <?= $comments['comments'] ?> Date <?= $comments['createdAt'] ?></li>
		<?php endforeach ; ?>
	
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'changeAdmintoPierre'): ?>
		<?php changeAdmintoPierre($db) ?>		
		<?php foreach (recupComments($db) as $comments):?>
			<li>Comment : User - <?= $comments['user'] ?> Comments - <?= $comments['comments'] ?> Date <?= $comments['createdAt'] ?></li>
		<?php endforeach ; ?>	

	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'insertCommentsCustum'): ?>
		<form action="?action=newCommentCustumDo" method="post">
			<input type="text" name="user">User
			<textarea name="comments" id="" cols="30" rows="10">Comment
			</textarea>
			<input type="submit" value="send">
		</form>
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'newCommentCustumDo'): ?>
		<?php insertCommentsCostum($db); ?>


		<?php foreach (recupComments($db) as $comments):?>
			<li>Comment : User - <?= $comments['user'] ?> Comments - <?= $comments['comments'] ?> Date <?= $comments['createdAt'] ?></li>
		<?php endforeach ; ?>	
	<?php  endif; ?>
</ul>



<?php /* <?php foreach (recupComments($db) as $comments):?>
<li>Comment : User - <?= $comments['user'] ?> Comments - <?= $comments['comments'] ?> Date <?= $comments['createdAt'] ?></li>
<?php if(isset($_GET['action']) && $_GET['action'] == 'order'): ?>
		<ul>
			<?php foreach(orderComments($db) as $orderComments):?>
			<li>Comment : User - <?= $orderComments['user'] ?> Comments - <?= $orderComments['comments'] ?> Date <?= $orderComments['createdAt'] ?></li>
			<?php endforeach ; ?>
		</ul>
	<?php endif ; ?>

<?php endforeach ; ?>
</ul> */ ?>