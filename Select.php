<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 23/01/2019
 * Time: 15:23
 */
include "index.php";

$selection= "SELECT * FROM forum ORDER BY `date` DESC  ";

$sel = $conn->query($selection);


while($row = $sel->fetch_assoc()) {

    echo $row['commentaire']." <br> posté par ". $row['pseudo']."  le ". $row['date']. "<br>*****<br>";
}