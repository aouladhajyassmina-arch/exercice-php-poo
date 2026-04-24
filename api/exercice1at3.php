<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
   body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #ff9ec4, #ffc1da);
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* FORMULAIRE */
form {
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    width: 350px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    margin-bottom: 30px;
}

form label {
    font-weight: bold;
    color: #d63384;
}

form input,
form select,
form textarea {
    width: 100%;
    padding: 8px;
    border-radius: 8px;
    border: 1px solid #ffb6d5;
    margin-top: 5px;
    margin-bottom: 15px;
    outline: none;
}

form input:focus,
form textarea:focus {
    border-color: #ff4da6;
    box-shadow: 0 0 5px #ff4da6;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    background: linear-gradient(45deg, #ff4da6, #ff80bf);
    color: white;
    font-weight: bold;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.05);
    background: linear-gradient(45deg, #ff3385, #ff66b2);
}

/* CV CARD */
.cv {
    width: 320px;
    background: #fff;
    border-radius: 20px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    border: 2px solid #ffb6d5;
}

.cv img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 4px solid #ff4da6;
    margin-bottom: 15px;
}

.cv strong {
    color: #d63384;
}

h2 {
    color: #fff;
    text-shadow: 1px 1px 5px #000;
}
</style>
</head>
<body>

<form action="traitement.php" method="POST" enctype="multipart/form-data">
    
    <label>Photo :</label>
    <input type="file" name="image" required><br><br>

    <label>Numéro :</label>
    <input type="text" name="numero"><br><br>

    <label>Nom :</label>
    <input type="text" name="nom"><br><br>

    <label>Prénom :</label>
    <input type="text" name="prenom"><br><br>

    <label>Ville :</label>
    <input type="text" name="ville"><br><br>

    <label>Sexe :</label>
    <select name="sexe">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select><br><br>

    <label>Âge :</label>
    <input type="number" name="age"><br><br>

    <label>Loisirs :</label>
    <input type="text" name="loisirs"><br><br>

    <label>Informations :</label>
    <textarea name="info"></textarea><br><br>

    <button type="submit">Envoyer</button>

</form>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $numero = $_POST['numero'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];
    $age = $_POST['age'];
    $loisirs = $_POST['loisirs'];
    $info = $_POST['info'];


    $image = $_FILES['image'];

    $maxSize = 3 * 1024 * 1024; // 3MB
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    $fileName = $image['name'];
    $fileTmp = $image['tmp_name'];
    $fileSize = $image['size'];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));


    if ($fileSize > $maxSize) {
        die("Erreur : fichier trop grand !");
    }

    if (!in_array($extension, $allowedExtensions)) {
        die("Erreur : extension non autorisée !");
    }


    $newName = time() . "." . $extension;


    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir);
    }

    $destination = $uploadDir . $newName;


    if (move_uploaded_file($fileTmp, $destination)) {


        echo "<h2>CV</h2>";
        echo "<div style='border:1px solid #000; width:300px; padding:10px;'>";

        echo "<img src='$destination' width='100'><br><br>";
        echo "<strong>Numéro :</strong> $numero<br>";
        echo "<strong>Nom :</strong> $nom $prenom<br>";
        echo "<strong>Ville :</strong> $ville<br>";
        echo "<strong>Sexe :</strong> $sexe<br>";
        echo "<strong>Âge :</strong> $age<br>";
        echo "<strong>Loisirs :</strong> $loisirs<br>";
        echo "<strong>Infos :</strong> $info<br>";

        echo "</div>";

    } else {
        echo "Erreur lors de l'upload.";
    }
}
?>

</body>
</html>