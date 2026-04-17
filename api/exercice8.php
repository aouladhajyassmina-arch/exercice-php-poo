<?php
function verifier($p1, $p2) {
    if ($p1 == "DEV101" && $p2 == "123") {
        return true;
    } else {
        return false;
    }
}

$message = "";

if (isset($_POST['conn'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if (verifier($login, $pass)) {
        $message = "✅ Connexion réussie";
    } else {
        $message = "❌ Login ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Login - TDM Classroom</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(135deg, #ffb6c1, #ffe6f0);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Card */
.container {
    background: white;
    padding: 40px;
    border-radius: 20px;
    width: 350px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    text-align: center;
}

/* Title */
h2 {
    color: #ff4d88;
}

/* Inputs */
input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    transition: 0.3s;
}

input:focus {
    border-color: #ff4d88;
    box-shadow: 0 0 8px #ffb6c1;
}

/* Buttons */
.btn {
    width: 48%;
    padding: 10px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold;
    margin-top: 10px;
}

.login {
    background: #ff4d88;
    color: white;
}

.login:hover {
    background: #e6005c;
}

.reset {
    background: #ddd;
}

.reset:hover {
    background: #bbb;
}

/* Message */
.message {
    margin-top: 15px;
    font-weight: bold;
}
</style>

</head>
<body>

<div class="container">
    <h2>💖 Connexion</h2>

    <form method="POST">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="pass" placeholder="Password" required>

        <div>
            <input type="submit" name="conn" value="Connexion" class="btn login">
            <input type="reset" value="Annuler" class="btn reset">
        </div>
    </form>

    <div class="message">
        <?php echo $message; ?>
    </div>
</div>

</body>
</html>