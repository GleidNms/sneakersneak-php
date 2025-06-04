<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakerSneak</title>
    <link rel="icon" type="image/png" href="images/sneakerbox.png">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
  <div class="bandana">
    <p>LIVRAISON GRATUITE POUR LES MEMBRES</p>
    <p>RETOURS ET ÉCHANGES GRATUITS PENDANT 60 JOURS</p>
    <p>ACHETER MAINTENANT. PAYER AVEC KLARNA.</p>
</div>

    <div class="firstsection">
        <div class="navbar">
            <div class="navbar-title">
                <h1>SS</h1>
            </div>
            <div class="navbar-side">
                <a href="catalogue.php"><h2>Catalogue</h2></a>
            </div>
            <div class="navbar-cart">
                <a href="about.php"><img src="images/carte-didentite (1).png" class="login"></a>
            </div>         
        </div>

        <h1 class="slogan">Une nouvelle manière de contourner vos habitudes.</h1>
        <h2 class="ad">Reservez vos chaussures avant le début des raffles, soyez discrets, soyez Sneaky</h2>

        <div class="searchbar" data-aos="fade-left" data-aos-offset="200" data-aos-duration="900">
        <form action="catalogue.php">
            <div class="searchbar-flex">
                <div class="searchbar-brand">
                    <h2>Modèle</h2>
                    <input type="search" class="searchinput" placeholder="Muslin ?" size="30px" name="model">
                </div>
                <div class="vv"></div>
                <div class="searchbar-model">
                    <h2>Marque</h2>
                    <select name="brand" id="size-select" class="sizesort">
                    <option name ="brand" value="Adidas">Adidas</option>
                    <option name ="brand" value="Nike">Nike</option>
                    <option name ="brand" value="Jordan">Jordan</option>
                    <option name ="brand" value="Reebok">Reebok</option>
                </select>
                </div>
                <button type="submit" class="searchbargo" href="catalogue.html">Rechercher</button>
            </div>
            </form>
        </div>
        <!-- <div>
          <h1 class="slogansearchbar">Soyez en avance sur les autres aux prochaines raffles sans vous prendre la tête</h1>
        </div> -->
    </div>

    <div class="cards">
        <h1 class="slogancard">Nos nouveautés pour vous</h1>
    </div>

    <div class="cards" data-aos="fade-left" data-aos-duration="1600">

    <?php
    include ('index_list.php');
    ?>

    </div>

    <footer class="footer">
        <div class="footer__addr">
          <h1 class="footer__logo">SneakerSneak</h1>
              
          <h2>Contact</h2>
          
          <address>
          2 Rue Albert Einstein, 77420 Champs-sur-Marne<br>
                
            <a class="footer__btn" href="gleidabadjeck@gmail.com">Email Us</a>
          </address>
        </div>
        
        <ul class="footer__nav">  
          <li class="nav__item">
            <h2 class="nav__title">Mentions légales</h2>
            
            <ul class="nav__ul">
              <li>
                <a href="policy.php">Privacy Policy</a>
              </li>
              
            </ul>
          </li>
        </ul>
        
        <div class="legal">
          <p>&copy; 2022 Something. All rights reserved.</p>
          
          <!-- <div class="legal__links">
            <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
          </div> -->
        </div>
      </footer>

      <script>
          AOS.init({
      startEvent: 'load',
    });
    window.addEventListener('load', function() {
  AOS.refresh();
});
      </script>
</body>
</html>