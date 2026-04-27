<?php
session_start();
include("traitement.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['save'])) {

    Save(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['ville'],
        $_FILES['photo']['tmp_name'],
        $_FILES['photo']['name']
    );

    echo "Étudiant ajouté avec succès !";
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="ville" placeholder="Ville" required>
    <input type="file" name="photo" required>
    <button type="submit" name="save">Enregistrer</button>
</form>