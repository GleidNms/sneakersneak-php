<?php
include ("connexion.php");
$query="SELECT * FROM `Chaussure`";
$queryVerb = "WHERE";

if(isset($_GET["model"])) {
    $query .= "WHERE nom LIKE '%" . $_GET["model"] . "%'";
    $queryVerb = "AND";
}

if(isset($_GET["brand"])) {
    $query .= $queryVerb . " brand='" . $_GET["brand"] . "'";
    $queryVerb = "AND";
}

if(isset($_GET["date"])) {
    $query .= $queryVerb . "datesortie" . $_GET["date"] . "'";
    $queryVerb = "AND";
}

$stmt=$db->query($query);
$results=$stmt->fetchall(PDO::FETCH_ASSOC);

if (count($results) == 0) {
    echo "<h1 class='slogan'>Aucun résultat :(</h1>";
}

else {


foreach($results as $sneaker){
    $count ++;
    echo "<div class=\"card\">
    <a href=\"details.php?id={$sneaker["id"]}\">
    <img src=\"{$sneaker["image1"]}\" alt=\"{$sneaker["nom"]}\">
    </a>
    <h1>{$sneaker["nom"]}</h1>
    <p class=\"price\">{$sneaker["prix"]}$</p>
    <p class=\"def\">{$sneaker["description"]}</p>
    <a href=\"details.php?id={$sneaker["id"]}\"><button input=\"submit\" class=\"button\">Voir les détails</button></a>
    </div>
    ";
  } }
?>