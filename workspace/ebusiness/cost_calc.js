/* global $ */

function calSub()
{
    var argSubTotal;
    
    if (document.getElementById("salesforce").checked){
        argSubTotal = 100;
    }
    else if (document.getElementById("cloud9").checked){
        argSubTotal = 200;
    }
    else if (document.getElementById("aws").checked){
        argSubTotal = 300;
    }
    else{
        argSubTotal = 400;
    }
    calcDisVatTotal;
}


function calcDisVatTotal(parmSubTotal){
    
    var subTotal;
    var x = 0.05;
    var discountAmt;
    var y = 0.1;
    var vatAmt;
    var totalPrice;
    
    subTotal = parmSubTotal;
    discountAmt = (subTotal * x);
    vatAmt = (subTotal * y);
    totalPrice = (subTotal - discountAmt - vatAmt);
    
    display(subTotal, discountAmt, vatAmt,totalPrice);
}


function display(parm1, parm2, parm3, parm4){

document.getElementById("subtotal").value = parm1;
document.getElementById("discount").value = parm2;
document.getElementById("vat").value = parm3;
document.getElementById("total").value = parm4;

 enablebtnProceed();
}




function enablebtnProceed()
{
    $('#btnProceed').prop('disabled', false);//find btnProceed go into properties and enable btn
}

function disablebtnProceed()
{
    $('#btnProceed').prop('disabled', true);
}
    
    
    
    
    
    
    
    
    
}