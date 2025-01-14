"use strict";

function barre_white(link_post, barre_white) {
  var linkPosts = document.querySelectorAll(link_post);
  var blocksBlack = document.querySelectorAll('.block_black');
  var barreWhites = document.querySelectorAll(barre_white);
  linkPosts.forEach(function (linkPost, index) {
    linkPost.addEventListener('mouseover', function () {
      //blocksBlack[index].style.animation = ' ';
      blocksBlack[index].style.animation = 'ani_block 2s';
      barreWhites[index].style.animation = "barre_white_ani 2s forwards";
    });
    linkPost.addEventListener('mouseout', function () {
      blocksBlack[index].classList.remove('animate');
      barreWhites[index].style.opacity = "1";
      blocksBlack[index].style.animation = 'rev_ani_block 2s';
      barreWhites[index].style.animation = "opa_barre 2s forwards";
    });
  });
}