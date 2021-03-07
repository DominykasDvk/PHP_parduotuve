<?php
// sesijos užvedimas
session_start();
    include("connection.php");
    include("functions.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0e43bb6e60.js" crossorigin="anonymous"></script>
        <title>Dronai.lt</title>
    </head>
    
    <body>
       <div class="title">
            <h1>ŽAIBO VIZIJA</h1>
        <hr>
         <p>Ar jūs esate kokiu nors darbų entuzijastas ?</p> 
         <p>Jungites prie mūsų parduotuvės bedruomėnės ir pirkite drasiai gerus, bei patikimus įrankius bei medžiagas :)</p>
            <br>
                <img src="img/Parde.jpg" id="shopas">
            <br>
        <p>Prašome registruotis arba prisijungti !</p>
            <hr>
        <nav>
            <a href="login.php" class="button">PRISIJUNGTI</a>
            <a href="reg.php" class="button">REGISTRUOKIS</a>  
        </nav>
            <hr>
            <p>Sekite mus socialiniuose tinkuolse !</p>
        <main>
            <i class="fab fa-facebook-square fa-2x"></i>
            <i class="fab fa-instagram fa-2x"></i>
            <i class="fab fa-bitcoin fa-2x"></i>
        </main>
            <br>
       </div>
    </body>
</html>
