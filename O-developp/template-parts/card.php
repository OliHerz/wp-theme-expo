<?php
/*
* Template Name: content_bloc_info
*/
?>
    <article class="articleInfo"> 
        <div class="headerArticle headerArticleConstruct">
          <div class="insideTitleArticle">
            <h2 class="titleArticle"> <?php the_field('titre_du_champ'); ?> </h2>
            <img src="<?php the_field('icon_du_titre')?>" alt="Logo constructions" class="iconArticleTitle">
          </div>
        </div>

        <div class="contentArticle contentArticleMobile ">
          <div class="insideCardSection">
            <img src="<?php the_field('photo_du_bloc[0]') ?>" alt="Label Nature Plus" class="imageArticle">
            <p class="textArticle">
              <?php the_field('paragraphe'); ?>
            </p>
            </div>

          <div class="insideCardSection constructRightContentMobile">
            <p class="textArticle">
              <?php the_field('paragraphe[1]'); ?>
            </p>
            <img src="<?php the_field('photo_du_bloc[1]')?>" alt="Photo de stands" class="imageArticle">
          </div>
        </div>
    </article>
