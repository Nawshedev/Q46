<?php

require "dataBase.class.php";

$personnage = $_GET["personnage"];



$database = new Database("localhost", "root", "q46_fg", "");
$database->connect();
$database->prepReq("SELECT * FROM personnages where nom = :name", ["name" => $personnage]);
$personnages = $database->fetchData();

    if (count($personnages) == 0) {

        echo $personnage;

        $database->prepReq("INSERT INTO personnages (nom, vie, force_attaque, point_attaque )  values (:name, 100, 0, 0)", ["name" => $personnage]);


        echo "Personnage $personnage ajouté";


    } else {

        echo "Personnage $personnage existant";
    };


header("location:index.php");

var_dump($database);

//var_dump($personnages);




