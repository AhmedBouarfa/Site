<?php

// Établir une connexion à la base de données
$servername = "172.20.121.1";
$username = "root2";
$password = "root2";
$dbname = "maison_connecte";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die('La connexion a échoué: ' . mysqli_connect_error());
}

// Exécuter une requête SQL pour récupérer les données de la table
$sql = "SELECT * FROM information";
$conn->set_charset("utf8mb4");
$result = $conn->query($sql);

// Vérifier si la requête a retourné des résultats


// Fermer la connexion à la base de données
$conn->close();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style6.css">
    <title>Document</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function toggleVisibility(elementId) {
            var element = document.getElementById(elementId);
            if (element.style.display === "none") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <div class="service">
        <div class="title">
            <h2> Bungalow </h2>
        </div>

        <div class="box">
            <div class="carte">
                <img src="sun-solid.svg">
                <h5>Rayon UV</h5>
                <div class="text">
                <button class="toggle-button" onclick="toggleVisibility('uvValue')">Activer/désactiver</button>
                
                    <div id="uvValue" class="shown">
                        <?php
                            $afficherUV = true; // Variable pour contrôler l'affichage

                            if ($result->num_rows >= 3) {
                                // Déplacer le curseur de résultat pour accéder à la deuxième ligne
                                $result->data_seek(1);

                                // Récupérer la deuxième ligne des résultats
                                $row = $result->fetch_assoc();

                                // Vérifier si l'affichage est activé
                                if ($afficherUV) {
                                    // Afficher les données de la deuxième ligne
                                    echo $row["id_uv"] . "<br>";
                                }
                            } else {
                                echo "Aucun résultat trouvé";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="carte">
            <img src="wind-solid.svg">
                <h5>Vent</h5>
                <div class="text">
                <button class="toggle-button" onclick="toggleVisibility('VentValue')">Activer/désactiver</button>
                
                    <div id="VentValue" class="shown">
                        <?php
                            $afficherVent = true; // Variable pour contrôler l'affichage

                            if ($result->num_rows >= 3) {
                                // Déplacer le curseur de résultat pour accéder à la deuxième ligne
                                $result->data_seek(1);

                                // Récupérer la deuxième ligne des résultats
                                $row = $result->fetch_assoc();

                                // Vérifier si l'affichage est activé
                                if ($afficherVent) {
                                    // Afficher les données de la deuxième ligne
                                    echo $row["id_vent"] . "<br>";
                                }
                            } else {
                                echo "Aucun résultat trouvé";
                            }
                        ?>
                    </div>
                </div>
            </div>
                       

            <div class="carte">
            <img src="temperature-low-solid.svg">
                <h5>Temperature</h5>
                <div class="text">
                <button class="toggle-button" onclick="toggleVisibility('SondeValue')">Activer/désactiver</button>
                
                    <div id="SondeValue" class="shown">
                        <?php
                            $afficherSonde = true; // Variable pour contrôler l'affichage

                            if ($result->num_rows >= 3) {
                                // Déplacer le curseur de résultat pour accéder à la deuxième ligne
                                $result->data_seek(1);

                                // Récupérer la deuxième ligne des résultats
                                $row = $result->fetch_assoc();

                                // Vérifier si l'affichage est activé
                                if ($afficherSonde) {
                                    // Afficher les données de la deuxième ligne
                                    echo $row["id_temperature"] . "<br>";
                                }
                            } else {
                                echo "Aucun résultat trouvé";
                            }
                        ?>
                    </div>
                </div>
            </div>
            </div>

        <div class="two-col">
            <div class="two">
                
            </div>
        </div>
    </div>
    
    
</body>
</html>


