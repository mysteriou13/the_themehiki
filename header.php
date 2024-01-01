<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" />

    <link rel ="stylesheet" href ="<?php echo get_theme_file_uri("/css/style.css")?>"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Federant&display=swap" />


    
</head>
<body <?php body_class(); ?>>

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

 <p>

 <ul>

 <a class = "a_header" href = "" > PUBS PROJETS DE RECLUS/HIKI</a>

</ul>

</p>
          </div>

          <div class = "div_box" style = "width:13%">
          
          <div onclick="menu()" style = "cursor:pointer;">
          
          <a id = "titre_catégorie" class = "a_header">categories +</a>

          </div>
          <div class="div_box">
    <!-- Liste des catégories -->
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
          
          <div onclick="display()" style = "cursor:pointer;">
          
          <a id = "titre_catégorie" class = "a_header">mon profil +</a>

          </div>

          <div class="div_box" id = "menu_profil" >
          <div class = "div_cat">

          <a class = "link_cat" href = "/login"> connection </a>

        </div>

           <div class = "div_cat">
            
           <a class = "link_cat" href = "/registration"> inscription </a>

           </div>

    
          </div>

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

    if(div.style.display === "block"){

        div.style.display = "none";

    }else{

        div.style.display = "block";
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

</script>