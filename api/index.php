<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Yasmina</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f6fa;
            color: #333;
        }

        header {
            background: #eb87da;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            text-align: center;
            padding: 50px 20px;
        }

        /* IMAGE PROFIL */
        .hero img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #e884c8;
        }

        .hero h1 {
            font-size: 2.5em;
            color: #2d3436;
        }

        .hero p {
            margin-top: 10px;
            color: #636e72;
        }

        .projects {
            padding: 40px 20px;
        }

        .projects h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            color: #e187db;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #2d3436;
            color: white;
            margin-top: 30px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .hero h1 {
                font-size: 1.8em;
            }

            .hero img {
                width: 120px;
                height: 120px;
            }
        }
        .buttons {
    text-align: center;
    margin: 20px;
}

.buttons button {
    padding: 10px 20px;
    margin: 10px;
    border: none;
    background: #e98ae9;
    color: white;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.buttons button:hover {
    background: #e056fd;
}

/* PROJECTS */
.projects {
    padding: 40px;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

/* CARD */
.card {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-8px);
}

.card a {
    display: block;
    margin-top: 10px;
    color: #ea9ad9;
    font-weight: bold;
    text-decoration: none;
}

    </style>
</head>
<body>

<header>
    <h1>Yasmina</h1>
    <p>Stagiaire 1ère année Développement</p>
    <nav>
        <a href="#">Accueil</a>
        <a href="#projects">Ateliers PHP</a>
        <a href="contact_me.html">Contact</a>
    </nav>
</header>

<section class="hero">
    <!-- IMAGE -->
    <img src="me.png" alt="Photo Yasmina">

    <h1>Bienvenue sur mon portfolio 👋</h1>
    <p>Je suis Yasmina, stagiaire en développement web. Voici mes ateliers PHP.</p>
</section>

<section class="projects" id="projects">
    <h2>Mes Ateliers PHP</h2>

    <div class="buttons">
    <button onclick="showAtelier(1)">Atelier 1</button>
    <button onclick="showAtelier(2)">Atelier 2</button>
</div>

<!-- PROJECTS -->
<section class="projects">
    <div class="grid">

        <!-- ATELIER 1 -->
        <div class="card atelier1">
            <h3>Seance 1</h3>
            <a href="seance1_ex2_etoile.php">Voir exercice</a>
            <a href="r1.pdf">Voir rapport</a>
        </div>

        <div class="card atelier1">
            <h3>Seance 2</h3>
            <a href="seance1_ex1.php">Voir exercice</a>
            <a href="r2.pdf">Voir rapport</a>
        </div>
        <div class="card atelier1">
            <h3>Seance 3</h3>
            <a href="seance1_ex1.php">Voir exercice</a>
            <a href="r2.pdf">Voir rapport</a>
        </div>
        <div class="card atelier1">
            <h3>Seance 4</h3>
            <a href="seance1_ex1.php">Voir exercice</a>
            <a href="r2.pdf">Voir rapport</a>
        </div>

        <!-- ATELIER 2 -->
        <div class="card atelier2 hidden">
            <h3>Seance 1</h3>
            <a href="#">Voir exercice</a>
            <a href="r3.pdf">Voir rapport</a>
        </div>

        <div class="card atelier2 hidden">
            <h3>Seance 2</h3>
            <a href="#">Voir exercice</a>
            <a href="r4.pdf">Voir rapport</a>
        </div>
        <div class="card atelier2 hidden">
            <h3>Seance 3</h3>
            <a href="#">Voir exercice</a>
            <a href="r4.pdf">Voir rapport</a>
        </div>
        <div class="card atelier2 hidden">
            <h3>Seance 4</h3>
            <a href="#">Voir exercice</a>
            <a href="r4.pdf">Voir rapport</a>
        </div>
        <div class="card atelier2 hidden">
            <h3>Seance 5</h3>
            <a href="#">Voir exercice</a>
            <a href="r4.pdf">Voir rapport</a>
        </div>
        <div class="card atelier2 hidden">
            <h3>Seance 6</h3>
            <a href="#">Voir exercice</a>
            <a href="r4.pdf">Voir rapport</a>
        </div>

    </div>
</section>

<footer>
    <p>© 2026 Yasmina - Portfolio</p>
</footer>

</body>
</html>