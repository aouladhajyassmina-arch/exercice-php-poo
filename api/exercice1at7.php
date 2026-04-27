<?php
session_start();
include_once 'Panier.php';

// إنشاء panier إلا ما كانش
if (!isset($_SESSION['cpanier'])) {
    $_SESSION['cpanier'] = new Panier();
    $_SESSION['cid'] = 1;
}

$p = $_SESSION['cpanier'];
$contenu = count($p->getTableau_fruit());

// ACTION ADD
if(isset($_POST['actionadd'])) {
    $nbpommes = $_POST['nb_pommes'];
    $nbpoires = $_POST['nb_poires'];
    $nbbananes = $_POST['nb_bananes'];

    for ($i=0; $i<$nbpommes; $i++) {
        $p->Ajouter_fruit(new Fruit($_SESSION['cid'], "pomme", 1, 'images/pomme.jpg'));
        $_SESSION['cid']++;
    }

    for ($i=0; $i<$nbpoires; $i++) {
        $p->Ajouter_fruit(new Fruit($_SESSION['cid'], "poire", 1.5, 'images/poire.jpg'));
        $_SESSION['cid']++;
    }

    for ($i=0; $i<$nbbananes; $i++) {
        $p->Ajouter_fruit(new Fruit($_SESSION['cid'], "banane", 2, 'images/banane.jpg'));
        $_SESSION['cid']++;
    }

    header("Location: store.php");
    exit();
}

// ACTION SUPPRIMER
if(isset($_GET['actionsup'])) {
    $p->supprimer($_GET['actionsup']);
    header("Location: store.php");
    exit();
}

// DECONNEXION
if(isset($_GET['actiondec'])) {
    session_destroy();
    header("Location: connection.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Panier</title>

<style>
body {
    background: linear-gradient(135deg, #efc75b, #956e03);
    font-family: Arial;
    color: #fff;
    text-align: center;
}

h1 {
    color: gold;
}

form {
    background: rgb(185, 155, 63);
    border-radius: 15px;
    width: 300px;
    margin: 20px auto;
}

input {
    margin: 10px;
    padding: 8px;
    border-radius: 8px;
    border: none;
}

input[type="submit"] {
    background: gold;
    color: #800000;
    font-weight: bold;
    cursor: pointer;
}

a {
    color: gold;
    text-decoration: none;
}

table {
    margin: 20px auto;
    border-collapse: collapse;
    background: white;
    color: black;
}

th {
    background: #800000;
    color: gold;
    padding: 10px;
}

td {
    padding: 10px;
}

img {
    border-radius: 10px;
}
</style>

</head>

<body>

<h1>Votre Panier contient : <?= $contenu ?> fruits</h1>

<form method="POST">
    <fieldset>
        <legend>Ajouter au panier</legend>

        <input type="number" name="nb_pommes" placeholder="Pommes" required><br>
        <input type="number" name="nb_poires" placeholder="Poires" required><br>
        <input type="number" name="nb_bananes" placeholder="Bananes" required><br>

        <input type="submit" name="actionadd" value="Ajouter">
    </fieldset>
</form>

<a href="store.php?actionlist=all"><h2>Voir le panier</h2></a><br>
<a href="store.php?actiondec=dec"><h2>Déconnexion</h2></a>

<?php
// AFFICHAGE PANIER
if(isset($_GET['actionlist'])) {
    $contenu = $p->getTableau_fruit();

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Photo</th><th>Action</th></tr>";

    foreach ($contenu as $fruit) {
        echo "<tr>";
        echo "<td>".$fruit->getNom()."</td>";
        echo "<td>".$fruit->getPrix_unitaire()."</td>";
        echo "<td><img src='".$fruit->getPhoto()."' width='50'></td>";
        echo "<td><a href='store.php?actionsup=".$fruit->getId()."'>Supprimer</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<h1>Total : ".$p->Prix_total()." DH</h1>";
}
?>

</body>
</html>