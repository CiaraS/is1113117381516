/* global $ */
//We must calculate VAT and discount ourself

 var argSubTotal; //Creates Variable
 var discountAmount; //Creates Vaiable
 var subTotal;
var vatAmount;
var totalPrice;



function calcSub()
{
   
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100; //If salesforce is checked the variable = 100
    }
    else if (document.getElementById('aws').checked)
    {
        argSubTotal = 300; //If Amazon Web Service is checked the variable = 300
    }
   else if (document.getElementById('Cloud 9').checked)
    {
        argSubTotal = 200; //If Cloud 9 is checked the variable = 200
    }
    else 
    {
        argSubTotal = 400; //If Gmail is checked the variable = 400
    }
    calcDisVatTotal(argSubTotal); //Passing variable in the display function
    
}

function calcDisVatTotal()
{



discountAmount = (subTotal * .05 );
vatAmount = (subTotal * .1);
totalPrice = (subTotal - discountAmount - vatAmount);




display(subTotal, discountAmount, vatAmount, totalPrice); 

}





function display(parm1, parm2, parm3, parm4) //parm1 equals value of argSubTotal
{
    
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
