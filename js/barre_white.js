/*animation de  la barre barre blanche au survole de l'element*/
function  barre_white(link_post,barre_white, block_black,ani_block) {
    
        const linkPosts = document.querySelectorAll(link_post);
        const blocksBlack = document.querySelectorAll(block_black);
        const barreWhites = document.querySelectorAll(barre_white);

        /*boucle pour aplliquer l'animation a chaque element qui a la classe block_black au survol de la souris*/
        linkPosts.forEach(function (linkPost, index) {
            linkPost.addEventListener('mouseover', function () {
                //blocksBlack[index].style.animation = ' ';

                blocksBlack[index].style.animation = `${ani_block}2s`;
        
                barreWhites[index].style.animation = "barre_white_ani 2s forwards";
            });

    
            /*stop animation au survol de la souris*/

            linkPost.addEventListener('mouseout', function () {
                blocksBlack[index].classList.remove('animate');
                barreWhites[index].style.opacity = "1";

                blocksBlack[index].style.animation = 'rev_ani_block 2s';


                  
                barreWhites[index].style.animation = "opa_barre 2s forwards";
            
                

            });
        });

}