<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
         <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="cost_calc.js"></script>

        
        <title>Your receipt from Cloud Catalyst</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css">
        <style>
        
        
        /* sets image and styles text */
         body {
        background:url("ebus.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        color: white;
        font-size: 18px;
        }
        
        /* styles page buttons */
        
            .button {
    background-color: #FFC300;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  h4 { 
      font-size: 24px;
  }
  
        </style>
      
    </head>
    
    <body>
        
        <br/>
        <br/>
        
        <h4 class="mainheading">Receipt</h4>
        
        <br/>
       
        
        
        
        <div>
            <?php
            //Echo  variables on previous page
            echo "Thank you for your purchase " . $_POST["user_name"]; ?>
        <br/>
        <br/>
            
            <?php
            echo "Your receipt will be sent to: " . $_POST["user_email"]; ?>
        <br/>
        <br/>
            <?php
            //gets total value from session
            echo "The total Price: $" . $_SESSION["total"];
            ?>
</div>
        <br/>
       
       <!-- button link to homepge -->
       
       
       <br/>
        
        	<a href="../homepage.html" class="button">Home</a>
        
    </body>
    
    
    
</html>