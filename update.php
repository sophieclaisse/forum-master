<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 24/01/2019
 * Time: 10:56
 */
include "index.php";

if (isset($_GET['id'])){
$id= $_GET['id'];}



$sql= "SELECT * FROM forum where id='$id'";
$sel = $conn->query($sql);

$selection=$sel->fetch_assoc();





function changerData ($id)
{
    /*if (isset($_POST['pseudo'])){
        $pseudo= $_POST['pseudo'];}

    if (isset($_POST['date'])){
        $date= $_POST['date'];}*/

    if (isset($_POST['commentaire'])){
        $commentaire= $_POST['commentaire'];}


    global $conn;



    $aJour= "UPDATE forum set  
          
              `commentaire`='$commentaire', 
               
              where id = $id";


    $conn->query($aJour);
    /* echo $aJour;
     echo $conn->error;*/
}



//if (isset ($_POST['name'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset ($_POST['commentaire']))  {

        changerData($id);
        header("Location: admin.php");
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

<h1>Mettre à jour</h1>

<form action="" method="post">
    <div id="nom">
        <?php echo $selection['pseudo']. " - le: ". $selection['date']."<br>"; ?>
    </div>
    <textarea name="commentaire" id="txt" >
        <?php echo $selection['commentaire']; ?>
    </textarea>

    <div> <button type="submit" name="button" id="bouton">Envoyer</button></div>

</form>

</body>
</html>






