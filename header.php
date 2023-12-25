<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" />

    <link rel ="stylesheet" href ="<?php echo get_theme_file_uri("./css/style.css")?>"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Federant&display=swap" />


    
</head>
<body <?php body_class(); ?>>

    <header>

        <div>
        
        <div id="logo">
            <a  href = "<?php echo home_url()?>">
            <img src = "<?php echo get_site_icon_url() ?>">
               </a>
        </div>
 
        </div>

        <div class = "box_link_header">

        <div class = "div_box">

 <p>

 <ul>

 <a href = "" > PUBS PROJETS DE RECLUS/HIKI</a>

</ul>

</p>
          </div>

          <div class = "div_box">
          
          <div>
          categories
          </div>
          <div class="div_box">
    <!-- Liste des catégories -->
    <select id="categoryDropdown">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
            echo '<option value="' . esc_url(get_category_link($category->term_id)) . '">';
            echo esc_html($category->name);
            echo '</option>';
        }
        ?>
    </select>
    
          </div>

          </div>
        
          <div class = "div_box">
   <p>
          faq
   </p>
        </div>

        
            <div class = "div_box">
       <p>
            BLOG membre
      </p>       
            </div>

           <div class = "div_box">
        <p>
           Contact
       </p>

            </div>

             </div>
        </div>
        
          </header>

          <div class = "main_header_picture">

          <div>
        
          <div>
          <img src = "https://hikikomori-france.fr/wp-content/uploads/2020/06/headerhiki1opti.jpg" >
        </div>

        </div>

          </div>

        

    <div id="content">
        <!-- Le reste du contenu de la page va ici -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var categoryDropdown = document.getElementById('categoryDropdown');

    categoryDropdown.addEventListener('change', function () {
        var selectedValue = this.value;
        if (selectedValue !== '') {
            window.location.href = selectedValue;
        }
    });
});
</script>