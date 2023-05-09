<?php
// Connect to the database
include "cnx.php";

// Vérifier si le formulaire a été soumis
if(isset($_POST['action']) && $_POST['action'] == 'modifier') {
    // Récupérer les valeurs du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    
    // Mettre à jour les informations des formateurs
    $sql = "UPDATE user SET  nom ='$nom', mail='$email' WHERE id=$id";

    $result = mysqli_query($link, $sql);
    
    // Vérifier si la requête a réussi
    if(mysqli_affected_rows($link) > 0) {
        echo "Les informations ont été mises à jour avec succès.";
 header('Location:mo1.php') ;

    } else {
        echo "Une erreur s'est produite lors de la mise à jour des informations.";
    }
}

// Fermer la connexion à la base de données
mysqli_close($link);
?>

