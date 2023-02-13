<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('style.css'); ?>" type="text/css">
   
    
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrap">
      <header>
        <h1><a><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
       
       <nav>
       <!--Logo personnalisable -->

       <div class = "logo" >
            <?php if(has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
            <?php else : ?>

            <h1><a href="<?php bloginfo('/img/logo.svg'); ?>"><?php bloginfo('name'); ?></a></h1>

            <?php endif; ?>

      </div> 

     

      <!--Partie Menu burger -->

      <a id="link" href="#"><span id="burger"></span></a>
      <!--Fin Partie Menu burger -->
      <div class="menu menuburgers">

        <li><a href="#presentation">Présentation</a></li>
        <li><a href="#functioning-anchor">Fonctionnement</a></li>
        <li><a href="#try-anchor">Configurateur</a></li>
        <li><a href="#contact-anchor">Contactez nous</a></li>
        <li><a href="">S'inscrire</a></li>
      </div>
      <!-- </div> -->

        

       <?php 
          // wp_nav_menu ( array (
          // 'theme_location' => 'header-menu' 
          //                                   ) ); ?>
                                            </nav>



     <section class = "header">
    <div class="taille-header">
    <?php if ( get_header_image() ) : ?>
    <!-- AJOUTER IMAGE avec get_stylesheet_directory_uri() Cette fonction va pointer vers le theme en cours (soit un theme parent soit un theme enfant). Par exemple, pour la même image qui reste dans le theme enfant : -->
    <!-- <img src="<?php // echo get_stylesheet_directory_uri(); ?>/img/img_header.jpg" width="" height="" alt="" /> -->


    <!-- Dans fonction add_theme_support( 'custom-header' ); Permet de gérer l image du header  -->
    <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    
    <?php endif; ?>

   
    </div>

   
      <h1 class="h1-dark">Créez et réservez <br>
        votre <span class="color-secondary-text">stand en bois</span> <br>
        avec notre configurateur 3D</h1>

    </section>
      </header>