<!DOCTYPE html>
<html>
<head>
<ul>
	<nav>
		
		<a onclick="window.location.href='e.php'">Home</a>
		
		
		<a onclick="window.location.href='cours.php'">Gestion de cours</a>
		
     </nav>
</ul>
	<title>Gestion des étudiants</title>
	<link rel="stylesheet" type="text/css" href="css/tabel.css">
	
    <style>
body {
	font-family: Arial, sans-serif;
	background-color: #f2f2f2;
	
}

nav {
			background-color: #b5d1ee;
			height: 40px;
			line-height: 40px;
			padding: 10px;
			text-align: center;
		}

		nav a {
			color: #923434;
			display: inline-block;
			margin: 0 10px;
			text-decoration: none;
		}

		nav a:hover {
			color: #FFFF00;
			text-decoration: underline;
		}

		main {
			padding: 20px;
		}


h1 {
	text-align: center;
	margin-top: 10px;
}



label {
	display: block;
	margin-bottom: 10px;
	font-weight: bold;
	
}

input[type="text"],
input[type="email"] {
	width: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 20px;
	
}

button[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	margin-top: 20px;
}
button[type="button"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	margin-top: 20px;
}

button[type="submit"]:hover {
	background-color: #2E8B57;
}
button[type="button"]:hover {
	background-color: #2E8B57;
}
button[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	margin-top: 20px;
}
button[type="button"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 3px;
	cursor: pointer;
	margin-top: 20px;
}

button[type="submit"]:hover {
	background-color: #2E8B57;
}
button[type="button"]:hover {
	background-color: #2E8B57;
}

table {
  width: 100%;
  font-family: Arial, sans-serif;
  font-size: 14px;
  color: #333;
  border-spacing: 50px;
}


    </style>

</head>
<body>





	<h1>Gestion des formateurs</h1>
	


<?php
// Connect to the database
include "cnx.php";

// Check if a user ID is set in the URL
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	// Query to delete user from the database
	$sql = "DELETE FROM user WHERE id=$id";
	if (mysqli_query($link, $sql)) {
		//echo "<div class='alert alert-success'>User deleted successfully.</div>";
	} else {
		echo "<div class='alert alert-danger'>Error deleting user: " . mysqli_error($link) . "</div>";
	}
}

// Query to retrieve user information
$sql = "SELECT * FROM user";
$result = mysqli_query($link, $sql);

// Display the user information in a table
if (mysqli_num_rows($result) > 0) {
	echo "<table class='table'>";
	echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nom"] . "</td><td>" . $row["mail"] . "</td><td><button name='modifier' onclick=\"location.href='modif.php?id=" . $row["id"] . "'\">Modifier</button><button name='supprimer' onclick=\"if(confirm('Are you sure you want to delete this user?')){location.href='mo1.php?id=" . $row["id"] . "'}\">Supprimer</button></td>";

	    
	}
	echo "</tr></table>";
} else {
	echo "No users found.";
}

// Close the connection
mysqli_close($link);
?>

