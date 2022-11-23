<?php

require "dataBase.class.php";

$id = $_GET['id'];
$nom = $_GET['nom'];
$type =$_GET['supprimer'];

$titre = "";

if ($type == "Supprimer le personnage") {
    $titre ="Voulez vous supprimer $nom ?";
} elseif ($type == "ajout")  {
    $titre ="Voulez vous  ajouter $nom à la partie";
} elseif ($type == "retirer") {
    $titre ="Voulez vous  retirer $nom de la partie";
} elseif ($type == "Modifier") {
    $titre ="Modifier le personnage $nom ?";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP POO - Jeu de combat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get">

    <div class="controle">

 <h2 class="controle-title">
    <?= $titre ?>
 </h2>

 <div class="controle-button">
     <input type='hidden' name='id' value='<?=$id ?>'>

     <?php

     if ($type == "Modifier") {
         echo "<input type='text' value='{$nom}' class='controle-taille'>";
     }

     ?>

     <input type="submit" value="OUI" class="controle-taille" formaction="modification_nom.php">
     <input type="submit" value="NON" class="controle-taille ">
 </div

     </div>

 </form>

</body>
</html>




