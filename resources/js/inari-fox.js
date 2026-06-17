import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Back to top
const btn = document.getElementById('back-to-top');
if (btn) {
    window.addEventListener('scroll', () => {
        btn.classList.toggle('visible', window.scrollY > 300);
    });
    btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}
