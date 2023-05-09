<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "projetdv";
$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['supprimer']))

     
        if(isset($_POST['id'])) {
            $user_id = $_POST['id'];
            $sql = "DELETE FROM user WHERE id = '$user_id';";
            $result = mysqli_query($conn, $sql);
            if(!$result) {
                die("Error executing SQL query: " . mysqli_error($conn));
            }
            
}

mysqli_close($conn);

?>
