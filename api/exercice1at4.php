<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit();
}

$error = "";

if (isset($_POST['login'])) {

    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if ($user === "admin" && $pass === "1234") {
        $_SESSION['user'] = $user;
        header("Location: home.php");
        exit();
    } else {
        $error = "Login incorrect !";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Login" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Connexion</button>
</form>

<p><?php if($error) echo $error; ?></p>