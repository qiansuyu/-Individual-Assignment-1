function checkReqFields(){
    var returnValue;
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var message=document.getElementById("message").value;
    returnValue=true;
    if(name.trim()==""){
        document.getElementById("reqTxtName").innerHTML="* Name is required.";
        returnValue=false;
    }
    if(email.trim()==""){
        document.getElementById("reqTxtEmail").innerHTML="* Email is required.";
        returnValue=false;
    } if(message.trim()==""){
        document.getElementById("reqTxtMessage").innerHTML="* Message is required.";
        returnValue=false;
    }
    return returnValue;


}
