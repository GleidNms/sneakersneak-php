<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakerSneak V2</title>
    <link href="formulaire.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="navbar-title">
            <a href="index.html"><h1>SS</h1></a>
        </div>
        <div class="navbar-side">
            <h2>Nouveautés</h2>
            <a href="catalogue.html"><h2>Catalogue</h2></a>
        </div>
        <div class="navbar-cart">
            <img src="sneakerbox.png" class="cart">
            <div class="vl"></div>
            <img src="images/carte-didentite (1).png" class="login">
        </div>         
    </div>

    <?php
    include ("connexion.php");
    $query="SELECT * FROM `Chaussure` WHERE id={$_GET['id']}";
    $stmt=$db->query($query);
    $results=$stmt->fetch(PDO::FETCH_ASSOC);
    echo "<h1 class='slogan'>{$results["nom"]}</h1>"
    /*il faut afficher le nom du produit précedemment cliqué.*/
    ?>

    <div class="form">
        <form action="/ma-page-de-traitement" method="post" id="entry" class="form-style">
            <label for="name" class="slogan">Nom et prénoms: </label><br>
            <input type="text" id="titre" name="user_titre" maxlength="10" class="size"><br>
        
            <label for="mail" class="slogan"> Adresse postale:</label><br>
            <input type="text" id="analogie" name="user_nom" maxlength="50" class="size"><br>

            <label for="courriel" class="slogan">Adresse Mail:</label><br>
            <input type="email" id="courriel" name="courriel" class="size"><br>

            <input type="button" id="envoi" value="Réservez" class="button">
    </div>

    <footer class="footer">
        <div class="footer__addr">
          <h1 class="footer__logo">SneakerSneak</h1>
              
          <h2>Contact</h2>
          
          <address>
            5534 Somewhere In. The World 22193-10212<br>
                
            <a class="footer__btn" href="gleidabadjeck@gmail.com">Email Us</a>
          </address>
        </div>
        
        <ul class="footer__nav">
          <li class="nav__item">
            <h2 class="nav__title">Media</h2>
      
            <ul class="nav__ul">
              <li>
                <a href="#">Online</a>
              </li>
      
              <li>
                <a href="#">Print</a>
              </li>
                  
              <li>
                <a href="#">Alternative Ads</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item nav__item--extra">
            <h2 class="nav__title">Technology</h2>
            
            <ul class="nav__ul nav__ul--extra">
              <li>
                <a href="#">Hardware Design</a>
              </li>
              
              <li>
                <a href="#">Software Design</a>
              </li>
              
              <li>
                <a href="#">Digital Signage</a>
              </li>
              
              <li>
                <a href="#">Automation</a>
              </li>
              
              <li>
                <a href="#">Artificial Intelligence</a>
              </li>
              
              <li>
                <a href="#">IoT</a>
              </li>
            </ul>
          </li>
          
          <li class="nav__item">
            <h2 class="nav__title">Legal</h2>
            
            <ul class="nav__ul">
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              
              <li>
                <a href="#">Terms of Use</a>
              </li>
              
              <li>
                <a href="#">Sitemap</a>
              </li>
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2019 Something. All rights reserved.</p>
          
          <div class="legal__links">
            <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
          </div>
        </div>
      </footer>

</body>

</html>