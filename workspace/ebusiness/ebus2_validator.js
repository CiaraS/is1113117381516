/*global $ */



//Function to check the textboxes
function validateDetails(){
    
    
    
    //making sure all textboxes are filled and the pin is correct lenght
     var pin; 
     var name;
     var email;
    
    pin = document.getElementById("user_pin").value;
    name = document.getElementById("user_name").value;
    email = document.getElementById("user_email").value;
    
     if (name == ""){
        alert("Please enter your Name");
    }
    
     if (email == ""){
        alert("Please enter your Email");
    }
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        //if pin is correct then the user will be able to proceed
        enablebtnPurchase();
    }
}

//Function that enables the proceed button
function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled", false);
}

//Function that disable the proceed button
function disablebtnPurchase(){
    $("#btnPurchase").prop("disabled", true);
}