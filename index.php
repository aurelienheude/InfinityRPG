<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity RPG</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<form action="" method="post">
    <input type="submit" name="xp_sub" value="gagner de l'xp" />
</form>

<?php

    include "controllers/library.php"; 
    
    if(isset($_POST["xp_sub"]))
    {
        $objet = new mobs;
        $objet->show_mobs_info($_POST["xp_sub"]);
    }
    
?>


</body>
</html>
