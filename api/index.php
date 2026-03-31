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
            background: #6c5ce7;
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
            color: #6c5ce7;
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
        <a href="#">Contact</a>
    </nav>
</header>

<section class="hero">
    <h1>Bienvenue sur mon portfolio 👋</h1>
    <p>Je suis Yasmina, stagiaire en développement web. Voici mes ateliers PHP.</p>
</section>

<section class="projects" id="projects">
    <h2>Mes Ateliers PHP</h2>

    <div class="grid">
        <div class="card">
            <h3>Atelier 1</h3>
            <p>Introduction au PHP</p>
            <a href="seance1_ex2_triangle_etoile.php">exercice 1</a>
        </div>

        <div class="card">
            <h3>Atelier 2</h3>
            <p>Formulaires en PHP</p>
            <a href="#">Voir plus</a>
        </div>

        <div class="card">
            <h3>Atelier 3</h3>
            <p>Connexion base de données</p>
            <a href="#">Voir plus</a>
        </div>

        <div class="card">
            <h3>Atelier 4</h3>
            <p>CRUD en PHP</p>
            <a href="#">Voir plus</a>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Yasmina - Portfolio</p>
</footer>

</body>
</html>