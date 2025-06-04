<?php
include ("connexion.php");
$query="SELECT * FROM `Chaussure` LIMIT 5";
$queryVerb = "WHERE";

if(isset($_GET["model"])) {
    $query .= "WHERE nom LIKE '%" . $_GET["model"] . "%'";
    $queryVerb = "AND";
}

if(isset($_GET["brand"])) {
    $query .= $queryVerb . " brand='" . $_GET["brand"] . "'";
    $queryVerb = "AND";
}

$stmt=$db->query($query);
$results=$stmt->fetchall(PDO::FETCH_ASSOC);

foreach($results as $sneaker){
    echo "<div class=\"card\">
    <a href=\"details.php?id={$sneaker["id"]}\">
    <img src=\"{$sneaker["image1"]}\" alt=\"{$sneaker["nom"]}\">
    </a>
    <div class=\"details-flex\"><h1>{$sneaker["nom"]}</h1>
    <p class=\"price\">{$sneaker["prix"]}$</p>
    <p class=\"def\">{$sneaker["description"]}</p>
    <div class=\"button-flex\"><a href=\"details.php?id={$sneaker["id"]}\"><button input=\"submit\" class=\"button\">Voir les détails</button></a></div>
    </div>
    </div>
    ";
  }
?>