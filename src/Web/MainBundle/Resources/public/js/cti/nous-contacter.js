function majusCule(formField) {
    var x = document.getElementById(formField.id);
    x.value = x.value.toUpperCase();
}

function surligner (champ, erreur) {
    if (erreur){
        champ.style.borderBottomColor = "red";
    }
    else {
        champ.style.borderBottomColor = "";
    }
}

function EmailVerification(formField) {
    var x = document.getElementById(formField.id),
        re = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\._-]{2,}\.[a-z]{2,4}$/;
    if (!re.match(x.value)) {
        surligner(x, true);
        return false;
    }
    else {
        surligner(x, false);
        return true;
    }
}
