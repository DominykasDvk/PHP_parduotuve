<?php   
// pirkiniu krepselis sukurtas su sesija.
 session_start();  
 $conn = mysqli_connect("localhost", "root", "", "shop");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]);
                
                $_SESSION["shopping_cart"][$count] = $item_array; 
                
            }else{  
                echo '<script>alert-dismissible("Pasiemiai į kašį")</script>';  
                echo '<script>window.location="parde.php"</script>';
            }
            }else{  
            $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]);
            
           $_SESSION["shopping_cart"][0] = $item_array;}  
    }  
    if(isset($_GET["action"]))  
    {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);    
                }  
           }  
      }  
 }  
 ?>  

 <!DOCTYPE html>  
 <html>  
      <head> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <title>Dronai.lt</title> 
           <style>
               body {
                   font-family: 'Orbitron', sans-serif;  
                   background-image: url("img/Fonas.jpg");
                   opacity: 0.9;
               }
               div{
                   background-color: white;
                   border: 1px solid black;
                   -webkit-box-shadow: 3px -4px 6px 2px rgba(0,0,0,0.6); 
                   box-shadow: 3px -4px 6px 2px rgba(0,0,0,0.6);
               }
               #buy {
                   background-color: #00ff00;
               } 
               td, th{
                   background: #e6e600;
               }
               .table-responsive, .table table-bordered, .tbody, tr {
                   border: 2px solid black; 
               }
               .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
                    border: 2px solid black;
                }
           </style>
      </head>
      
      <body>  
           <br>
           <br>
           <div class="container-fluid" style="width:90%;">  
                <h2 align="center">Siūlomos prekės</h2>
                <br>  
                <!-- istraukiama informacija ies prekiu lenteles -->
                <?php  
                $query = "SELECT * FROM merchandise ORDER BY id ASC";  
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0){  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <!-- prekiu lenteles struktura -->
                <div class="col-md-3" style="margin-bottom:50px; margin-left: 10px; border:1px solid black; border-radius:5px; background-color:#e6ac00;">  
                    <form method="post" action="parde.php?action=add&id=<?php echo $row["ID"]; ?>">  
                          <div style="padding:10px; background-color:#e6ac00;" align="center">  
                               <img src="image/<?php echo $row["image"]; ?>" class="img-thumbnail"/><br>  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger"><?php echo $row["price"]; ?> EUR</h4>  
                               <input type="text" name="quantity" class="form-control" value="1"/>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>"/>  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>  
                               <input type="submit" name="add_to_cart" style="margin-top:10px; font-weight: bold;" class="btn btn-default" value="Į krepšelį !"/>  
                          </div>  
                     </form>  
                </div>  
                
                <?php  
                     }  
                }  
                ?>  
                <!-- prekiu krepselio lenteles strutura -->
                <div style="clear:both"></div>  
                <br>  
                <h3>Užsakymo Krepšelis:</h3>  
                <br><br>
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Prekė</th>  
                               <th width="10%">Kiekis</th>  
                               <th width="20%">Kaina</th>  
                               <th width="15%">Bendra kaina</th>  
                               <th width="5%"></th>  
                          </tr>  
                    <!-- informacija perkialiama i uzsakymu lentele -->
                <?php
                    if(!empty($_SESSION["shopping_cart"])){  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td><?php echo $values["item_price"]; ?> EUR</td>  
                               <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> EUR</td>  
                               <td><a href="parde.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">X</span></a></td>  
                          </tr> 
                          <!-- apskaiciuojama bendra krepselio kaina -->
                          <?php  
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }
                          ?>  
                          
                          <tr>  
                               <td colspan="3" align="right">Bendra Suma:</td>  
                               <td align="right"><?php echo number_format($total, 2); ?> EUR</td> 
                          </tr>  
                          
                          <tr>
                              <td colspan="3" align="right"></td>                    
                              <td id="buy" align="center"><a href="apklausa.php"><span style="color: black">Baigti Apsipirkima</span></a></td>
                          </tr>
                          <?php  
                          }  
                          ?> 
                     </table>
                    </div>
                        <br>
                            <div style="clear:both"></div>
                            <br>
                        <br>
                    </div>
                </div>
	<br><br>
      </body>  
 </html>