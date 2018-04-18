function majusCule(formField) {
    var x = document.getElementById(formField.id);
    x.value = x.value.toUpperCase();
}

function surligner (champ, erreur) {
    if (erreur){
        champ.style.borderBottomColor = "red";
        champ.style.backgroundColor = "#fba";
    }
    else {
        champ.style.borderBottomColor = "";
        champ.style.backgroundColor = "";
    }
}

/* re = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]{2,}\.[a-z]{2,4}$/;  */

function EmailVerification(formField, err) {
    var x = document.getElementById(formField.id);
    var valeur = x.value;
    var errMsg = document.getElementById(err);
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (valeur.length == 0) {
        surligner(x, false);
        errMsg.innerHTML = "This field is required.";
        return false;
    }
    else if (!re.test(valeur)) {
        errMsg.innerHTML = "This email address is not valid.";
        surligner(x, true);
        return false;
    }
    else {
        surligner(x, false);
        errMsg.innerHTML ="";
        return true;
    }

}

document.getElementById("usMail").addEventListener("blur", function(){EmailVerification(this, "errEmail");});

function NameVerification(formField, err) {
    var x = document.getElementById(formField.id);
    var errMsg = document.getElementById(err);
    var valeur = x.value;
    var re = /^[ a-zA-Z'-]+$/;
    if (valeur.length == 0) {
        surligner(x, false);
        errMsg.innerHTML = "This field is required.";
        return false;
    }
    else if (valeur.length < 2) {
        errMsg.innerHTML = "This field require at least two digits.";
        surligner(x, true);
        return false;
    }
    else if (valeur.length > 25) {
        errMsg.innerHTML = "This field cannot take more than 25 digits.";
        surligner(x, true);
        return false;
    }
    else if (!re.test(valeur)) {
        errMsg.innerHTML = "Please verify your name.";
        surligner(x, true);
        return false;
    }
    else {
        surligner(x, false);
        errMsg.innerHTML = "";
        return true;
    }


}

document.getElementById("usName").addEventListener("blur", function(){NameVerification(this, "errName");});

function PhoneVerification(formField, err) {
    var x = document.getElementById(formField.id);
    var valeur = x.value;
    var errMsg = document.getElementById(err);
    var re = /^(\+[1-9][0-9]{1,2})? ?[1-9][0-9]{8,15}$/;
    if (valeur.length == 0) {
        surligner(x, false);
        errMsg.innerHTML = "This field is required.";
        return false;
    }
    else if (!re.test(valeur)) {
        surligner(x, true);
        errMsg.innerHTML = "Please verify your telephone number and do not put space between digits";
        return false;
    }
    else {
        surligner(x, false);
        errMsg.innerHTML = "";
        return true;
    }
}

document.getElementById("usPhone").addEventListener("blur", function(){PhoneVerification(this, "errPhone");});

function MsgVerification(formField, err) {
    var x = document.getElementById(formField.id);
    var valeur = x.value;
    var errMsg = document.getElementById(err);
    var longueur = valeur.length;
    if (longueur == 0) {
        surligner(x, false);
        errMsg.innerHTML = "This field is required.";
        return false;
    }
    else if ( longueur < 2 ) {
        surligner(x, true);
        errMsg.innerHTML = "Your message is too shot.";
        return false;
    }
    else if ( longueur > 500 ) {
        surligner(x, true);
        errMsg.innerHTML = "Your message is too long.";
        return false;
    }
    else  {
        surligner(x, false);
        errMsg.innerHTML = "";
        return true;
    }
}

document.getElementById("usMsg").addEventListener("blur", function(){MsgVerification(this, "errMessage");});


function FormValidation(form){
    var emailOK = EmailVerification(this.EMAIL, "errEmail");
    var nameOK = NameVerification(this.NOM, "errName");
    var phoneOK = PhoneVerification(this.PHONE, "errPhone");
    var msgOK = MsgVerification(this.messag, "errMsg");
    if (emailOK && nameOK && phoneOK && msgOK) {
        return true;
    }
    else {
        return false;
        alert("Veuillez remplir correctement tous les champs.");
    }

}

document.getElementsByTagName("form")[0].addEventListener("submit", function() {return FormValidation(this);});