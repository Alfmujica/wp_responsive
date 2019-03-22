<!DOCTYPE html>
<html lang="es" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Navbar using flexbox and javascript</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
        crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
</head>

<body>

  <nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
    </span>
    <a href="#" class="logo">logo</a>
    <ul class="main-nav" id="js-menu">
      <li class="home_active">
        <a href="#" class="nav-links">Home</a>
      </li>
      <li>
        <a href="#" class="nav-links">Products</a>
      </li>
      <li>
        <a href="#" class="nav-links">About Us</a>
      </li>
      <li>
        <a href="#" class="nav-links">Contact Us</a>
      </li>
      <li>
        <a href="#" class="nav-links">Blog</a>
      </li>
    </ul>
  </nav>

<div class="container">
  <img src="<?php bloginfo('template_url')?>/img/background.jpg" width="100%" height="345" alt="prueba">
  <div class="upper_text">
    <p class="centered"><?php the_field( 'banner_sup' ); ?></p>
  </div>
  <div class="medium_text">
    <p class="sub_centered"><?php the_field( 'banner_med' ); ?></p>
  </div>
  <div class="lower_text">
    <a href="<?php the_field( 'banner_inf_url' ); ?>" class="low_centered"><?php the_field( 'banner_inf' ); ?></a>
  </div>
</div>

<div class="testimonials">
  <h6 class="testimonials_text">Testimonios</h6>
    <div class="testimonials_galery">
      <div>
        <img src="<?php the_field( 'testimonials_1img' ); ?>">
        <p>
         <?php the_field( 'testimonials_1' ); ?>
        </p>
      </div>
      <div>
        <img src="<?php the_field( 'testimonials_2img' ); ?>">
        <p>
          <?php the_field( 'testimonials_2' ); ?>
        </p>
      </div>
      <div>
        <img src="<?php the_field( 'testimonials_3img' ); ?>">
        <p>
          <?php the_field( 'testimonials_3' ); ?>
        </p>
      </div>
    </div>
  </div>

  <hr class="rainbow">

  <div class="heading">
    <p class="upper_title_h">
      <?php the_field( 'heading_sup' ); ?>
    </p>
    <h5><?php the_field( 'heading_med' ); ?></h5>
    <p class="content_h">
      <?php the_field( 'heading_inf' ); ?>
    </p>
  </div>

  <div class="blog_box">
    <div class="blog_upper">
      <div class="blog_content">
      <p class="upper_title_h">
        Blog
      </p>
      <h6>Esto es el titulo del post</h6>
      <p class="content_h">
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      </p>
      </div>
      <div class="blog_readmore">
        <a href="#">Leer mas</a>
      </div>
    </div>

    <div class="blog_lower">
      <div class="blog_userpic">
        <img width="50px" height="50px" src="<?php bloginfo('template_url')?>/img/1.jpg">
      </div>
      <div class="blog_userinfo">
        <p class="username">Texto del username</p>
        <p class="category">Categoria de post publicado</p>
      </div>
    </div>
  </div>

<div class="footer">
    <div class="footer_left">
     <a href="#copy"><?php the_field( 'copyright' ); ?></a>
    </div>
    <div class="footer_right">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
        </li>
      </ul>
    </div>
</div>

</body>

<script  src="<?php bloginfo('template_url')?>/js/index.js"></script>

</html>
