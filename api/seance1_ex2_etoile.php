<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    text-align: center;
    font-family: Arial, sans-serif;
    padding-top: 50px;
}

body {
    color: #d63384;
    font-size: 20px;
    line-height: 22px;
}

body::after {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255,105,180,0.2), transparent);
    pointer-events: none;
}

span.star {
    color: #ff1493;
    text-shadow: 0 0 5px #ff69b4, 0 0 10px #ff69b4;
}
</style>
</head>
<body>
<?php
function triangle($a){
for($i=1;$i<=$a;$i++){
for($j=$i;$j<=$a;$j++){
      echo("&nbsp;&nbsp");
}
for($p=1;$p<=(2*$i-1);$p++){
    echo"*";
}
echo"<br>";
    
}
  
}
triangle(6)


?>
    
</body>
</html>