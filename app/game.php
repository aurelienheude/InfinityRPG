<?php session_start(); include "../controllers/library.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity RPG</title>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<nav>
    <h1>Infinity RPG</h1>
    <a href='../controllers/deconnexion.php'>deconnexion</a>
</nav>

<div class="adventure">
    <div class="adventure_box">
        <p>Lancer une aventure</p>
    </div>


<!-------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------->
    <div class="show">
        <?php 
            $obj = new aventure("Naqa le barbare"); 
            $obj->get_player(); 
        ?>
    </div>
<!-------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------->

</div>

</body>
</html>