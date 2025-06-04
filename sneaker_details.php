<?php

include ("connexion.php");
$query="SELECT * FROM `Chaussure` WHERE id={$_GET['id']}";

$stmt=$db->query($query);
$results=$stmt->fetch(PDO::FETCH_ASSOC);
    echo "
    <div class=\"js-flex\">
      <div class=\"js-slider\">
        <div class=\"js-photos\">
            <div class=\"js-photo green\">        
                <img src=\"{$results["image1"]}\">
            </div>
            <div class=\"js-photo green-dark\">        
                <img src=\"{$results["image2"]}\">
            </div>
            <div class=\"js-photo green-darker\">        
                <img src=\"{$results["image3"]}\">
            </div>
        </div>
        
        <div class=\"js-navigation\">
            <button class=\"js-btn-decale-droite\">
                <span class=\"arrow\"></span>
            </button>
            <button class=\"js-btn-decale-gauche\">
                <span class=\"arrow\"></span>
            </button>
        </div>
    </div>
    </div>";

    echo"<div class=\"product-details\">
            <div class=\"product-details-flex\">
            <h1 class=\"slogan\">{$results["nom"]}</h1>
            <h2 class=\"product-brand\">{$results["brand"]}</h2>
            <h1 class=\"slogan\">Détails produits : </h1>
            <div class=\"product-description\">
            <h2 class=\"product-desc1\">{$results["description"]}</h2>
    
            <h2 class=\"product-desc1\">{$results["description2"]}</h2>
        </div>
            <h2 class=\"product-brand\">{$results["prix"]}$</h2>
        </div>
        <hr>
        <div class=\"product-select\">
            <select name=\"size\" id=\"size-select\" class=\"sort\">
                <option value=\"datesortie\">{$results["taille"]}</option>
            </select>
            </div>
            <button class=\"open-button\" onclick=\"openForm()\">Réservez</button>";
            include ("formulaire_send.php");
    echo "</div>
    </div>
    ";
?>