<?php
session_start();
include("traitement.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<form method="POST">
    <input type="text" name="ville" placeholder="Ville">
    <button type="submit">Rechercher</button>
</form>

<?php
if(isset($_POST['ville'])) {
    SearchByVille($_POST['ville']);
}
?>