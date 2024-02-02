<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel ="stylesheet" href ="<?php echo get_theme_file_uri("/css/style.css")?>"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Federant&display=swap" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gafata&display=swap">


  <script>
    <?php 

     include_once(get_template_directory()."/js/barre_white.js");  
     include_once(get_template_directory()."/js/footer.js");  
  
    ?>

</script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
</head>
<body <?php body_class(); ?> >

    <header>
        <div>
        
        <div id="logo" class = "div_box_logo">
            <a  href = "<?php echo home_url()?>">
            <img src = "<?php echo get_site_icon_url() ?>">
               </a>
        </div>
 
        </div>

        <div class = "box_link_header">

        <div class = "div_box" >

 <a class = "a_header" href = "" > PUBS PROJETS DE RECLUS/HIKI</a>

          </div>

          <div class = "div_box" style = "width:13%">
          
          <div onclick="menu()" style = "cursor:pointer;">
          
          <div>
          <a id = "titre_catégorie" class = "a_header">categories +</a>

          
          <div id="categoryDropdown"  style = "width:11vw">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<div class = "div_cat"> 
            <a  class = "link_cat"  href="'.esc_url(get_category_link($category->term_id)) . '">';
            echo esc_html($category->name);

            
            echo '</a></div>';
        }
        ?>
        </div>
    </div>
          

          </div>
          <div class="div_box">
    <!-- Liste des catégories -->
   
    
          </div>

          </div>
        
          <div class = "div_box">
   <p>
          <a class = "a_header" href = "/F.A.Q"> F.A.Q </a>
   </p>
        </div>

        
            <div class = "div_box">
       <p>
            <a class = "a_header" href = "/user-blogs"> BLOG membre</a>

      </p>       
            </div>

           <div class = "div_box">
        <p>
           
        <a class = "a_header"  href = "/contact">Contact </a>

       </p>

            </div>

         

            <div class = "div_box" style = "width:13%">
        
          <div>
          <a id = "titre_catégorie" class = "a_header" onclick = "display()">mon profil +</a>

          <div  id = "menu_profil" >
          <div class = "div_cat">

          <a class = "link_cat" href = "/login"> connection </a>

        </div>

           <div class = "div_cat">
            
           <a class = "link_cat" href = "/registration"> inscription </a>

           </div>

    
          </div>

    </div>
          
          </div>

          <div class = "div_box">
   <p>
          <a class = "a_header" href = "<?php echo home_url()?>">Acceuil </a>
   </p>
        </div>

          </div>

            
    </div>
          </header>

          <div class = "main_header_picture">
      
          <div>
          <img  style =  "width:100%"src = "https://hikikomori-france.fr/wp-content/uploads/2020/06/headerhiki1opti.jpg" >
        </div>

          </div>

        

    <div id="content">
        <!-- Le reste du contenu de la page va ici -->
<script>

function display(){


    var div = document.getElementById("menu_profil");

    if(div.style.display === "none"){

        div.style.display = "block";

    }else{

        div.style.display = "none";
        

        div.style.displadocument.addEventListener("DOMContentLoaded", function() {
    // Sélectionnez l'élément .box_link_header
    var boxLinkHeader = document.querySelector('.box_link_header');

    var header = document.querySelector('header');

    
});
    }

}

function menu(){

     let div = document.getElementById("categoryDropdown");

     let titre = document.getElementById("titre_catégorie");


     if(div.style.display == "" || div.style.display == "none"){

     div.style.display = "block";

     titre.innerHTML = "categorie -";
    
     }else{

        div.style.display = "";
        titre.innerHTML = "categorie +";

     }

}

var header = document.querySelector("header");

var box_header = document.querySelector(".box_link_header");

var logo = document.querySelector("#logo");

var animationTriggered = false;
var lastScrollPosition = 0;

function animation_header(){


    header.classList.add("header-animation");

// Ajoutez la classe pour masquer le header
header.classList.add("header-hidden");

// Ajoutez la classe pour masquer la boîte
box_header.style.display = "none";

logo.style.display = "none";

header.addEventListener("animationend", function(event) {
    // Code à exécuter à la fin de l'animation
    console.log("Fin de l'animation !");
    
    // Vérification avec un if
    if (event.animationName === "customAnimation") {
        // Code à exécuter si l'animation est "customAnimation"
        console.log("L'animation est customAnimation.");

        // Réinitialisez les classes et l'état
        header.classList.remove("header-animation", "header-hidden");
        box_header.style.display = "block";
        box_header.style.display = "flex";
        logo.style.display = "block";
        animationTriggered = true;
    }
});
    
}


function deplace() {
    // Obtenez la position de défilement verticale de la page
    var scrollPosition = window.scrollY;

    // Déterminez à quelle position de défilement vous souhaitez déclencher les modifications
    var triggerPosition = 200; // Par exemple, 200 pixels à partir du haut de la page

    // Vérifiez si la position de défilement dépasse la position de déclenchement
    if (scrollPosition >= triggerPosition && scrollPosition > lastScrollPosition && !animationTriggered) {
        // Ajoutez la classe d'animation au header

        animation_header();
   
    } else if (scrollPosition < triggerPosition && animationTriggered) {
        // Le défilement est en dessous de la position de déclenchement, et l'animation a été déclenchée
        // Supprimez les classes et réinitialisez l'état
        header.classList.remove("header-animation", "header-hidden");
        box_header.style.display = "block";
        box_header.style.display = "flex";
        animationTriggered = false;
    }

    // Mettez à jour la position de défilement actuelle
    lastScrollPosition = scrollPosition;
}

// Appelez la fonction au chargement initial de la page
deplace();

// Ajoutez un gestionnaire d'événements pour détecter les changements de défilement
window.addEventListener("scroll", deplace);





</script>