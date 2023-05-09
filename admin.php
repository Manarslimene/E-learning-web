<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Récupérer les informations de connexion soumises
  $nom = $_POST["username"];
  $ps = $_POST["password"];
  
  // Vérifier si le nom d'utilisateur et le mot de passe sont corrects
  if ($nom == "admin" && $ps == "admin") {
    // Les informations de connexion sont correctes, rediriger l'utilisateur vers l'espace administrateur
    header("Location: mo1.php");
    exit();
  } else {
    // Les informations de connexion sont incorrectes, afficher un message d'erreur
    $error = "Nom d'utilisateur ou mot de passe incorrect.";
  }
}
?>

<h1>Connexion à l'espace administrateur</h1>
<?php if(isset($error)): ?>
<p><?php echo '<b>'.$error . '</b>'; ?></p>
<?php endif; ?>
<form action="" method="POST">
	<label for="username">Nom d'utilisateur :</label>
	<input type="text" id="username" name="username"><br><br>
	<label for="password">Mot de passe :</label>
	<input type="password" id="password" name="password"><br><br>
	<input type="submit" value="Se connecter">
</form>

<style>
    form {
  width: 300px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f4f4f4;
}

h1 {
  text-align: center;
  margin-top: 30px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: none;
  border-radius: 3px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-weight: bold;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

input[type="submit"]:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>