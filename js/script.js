//for login
var pass, passerror, email, emailerror;
email = document.getElementById("email");
emailerror = document.getElementById("emailerror");
pass = document.getElementById("password");
passerror = document.getElementById("passerror");

// for create
var pass2, passerror2, first, last, phone, cpass, cpasserror, address, r, email2, emailerror2;
email2 = document.getElementById("email2");
emailerror2 = document.getElementById("emailerror2");

pass2 = document.getElementById("password2");
passerror2 = document.getElementById("passerror2");

fname = document.getElementById("fname");
fnameerror = document.getElementById("fnameerror")

lnamle = document.getElementById("lname");
lnameerror = document.getElementById("lnameerror")

phone = document.getElementById("phone");
phoneerror = document.getElementById("phoneerror");

cpass = document.getElementById("cpass");
cpasserror = document.getElementById("cpasserror");

var add = document.getElementById("address");
var adderror = document.getElementById("adderror");


nameregex = /^[a-zA-Z]{1,}$/;
phoneregex = /^[9]+[78]+[0-9]{8}$/;

// var emailregex = /^[a-zA-Z0-9._-]{3,10}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var emailregex = /^[a-zA-Z0-9._-]{4,}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

function loginvalidate() {

    if (email.value == "") {
        emailerror.innerHTML = "Email Cannot be Empty !! ";
        emailerror.style.color = "red";
        r = false;
    }

    else {

        if (!(emailregex.test(email.value))) {

            emailerror.style.color = "red";
            emailerror.innerHTML = "invalid email address Please Enter the valid email";
            r = false;
        }
        else {
            emailerror.style.color = "green";
            emailerror.innerHTML = "Email is valid";
            r = true;
        }

    }

    if (pass.value == "") {
        passerror.innerHTML = "Must be fill ";
        passerror.style.color = "red";
        r = false;
    }
    else {

        // var lower, upper, number, special;
        // lower = /[a-z]/.test(pass.value);
        // upper = /[A-Z]/.test(pass.value);
        // number = /[0-9]/.test(pass.value);
        // spec = /[!@#$%^&*()_+-{}\]\[:;<>,.?~\\]/.test(pass.value);
        // var passlen = pass.value.length;

        // if ((!lower)&&(!upper) && (!number) && (!spc)) {
        //     passerror.innerHTML = "Password most be 8 character, atlease one upper letter, atlease one lower letter, atleast one special character";

        // }
        if (pass.value.length < 6) {
            passerror.style.color = "red";
            passerror.innerHTML = "Password length must 6 character";
            r = false
        }

        else {

            passerror.innerHTML = "valid password";
            passerror.style.color = "green";
            r = true;
        }
        return r;
    }
    if (!(emailregex.test(email.value)) || (pass.value.length <= 6)) {
        return r;
    }
}
function pc() {
    if (pass.value == "") {
        passerror.innerHTML = "Must be fill ";
        passerror.style.color = "red";
    }
    else {
        if (pass.value.length <= 6) {
            passerror.style.color = "red";
            passerror.innerHTML = "Password length must 6 character";
        }

        else {

            passerror.innerHTML = "valid password";
            passerror.style.color = "green";
        }

    }
}

function ec() {
    // var r;

    if (email.value == "") {
        emailerror.innerHTML = "Email Cannot be Empty !! ";
        emailerror.style.color = "red";
        // r = false;
    }

    else {

        if (!(emailregex.test(email.value))) {

            emailerror.style.color = "red";
            emailerror.innerHTML = "invalid email address Please Enter the valid email";
            // r = false;
        }
        else {
            emailerror.innerHTML = "Email is valid";
            emailerror.style.color = "green";
            // r = true;
        }

    }
    if (email2.value == "") {
        emailerror2.innerHTML = "Email Cannot be Empty !! ";
        emailerror2.style.color = "red";
        // r = false;
    }

    else {

        if (!(emailregex.test(email2.value))) {

            emailerror2.style.color = "red";
            emailerror2.innerHTML = "invalid email address Please Enter the valid email";
            // r = false;
        }
        else {
            emailerror2.innerHTML = "Email is valid";
            emailerror2.style.color = "green";
            // r = true;
        }

    }
}
function cpc() {
    if (pass2.value == cpass.value) {
        cpasserror.innerHTML = "Password Match";
        cpasserror.style.color = "green";
        return true;
    }
    else {
        cpasserror.innerHTML = "Didn't match";
        cpasserror.style.color = "red";
        return false;
    }
}


function cvalidate() {

    // for first name
    if (fname.value == "") {
        fnameerror.innerHTML = "Must fill";
        r = false;
    }
    else {
        if (nameregex.test(fname.value)) {
            fnameerror.innerHTML = " ";

            r = true;
        }
        else {
            fnameerror.innerHTML = "Invalid First Name ";

            r = false;
        }
    }
    // for last name
    if (lname.value == "") {
        lnameerror.innerHTML = "Must Fill";
        r = false;
    }
    else {
        if (nameregex.test(lname.value)) {
            lnameerror.innerHTML = " ";
            r = true;
        }
        else {
            lnameerror.innerHTML = "Invalid Last Name ";

            r = false;
        }
    }

    //for phone 
    if (phone.value == "") {
        phoneerror.innerHTML = "Must fill";
        r = false;
    }
    else {
        if (phoneregex.test(phone.value)) {
            phoneerror.innerHTML = "";
            r = true;
        }
        else {
            phoneerror.innerHTML = "Invalid Mobile example: 9802002721";
            r = false;
        }
    }

    // for email
    if (email2.value == "") {
        emailerror2.innerHTML = "Must Fill   ";
        emailerror2.style.color = "red";

        r = false;
    }
    else {

        if (emailregex.test(email2.value)) {
            emailerror2.innerHTML = "";
            r = true;
        }
        else {
            emailerror2.innerHTML = "invalid email ";
            emailerror2.style.color = "red";
            r = false;
        }
    }


    // for password

    if (pass2.value == "") {
        passerror2.innerHTML = "Must be fill ";
        passerror2.style.color = "red";
        r = false;
    }
    else {
        if (pass2.value.length < 6) {
            passerror2.style.color = "red";
            passerror2.innerHTML = "Password length must 6 character";
            r = false
        }

        else {
            passerror2.innerHTML = "";
            if (cpass.value == "") {
                cpasserror.innerHTML = "Re-enter password";
                r = false;
            }
            else {
                if (pass2.value == cpass.value) {
                    cpasserror.innerHTML = "";
                    r = true;
                }
                else {
                    cpasserror.innerHTML = "Password didnot match";
                    cpasserror.style.color = "red";
                    r = false;

                }

            }
        }

    }

    // for address
    if (add.value == "") {
        adderror.innerHTML = "Empty address";
        adderror.style.color = "red";
        r = false;
    }
    else {
        adderror.innerHTML = "";
        r = true;
    }
    if ((fname.value == "") || (!(nameregex.test(fname.value))) || (lname.value == "") || (!(nameregex.test(lname.value))) || (phone.value == "") || (!(phoneregex.test(phone.value))) || (email2.value == "") || (!(emailregex.test(email2.value))) || (pass2.value == "") || (pass2.value.length < 6) || (cpass.value == "") || (!(pass2.value == cpass.value)) || (add.value == "")) {
        r = false;
    }
    else {
        r = true;
    }

    return r;
}