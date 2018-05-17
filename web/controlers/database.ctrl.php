<?php
$db = new mysqli(
	"192.168.57.10", 
	"estelle", 
	"password", 
	"blog"
);


function connect_user($db, $username, $password) {
	$query = $db->prepare("SELECT id, username, password, email FROM users WHERE username=?");
	$query->bind_param("s", $username);
	$query->execute();
	$user = $query->get_result();
	$user = $user->fetch_assoc();
	if($user === NULL) {
		return 'username';
	}
	elseif($user['password'] != md5($password)) {
		return 'password';
	}
	else {
		$_SESSION['user'] = array(
			"id"       => $user['id'],
			"username" => $user['username'],
			"email"    => $user['email']
		);
		return true;
	}
}


function listPostAll($db) {
	$query = "SELECT * FROM posts"; 
	$dbTitle = $db->query($query);
	$dbTitle = $dbTitle->fetch_all(MYSQLI_ASSOC);
	return $dbTitle;
}

function deletePost($db, $id) {
	$query = $db->prepare("DELETE FROM posts WHERE id=?");
	$query->bind_param("s", $id);
	$query->execute();
}

function getPost($db, $id) {
	$query = $db->prepare("SELECT * FROM posts WHERE id=?");
	$query->bind_param("s", $id);
	$query->execute();
	$posts = $query->get_result();
	$posts = $posts->fetch_assoc();
	return $posts;
}

function utdateToNew($db, $id) {
	$query = $db->prepare("UPDATE posts SET title=?, category=? WHERE id=?"); 
	$query->bind_param("sss", $_POST['title'], $_POST['category'], $id);
	$query->execute();
}

function insertPublish($db) {
	$query = $db->prepare("INSERT INTO posts(title, content, author, category, created_at) VALUE (?, ?, ?, ?, CURRENT_TIMESTAMP)");
	$query->bind_param("ssss", $_POST['title'], $_POST['content'], $_POST['author'], $_POST['category']);
	$query->execute();
}

function check($key) {
	if(isset($_POST[$key]) && !empty($_POST[$key])) {
		return true;
	}
	return false;
}

function createUser($db, $username, $email, $password1, $password2) {
	if ($password1 === $password2)  { 
		$query = $db->prepare("INSERT INTO users(username, email, password) VALUE ( ?, ? ,?)");
		$passwordMD5 = md5($_POST['password1']);
		$query->bind_param("sss", $username, $email, $passwordMD5);
		return $query->execute();
	} else {
		return "noPassword";
	}
}

