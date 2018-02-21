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
    background-color: #FFC300;
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
    background-color: #ff4d4d;
    border: none;
    color: white;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  
  .button2 {
    background-color: #00e600;
    border: none;
    color: white;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
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
          
            <button type="submit" id="btnPurchase" class="button2" disabled>Proceed with Purchase</button>
            
          </form>
            
            <br/>
            <button onClick="validateDetails()" class="button">Validate</button>
            
           <script type="text/javascript" src="ebus2_validator.js"></script>
            
            <br/>
            <br/>
            
	<a href="../homepage.html" class="button">Home</a>
    </body>
</html>