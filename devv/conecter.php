<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        nav {
          background-color: #b5d1ee;
       overflow: hidden;
       margin: 0 auto;
       width: 50%;
     }
     
     nav a {
       float: left;
       display: block;
       color: #666;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 18px;
     }
     
     nav a:hover {
      background-color: #b5d1ee;
       color: black;
     }
        form {
       width: 400px;
       margin: auto;
       padding: 20px;
       border: 1px solid #ccc;
       border-radius: 5px;
     }
     
     label {
       display: block;
       font-weight: bold;
       margin-bottom: 10px;
     }
     
     input[type="text"] {
       width: 100%;
       padding: 10px;
       border-radius: 5px;
       border: 1px solid #ccc;
       margin-bottom: 20px;
     }

	 input[type="password"] {
       width: 100%;
       padding: 10px;
       border-radius: 5px;
       border: 1px solid #ccc;
       margin-bottom: 20px;
     }
     
     input[type="submit"] {
       background-color: #4CAF50;
       color: white;
       padding: 10px 20px;
       border-radius: 5px;
       border: none;
       cursor: pointer;
     }

     
     

     
     </style>
</head>


<body>
  
    <nav>
      <a onclick="window.location.href='e.php'">Home</a>
      
      </nav>
    
    
    <form action="conecter.php" method="post">
        
        <label for="nom">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="nom">Mot de passe:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Envoyer">

        
      </form>


</body>
</html>





<?php
include "cnx.php";

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE mail='$email' AND mp='$password'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        // user found, start session and redirect to homepage
        //$_SESSION['user'] = $user;
        //header("Location: homepage.php");
        //echo "<p>It's ok</p>";
        header("Location: e.php");
        exit;
    } else {
        // check if email exists
        $sql = "SELECT * FROM user WHERE mail='$email'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            // user email found, display incorrect password message
            $error = "Mot de passe incorrect.";
        } else {
            // Les informations de connexion sont incorrectes, afficher un message d'erreur
            $error = "Email incorrect.";
        }
    }
}
?>



<?php if(!empty($error)): ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
