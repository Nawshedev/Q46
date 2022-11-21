
<?php

require "dataBase.class.php";
require "personnage.class.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP POO - Jeu de combat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>TP POO</h1>

<h2>Q46 - Jeu de combat</h2>
<h3>Coucou</h3>

<div class="tableau">

    <div class="personnage">

        <h2>Créer un nouveau personnage</h2>
        <input type="text">
        <button>Ajout du personnage</button>

    </div>

    <div class="personnages">

        <h2>Liste des personnages disponibles</h2>

        <?php

        $database = new Database("localhost", "root", "q46_fg", "");
        $database->connect();
        $database->prepReq("SELECT * FROM personnages");
        $personnages = $database->fetchData();


        echo "<table>";

            echo "<thead>";

                echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Nom</th>";
                        echo "<th>Vie</th>";
                        echo "<th>Force d'attaque</th>";
                        echo "<th>Point d'attaque</th>";
                echo "</tr>";

            echo "</thead>";

            echo "<tbody>";

                foreach ($personnages as $personnage) {

                    echo "<tr>";

                    echo "<td>{$personnage['id']}</td>";
                    echo "<td>{$personnage['nom']}</td>";
                    echo "<td>{$personnage['vie']}</td>";
                    echo "<td>{$personnage['force_attaque']}</td>";
                    echo "<td>{$personnage['point_attaque']}</td>";

                }

                echo "</tr>";

            echo "</tbody>";

        echo "</table>";

//
//
//        foreach ($personnages as $personnage) {
//            $nomPersonnage = "Nom : " . $personnage['nom'] . " Vie " . $personnage['vie'] . " Force d'attaque " .  $personnage['force_attaque'] . "Point d'attaque " . $personnage['point_attaque'] ;
//            echo "<li>$nomPersonnage</li>";
//        }
//
//        ?>


    </div>

</div>

</body>
</html>