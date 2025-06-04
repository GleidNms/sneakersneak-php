<?php

include ("connexion.php");
$query="SELECT * FROM `Chaussure` WHERE id={$_GET['id']}";

$stmt=$db->query($query);
$results=$stmt->fetch(PDO::FETCH_ASSOC);


echo "<div class=\"form-popup\" id=\"myForm\">
    <form action=\"confirmation.php\" method=\"post\" class=\"form-container\" name=\"emailsend\">
    <h1>Reservation</h1>
    <label for=\"email\"><b>Nom</b></label>
    <input type=\"text\" name=\"nom\" class=\"size\" placeholder=\"Nom...\"><br>

    <label for=\"psw\"><b>Prenom</b></label>
    <input type=\"text\" name=\"prenom\" class=\"size\" placeholder=\"Prenom...\"><br>

    <label for=\"psw\"><b>Numéro</b></label>
    <input type=\"text\" name=\"numtel\" class=\"size\" placeholder=\"Numéro de Telephone...\"><br>

    <label for=\"psw\"><b>Mail</b></label>
    <input name=\"mail\" type=\"text\" class=\"size\" placeholder=\"Adresse mail...\"><br>

    <button type=\"submit\" submit\" value=\"Réservez\" name=\"bouton\" class=\"btn\">Login</button>
    <button type=\"button\" class=\"btn cancel\" onclick=\"closeForm()\">Close</button>
    </form>
</div>";

if (isset($_POST["contenu"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $numtel = $_POST["numtel"];
    $mail = $_POST["mail"];
    $subject = "Essai de PHP Mail";
    
    
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From:"SneakerSneak"<sneakersneak@gmail.com>' . "\n";
    $headers[] = 'Content-Type:text/html; charset=uft-8' . "\n";
    $headers[] = 'Content-Transfer-Encoding: 8bit';

    $messagemail = 'Merci' . $nom . $prenom . 'd\'avoir reservé chez nous !';

mail($mail, $subject, $messagemail, $headers);
echo "<h1 class=\"mailsent\">Merci !</h1>";
}
?>