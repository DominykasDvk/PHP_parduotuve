<!DOCTYPE html>
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
            <h1>Jusu sugeneruotas įvertinimas parduotuvei !</h1>
		
        <?php
        // uzsukamas atsakymu masyvas pazimimi tinkami atsakymai:
            $name = $_POST['Name'];
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
            echo "<div>$totalCorrect / 5 žvaigždelių</div>";
            
                
        ?>
         <div class="main">
            <h1>Jusu įvertinimas:</h1>
        </div>
        <?php
        //vertinimo isvedimas:
                if ($totalCorrect === 0){
                
                echo "<h2>Kinietiškas šudas</h2>";
                   
                }else if($totalCorrect === 1){
                    
                echo "<h2>Nieko gero</h2>";
                    
                }else if($totalCorrect === 2){
                    
                echo "<h2>Kinitiškai bet ne ant tiek blogai</h2>";
                
                }else if($totalCorrect === 3){
                    
                echo "<h2>Lenkiška kokybė..</h2>";
                 
                }else if($totalCorrect === 4){
                    
                echo "<h2>Jau gerai !</h2>";
                
                }else if($totalCorrect === 5){
                    
                echo "<h2>Vokiškas standartas !</h2>";
                }
                
            // duomenu irasimas apie vertinima:
        session_start();
            include("connection.php");
            include("functions.php");
    
        if($_SERVER['REQUEST_METHOD']== "POST"){
            
            $query = "insert into vertinimas (vardas,quest1,quest2,quest3,quest4,quest5,atsakymas)"
                    . "values ('$name','".$_POST['question-1-answers']."','".$_POST['question-2-answers']."','".$_POST['question-3-answers']."','".$_POST['question-4-answers']."','".$_POST['question-5-answers']."','$totalCorrect')";
            $res = mysqli_query($conn, $query);
            
            if($res === TRUE){
            echo "Duomenys išiusti !";
            }
        }
          ?>   
            <br><br>
            <form action="index.php?logout='1'" align="center">
                <input type="submit" value="Atsijungti" class="button"/>
            </form>
	<br>
	</div>
</body>
</html>