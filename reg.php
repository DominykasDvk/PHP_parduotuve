<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        <title>Dronai.lt</title>
    </head>
    
    <body>
        <div class="title">
        <h1>ŽAIBO VIZIJA</h1>
        <hr>
        <h3>REGISTRUOKIS DABAR! NEMOKAMAI!</h3>
            <br>
        <h2>REGISTRACIJA</h2>
            <br>
        <form method="POST">
            <input type="text" name="Name" placeholder="Ivesk varda" ><br><br>
            <input type="text" name="Surname" placeholder="Ivesk pavarde" ><br><br>
            <input type="text" name="Username" placeholder="Sukurk vartotoja" ><br><br>
            <input type="password" name="password" placeholder="Slaptažodis" ><br><br>
            <input type="submit" name="submit" value="Registruotis" id="login"><br>            
        </form>
            <br>
            
         <?php
         // i forma irasyti duomenys siunciami i duobazes lentele users
            session_start();
                include("connection.php");
                include("functions.php");
    
        if($_SERVER['REQUEST_METHOD']== "POST"){
       
            $name = $_POST['Name'];
            $surname = $_POST['Surname'];
            $username = $_POST['Username'];
            $pwd = $_POST['password'];
        
        if(!empty($name) && !empty($surname) && !empty($username) && !empty($pwd))
        {
            $query = "insert into users (name,surname,username,password) values ('$name','$surname','$username','$pwd')";
            mysqli_query($conn, $query);
            
            header("Location: login.php");
            die;
            
            }else
            {
                header("Location: reg.php");
                echo "Blogas formatas !";
            }
    }
?>
            <h3>JAU NARYS?</h3>
        <br>
            <a href="login.php" class="button">PRISIJUNG !</a>
        <br>
            <a href="index.php" class="button">Į PRADŽIA</a>
              <br><br>
    </div>
    </body>
</html>