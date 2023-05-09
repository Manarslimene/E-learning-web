<?php
// Connect to the database
include "cnx.php";

// Vérifier si l'identifiant de l'utilisateur est présent dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Récupérer les informations de l'utilisateur
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($link, $sql);
    
    // Vérifier si l'utilisateur a été trouvé
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nom = $row['nom'];
        $email = $row['mail'];
    } else {
        echo "User not found.";
       // header('Location:mo1.php') ;
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}

// Fermer la connexion à la base de données
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
  font-family: Arial, sans-serif;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  width: 50%;
  margin: 0 auto;
  background-color: #f9f9f9;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

form input[type="text"],
form input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
}

form button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 3px;
  padding: 10px;
  cursor: pointer;
}

form button[type="submit"]:hover {
  background-color: #3e8e41;
}

    </style>
	<title>Modifier les informations de l'utilisateur</title>
</head>
<body>
	<h2>Modifier les informations de l'utilisateur :</h2>
	<form method="post" action="mod1.php">
		
		<label>ID :</label>
		<input type="text" name="id" value="<?php echo $id; ?>" readonly>
		<label>Nouveau nom :</label>
		<input type="text" name="nom" value="<?php echo $nom; ?>">
		<label>Nouvelle adresse email :</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	    <button type="submit" name="action" value="modifier">Modifier les informations</button>
	</form>
</body>
</html>
