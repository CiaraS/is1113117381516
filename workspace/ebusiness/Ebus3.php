<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
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
        
        <h4 class="mainheading">RECIPT</h4>
        <div id ="absolute" class="font" >
            <?php echo $_POST["total"]; ?><br>
        </div>
        
        	<a href="../homepage.html" class="button">Home</a>
    </body>
    
    
    
</html>