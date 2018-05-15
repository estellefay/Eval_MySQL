<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

    <body>
        <h1>Hello connectes you</h1>
        <form action=""  method="POST">
            <input type="text" name="email" > email
            <input type="password" name="password">password
            <input type="submit" name="send">
        </form>

    <?php    
    session_start();
        $bd = new mysqli(
            "192.168.57.10", //ip
            "estelle", // user
            "password", // MOt de passe 
            "blog" // nom de la base de donée 
        );

        if(isset($_POST['email']) && isset($_POST['password'])) {
            $query = "SELECT email, password FROM users WHERE email = '" . $_POST['email'] . "'" ; 
            $user = $bd->query($query);
            $user = $user->fetch_assoc();
            if($user == NULL) {
                echo "email is not good";
            }
            elseif ($_POST['password'] != $user['password'] ) {
                echo "Le mots de passe est faux";
            }
            else {
                echo "vous êtes connecté";
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                var_dump($_SESSION);
            }
}
?>
    </body>
</html>