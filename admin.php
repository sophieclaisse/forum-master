<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 24/01/2019
 * Time: 09:27
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


<h1>Espace administrateur</h1>







<?php
$selection= "SELECT * FROM forum ORDER BY `date` DESC  ";

$sel = $conn->query($selection);


while($row = $sel->fetch_assoc()) {?>

<div id="container">
    <div id="trash"><a href="<?php echo 'delete.php?id='.$row['id'] ?>" ><img src="Trash.png" height="20px"></a></div>
    <div id="pen"><a href="<?php echo 'update.php?id='.$row['id'] ?>" ><img src="crayon.png" height="20px"></a></div>

    <div id="titre"><?php echo $row['id']. " - ". $row['pseudo']. " - " . $row['date']. " :  <br> ".$row['commentaire']."<br><br>";} ?> </div>

</div>