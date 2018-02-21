<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css">
        <style>
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
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
      <h4>Please enter your payment details</h4>
        
          <form action="Ebus3.php" method="POST">
            
            <label for="Name">
              Name
              <input type="text"  id="Name" placeholder="Enter Name"/>
            </label>
            
            <br/>
            <br/>
            <label for="Email">
              Email
              <input type="text"  id="Email" placeholder="Email Address"/>
            </label>
            
            <br/>
            <br/>
            
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            <br/>
            <br/>
          
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
          </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
           <script type="text/javascript" src="ebus2_validator.js"></script>
            
            <br/>
            <br/>
            
	<a href="../homepage.html" class="button">Home</a>
    </body>
</html>