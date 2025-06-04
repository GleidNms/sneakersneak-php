<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakerSneak</title>
    <link rel="icon" type="image/png" href="images/sneakerbox.png">
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
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

    <div class="slogan">
            <h1>A propos</h1>
    </div>

    <h1 class="slogan">Qui-suis-je ?</h1>

    <div class="info">
        <img src="images/IMG_9579.JPG" class="meimg">
        <h2 class="ad">I am currently a Multimedia Student learning about many of the Comp Sci subjects (Programming, Design). I got a talent in editing and taking pictures but I also enjoy improving my skills in the Software Engineering area.</h2>
    </div>

    <h1 class="slogan">Mon parcours ?</h1>
    <ul class="list-flex">
            <li>
                <h2 class="ad">Web Developper Internship - OCTO</h2>
                <p class="text">- Create a Website from scratch using the HTML and CSS language.</p>
                <p class="text">- Watch and learn from experienced Computer Scientist during the process.</p>
            </li>

            <li>
                <h2 class="ad">University Bachelor in Technology</h2>
                <p class="text">- Computer Science and Ergonomy</p>
            </li>
    </ul>
    
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
</body>