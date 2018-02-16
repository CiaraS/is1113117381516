/* global $ */
//We must calculate VAT and discount ourself

 var argSubTotal; //Creates Variable
 var discountAmount; //Creates Vaiable


function calcSub()
{
   
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100; //If salesforce is checked the variable = 100
    }
    if (document.getElementById('aws').checked)
    {
        argSubTotal = 300; //If Amazon Web Service is checked the variable = 300
    }
   if (document.getElementById('Cloud 9').checked)
    {
        argSubTotal = 200; //If Cloud 9 is checked the variable = 200
    }
    if (document.getElementById('Gmail').checked)
    {
        argSubTotal = 400; //If Gmail is checked the variable = 400
    }
    display(argSubTotal); //Passing variable in the display function
    
}

function calcDisVatTotal()
{
$x=$_POST['argSubTotal'];

{
discountAmount = argSubTotal * 05;
}
display(discountAmount); 

}





function display(parm1) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}

function display(parm2)
{
 document.getElementById("discount").value = parm2;
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
