<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 25/01/2019
 * Time: 10:33
 */

include "index.php";

session_start();


    $nom = $_POST['nom'];
    $password = $_POST['password'];
    $pass = sha1($password);

    $selection = "SELECT * FROM administrateur  ";
    $sel = $conn->query($selection);
    $row = $sel->fetch_assoc();



if (!empty($password) && !empty($nom)) { //SI PASS ET NOM RECUPERES ON VERIFIE


        if ( $row['password'] == $pass && $row['nom']==$nom) {

                $_SESSION['nom']= $nom;
                header("Location: admin.php");

        } else {

            echo "Mauvaise identification";
        }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>



<div id="log">
    <h1> LOG IN</h1>
    <span>Veuillez vous identifier!</span>
</div>

<div id="enregistrement">
    <form action="" method="post">
        <label>Nom</label><input type="text" name="nom" class="inputLog"><br/>
        <label>Password</label><input type="text" name="password" class="inputLog"><br/>
        <button type="submit" name="boutonLog" id="boutonLog">OK</button><br/>
    </form>
</div>

</body>
</html>

