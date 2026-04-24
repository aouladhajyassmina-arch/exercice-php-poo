<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #f194da, #a50d8f);
    margin: 0;
    padding: 0;
    color: #333;
}

form {
    background: #fff;
    padding: 25px;
    width: 400px;
    margin: 40px auto;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

h2 {
    text-align: center;
    color: #a81b83;
}

label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

input, select, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 6px;
    border: 1px solid #ccc;
    transition: 0.3s;
}

input:focus, select:focus, textarea:focus {
    border-color: #f187de;
    outline: none;
    box-shadow: 0 0 5px rgba(230, 72, 206, 0.77);
}

input[type="checkbox"] {
    width: auto;
    margin-right: 5px;
}

input[type="submit"] {
    background: #ea66d6;
    color: white;
    border: none;
    padding: 10px;
    margin-top: 15px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

input[type="submit"]:hover {
    background: #d85ac5;
}

table {
    width: 60%;
    margin: 20px auto;
    border-collapse: collapse;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

td {
    padding: 10px;
    border-bottom: 1px solid #eee;
}

tr:nth-child(even) {
    background: #f7f7f7;
}
</style>
</head>
<body>
    <?php
if (isset($_POST['envoyer'])) {
    

    $num_inscription = $_POST['num_inscription'];
    $nom_prenom = $_POST['nom_prenom'];
    $ville = $_POST['ville'];
    $annee_naissance = $_POST['annee_naissance'];
    $sexe = $_POST['sexe'];
    $loisirs = implode(', ', $_POST['loisirs']);
    $infos_complementaires = $_POST['infos_complementaires'];
 

    echo '<h2>Récapitulatif des informations</h2>';
    echo '<table border="1">';
    echo '<tr><td>Numéro d\'inscription</td><td>' . $num_inscription . '</td></tr>';
    echo '<tr><td>Nom et prénom</td><td>' . $nom_prenom . '</td></tr>';
    echo '<tr><td>Ville</td><td>' . $ville . '</td></tr>';
    echo '<tr><td>Année de naissance</td><td>' . $annee_naissance . '</td></tr>';
    echo '<tr><td>Sexe</td><td>' . $sexe . '</td></tr>';
    echo '<tr><td>Loisirs</td><td>' . $loisirs . '</td></tr>';
    echo '<tr><td>Informations complémentaires</td><td>' . $infos_complementaires . '</td></tr>';
    echo '</table>';
}
?>

<form method="post" action="">
    <label>Numéro d'inscription :</label><br>
    <input type="text" name="num_inscription"><br>

    <label>Nom et prénom :</label><br>
    <input type="text" name="nom_prenom"><br>

    <label>Ville :</label><br>
    <input type="text" name="ville"><br>

    <label>Année de naissance :</label><br>
    <input type="number" name="annee_naissance"><br>

    <label>Sexe :</label><br>
    <select name="sexe">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select><br>

    <label>Loisirs :</label><br>
    <input type="checkbox" name="loisirs[]" value="Sport"> Sport<br>
    <input type="checkbox" name="loisirs[]" value="Musique"> Musique<br>
    <input type="checkbox" name="loisirs[]" value="Lecture"> Lecture<br>

    <label>Informations complémentaires :</label><br>
    <textarea name="infos_complementaires"></textarea><br>

    <input type="submit" name="envoyer" value="Envoyer">
</form>

</body>
</html>
