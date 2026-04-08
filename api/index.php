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
    text-align: center;
    padding: 40px;
    background: #f5f7fa;
}

.projects h2 {
    margin-bottom: 20px;
    font-size: 28px;
}

.buttons {
    margin-bottom: 30px;
}

.buttons button {
    padding: 10px 20px;
    margin: 5px;
    border: none;
    background: #007bff;
    color: white;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
}

.buttons button:hover {
    background: #0056b3;
}

.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card h3 {
    margin-bottom: 10px;
}

.card a {
    display: block;
    margin: 5px 0;
    text-decoration: none;
    color: #007bff;
}

.card a:hover {
    text-decoration: underline;
}

.hidden {
    display: none;
}

        footer {
            text-align: center;
            padding: 20px;
            background: #da63da;
            color: #ffffff;
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
    padding: auto;
    
    margin: 40px;
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
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #f6d5f7, #fbe9d7);
    min-height: 100vh;
}

h1 {
    text-align: center;
    margin: 20px;
    font-size: 45px;
    color: #fff;
    text-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

fieldset {
    width: 85%;
    margin: 40px auto;
    padding: 20px;
    border-radius: 15px;
    border: none;
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}

legend {
    font-size: 22px;
    font-weight: bold;
    color: #333;
}

input, textarea {
    width: 80%;
    padding: 10px;
    margin: 10px;
    border-radius: 8px;
    border: none;
    background: rgba(255,255,255,0.6);
}

textarea {
    height: 120px;
    resize: none;
}

button {
    display: block;
    margin: 20px auto;
    padding: 12px 30px;
    font-size: 18px;
    border-radius: 30px;
    border: none;
    background: linear-gradient(135deg, #d38bb5, #ff7eb3);
    color: white;
    cursor: pointer;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #f6d5f7, #fbe9d7);
    min-height: 100vh;
}

h1 {
    text-align: center;
    margin: 20px;
    font-size: 45px;
    color: #fff;
    text-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

fieldset {
    width: 85%;
    margin: 40px auto;
    padding: 20px;
    border-radius: 15px;
    border: none; 
    background: rgba(255,255,255,0.2);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
}

legend {
    font-size: 22px;
    font-weight: bold;
    color: #333;
}

p {
    font-size: 18px;
    margin: 10px;
    color: #333;
}

ul {
    margin: 15px;
}

li {
    margin: 8px;
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
        <a href="#projects1">Contact</a>
        <a href="#projects2">About me</a>
    </nav>
</header>


<section class="hero">
    <!-- IMAGE -->
    <img src="me.png" alt="Photo Yasmina">

    <h1>Bienvenue sur mon portfolio 👋</h1>
    <p>Je suis Yasmina, stagiaire en développement web. Voici mes ateliers PHP.</p>
</section>

<title>About Me</title>



<section class="projects2" id="projects2">
<h1>ABOUT ME 🌸</h1>



<fieldset>
    <legend>Who am I?</legend>

    <p>Hi 👋 I'm Yasmina, a first-year development trainee passionate about web development and design.</p>

    <p>I enjoy learning new technologies and building beautiful and functional websites.</p>

    <ul>
        <li>💻 HTML / CSS / JavaScript</li>
        <li>🐘 PHP (beginner)</li>
        <li>🎨 UI Design lover</li>
    </ul>

    <p>My goal is to become a professional web developer and create amazing projects 🚀</p>

</fieldset>
</section>
<section class="projects" id="projects">
    <h2>Mes Ateliers PHP</h2>

    <!-- Buttons -->
    <div class="buttons">
        <button onclick="showAtelier(1)">Atelier 1</button>
        <button onclick="showAtelier(2)">Atelier 2</button>
    </div>

    <div class="grid">

        <!-- ATELIER 1 -->
        <div class="card atelier1">
            <h3>Séance 1</h3>
            <a href="seance1_ex2_etoile.php">Voir exercice</a>
            <a href="r1.pdf">Voir rapport</a>
        </div>

        <div class="card atelier1">
            <h3>Séance 2</h3>
            <a href="seance1_ex1.php">Voir exercice</a>
            <a href="r2.pdf">Voir rapport</a>
        </div>

        <div class="card atelier1">
            <h3>Séance 3</h3>
            <a href="exercice3.php">Voir exercice</a>
            <a href="r3.pdf">Voir rapport</a>
        </div>

        <div class="card atelier1">
            <h3>Séance 4</h3>
            <a href="exercice4.php">Voir exercice</a>
            <a href="r4.pdf">Voir rapport</a>
        </div>

        <!-- ATELIER 2 -->
        <div class="card atelier2 hidden">
            <h3>Séance 1</h3>
            <a href="exercice5.php">Voir exercice</a>
            <a href="r5.pdf">Voir rapport</a>
        </div>

        <div class="card atelier2 hidden">
            <h3>Séance 2</h3>
            <a href="exercice6.php">Voir exercice</a>
            <a href="r6.pdf">Voir rapport</a>
        </div>

        <div class="card atelier2 hidden">
            <h3>Séance 3</h3>
            <a href="#">Voir exercice</a>
            <a href="r7.pdf">Voir rapport</a>
        </div>

        <div class="card atelier2 hidden">
            <h3>Séance 4</h3>
            <a href="#">Voir exercice</a>
            <a href="r8.pdf">Voir rapport</a>
        </div>

    </div>
</section>
<section class="projects1" id="projects1">
    <h1>CONTACT ME 💌</h1>
<fieldset>
    <legend>Get in touch</legend>

    <form onsubmit="sendMessage(event)">
        
        <input type="text" id="name" placeholder="Your Name" required><br>
        
        <input type="email" id="email" placeholder="Your Email" required><br>
        
        <textarea id="message" placeholder="Your Message..." required></textarea><br>

        <button type="submit">Send Message</button>
    </form>
    

    
</fieldset>


</section>
<script>

function sendMessage(e){
    e.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    alert("Thank you " + name + "! Your message has been sent 💖");

    // reset form
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("message").value = "";
}
function showAtelier(num) {
    const atelier1 = document.querySelectorAll('.atelier1');
    const atelier2 = document.querySelectorAll('.atelier2');

    if (num === 1) {
        atelier1.forEach(el => el.classList.remove('hidden'));
        atelier2.forEach(el => el.classList.add('hidden'));
    } else {
        atelier1.forEach(el => el.classList.add('hidden'));
        atelier2.forEach(el => el.classList.remove('hidden'));
    }
}
</script>

<footer>
    <p>© 2026 Yasmina - Portfolio</p>
</footer>

</body>
</html>