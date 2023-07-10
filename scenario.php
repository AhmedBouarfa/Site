<?php

$servername = "172.20.121.1";
$username = "root2";
$password = "root2";
$dbname = "maison_connecte";


$scenarioName = $_POST['scenario_name'];
$description = $_POST['description'];
$actionneur1 = isset($_POST['actionneur1']) ? 1 : 0;
$actionneur2 = isset($_POST['actionneur2']) ? 1 : 0;
$actionneur3 = isset($_POST['actionneur3']) ? 1 : 0;


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}


$sql = "INSERT INTO bungalow (ID_Client,ID_Description, ID_action1, ID_action2, ID_action3) VALUES ('1',$description', $actionneur1, $actionneur2, $actionneur3)";

if ($conn->query($sql) === TRUE) {
    echo "Le scénario a été enregistré avec succès.";
} else {
    echo "Erreur lors de l'enregistrement du scénario : " . $conn->error;
}


$conn->close();
?>
