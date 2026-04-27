<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Bienvenue <?php echo $_SESSION['user']; ?></h2>

<a href="save.php">Ajouter étudiant</a><br>
<a href="display.php">Afficher étudiants</a><br>
<a href="search.php">Rechercher</a><br>
<a href="logout.php">Déconnexion</a>