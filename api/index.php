<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Yasmina</title>

    <style>
       .buttons {
    text-align: center;
    margin: 30px 0;
}

.buttons button {
    padding: 12px 25px;
    margin: 10px;
    border: none;
    background: #e98ae9;
    color: white;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.buttons button:hover {
    background: #e056fd;
}

/* cards buttons */
.card button {
    display: block;
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    border: none;
    border-radius: 20px;
    background: linear-gradient(135deg, #ff9ff3, #f368e0);
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.card button:hover {
    transform: scale(1.05);
}

/* hide */
.hidden {
    display: none;
}

    </style>
</head>
<body>
<section class="projects" id="projects">
    <h2>Mes Ateliers PHP</h2>

    <!-- BUTTONS CENTER -->
    <div class="buttons">
        <button onclick="showAtelier(1)">Atelier 1</button>
        <button onclick="showAtelier(2)">Atelier 2</button>
    </div>

    <!-- ATELIER 1 -->
    <div class="grid atelier1">
        <div class="card">
            <h3>Seance 1</h3>
            <button onclick="location.href='seance1_ex2_etoile.php'">Exercice</button>
            <button onclick="location.href='r1.pdf'">Rapport</button>
        </div>

        <div class="card">
            <h3>Seance 2</h3>
            <button onclick="location.href='seance1_ex1.php'">Exercice</button>
            <button onclick="location.href='r2.pdf'">Rapport</button>
        </div>

        <div class="card">
            <h3>Seance 3</h3>
            <button onclick="location.href='exercice3.php'">Exercice</button>
            <button onclick="location.href='r3.pdf'">Rapport</button>
        </div>

        <div class="card">
            <h3>Seance 4</h3>
            <button onclick="location.href='exercice4.php'">Exercice</button>
            <button onclick="location.href='r4.pdf'">Rapport</button>
        </div>
    </div>

    <!-- ATELIER 2 -->
    <div class="grid atelier2 hidden">
        <div class="card">
            <h3>Seance 1</h3>
            <button>Exercice</button>
            <button>Rapport</button>
        </div>

        <div class="card">
            <h3>Seance 2</h3>
            <button>Exercice</button>
            <button>Rapport</button>
        </div>
    </div>
</section>
<script>
ffunction showAtelier(num) {
    let a1 = document.querySelector('.atelier1');
    let a2 = document.querySelector('.atelier2');

    if(num === 1){
        a1.classList.remove('hidden');
        a2.classList.add('hidden');
    } else {
        a2.classList.remove('hidden');
        a1.classList.add('hidden');
    }
}
</script>

<footer>
    <p>© 2026 Yasmina - Portfolio</p>
</footer>

</body>
</html>