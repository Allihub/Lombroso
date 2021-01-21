function verif(mail, nom, prenom, mdp, age, sexe, role)
{
        if (mail =="" || nom =="" || prenom =="" || mdp ==""|| age ==""|| sexe ==""|| role =="")
    { alert("Merci de remplir tous les champs pour pouvoir ajouter un utilisateur");
        return false;
    }
    return true;
}

function sure()
{
    if (confirm("Êtes-vous sûr de banir cet utilisateur cette action est définitive")){
        return true;
    }
    else {
        return false
    }
}