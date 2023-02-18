<?php
/*
Template Name : Archiveuh
*/
?>

<?php get_header(); ?>

<?php get_footer(); ?>

<!-- <?php
if ( is_page( 'fonctionnement' ) ) {
  
  /* On récupère tous les articles custom post type "information_article" */
  $args = array(
    'post_type' => 'article_information',
    'posts_per_page' => -1
  );
  $query = new WP_Query( $args );

  /* On vérifie s'il y a des articles à afficher */
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post();
      /* On utilise notre fichier "single-article_info.php pour afficher chaque article avec la structure voulue */
      get_template_part( '
      ', 'article_info' );
    }
  }
  wp_reset_postdata();
} 
?> -->