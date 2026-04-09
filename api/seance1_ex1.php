<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    text-align: center;
    padding: 20px;
}

table {
    margin: 20px auto;
    border-collapse: collapse;
    background: #fff0f5;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(255, 105, 180, 0.4);
}

td {
    padding: 10px 15px;
    border: 1px solid #ffb6c1;
    font-weight: bold;
    color: #d63384;
    transition: 0.3s;
}

td:hover {
    background: #ff69b4;
    color: white;
    transform: scale(1.1);
}

tr:nth-child(even) {
    background: #ffe4e9;
}

h1 {
    color: #d63384;
}
</style>
</head>
<body>
    
</body>
<?php   
echo("<table border='3'>");
for($i=1;$i<=9;$i++){
    echo("<tr>");
    for($a=1;$a<=9;$a++){
        $b=$a*$i ;
        echo("<td>$b</td>");
    }
    echo("</tr>");

}
echo("</table>");

function TableM($linge,$colnne){
   echo("<table border='3'>");
for($i=1;$i<=$linge;$i++){
    echo("<tr>");
    for($a=1;$a<=$colnne;$a++){
        $b=$a*$i ;
        echo("<td>$b</td>");
    }
    echo("</tr>");

}
echo("</table>"); 
}
//TableM(9,9)
TableM(20,20)

?>
</html>