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
        $error = "Login ou mot de passe incorrect !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TDM-Classroom</title>
    <style>
        body {
    margin: 0;
    font-family: Arial;
    background: #f5f5f5;
}

/* Header */
header {
    background: #2f3542;
    color: white;
    padding: 15px;
    display: flex;
    justify-content: space-between;
}

header a {
    color: white;
    margin-left: 15px;
    text-decoration: none;
}

/* Banner */
.banner {
    background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f');
    background-size: cover;
    height: 200px;
    color: white;
    display: flex;
    align-items: center;
    padding-left: 30px;
}

/* Login box */
.login-box {
    width: 400px;
    margin: 30px auto;
    background: #2f3542;
    color: white;
    padding: 20px;
    border-radius: 5px;
}

.login-box input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
}

.buttons {
    display: flex;
    gap: 10px;
}

button {
    padding: 10px;
    border: none;
    cursor: pointer;
}

button[type="submit"] {
    background: #1e90ff;
    color: white;
}

button[type="reset"] {
    background: gray;
    color: white;
}

.error {
    color: red;
}

/* Footer */
footer {
    background: #2f3542;
    color: white;
    text-align: center;
    padding: 10px;
}
    </style>

</head>
<body>

<header>
    <h2>TDM-Classroom</h2>
    <nav>
        <a href="#">Accueil</a>
        <a href="#">Nouveau</a>
        <a href="#">Rechercher</a>
    </nav>
</header>

<section class="banner">
    <h1>Bienvenue à TDM-Classroom</h1>
</section>

<div class="login-box">
    <h3>Veuillez vous authentifier</h3>

    <form method="POST">
        <label>Login :</label>
        <input type="text" name="username" required>

        <label>Password :</label>
        <input type="password" name="password" required>

        <div class="buttons">
            <button type="submit" name="login">Connexion</button>
            <button type="reset">Annuler</button>
        </div>
    </form>

    <p class="error"><?php echo $error; ?></p>
</div>

<footer>
    <p>TDM-Classroom - Copyright ©</p>
</footer>

</body>
</html>