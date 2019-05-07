<?php

if (isset($_POST['validation'])) {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";

    $erreur = array();

    if ($nom == "") array_push($erreur, "Veuillez saisir un nom");
    if ($prenom == "") array_push($erreur, "Veuillez saisir un prénom");
    if ($email == "") array_push($erreur, "Veuillez saisir un mail");
    if ($mdp == "") array_push($erreur, "Veuillez saisir un mot de passe");

    if(count($erreur)>0) {
        $msgErreur = "<ul>";

        for($i = 0 ; $i < count($erreur) ; $i++) {
            $msgErreur .= "<li>" . $erreur[$i] . "</li>";
        }

        $msgErreur .= "</ul>";

        echo $msgErreur; 

        require_once 'frmRegistration.php';
    }

    else {
        echo "Insertion en BDD";
    }
}
    else {
       require_once 'frmRegistration.php';
 
    }


