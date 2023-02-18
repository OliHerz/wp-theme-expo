<?php $display_option = get_field('display_option'); ?>

<!-- content-bloc_info.php -->
<article class="articleInfo">
  <div class="headerArticle">
    <div class="insideTitleArticle">
      <h2><?php the_field('titre_bloc'); ?></h2>
      <img src="<?php the_field('icon_bloc_titre')['url'] ?>" alt="<?php the_sub_field('photo_du_bloc')['alt']; ?>">
    </div>

  <?php if ($display_option == 'Image en premier'): ?>
    <!-- Boucle sur les blocs photo -->
    <?php if ( have_rows('bloc_photo') ): ?>
      <?php while ( have_rows('bloc_photo') ): the_row(); ?>
        <!-- Affichez la première image -->
        <img src="<?php the_sub_field('photo_du_bloc')['url']; ?>" alt="<?php the_sub_field('photo_du_bloc')['alt']; ?>" />
        <!-- Boucle sur les paragraphes -->
        <?php if ( have_rows('paragraphe') ): ?>
          <?php while ( have_rows('paragraphe') ): the_row(); ?>
            <!-- Affichez le premier paragraphe -->
            <p><?php the_sub_field('paragraphe_du_bloc'); ?></p>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php elseif ($display_option == 'Texte en premier'): ?>
    <!-- Boucle sur les paragraphes -->
    <?php if ( have_rows('paragraphe') ): ?>
      <?php while ( have_rows('paragraphe') ): the_row(); ?>
        <!-- Affichez le premier paragraphe -->
        <p><?php the_sub_field('paragraphe_du_bloc'); ?></p>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- Boucle sur les blocs photo -->
    <?php if ( have_rows('bloc_photo') ): ?>
      <?php while ( have_rows('bloc_photo') ): the_row(); ?>
        <!-- Affichez la première image -->