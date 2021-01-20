function check() {
    var checkBox = document.getElementById("checkme");
    var text = document.getElementById("criteres");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }
}

function verif_champ(champ)
{
    if (champ == "")
    { alert("Merci de remplir l'email de l'utilisateur");
        return false;
    }
    return true;
}

function verifmulti(critere1, critere2, critere3, critere4)
{
    if (critere1 =="" && critere2 =="" && critere3 =="" && critere4 =="")
    { alert("Merci de remplir au moins un champ de la recherche multicritères");
        return false;
    }
    return true;
}
