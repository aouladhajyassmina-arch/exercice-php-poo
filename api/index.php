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
    background: linear-gradient(135deg, #f5f0e6, #e8d8c3);
    color: #4b2e2e;
}
        

       header {
    background: linear-gradient(135deg, #6b1e1e, #a9745a);
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
    background: background: linear-gradient(135deg, #f6d5f7, #fbe9d7);;
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
    background: linear-gradient(135deg, #c9a227, #8b5e3c);
    color: white;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
}

.buttons button:hover {
    background: linear-gradient(135deg, #d4af37, #6b1e1e);
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
    color: #a9745a;
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
            background: #6b1e1e;
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
    background: linear-gradient(135deg, #c9a227, #8b5e3c);
    color: white;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.buttons button:hover {
    background: linear-gradient(135deg, #d4af37, #6b1e1e);
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
    color: #a9745a;
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
    background: linear-gradient(135deg, #f5f0e6, #e8d8c3);
    color: #4b2e2e;
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
    background: linear-gradient(135deg, #c9a227, #8b5e3c);
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
    background: linear-gradient(135deg, #f5f0e6, #e8d8c3);
    color: #4b2e2e;
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
.skills {
    text-align: center;
    padding: 60px 20px;
}

.skills h2 {
    font-family: 'Playfair Display', serif;
    color: var(--primary);
    margin-bottom: 40px;
}

.skills-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
}

.skill {
    text-align: center;
}

.circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: conic-gradient(var(--primary) 0deg, #eee 0deg);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-bottom: 10px;
}

.circle span {
    position: absolute;
    font-weight: bold;
    color: var(--primary);
}

.circle::before {
    content: "";
    width: 90px;
    height: 90px;
    background: white;
    border-radius: 50%;
    position: absolute;
}
.hero, .projects, .projects2, .skills, .projects1 {
    opacity: 0;
    transform: translateY(60px);
    animation: fadeUp 1s ease forwards;
}

.hero { animation-delay: 0.2s; }
.projects2 { animation-delay: 0.4s; }
.projects { animation-delay: 0.6s; }
.skills { animation-delay: 0.8s; }
.projects1 { animation-delay: 1s; }

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.card {
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    transition: 0.4s;
}

.card:hover {
    transform: translateY(-12px) scale(1.05);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}
.hero img {
    transition: 0.5s;
}

.hero img:hover {
    transform: scale(1.1) rotate(3deg);
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
    <!-- ATELIER 1 -->
    <button onclick="toggleAtelier('atelier1')">Atelier 1</button>
    <div class="grid atelier1 hidden">
      <div class="card">
        <h3>Séance atelier 1</h3>
        <a href="seance1_ex2_etoile.php">Voir exercice 1</a>
        <a href="r1.pdf">Voir rapport</a>
      </div>
      <div class="card">
        <h3>Séance atelier 1</h3>
        <a href="seance1_ex1.php">Voir exercice 2</a>
        <a href="r2.pdf">Voir rapport</a>
      </div>
      <div class="card">
        <h3>Séance atelier 1</h3>
        <a href="exercice3.php">Voir exercice 3</a>
        <a href="r3.pdf">Voir rapport</a>
      </div>
      <div class="card">
        <h3>Séance atelier 1</h3>
        <a href="exercice4.php">Voir exercice 4</a>
        <a href="r4.pdf">Voir rapport</a>
      </div>
    </div>

    <!-- ATELIER 2 -->
    <button onclick="toggleAtelier('atelier2')">Atelier 2</button>
    <div class="grid atelier2 hidden">
      <div class="card">
        <h3>Séance atelier 2</h3>
        <a href="exercice5.php">Voir exercice 5</a>
        <a href="r5.pdf">Voir rapport</a>
      </div>
      <div class="card">
        <h3>Séance atelier 2</h3>
        <a href="exercice6.php">Voir exercice 6</a>
        <a href="r6.pdf">Voir rapport</a>
      </div>
      
      
    </div>

    <!-- ATELIER 3 -->
    <button onclick="toggleAtelier('atelier3')">Atelier 3</button>
    <div class="grid atelier3 hidden">
      <div class="card">
        <h3>Séance atelier 3</h3>
        <a href="exercice7.php">Voir exercice 7</a>
        <a href="r7.pdf">Voir rapport</a>
      </div>
    </div>

    <!-- ATELIER 4 -->
    <button onclick="toggleAtelier('atelier4')">Atelier 4</button>
    <div class="grid atelier4 hidden">
      <div class="card">
        <h3>Séance atelier 4</h3>
        <a href="exercice8.php">Exercice 8</a>
        <a href="r8.pdf">Voir rapport</a>
        <a href="https://github.com/aouladhajyassmina-arch/atelie4r.git">Voir GitHub</a>
      </div>
    </div>
  </div>
  
<!-- ATELIER 5 -->
 <button onclick="toggleAtelier('atelier4')">Atelier 5</button>
    <div class="grid atelier5 hidden">
      <div class="card">
        <h3>Séance atelier 5</h3>
        <a href="exercice8.php">Ennoncé</a>
        <a href="r8.pdf">Voir rapport</a>
         <a href="https://github.com/aouladhajyassmina-arch/atelier5.git">Repo GitHub</a>
      </div>
    </div>
  </div>
  <!-- ATELIER 6 -->
    <button onclick="toggleAtelier('atelier6')">Atelier 6</button>
    <div class="grid atelier5 hidden">
      <div class="card">
        <h3>Séance atelier 6</h3>
        <a href="exercice.php">Ennoncé</a>
        <a href="r8.pdf">Voir rapport</a>
         <a href="https://github.com/aouladhajyassmina-arch/atelier6.git">Repo GitHub</a>
      </div>
    </div>
  </div>




</section>
</section>
<section class="skills">
    <h2>My Skills</h2>
    <div class="skills-container">

        <div class="skill">
            <div class="circle" data-percent="98">
                <span>98%</span>
            </div>
            <p>HTML</p>
        </div>

        <div class="skill">
            <div class="circle" data-percent="90">
                <span>90%</span>
            </div>
            <p>CSS</p>
        </div>

        <div class="skill">
            <div class="circle" data-percent="70">
                <span>70%</span>
            </div>
            <p>Bootstrap</p>
        </div>

        <div class="skill">
            <div class="circle" data-percent="45">
                <span>45%</span>
            </div>
            <p>JavaScript</p>
        </div>

        <div class="skill">
            <div class="circle" data-percent="30">
                <span>20%</span>
            </div>
            <p>PHP</p>
        </div>

        <div class="skill">
            <div class="circle" data-percent="69">
                <span>20%</span>
            </div>
            <p>Python</p>
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
function toggleAtelier(atelier) {
  const ateliers = document.querySelectorAll('.' + atelier);
  ateliers.forEach(el => {
    el.classList.toggle('hidden');
  });
}
document.querySelectorAll('.circle').forEach(circle => {
    let percent = circle.getAttribute('data-percent');
    let degree = 0;

    let interval = setInterval(() => {
        degree++;
        circle.style.background = `conic-gradient(#c9a227 ${degree}deg, #eee ${degree}deg)`;

        if (degree >= (percent / 100) * 360) {
            clearInterval(interval);
        }
    }, 10);
});
</script>

<footer>
    <p>© 2026 Yasmina - Portfolio</p>
</footer>

</body>
</html>