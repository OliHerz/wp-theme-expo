<article class="articleInfo"> 

  <div class="headerArticle">
    <div class="insideTitleArticle">
      <h2 class="titleArticle"> <?php the_field('titre_bloc'); ?> </h2>
      <img src="<?php the_field('icon_bloc_title'); ?>" alt="Logo constructions" class="iconArticleTitle">
    </div>
  </div>


  <div class="contentArticle">
    <?php if( have_rows('paragraphe') ): ?>
    <?php while( have_rows('paragraphe') ): the_row(); ?>
      <div class="insideArticleSection">
<?php $photo_id = get_sub_field('photo_du_bloc'); ?>
      <img src="<?php echo wp_get_attachment_url($photo_id); ?>" alt="<?php echo get_post_meta($photo_id, '_wp_attachment_image_alt', true);?>" class="imageArticle">
        <p class="textArticle">
          <?php the_sub_field('paragraphe_du_bloc'); ?>
        </p>
      </div>

      <?php if( have_rows('bloc_photo') ): ?>
        <?php while( have_rows('bloc_photo') ): the_row(); ?>
          <div class="insideArticleSection constructRightContentMobile">
            <p class="textArticle">  <?php the_sub_field('photo_du_bloc'); ?>  </p>
            <?php $photo_id = get_sub_field('photo_du_bloc'); ?>
            <img src="<?php echo wp_get_attachment_url($photo_id); ?>" alt="<?php echo get_post_meta($photo_id, '_wp_attachment_image_alt', true);?>" class="imageArticle">
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</article>
