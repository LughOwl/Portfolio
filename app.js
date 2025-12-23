document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const sidebar = document.querySelector(".site-nav");

    /** 
     * Met à jour l'affichage du menu en fonction de la largeur de l'écran 
     */
    function updateMenuDisplay() {
        if (window.innerWidth < 770) {
            sidebar.style.display = "none"; // Mode mobile : menu caché par défaut
            menuToggle.textContent = "☰ MENU";
        } else {
            sidebar.style.display = "block"; // Mode desktop : menu visible
        }
    }

    /** 
     * Affiche ou masque le menu (mode mobile uniquement)
     */
    function toggleMenu() {
        const shouldShowMenu = sidebar.style.display === "none";
        sidebar.style.display = shouldShowMenu ? "block" : "none";
        menuToggle.textContent = shouldShowMenu ? "✕ MENU" : "☰ MENU";
    }

    /** 
     * Gère l'écouteur d'événement du bouton de menu en fonction de la taille d'écran 
     */
    function handleMenuToggle() {
        if (window.innerWidth < 770) {
            menuToggle.addEventListener("click", toggleMenu);
        } else {
            menuToggle.removeEventListener("click", toggleMenu);
        }
    }

    /** 
     * Initialisation au chargement 
     */
    updateMenuDisplay();
    handleMenuToggle();

    /** 
     * Met à jour le menu en cas de redimensionnement de la fenêtre 
     */
    window.addEventListener("resize", function () {
        updateMenuDisplay();
        handleMenuToggle();
    });
});

/**
 * Ajoute la classe "active" au lien du menu cliqué et la persiste via localStorage
 */
function setActiveMenuLink() {
    const menuLinks = document.querySelectorAll(".active-button a");
    const activeLink = localStorage.getItem("activeMenu"); // Récupère le lien actif

    // Applique la classe "active" au lien enregistré dans localStorage
    if (activeLink) {
        menuLinks.forEach(link => {
            if (link.href === activeLink) {
                link.classList.add("active");
            }
        });
    }

    // Ajoute un écouteur de clic sur chaque lien du menu
    menuLinks.forEach(link => {
        link.addEventListener("click", function () {
            localStorage.setItem("activeMenu", this.href); // Sauvegarde le lien cliqué
        });
    });
}

// Initialisation après le chargement du DOM
document.addEventListener("DOMContentLoaded", setActiveMenuLink);
