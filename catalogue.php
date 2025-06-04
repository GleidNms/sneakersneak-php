<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakerSneak</title>
    <link rel="stylesheet" href="catalogue.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/png" href="images/sneakerbox.png">
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
            <a href="index.php"><h1>SS</h1></a>
        </div>
        <div class="navbar-side">
            <a href="catalogue.php"><h2>Catalogue</h2></a>
        </div>
        <div class="navbar-cart">
        <a href="about.php"><img src="images/carte-didentite (1).png" class="login"></a>
        </div>         
    </div>

    <h1 class="slogan">Dernières sorties</h1>

    <div class="box">

    
        <div class="filters">
            <form action="catalogue.php">
            <div class="filters-box">
                <h1 class="filters-title">Filtres</h1>
                <hr>
            </div>

            <div class="nom">
                <h2 class="nom-title">Nom du Modèle</h2>
                <input type="search" class="searchinput" placeholder="Nike ?" size="30px" name="model">
                <hr>
            </div>

            <div class="marque">
                <h2 class="nom-title">Marque</h2>
                    <div class="marque-checkbox">
                        <div class="flex-checkbox">
                            <input type="radio" id="huey" name="brand" value="Nike"
                            >
                            <label for="huey">Nike</label>
                        </div> 

                        <div class="flex-checkbox">
                            <input type="radio" id="huey" name="brand" value="Adidas"
                            >
                            <label for="huey">Adidas</label>
                        </div>

                        <div class="flex-checkbox">
                            <input type="radio" id="huey" name="brand" value="Jordan"
                            >
                            <label for="huey">Jordan</label>
                        </div>

                        <div class="flex-checkbox">
                            <input type="radio" id="huey" name="brand" value="Reebok">
                            <label for="huey">Reebok</label>
                        </div>
                </div>
                <hr> 
            </div>

            <div class="datesortie">
                <h2 class="nom-title">Prix</h2>
                <input type="search" class="searchinput" placeholder="100 euros ?" size="30px" name="price">
                <!-- <select name="datesortie" id="size-select" class="sort">
                    <option value="janvier" name="datesortie">Janvier 2022</option>
                    <option value="fevrier" name="datesortie">Fevrier 2022</option>
                    <option value="Mars" name="datesortie">Mars 2022</option>
                    <option value="Avril" name="datesortie">Avril 2022</option>
                    <option value="Mai" name="datesortie">Mai 2022</option>
                </select> -->
                <hr>
            </div>

            <!-- <div class="taille">
                <h2 class="nom-title">Taille</h2>
                <select name="size" id="size-select" class="sizesort">
                    <option value="">8</option>
                    <option value="size1">9</option>
                    <option value="size2">10</option>
                    <option value="size3">11</option>
                    <option value="size4">12</option>
                    <option value="size5">13</option>
                </select>
                <hr>
            </div>

            <div class="popularite">
                <h2 class="nom-title">Popularité</h2>
                    <div class="popularite-checkbox">
                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">1</label>
                        </div> 

                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">2</label>
                        </div>

                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">3</label>
                        </div>

                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">4</label>
                        </div>

                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">5</label>
                        </div>
                </div>
                <hr> 
            </div> -->

            <div class="popularite">
                <h2 class="nom-title">Genre</h2>
                    <div class="popularite-checkbox">
                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">Homme</label>
                        </div> 

                        <div class="flex-popularite">
                            <input type="radio" id="huey" name="drone" value="huey"
                            checked>
                            <label for="huey">Femme</label>
                        </div>
                    </div>
                </div>
                <hr> 
            <div class="button-filters-flex"><button type="submit" class="button-filters">Rechercher</button></div>
            </form>
        </div>

        <div class="cards" data-aos="fade-up" data-aos-duration="1600">

        <?php
        include ('sneaker_list.php');
        ?>

        </div>

        <!-- <div class="cards" data-aos="fade-up" data-aos-duration="1600">
            <div class="card">
                <img src="image 4.png" alt="Jordan 3 Muslin">
                <h1>Air Jordan 3 SE Muslin</h1>
                <p class="price">$200</p>
                <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
                <button class="button">Ajouter au panier</button>
            </div>
            
            <div class="card">
                <img src="image 4.png" alt="Dunk Low University Red">
                <h1>Air Jordan 3 SE Muslin</h1>
                <p class="price">$100</p>
                <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
                <button class="button">Ajouter au panier</button>
            </div>
    
            <div class="card">
                <img src="image 4.png" alt="Yeezy 500 Blush">
                <h1>Air Jordan 3 SE Muslin</h1>
                <p class="price">$210</p>
                <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
                <button class="button">Ajouter au panier</button>
            </div>

    </div>

    <div class="cards" data-aos="fade-up" data-aos-duration="1600">
        <div class="card">
            <img src="image 4.png" alt="Jordan 3 Muslin">
            <h1>Air Jordan 3 SE Muslin</h1>
            <p class="price">$200</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div>
        
        <div class="card">
            <img src="image 4.png" alt="Dunk Low University Red">
            <h1>Air Jordan 3 SE Muslin</h1>
            <p class="price">$100</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div>

        <div class="card">
            <img src="image 4.png" alt="Yeezy 500 Blush">
            <h1>Air Jordan 3 SE Muslin</h1>
            <p class="price">$210</p>
            <p class="def">Jordan Brand continue d’expérimenter sur le design de Tinker Hatfield, prochaine étape sur la liste, la Air Jordan 3 SE « Muslin ».</p>
            <button class="button">Ajouter au panier</button>
        </div> -->

    </div>
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