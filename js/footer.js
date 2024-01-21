document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez votre pied de page
    let footer = document.querySelector('footer');
    let cate_title = document.querySelector('#title_categorie');

    let cate_title1 = document.querySelector('#title_categorie1');

    let ul_footer = document.querySelector('#ulfooter');


    let ul_footer2 = document.querySelector('#ulfooter2');

    let footer_search = document.querySelector("#section_footer_search");

    // Options pour l'observateur
    const options = {
        root: null, // Utilisez la fenêtre comme conteneur par défaut
        threshold: 0.5 // Définissez le seuil à 0.5, ce qui signifie que la moitié du pied de page doit être visible
    };

    // Variable pour suivre si l'action a déjà été effectuée
    let isActionTaken = false;

    // Fonction de gestion pour l'observateur
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !isActionTaken) {
                // Le pied de page entre dans la fenêtre pour la première fois
            
                footer_search.style.animation = "footer_opa 3s forwards";

                cate_title.style.animation = "rotation_cat 3s";

                cate_title1.style.animation = "rotation_cat 3s";

                ul_footer.style.animation = "footer_opa  5s forwards";

                ul_footer2.style.animation = "footer_opa  5s forwards";
            

                // Ajoutez ici le code que vous souhaitez exécuter une fois

                // Marquez l'action comme effectuée
                isActionTaken = true;
            }
        });
    }

    // Créez un observateur avec la fonction de gestion
    const observer = new IntersectionObserver(handleIntersection, options);

    // Ajoutez le pied de page à la liste d'observation
    observer.observe(footer);
});
