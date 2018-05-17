<?php 
session_start();
include_once('controlers/database.ctrl.php');

if (check('username') && check('email') && check('password1') && check('password2') ) {
    $result = createUser($db, $_POST['username'], $_POST['email'], $_POST['password1'], $_POST['password2']); #stocker variable
    var_dump($result);
        if ($result === false ){
             echo"thE USERNAME OR THE EMAIL IS EXIST";
        } elseif  ( $result === "noPassword") {
            echo"You password is not same";
        } else {
            echo"Your user is add"; 

        }
} else {
    echo"Complete empty child";
}

?>

<h1>CREATE PROFILE</h1>
<form action="" method="post">
<input type="text" name="username"> Username
<input type="email" name="email"> Email
<input type="password" name="password1"> PaSSWORD
<input type="password" name="password2"> Retape ton password
<input type="submit" value="Send">
</form>
