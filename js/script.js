function validate(){
    let email = document.forms["myForm"]["email"].value;
    if (email == ""){
        alert ("Email is compolsaryl please fill");
        let x = document.getElementById("emailError").innerHTML = "Empty Email ! Please fill the email";
        
        return false;
    }
    else {
        return true;
    }
}