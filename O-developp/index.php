<?php get_header(); ?>

<?php
// Boucle pour afficher les articles
if( have_posts() ) : while( have_posts() ) : the_post();
  the_post();
  // Appel du template part pour le bloc d'informations
  get_template_part( 'template-parts/content-bloc_info');
endwhile;
endif;
?>


<?php get_footer(); ?>


