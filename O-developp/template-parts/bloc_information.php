=

<article class="articleInfo"> 
  <div class="headerArticle headerArticleConstruct">
    <div class="insideTitleArticle">
      <h2 class="titleArticle"> <?php the_field('titre_bloc'); ?> </h2>
      <img src="<?php the_field('icon_bloc_title]'); ?>" alt="Logo constructions" class="iconArticleTitle">
    </div>
  </div>

  <div class="contentArticle contentArticleMobile ">
    <div class="insideArticleSection">
      <img src="../img/nature_plus.svg" alt="Label Nature Plus" class="imageArticle">
      <p class="textArticle">
      <?php the_sub_field('paragraphe[0]'); ?>
      </p>
      </div>

    <div class="insideArticleSection constructRightContentMobile">
      <p class="textArticle">  <?php the_sub_field('paragraphe[1]'); ?>  </p>
      <img src="<?php the_sub_field('bloc_photo[1]'); ?>" alt="Photo de stands" class="imageArticle">
    </div>
  </div>
</article>  


<?php
  $blocInformation = new WP_Query(array(
    'posts_per_page' => -1,
    'post-type' => 'bloc_info'
  ));

  while ($blocInformation->have_posts()) {
    the_post(); ?>
  <?php } ?>
