  
    /* empeche l'animation du titre de se rejouer*/
    document.addEventListener('DOMContentLoaded', function () {

        let title_site = document.querySelector("#title_site");

        let text_aside = document.querySelector(".text_aside");

        let animation = localStorage.getItem("page");

        let local_aside = localStorage.getItem('text_aside');


        var urlParams = new URLSearchParams(window.location.search);

         var page = urlParams.get('page');
     
         
        if(animation == null && page == null && local_aside == null || page == null && animation !== null && local_aside !==null){

        title_site.style.animation = " title_site 3s";

        text_aside.style.animation = "aside 6s"

        localStorage.setItem("page", true);

        localStorage.setItem("text_aside", true);

        }
          if(page == null && animation !== null){

            title_site.style.animation = " title_site 3s";
          

        }
    
        
            
    })