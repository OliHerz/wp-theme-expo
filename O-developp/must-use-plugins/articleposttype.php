<?php
// Création d'un type de contenu personnalisé
// Il y a deux types de post, les pages et les posts
// Une page est un post avec un certain type de post-type
// Créer des post pour chaque rubrique, et donc créer un tout nouveau custom_post_type
function article_post_types(){ 
// Lui passer deux arguements : (celui que l'on veut créer)(tableau de fonctions que l'on veut créer)
  register_post_type('bloc', array(
// Un crée un talbeau associatif qui décrit quel type de post_type on veut
    'public' => true, //Rendre le type de post public 
    'menu_icon' => 'dashicons-tagcloud',  // On change le dashicon du type de post (https://developer.wordpress.org/resource/dashicons/#format-image)
    'labels'  => array( // On donne plusieurs informations sur le label crée (rubrique à gauche dans WP)
      'name' => 'bloc', // Le nom de la catégorie ici est 'bloc'
      'add_new_item' => 'Ajouter un bloc',
      'edit_item' => 'Éditer un bloc', // éditer un évènement
      'all_items' => 'Tous les blocs', // voir tous les itemps
      'singular_name' => 'bloc' // Nom singulier du Type de contenu
    )
  ));
};
// Dit que l'on permet de lui dire de créer un type de post  //  Un hook //  Une action 
add_action('init', 'article_post_types');