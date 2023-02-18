<article class="articleInfo"> 
    <div class="headerArticle headerArticleConstruct">
      <div class="insideTitleArticle">
        <h2 class="titleArticle"><?php the_field('title_article'); ?></h2>
        <img src="<?php the_field('icon_article_title'); ?>" alt="Logo constructions" class="iconArticleTitle">
      </div>
    </div>

    <div class="contentArticle contentArticleMobile ">

      <div class="insideArticleSection">
        <img src="<?php the_field('image_de_larticle'); ?>" alt="Label Nature Plus" class="imageArticle">
      </div>
<!--  echo get_the_post_thumbnail_url(get_the_url())  -->
      <div class="insideArticleSection constructRightContentMobile">
        <p class="textArticle"> <?php the_field('texte_de_larticle'); ?> </p>
      </div>

    </div>
</article>



<!--  On défini ici la strucutre de l'élément "article_info" relatif à un Custum_Post_Type Crée sur wordpress -->
<!--  Tout en utilisant les ACF et ses champs personnalisés afin de les insérer aux bons endroits  -->