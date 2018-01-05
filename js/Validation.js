/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function formatPhone(element){str=new String(element.value);
 element.value=str.replace(/[A-Za-z\(\)\.\-\x\s,]/g,"");
 num=element.value;
 var _return;
 if(num.length==10){_return="(";
 var ini=num.substring(0,3);
 _return+=ini+")";
 var st=num.substring(3,6);
 _return+="-"+st+"-";
 var end=num.substring(6,10);
 _return+=end;
 element.value="";
 element.value=_return;
 }else{if(num.length>13){//alert("Phone Number should be 10 characters");
 showAlertModal("Phone Number should be 10 characters");
 element.value=_return;
 element.value="";
 element.focus();
 return false;
 }else{if(num.length<13){//alert("Please give atleast  10 charcters in PhoneNumber");
         
 showAlertModal("Please give atleast  10 charcters in PhoneNumber");
 element.value="";
 }}}return _return;
 }function checkEmail(element){if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
 }element.value="";
 showAlertModal("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
 }
 
 function validatenumber(xxxxx){var maintainplus="";
 var numval=xxxxx.value;
 if(numval.charAt(0)=="+"){var maintainplus="+";
 }curnumbervar=numval.replace(/[\\A-Za-z!"?$%^&*+_={};:'@#~,?\/<>?|`?\]\[]/g,"");
 xxxxx.value=maintainplus+curnumbervar;
 var maintainplus="";
 xxxxx.focus;
 }
 
 function valueCheck(myForm){email=myForm.value;
 var is_value=email.indexOf("miraclesoft.com");
 if(is_value==-1){myForm.value="";
 
 showAlertModal("You should enter valid Miracle Mail Id!");
 }}
 
function isNumber(evt) {
    
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode!=46 && charCode > 31 && (charCode < 48 || charCode > 57) && charCode >= 1 && charCode <=100)
        return false;
    
    return true;
}


function fieldLengthValidator(element) {
    var i=0;
    
     //New Change middlename
        if(element.id=="firstname" || element.id=="lastname" || element.id=="employeeName" || element.id=="middlename")
        {i=60;
        }if(element.id=="organization" || element.id=="currentOrganization")
        {i=100;
        }if(element.id=='cCity'||element.id=='nCity'||element.id=="currentLocation" ||element.id=="experience" ||element.id=="educationalQualification" ||element.id=="city" || element.id=="employeePeriod"|| element.id=="nativePlace"|| element.id=="workLocation"|| element.id=="state"|| element.id=="country" || element.id=="nativeDistrict"|| element.id=="nativeState"|| element.id=="curentDistrict"|| element.id=="currentState")
        {i=30;
        }if(element.id=="designation" || element.id=="empDesignation" || element.id=="department" || element.id== "currentOccupation")
        {i=40;
        }if(element.id=="description")
        {i=500;
        }if(element.id=="email")
        {i=60;
        }if(element.id=="employeeId")
        {i=20;
        }if(element.id=="reasonsToLeave")
        {i=500;
        }if(element.id=="zip" || element.id=="nativeZipcode" || element.id=="currentZipcode")
        {i=10;
        }
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
            
         //   document.getElementById("resultmessage").style.color= "red";
 	   // 	document.getElementById("resultmessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
           
           
           showAlertModal("The "+element.id+" length must be less than "+i+" characters");
         //alert("The "+element.id+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }

function NumericValidation(eventObj)
{
    var keycode;
 
    if(eventObj.keyCode) //For IE
        keycode = eventObj.keyCode;
    else if(eventObj.Which)
        keycode = eventObj.Which;  // For FireFox
    else
        keycode = eventObj.charCode; // Other Browser
 
    if (keycode!=8) //if the key is the backspace key
    {
        if (keycode<48||keycode>57) //if not a number
            return false; // disable key press
        else
            return true; // enable key press
     }        
 }
 
 
 var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            if(!ret){
               // alert("Please enter numerics only!");
                showAlertModal("Please enter numerics only!");
            }
            //document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
        
        
        function validateDays(obj) {
            if(obj.value <=90){
                
            }else {
                //alert("Please enter below 90 days!");
                showAlertModal("Please enter below 90 days!");
                obj.value = "";
            }
        }
        
        
        
        