<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #ff9a9e, #fecfef);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background: rgba(255,255,255,0.2);
    padding: 30px;
    border-radius: 15px;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(255,105,180,0.5);
    text-align: center;
}

input[type="text"] {
    width: 250px;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: none;
    background: #fff0f5;
    outline: none;
    transition: 0.3s;
}

input[type="text"]:focus {
    box-shadow: 0 0 10px #ff69b4;
    transform: scale(1.05);
}

input[type="submit"] {
    background: linear-gradient(45deg, #ff69b4, #ff1493);
    color: white;
    border: none;
    padding: 10px 25px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

input[type="submit"]:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px #ff1493;
}

.result {
    margin-top: 15px;
    color: #d63384;
    font-weight: bold;
}
</style>

</head>
<body>

<form method="POST" action="">
    Nom : <input type="text" name="nom"><br> 
    Prénom : <input type="text" name="prenom"><br> 
    <input type="submit" name="valider" value="Valider"> 

<?php 
if(isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    echo "<div class='result'>Bienvenue $nom $prenom</div>";
}
?>
</form> 

</body>
</html>