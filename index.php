
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

<div class="title">
    
    <div class="title-img">
        <img src="https://notion-emojis.s3-us-west-2.amazonaws.com/prod/svg-twitter/1f47e.svg" width="80" height="80">
    </div>
    <div class="title-name">
        <h1>TP POO</h1>
        <h2>Q46 - JEU DE COMBAT</h2>
    </div>
    
</div>


<div class="tableau">

    <div class="personnages tb1">

        <h2>Créer un nouveau personnage</h2>
        <input class="new-perso" type="text" placeholder="Nom du personnage">
        <button class="new-perso">Enregistrer le personnage</button>

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
                        echo "<th>Point de Vie</th>";
                        echo "<th>Force d'attaque</th>";
                        echo "<th>Point d'attaque</th>";
                        echo "<th colspan='2'>Options</th>";
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
                    echo "<td><button>Ajouter à la partie</button></td>";
                    echo "<td><button class='red'>Supprimer le personnage</button></td>";

                }

                echo "</tr>";

            echo "</tbody>";

        echo "</table>";

        ?>

    </div>

    <div class="personnages tb3">

        <h2>Personnages sélectionnés pour la partie</h2>

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
        echo "<th>Point de Vie</th>";
        echo "<th>Force d'attaque</th>";
        echo "<th>Point d'attaque</th>";
        echo "<th>Options</th>";
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
            echo "<td><button class='remove'>Retirer de la partie</button></td>";

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