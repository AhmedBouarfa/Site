<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Page de connexion</title>

</head>
<body>
   <div class="box">
    <div class="container">
        <div class="top">
            <span>PAGE SUPPRESSION</span>
            <form action="supprimer.php" method="POST">
        <label for="page">Choisissez la page à supprimer :</label>
        <select name="page" id="page">
            <option value="Bun1.php">Page 1</option>
            <option value="Bun2.php">Page 2</option>
            <option value="Bun3.php">Page 3</option>
            <option value="Bun4.php">Page 4</option>
            <!-- Ajoutez ici les options correspondant à vos pages -->
        </select>
        
        <br>
        <input type="submit" value="Supprimer la page">     
</form>  
            <label><a href="admin.html">Retour</a></label>
        
    </div>
</div>
</form> 
</body>
</html>






