<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial;
            text-align: center;
            background: #ffe4ec;
        }

        .calc {
            margin: 100px auto;
            padding: 20px;
            width: 250px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 10px pink;
        }

        input {
            width: 90%;
            height: 40px;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: right;
        }

        button {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 18px;
            border: none;
            border-radius: 10px;
            background: pink;
            cursor: pointer;
        }

        button:hover {
            background: #ff99bb;
        }
    </style>
<body>
    <div>
        <input type="text"id="calc">
        <br>
        <button onclick="don()">✅</button>
        <button onclick="affiche()">❎</button>
        <button onclick="eface()">🧽</button>
        <ul id="list"></ul>
       

    </div>
    <script>
        
function don(){
    let val=document.getElementById("calc").value;
    if (val !==""){
        let li=document.createElement("li");
        li.textContent=val;
        document.getElementById("list").appendChild(li);
        document.getElementById("calc").value="";
    }


    }
    function eface(){
         document.getElementById("calc").value="";

    }
    li.onclick = function(){
    li.remove();
}
    </script>
    
    
</body>
</html>