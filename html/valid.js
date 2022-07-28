function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }
}
function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}


function validateLoginForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false

    var email = document.forms['myLoginForm']["logmail"].value;
    if (email.length>15){
        seterror("email", "*Email length is too long");
        returnval = false;
    }
    var pass = document.forms['myLoginForm']["logpass"].value;
    if (pass.length < 6){

        // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
        seterror("pass", "*Password should be atleast 6 characters long!");
        returnval = false;
    }
    return returnval;
}

