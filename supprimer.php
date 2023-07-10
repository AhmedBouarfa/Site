<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['page'])) {
        $page = $_POST['page'];

        
        if (file_exists($page)) {
            
            unlink($page);
            header("Location: succes.html ");
        } else {
            echo "Le fichier $page n'existe pas.";
        }
    } else {
        echo "Veuillez sélectionner une page à supprimer.";
    }
}
?>