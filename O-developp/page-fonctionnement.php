<?php
/*
* Template Name: Page fonctionnement
*/
?>


<!-- Elle sert également à afficher les types de contenu personnalisés  -->
<?php get_header(); ?>


<!-- On va chercher tous nos types de contenu personnalisés souhaités
Et on va itérer sur tous les articles présents, pour les afficher -->
<?php 
/* On vérifie si nous sommes sur la page "fonctionnement" */
if ( is_page( 'testons la page' ) ) {
  
  /* On récupère tous les articles custom post type "information_article" */
  $args = array(
    'post_type' => 'bloc_info',
    'posts_per_page' => 10
  );
  $query = new WP_Query( $args );

  /* On vérifie s'il y a des articles à afficher */
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post();
      /* On utilise notre fichier "single-article_info.php pour afficher chaque article avec la structure voulue */
      get_template_part('template-parts/content' , 'bloc_info' );
    }
  }
  wp_reset_postdata();
} 

?>
<?php  get_footer(); ?>

<!-- Mettre en commun : 1 seul fichier CSS // 1 seul fichier JS  -->
<!-- CREATION DE COMPTE & ADMINISTATEUR + FORMULAIRE -->
<!-- PAGE CONNEXION -->
<!-- PAGE CONFIGURATEUR  -->
<!-- DEVIS -->
<!-- REGLAGE -> GENERAL : CHOCHER = AUTORISER LES INSCRIPTIONS  // USER ROLE EDITOR   -->