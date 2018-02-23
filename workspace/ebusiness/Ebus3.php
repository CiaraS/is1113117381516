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

        
        <title>RECIPT</title>
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
        </style>
      
    </head>
    
    <body>
        
        
        <h4 class="mainheading">Receipt</h4>
        
        
        
        <div>
            <?php
            //Echo  variables on previous page
            echo "Thank you for your purchase " . $_POST["user_name"]; ?>
            <br/>
            
            <?php
            echo "Your receipt will be sent to " . $_POST["user_email"]; ?>
            <br/>
            <?php
            echo "The total Price: $" . $_SESSION["total"];
            ?>
</div>
        <br/>
       
        
        	<a href="../homepage.html" class="button">Home</a>
        
    </body>
    
    
    
</html>