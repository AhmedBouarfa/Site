<?php

$servername = "172.20.121.1";
$username = "root2";
$password = "root2";
$dbname = "maison_connecte";
$conn = mysqli_connect($servername, $username,$password, $dbname);

if (!$conn) {
    die('La connexion a échoué: ' . mysqli_connect_error());
}

$email = $_POST['email']; 
$name = $_POST['nom'];
$password = $_POST['password'];

$sql = "INSERT INTO utilisateurs (ID_Utilisateur, ID_NomClient, Mdp) VALUES ('$email','$name', '$password')";  
if (mysqli_query($conn, $sql)) {
    header("Location: accueil.html");
exit();
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
