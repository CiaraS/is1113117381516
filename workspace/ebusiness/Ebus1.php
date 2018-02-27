<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <!-- Title of the form -->
        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
        <style>
               
                
                
                
      
       /* Styles the text and applies the background image*/
       body {
        background:url("ebus.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        color: white;
        font-size: 18px;
        background-color: white;
        }
          .button {
    background-color: #FFC300; /* yellow */
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
   /* Styles the button */
  .button1 {
    background-color: #ff4d4d; /* light red */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  .button2 {
    background-color: #00e600; /* green  */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  .button3 {
    background-color: #ffffff; /* white */
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
  
  
  
  
  
  body{
    padding: 250px 250;
  }
          
        </style>

        
        
    </head>
    
    <body>
        <!-- Heading -->
        <h2><strong>Select a Product</strong></h2>
        <br/>
        
        <!-- Proceed to Ebus2 when all actions completed -->
        <form method="POST" action="Ebus2.php">

          <!--radio buttons for each product -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            <br/>
            <br/>
            
           
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <br/>
            
           
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br/>
            <br/>
            
          
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
            <br/>
           
          
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
          
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
          
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
        
          
       <!-- Calls the calcSub function once button is clicked -->
    <button onClick="calcSub()" class="button2">Calculate Cost</button>
    <br/>
        
            <!-- Button to submit -->
            <button type="submit" id="btnProceed" class="button" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
            
        </form>
      
            <a role="button" class="button3" href="Ebus1.php">Clear Choice</a>
            <a href="../homepage.html" class="button1">Home</a>
            
            <?php echo $_POST["total"]; ?><br>
        </div>

    </body>
    
</html>