
<?php

$currentPageUrl = 'http://' . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


?>
   <div class="pagination" style = "color:white">
     <div class = "box_pagination">
            <?php 
            $debut =$currentPageUrl."?page=1";
           $fin = $currentPageUrl."?page=".$total_pages;

            ?>

            <?php if($total_pages >1): ?>
            <a class = 'link_box_pagination' href = "<?php echo $debut ?>"> debut </a>

            <?php 
            
            for ($a = 1; $a < $total_pages; $a++) {
                $link = $currentPageUrl. "/?page=" . $a;
                echo "<div> <a  class = 'link_box_pagination' href='$link'>$a</a> </div>";
            }


            ?>


            <a class = 'link_box_pagination'  href = "<?php echo $fin;?>"> fin</a>

            <?php endif ?>
        </div>
        </div>