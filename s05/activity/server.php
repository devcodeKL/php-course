<?php

session_start();

class User {
    public function login($email, $password) {
        if ($email === "johnsmith@gmail.com" && $password === "1234") {
            $_SESSION['email'] = $email; 
        } else {
            $_SESSION['login_error_message'] = "Incorrect email or password.";
        }
    }
}

$user = new User();

if ($_POST['action'] === 'login') {
    $user->login($_POST['email'], $_POST['password']);
} 
else if ($_POST['action'] === 'logout') {
    session_destroy();
}

header("Location: ./index.php");

?>