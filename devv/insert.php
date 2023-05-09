<?php
include "cnx.php";

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["mp"]) && isset($_POST["sexe"]))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $mp = $_POST["mp"];
    $sexe = $_POST["sexe"];

    // Validation du nom : doit contenir uniquement des lettres et des espaces
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
        echo "<script>alert('Le nom ne doit contenir que des lettres et des espaces.');</script>";
        exit();
    }

    // Validation du prénom : doit contenir uniquement des lettres et des espaces
    if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
        echo "<script>alert('Le prénom ne doit contenir que des lettres et des espaces.');</script>";
        exit();
    }

    // Validation du téléphone : doit contenir uniquement des chiffres et avoir une longueur de 10 caractères
    if (!preg_match("/^[0-9]{10}$/",$tel)) {
        echo "<script>alert('Le téléphone doit contenir 10 chiffres.');</script>";
        exit();
    }

    // Validation de l'email : doit avoir un format valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('L\'adresse email n\'est pas valide.');</script>";
        exit();
    }

    // Validation du mot de passe : doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$mp)) {
        echo "<script>alert('Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.');</script>";
        exit();
    }

    // Validation du sexe : doit être "homme" ou "femme"
    if ($sexe != "homme" && $sexe != "femme") {
        echo "<script>alert('Le sexe doit être \"homme\" ou \"femme\".');</script>";
        exit();
    }

    $sql = "insert into user (nom,prenom,tel,mail,mp,sexe) values ('$nom','$prenom','$tel','$email','$mp','$sexe')";

    if (mysqli_query($link,$sql )) {
        echo "<script>alert('Insertion effectuée.');</script>";
    }
    else {
        echo "<script>alert('Erreur d\'insertion.');</script>";
    }
}
?>
