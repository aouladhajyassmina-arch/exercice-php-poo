<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #ff9a9e, #fecfef);
    text-align: center;
    padding-top: 50px;
}

.container {
    background: rgba(255,255,255,0.2);
    padding: 20px;
    border-radius: 15px;
    display: inline-block;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(255,105,180,0.5);
}

a {
    display: inline-block;
    margin: 8px;
    padding: 10px 15px;
    background: linear-gradient(45deg, #ff69b4, #ff1493);
    color: white;
    text-decoration: none;
    border-radius: 20px;
    font-weight: bold;
    transition: 0.3s;
}

a:hover {
    transform: scale(1.2);
    box-shadow: 0 0 15px #ff1493;
}
</style>

</head>
<body>

<div class="container">
<?php 
for ($i = 5; $i <= 100; $i += 5) { 
    echo "<a href='resultat1.php?val=$i'>$i</a>"; 
} 
?>
</div>

</body>
</html>