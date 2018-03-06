<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css">
        <style>
           body {
        background:url("ebus.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        color: white;
        font-size: 18px;
        }
          
          
          .button {
    background-color: #00e600;
    border: none;
    color: white;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
          }
          
   .button1 {
    background-color: #ffffff;
    border: none;
    color: black;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  
  .button2 {
    background-color: #FFC300;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
    /* black border around white button */
    border: 2px solid #555555;
  }
        </style>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      <h4>Please enter your payment details</h4>
        
          <form action="Ebus3.php" method="POST">
            Your order is $<?php echo $_POST["total"]; ?><br/>
       
        <br/>
            <label for="user_name">Name: </label>
             
              <input type="text"  id="user_name" placeholder="example: John Doe"/>
            
            
            <br/>
            <br/>
             <!-- Email textbox -->
            <label for="user_email">Email: </label>
            <input type="text" id="user_email" placeholder="example: youremail@gmail.com" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" size="30"/>
            

            <br/>
            <br/>
            
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <br/>
            <br/>
          
            <button type="submit" id="btnPurchase" class="button" disabled>Proceed with Purchase</button>
            
          </form>
            
            <br/>
            <button onClick="validateDetails()" class="button1">Validate</button>
            
           <script type="text/javascript" src="ebus2_validator.js"></script>
            
            <br/>
            <br/>
           
	<a href="../homepage.html" class="button2">Home</a>
	
	
	<?php
        //sends info the ebus3.php by setting it as session variables
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        $_SESSION["total"] = $_POST["total"];
        ?>
	
	
    </body>
</html>