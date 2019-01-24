<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 22/01/2019
 * Time: 15:45
 */
include "index.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div id="login">
    <a href="admin.php">Administrateur</a>
</div>


<h1>Bienvenue sur le forum</h1>

<form action="ajout.php" method="post">
    <div id="nom">
        <label >Pseudo</label>
        <input type="text" name="pseudo" value="" id="input">
    </div>
    <textarea name="commentaire" id="txt" placeholder= "Entrez votre commentaire ici"></textarea>

    <div> <button type="submit" name="button" id="bouton">Envoyer</button></div>

</form>


<div id="comm">




</div>




<script src="AjaxRequest.js"></script>



</body>
</html>
