<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 22/01/2019
 * Time: 15:36
 */

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "forum";



//connecter
$conn= NEW mysqli($servername,$username,$password);

//verifier qu il n y a pas d'erreur de connection:
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);//interrompt l'execution du script (pas conseillé, mettre message d erreur ou autre chose)
}
else
{
// Selectionner la base à utiliser
    $conn->select_db($dbname);}//le "->" sert a acceder aux donnees objet en php