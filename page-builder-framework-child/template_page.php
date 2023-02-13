<?php
/*
  Template Name: template_page
*/
get_header();
?>


<!-- /* PRESENTATION    */ -->

<section class="presentation">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bande_present.svg" width="" height="" alt="" />

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <!-- <h2 id="presentation-anchor" class="title">Présentation</h2> -->

    <?php the_title( '<h2 id="presentation-anchor" class="title">', '</h2>') ; ?>                   
      <?php endwhile; endif; ?>


      <p class="light-presentation">
    <?php the_field('texte_presentation') ?>
    <!-- <p class="light-presentation">Cursus vitae congue mauris rhoncus aenean vel. Viverra orci sagittis eu volutpat odio facilisis. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. 
      Sit amet venenatis urna cursus eget nunc. Morbi tempus iaculis urna id volutpat.     
      Urna cursus eget nunc.      
      <br><br>  sit amet venenatis urna cursus eget nunc.Cursus vitae congue mauris rhoncus aenean vel. Viverra orci sagittis eu volutpat odio facilisis. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Sit amet venenatis urna cursus eget nunc. Morbi tempus iaculis urna id volutpat. Urna cursus eget nunc. sit amet venenatis urna cursus eget nunc. <br>
      <br>   sit amet venenatis urna cursus eget nunc.Cursus vitae congue mauris rhoncus aenean vel. Viverra orci sagittis eu volutpat odio facilisis. Pellentesque dignissim enim sit amet venenatis urna cursus eget nunc. Sit amet venenatis 
      <br> -->

     <br>
      <a class="uppercase" href="index_info.html">    <?php the_field('lien_info_presentation') ?>   </a></p>

  
  </section>

  <!-- /* FONCTIONNEMENT    */ -->



  <section class="functioning">
    <div class="right">
  
      <h2 id="functioning-anchor" class="title"> <?php the_field('titre_functioning') ?> </h2>


      <p class ="dark"> <?php the_field('texte_right_functioning') ?>    <!-- .Il s'agit de stand en bois de dimensions <span class="color-secondary-text"> 3mx3m ou 4mx4m</span>
        pour les clients la possibilité de configurer et <span class="color-secondary-text"> choisir les options :</span>     
        - dimensions
        - Nombres de coté ouverts ou fermés - ouvrir <span class="color-secondary-text">1, 2 ou 3 côtés.</span> -->

        </p>
       <img class="mockup" src=" <?php the_field('image_right_functioning') ?>" width="" height="" alt="" />
    </div>

    <div class="left">
    <img class = "icon-fonct" src="<?php the_field('icon_functioning') ?>" width="" height="" alt="" />

    <img class="img-fonct" src="<?php the_field('image_left_functioning') ?>" width="" height="" alt="" />

     <p class ="dark">  <?php the_field('texte_left_functioning') ?>  <!-- - choix des types de cloisons :<span class="color-secondary-text"> Bois, végétalisées, ajourées </span>
        - Options éclairage : rails leds (1, 2 ou 3 rails → pas généré dans la 3D)
        - Options des sols : soit bois, soit moquette (nuancier 20 couleurs)        
        Le module pourrait générer un devis estimatif accompagné d'un rendu en 3D -->
        </p>
    </div>
  </section>

  

   <!-- /* TRY   */ -->

   <section class="try">
   <img class ="img-try" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bande_ess.svg" width="" height="" alt="" />
    <h2 id="try-anchor" class="title">Essayer maintenant</h2>
    <img class ="icon-try" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_ess.svg" width="" height="" alt="" />
    <button class="style-button"> <a class="button"href="configurateur.html">Configurateur <br> ici</a> </button>

  </section>

   <!-- /* CONTACT */ -->

   <section class="contact">
    <div class="container-contact">
      <h2 id="contact-anchor" class="title">Contactez nous</h2>
      <img class = "icon-contact" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_contact.svg"  width="" height="" alt="" />
    </div>


<div class="form-contact">  
  <form action="" method="post">
   <div class="conteneur-nom-mail">
    <div class ="nom">
      <label for="nom"></label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom et prénom" required>
    </div>
    <div class="mail">
      <label for="email"></label>
      <input type="email" id="email" name="email" placeholder="Votre adresse mail" required>
    </div>
  </div>
    <div class="message">
      <label for="message"></label>
      <textarea id="message" name="message" placeholder="Écrivez votre message" required></textarea>
    </div>
    <div class="button-contact">
      <button type="submit">Envoyer mon message</button>
    </div>
  </form>
</div>

   <div class="text-center">
    <p class="dark info">www.igexpo.fr  |  +33 (0)3 81 51 42 24  |  info@igexpo.fr</p>
  </div>
  </section>

<?php get_footer();
?>
