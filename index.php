<?php

$servername = "172.20.121.1";
$username = "root2";
$password = "root2";
$dbname = "maison_connecte";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die('La connexion a échoué: ' . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nom'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM utilisateurs WHERE ID_NomClient = ? AND Mdp = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $name, $password);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_store_result($stmt);
        

        if (mysqli_stmt_num_rows($stmt) > 0) {
            if($name == "Admin"){
                header("Location: admin.html");
            }
            else{
                if($name == "Bouarfa"){
                    header("Location: Bun1.php");
                }
                else{
                    if($name == "Lyass"){
                        header("Location: Bun2.php");
                    }
                    else{
                        if($name == "Yamine"){
                            header("Location: Bun3.php");
                        }
                        else{
                            if($name == "Test"){
                                header("location: Bun4.php");
                            }
                        }
                    }
                }
            }
        } else {
            header("Location: Erreur.html");
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "La préparation de la requête a échoué";
    }
}

mysqli_close($conn);
?>



