<?php

$servername = "172.20.121.1";
$username = "root2";
$password = "root2";
$dbname = "maison_connecte";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die('La connexion a échoué: ' . mysqli_connect_error());
}


$sql = "SELECT * FROM information";
$conn->set_charset("utf8mb4");
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $counter = $result->num_rows + 1; 
    $result->data_seek($counter - 2); 
    $row = $result->fetch_assoc(); 

   
    $originalFile = 'Bun3.php';
    $pageContent = file_get_contents($originalFile);

    
    $pageContent = str_replace('$result->num_rows >= 3', '$result->num_rows >= ' . $counter, $pageContent);
    $pageContent = str_replace('$result->data_seek(0)', '$result->data_seek(' . ($counter - 2) . ')', $pageContent);

    
    $newFileName = 'Bun' . ($counter - 1) . '.php';
    file_put_contents($newFileName, $pageContent);

    
    header("Location: $newFileName");
    exit;
} else {
    echo "Aucun résultat trouvé";
}


$conn->close();
?>
