// Navbar scroll effect
const navbar = document.getElementById('navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 20);
    });
}

// Hamburger menu
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('open');
    });

    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navLinks.classList.remove('open');
        });
    });

    document.addEventListener('click', e => {
        if (!navbar.contains(e.target)) {
            hamburger.classList.remove('active');
            navLinks.classList.remove('open');
        }
    });
}


// Typewriter effect
function initTypewriter() {
    const el = document.getElementById('typewriter-text');
    if (!el) return;

    const phrases = window.typewriterPhrases ?? [
        'Admis en Master Cybersécurité',
        'Futur SOC Analyst',
        'Futur Architecte Cybersécurité',
    ];
    let phraseIdx = 0;
    let charIdx = 0;
    let deleting = false;

    function type() {
        const phrase = phrases[phraseIdx];

        if (!deleting) {
            el.textContent = phrase.slice(0, charIdx + 1);
            charIdx++;
            if (charIdx === phrase.length) {
                deleting = true;
                setTimeout(type, 2200);
                return;
            }
        } else {
            el.textContent = phrase.slice(0, charIdx - 1);
            charIdx--;
            if (charIdx === 0) {
                deleting = false;
                phraseIdx = (phraseIdx + 1) % phrases.length;
                setTimeout(type, 400);
                return;
            }
        }

        setTimeout(type, deleting ? 45 : 80);
    }

    setTimeout(type, 800);
}

// Skill bars — animate on scroll
function initSkillBars() {
    const fills = document.querySelectorAll('.skill-bar-fill[data-width]');
    if (!fills.length) return;

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.width = entry.target.dataset.width;
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    fills.forEach(fill => observer.observe(fill));
}

document.addEventListener('DOMContentLoaded', () => {
    initTypewriter();
    initSkillBars();
});
