"use strict";

/* empeche l'animation du titre de se rejouer*/
document.addEventListener('DOMContentLoaded', function () {
  var title_site = document.querySelector("#title_site");
  var animation = localStorage.getItem("page");
  var urlParams = new URLSearchParams(window.location.search);
  var page = urlParams.get('page');

  if (animation == null && page == null || page == null && animation !== null) {
    title_site.style.animation = " title_site 3s";
    localStorage.setItem("page", true);
  }

  if (page == null && animation !== null) {
    title_site.style.animation = " title_site 3s";
  }
});