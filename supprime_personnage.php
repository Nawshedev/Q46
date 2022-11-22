
<?php

require "dataBase.class.php";

$id = $_GET["id"];

echo $id;

$database = new Database("localhost", "root", "q46_fg", "");
$database->connect();
//$database->prepReq("SELECT * FROM personnages where nom = :name", ["name" => $personnage]);
$database->prepReq("delete FROM personnages where id = :id", ["id" => $id]);
$personnages = $database->fetchData();


echo "Etes vous sur de supprimer le personnage";
header("location:index.php?error=êtes-vous sur de supprimer le personnage");
