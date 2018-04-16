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

function EmailVerification(formField) {
    var x = document.getElementById(formField.id),
        re = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]{2,}\.[a-z]{2,4}$/;
    if (!re.test(x.value)) {
        surligner(x, true);
        return false;
    }
    else {
        surligner(x, false);
        return true;
    }
}

document.getElementById("usMail").addEventListener("blur", function(){EmailVerification(this);});

function NameVerification(formField) {
    var x = document.getElementById(formField.id),
        re = /^[ a-zA-Z'-]{2,25}$/;
    if (!re.test(x.value)) {
        surligner(x, true);
        return false;
    }
    else {
        surligner(x, false);
        return true;
    }
}

document.getElementById("usName").addEventListener("blur", function(){NameVerification(this);});

function PhoneVerification(formField) {
    var x = document.getElementById(formField.id),
        re = /^\+[1-9]{2,3}[2-9]( ?[0-9]{2,3}){2,5}$/;
    if (!re.test(x.value)) {
        surligner(x, true);
        return false;
    }
    else {
        surligner(x, false);
        return true;
    }
}

document.getElementById("usPhone").addEventListener("blur", function(){PhoneVerification(this);});

function MsgVerification(formField) {
    var x = document.getElementById(formField.id).value;
    if ( x.length  < 2 ) {
        surligner(x, true);
        return false;
    }
    else if ( x.length > 500) {
        surligner(x, true);
        return false;
    }
    else  {
        surligner(x, false);
        return true;
    }
}

document.getElementById("usMsg").addEventListener("blur", function(){MsgVerification(this);});
