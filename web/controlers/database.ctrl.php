

<?php 

# Definit base donnée 
$db = new mysqli(
	"192.168.57.10", 
	"estelle", 
	"password", 
	"blod2"
);

#fonction uqi récupère mes comments / user et date 
function recupComments($db) {
    $query = "SELECT user, comments, createdAt FROM Comments";
    $comments = $db->query($query);
    $comments = $comments->fetch_all(MYSQLI_ASSOC);
    return $comments;
}

function orderComments($db) {
    $query ="SELECT user, comments, createdAt FROM Comments ORDER BY createdAt DESC";
    $orderComments = $db->query($query);
    $orderComments = $orderComments->fetch_all(MYSQLI_ASSOC);
    return $orderComments;
}

function diplay10($db) {
    $query ="SELECT user, comments, createdAt FROM Comments ORDER BY id LIMIT 10";
    $display10 = $db->query($query);
    $display10 = $display10->fetch_all(MYSQLI_ASSOC);
    return $display10;
}

function diplayAdmin($db) {
    $query ="SELECT user, comments, createdAt FROM Comments WHERE user='blabla'";
    $diplayAdmin = $db->query($query);
    $diplayAdmin = $diplayAdmin->fetch_all(MYSQLI_ASSOC); # cree tableau
    return $diplayAdmin;
}

function removeAdmin($db) {
    $query ="DELETE FROM Comments WHERE user='admin'";
    $removeAdmin = $db->query($query);
    return $removeAdmin;
    
}

function insertComments($db) {
    $query ="INSERT INTO Comments (user, comments, createdAt) VALUES ('admin', 'vfbdghfdjnh,g', CURRENT_TIME)";
    $insertComments = $db->query($query);
    return $insertComments;
    
}

function changeAdmintoPierre($db) {
    $query ="UPDATE Comments SET user = 'pierre' WHERE user = 'admin';";
    $insertComments = $db->query($query);
}


function insertCommentsCostum($db) {
    $query =$db->prepare("INSERT INTO Comments (user, comments, createdAt) VALUES (?, ?, CURRENT_TIME)");
    $query->bind_param("ss", $_POST['user'], $_POST['comments']); 
    $query->execute();   
}