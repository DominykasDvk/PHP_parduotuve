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
        <h3>MOKĖK IR IMK !</h3>
        
        <h2>PRISIJUNGIMAS</h2>
            <br>
        <form method="POST">
            <input type="text" name="Username" placeholder="Ivesk vartotoja"><br><br>
            <input type="password" name="password" placeholder="Slaptazodis"><br><br>
            <input type="submit" name="login" value="Prisijungti" id="login"><br>  
            
    <?php
        session_start();
            include("connection.php");
            include("functions.php");
    
    if($_SERVER['REQUEST_METHOD']== "POST"){ //jei kas nors buvo ideta i forma:
        
        $username=$_POST['Username'];
        $pwd=$_POST['password'];
        
        if(!empty($username) && !empty($pwd)){ //Nuskaito duomenys is duobeses
            
            $query ="select * from users where username='$username' limit 1";
            $result= mysqli_query($conn, $query);
            
            if($result){
                 if($result && mysqli_num_rows($result)> 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password']===$pwd){
                        $_SESSION['Username']= $user_data['Username'];
                        header("Location: parde.php"); // nusiuncia vartotoja i parduotuves dali.
                            die;
                    }
                }
            }                                            
        }else{
        echo "<br>Neteisingi duomenys !";}
    }
?>
        </form> 
        <br>
        <a href="index.php" class="button">ATGAL</a>
        <br>
    </div>
    </body>
</html>
