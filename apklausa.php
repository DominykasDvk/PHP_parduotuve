<?php
// apklausos duomenys perduodami rezultato dalei
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
        <title>Dronai.lt</title> 
    </head>
    <body>
       <div class="title">
         <h1>Patiko, parduotuvė, ĮVERTINK !! :)</h1>
         <h2>Siekiame tik geriausiu rezultatu !</h2>
		
	<form action="result.php" method="post" id="quest">
		
            <ul>            
                <li>                
                    <h3>Ar musų puslapis yra modernus ir tinka mobiliesims apartams ?</h3>                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required="required"/>
                        <label for="question-1-answers-A">Tinka </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">Netinka</label>
                    </div>                
                </li>
                
                <li>
                
                    <h3>Ar patinka sistemos darbas ?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required="required" />
                        <label for="question-2-answers-A"> Taip, viskas čia puiku !</label>
                    </div>
                    
                      <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B"> Veikia neblogai, tačiau pilna trukumu.</label>
                    </div> 
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C"> Veikia šudinai...</label>
                    </div>                    
                
                </li>
                
                <li>
                    <h3>Ar tai tokia vienitėle tokio profilio parduotuvė lietuvoje ?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required="required" />
                        <label for="question-3-answers-A">Taip, tikrai viena ir nepakartojamas</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">Ne, tokiu parduotuviu Lietuvoje marios.</label>
                    </div>   
                </li>
                
                <li>
                    <h3>Ar Prekės kokybiškos ?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required="required" />
                        <label for="question-4-answers-A">Taip kaip iš Vokietijos !</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">Papigiai, kaip iš kinijos..., bet ne ALIEXPRESS :)</label>
                    </div>          
                </li>
                
                <li>
                    <h3>Ar greitai buvo pristaytos prekes ?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required="required" />
                        <label for="question-5-answers-A">Žaibo greitumu !</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">Vidutiniškai :)</label>
                    </div>    
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">Greitis kaip vežlio...</label>
                    </div>
                </li>            
            </ul>    
                    <br>    
                    <input type="submit" align="center" class="button" class="btn btn-default" value="Atsakymas" /> 
              </form>       

	</div>
 
 </body> 
</html>                       
