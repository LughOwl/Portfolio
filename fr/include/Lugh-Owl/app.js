const menuHamburger = document.querySelector(".menu-hamburger")
const navMenu = document.querySelector(".nav-menu")

menuHamburger.addEventListener('click',()=>{
    menuHamburger.classList.toggle('active')
    navMenu.classList.toggle('mobile-menu')
})

/*Dark Theme*/

// Sélection du bouton bascule
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

// Fonction pour appliquer un thème
function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); // Enregistrer le thème sombre
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light'); // Enregistrer le thème clair
    }
}

// Appliquer le thème au chargement de la page
const currentTheme = localStorage.getItem('theme');
if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'dark') {
        toggleSwitch.checked = true; // Synchroniser l'état de la bascule
    }
}

// Ajouter un écouteur d'événements pour le bouton bascule
toggleSwitch.addEventListener('change', switchTheme, false);