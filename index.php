
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

<h2>Q46 - JEU DE COMBAT</h2>

<div class="tableau">

    <div class="personnages tb1">

        <h2>Créer un nouveau personnage</h2>
        <input type="text">
        <button>Enregistrer le personnage</button>

    </div>

    <div class="personnages tb2">

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

        ?>

        <button class="options">Modifier</button>
        <button class="options">Supprimer</button>


    </div>

    <div class="personnages tb3">

        <h2>Personnages sélectionnées pour la partie</h2>

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

        ?>

    </div>

    <button class="options">LANCER LA PARTIE !</button>

</div>


<script src="script.js" type="module"></script>

</body>
</html>