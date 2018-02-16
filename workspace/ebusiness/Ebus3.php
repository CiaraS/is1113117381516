<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>RECIPT</title>
        
    </head>
    
    <body>
        
        <h4 class="mainheading">RECIPT</h4>
        <div id ="absolute" class="font" >
            <?php
            //echo session variables that were set on previous page
            echo "Total is " . $SESSION ["total"] . " . ";
            ?>
        </div>
    </body>
    
    
    
</html>