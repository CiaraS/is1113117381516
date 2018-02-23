/*global $ */

//Used (console.log()) to identify the errors

//Function to check the textboxes
function validateDetails(){
    
    var name = document.getElementById("name").value; 
    var email= document.getElementById("email").value; 
    var pin = document.getElementById("pin").value; 
    
    
    //making sure all textboxes are filled and the pin is correct lenght
    if(name == ""){
        alert("Please enter your Name");  
    }
    else if(email == ""){
        alert("Please enter your Email"); 
    } 
    else if(pin == ""){
        alert("Please enter your PIN"); 
    }
    else if(String(pin).length < 4){
        alert("Your PIN was incorrect, please enter it again."); 
        disablebtnPurchase();
    }
    else{
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