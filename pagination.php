
<?php

$currentPageUrl = 'http://' . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo $currentPageUrl;

$total_pages = $query->max_num_pages;
if($total >= 2){

    $total_pages = $total_pages-1;

}
?>
   <div class="pagination" style = "color:white">
     <div class = "box_pagination">
            <?php 
            $debut =$currentPageUrl."?page=1";
           $fin = $currentPageUrl."?page=".$total_pages;

            ?>

            <a href = "<?php echo $debut ?>"> debut </a>

            <?php 
            
            for ($a = 1; $a < $total_pages; $a++) {
                $link = $currentPageUrl. "/?page=" . $a;
                echo "<div> <a href='$link'>$a</a> </div>";
            }


            ?>


            <a  href = "<?php echo $fin;?>"> fin</a>

        </div>
        </div>