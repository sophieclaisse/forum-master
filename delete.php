<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 24/01/2019
 * Time: 09:38
 */

include "index.php";

function supprimer()
{

    $ID= $_GET['id'];

    global $conn;
    $effacer= "DELETE from forum where id= $ID";
    $conn->query($effacer);

    header("Location: admin.php" );
}
supprimer();


