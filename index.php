<?php
include_once 'includes/cnx.php';
$reponse = $connexion->query('SELECT * FROM projects');
$reponse->execute();
$infos = $reponse->fetchALl();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styl.css">
  <title>My Portfolio</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>A</span> <span>R</span></h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Accueil</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Portfolio</a></li>
            <li><a href="#about" data-after="About">À propos</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="login.php" data-after="Login">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Rouah Abderrahmane <span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div id="WEBDESIGN" class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>WEBDESIGN</h2>
          <p>Créer des maquettes web, concevoir des interfaces (wireframes, prototypage), réfléchir à une identité graphique sur mesure, respecter une charte graphique, pour vous faire des identités visuelles uniques, qui vous représentent le mieux.
          </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>WORDPRESS</h2>
          <p>Personnaliser des templates, créer des thèmes avec des pages builders(Visual composer & Elemontor) ou realiser des thémes sur-mesure from scratch. WP est pour moi un outil pour mettre en place des sites faciles à mettre à jour et extensibles.
          </p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/ alt=""></div>
          <h2>INTÉGRATION WEB</h2>
          <p>Intégrer des maquettes web, réfléchir sur la performance d’une page web, fournir du code propre pour une maquette peaufinée et un site utilisable sur un maximum d’appareils et navigateurs, c’est mon coeur de métier.
          </p>
        </div>
      </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"><span>Portfolio</span></h1>
      </div>

      <div class="all-projects">
        <?php foreach ($infos as  $info) { ?>
          <div class="project-item">
            <div class="project-info">
              <h1><?= $info['titre'] ?></h1>
              <p><?= $info['discription'] ?></p>
              <a href="<?= $info['lien'] ?>" class="project-button" target="_blank">Visite Website</a>
            </div>
            <div class="project-img">
              <img src="img/<?= $info['img'] ?>" alt="img">
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/maphoto.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">À <span>propos</span></h1>
        <h2>full stack Developer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
        <a href="https://drive.google.com/file/d/1JiX_FTIuDQagcV4TvIImCfDbkOlnpPHG/view?usp=sharing" class="cta" download>Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contacte <span>Moi</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Téléphone</h1>
            <h2>+212 608601172</h2>
            <h2>+212 60000000</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>rouah46@gmail.com</h2>
            <h2>arouah@student.youcode.ma</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Adresse</h1>
            <h2>YOUSSOUFIA, MARRAKECH-SAFI, MAROC</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>A</span>bderrahmane <span>R</span>ouah</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/abderahman.rouah"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/abderrahmane.rouah/"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/rouah46"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.linkedin.com/in/abderrahmane-rouah-110b9219b/"><img src="https://img.icons8.com/bubbles/100/000000/linkedin.png" /></a>
        </div>
      </div>
      <p>Copyright © 2020 Rouah. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>