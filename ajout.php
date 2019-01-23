<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 22/01/2019
 * Time: 15:49
 */

include "index.php";
//include "pageAcceuil.php";

function newData()
{

    $pseudo= $_POST['pseudo'];
    $texte= $_POST['commentaire'];


    global $conn;


    $requete = "INSERT INTO forum (`pseudo`, `commentaire`) VALUES (?,?)";

    $stmt = $conn->prepare($requete);
    $stmt->bind_param("ss", $pseudo, $texte);
    $stmt->execute();
    $stmt->close();



}

if (!empty($_POST['pseudo']) && !empty($_POST['commentaire'])){
    newData();
    header("Location: pageAcceuil.php");
}
