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
<!--
<div class="register">
    <form action="" method="post">
        <input type="text" name="pseudo_player" class="inputT" placeholder="pseudo" required>
        <input type="email" name="password_player" class="inputT" placeholder="email" required>
        <input type="password" name="email_player" class="inputT" placeholder="password" required>
        <input type="text" name="description_player" class="inputT" placeholder="description" required>

        <input type="submit" name="go" class="inputG" value="INSCRIPTION">
    </form>
</div>
-->

<div class="register">
    <form action="" method="post">
        <input type="text" name="pseudo_player" class="inputT" placeholder="pseudo" required>
        <input type="password" name="password_player" class="inputT" placeholder="mot de passe" required>

        <input type="submit" name="go" class="inputG" value="INSCRIPTION">
    </form>
</div>

<?php

    include "controllers/library.php"; 
    
    if(isset($_POST["go"]))
    {
        $objet = new player;
        $objet->connect();
    }
    
?>


</body>
</html>
