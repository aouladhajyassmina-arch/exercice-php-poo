<?php
class Voiture {
    private $marque;
    private $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function afficher() {
        // حماية XSS
        $marque = htmlspecialchars($this->marque);
        $modele = htmlspecialchars($this->modele);

        return "
        <div class='card'>
            <h2>Voiture</h2>
            <p><strong>Marque:</strong> $marque</p>
            <p><strong>Modèle:</strong> $modele</p>
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Voiture</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 250px;
    text-align: center;
}
</style>
</head>

<body>

<?php
$v1 = new Voiture("Toyota", "Corolla");

// أفضل: echo بدل echo داخل function
echo $v1->afficher();
?>

</body>
</html>