// Carousel functionality
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel img');

function showSlide(n) {
    slides.forEach(slide => slide.classList.remove('active'));
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Auto-advance slides every 5 seconds
setInterval(nextSlide, 5000);

// Animation du header au scroll
const header = document.querySelector('header');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll <= 0) {
        header.classList.remove('scroll-up');
        return;
    }
    
    if (currentScroll > lastScroll && !header.classList.contains('scroll-down')) {
        header.classList.remove('scroll-up');
        header.classList.add('scroll-down');
    } else if (currentScroll < lastScroll && header.classList.contains('scroll-down')) {
        header.classList.remove('scroll-down');
        header.classList.add('scroll-up');
    }
    lastScroll = currentScroll;
});

// Animation des éléments au scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.project-card, .skill-item, .section-title').forEach(el => {
    observer.observe(el);
});

// Typing effect pour le hero
const heroTitle = document.querySelector('.hero h1');
const text = heroTitle.textContent;
heroTitle.textContent = '';

let i = 0;
function typeWriter() {
    if (i < text.length) {
        heroTitle.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 50);
    }
}

// Déclencher l'effet de typing au chargement
window.addEventListener('load', typeWriter);

// Smooth scroll pour les liens de navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        const headerOffset = 100;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});

// Gestion du formulaire de contact
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const submitButton = contactForm.querySelector('button[type="submit"]');

    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Désactiver le bouton pendant l'envoi
        submitButton.disabled = true;
        submitButton.textContent = 'Envoi en cours...';

        try {
            const templateParams = {
                from_name: document.getElementById('name').value,
                from_email: document.getElementById('email').value,
                message: document.getElementById('message').value,
                to_email: 'essejoel34@gmail.com'
            };

            await emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams);
            
            // Afficher le message de succès
            showMessage('Message envoyé avec succès ! Je vous répondrai dans les plus brefs délais.', 'success');
            // Réinitialiser le formulaire
            contactForm.reset();
        } catch (error) {
            showMessage('Une erreur est survenue. Veuillez réessayer.', 'error');
            console.error('Erreur:', error);
        } finally {
            // Réactiver le bouton
            submitButton.disabled = false;
            submitButton.textContent = 'Envoyer le message';
        }
    });

    function showMessage(message, type) {
        // Supprimer l'ancien message s'il existe
        const oldMessage = document.querySelector('.form-message');
        if (oldMessage) {
            oldMessage.remove();
        }

        // Créer le nouveau message
        const messageElement = document.createElement('div');
        messageElement.className = `form-message ${type}`;
        messageElement.textContent = message;

        // Ajouter le message après le formulaire
        contactForm.parentNode.insertBefore(messageElement, contactForm.nextSibling);

        // Supprimer le message après 5 secondes
        setTimeout(() => {
            messageElement.remove();
        }, 5000);
    }
});

// Animation des compétences
const skillItems = document.querySelectorAll('.skill-item');

skillItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.style.transform = 'translateY(-10px)';
    });
    
    item.addEventListener('mouseleave', () => {
        item.style.transform = 'translateY(0)';
    });
});

// Filtrage des projets (à implémenter si nécessaire)
const projectTags = document.querySelectorAll('.project-tag');
const projectCards = document.querySelectorAll('.project-card');

projectTags.forEach(tag => {
    tag.addEventListener('click', () => {
        const selectedTag = tag.textContent.toLowerCase();
        
        projectCards.forEach(card => {
            const cardTags = Array.from(card.querySelectorAll('.project-tag'))
                .map(t => t.textContent.toLowerCase());
            
            if (cardTags.includes(selectedTag)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Loader animé
window.addEventListener('DOMContentLoaded', () => {
    const loader = document.querySelector('.loader');
    setTimeout(() => {
        loader.classList.add('hide');
        setTimeout(() => loader.style.display = 'none', 600);
    }, 1800);
});

// Dark/Light mode toggle
const themeToggle = document.getElementById('theme-toggle');
const html = document.documentElement;
let theme = localStorage.getItem('theme') || 'dark';
function setTheme(t) {
    html.setAttribute('data-theme', t);
    themeToggle.innerHTML = t === 'dark' ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>';
    localStorage.setItem('theme', t);
}
themeToggle.addEventListener('click', () => {
    theme = theme === 'dark' ? 'light' : 'dark';
    setTheme(theme);
});
setTheme(theme);

// Smooth scroll & active link highlight
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        if (this.hash) {
            e.preventDefault();
            document.querySelector(this.hash).scrollIntoView({ behavior: 'smooth' });
        }
    });
});
window.addEventListener('scroll', () => {
    let fromTop = window.scrollY + 80;
    navLinks.forEach(link => {
        const section = document.querySelector(link.hash);
        if (section && section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

// Effet typing sur le slogan
const typingText = document.querySelector('.typing-text');
if (typingText) {
    const text = typingText.textContent;
    typingText.textContent = '';
    let i = 0;
    function type() {
        if (i < text.length) {
            typingText.textContent += text.charAt(i);
            i++;
            setTimeout(type, 30);
        }
    }
    type();
}

// Glitch effect sur le nom
const logo = document.querySelector('.logo');
if (logo) {
    logo.addEventListener('mouseenter', () => logo.classList.add('glitch'));
    logo.addEventListener('mouseleave', () => logo.classList.remove('glitch'));
}

// Bascule FR/EN
const langToggle = document.getElementById('lang-toggle');
const langText = document.querySelector('.lang-text');
let currentLang = localStorage.getItem('lang') || 'fr';
const translations = {
    fr: {
        hero: "Je transforme vos idées en expériences numériques exceptionnelles. Spécialisé dans le développement web moderne et le design d'interface utilisateur.",
        about: "À propos de moi",
        skills: "Mes Compétences",
        projects: "Mes Projets",
        video: "Présentation Vidéo",
        contact: "Contact",
        startProject: "Démarrer un projet",
        seeProjects: "Voir mes projets",
        downloadCV: "Télécharger CV",
        contactTitle: "Parlons de votre projet",
        contactDesc: "Je suis toujours ouvert à discuter de nouveaux projets, idées créatives ou opportunités de collaboration.",
        name: "Nom",
        email: "Email",
        message: "Message",
        send: "Envoyer le message"
    },
    en: {
        hero: "I turn your ideas into outstanding digital experiences. Specialized in modern web development and UI design.",
        about: "About Me",
        skills: "My Skills",
        projects: "My Projects",
        video: "Video Presentation",
        contact: "Contact",
        startProject: "Start a project",
        seeProjects: "See my projects",
        downloadCV: "Download CV",
        contactTitle: "Let's talk about your project",
        contactDesc: "I'm always open to discuss new projects, creative ideas or collaboration opportunities.",
        name: "Name",
        email: "Email",
        message: "Message",
        send: "Send message"
    }
};
function setLang(lang) {
    currentLang = lang;
    localStorage.setItem('lang', lang);
    langText.textContent = lang.toUpperCase();
    // Hero
    document.querySelector('.typing-text').textContent = translations[lang].hero;
    // Sections
    document.querySelectorAll('.section-title')[0].textContent = translations[lang].about;
    document.querySelectorAll('.section-title')[1].textContent = translations[lang].skills;
    document.querySelectorAll('.section-title')[2].textContent = translations[lang].projects;
    document.querySelectorAll('.section-title')[3].textContent = translations[lang].video;
    document.querySelectorAll('.section-title')[4].textContent = translations[lang].contact;
    // Hero buttons
    document.querySelector('.cta-button').textContent = translations[lang].startProject;
    document.querySelector('.cta-button.secondary').textContent = translations[lang].seeProjects;
    document.querySelector('.cta-button.download-cv').innerHTML = `<i class="fas fa-download"></i> ${translations[lang].downloadCV}`;
    // Contact
    document.querySelector('.contact-info h3').textContent = translations[lang].contactTitle;
    document.querySelector('.contact-info p').textContent = translations[lang].contactDesc;
    document.querySelector('label[for="name"]').textContent = translations[lang].name;
    document.querySelector('label[for="email"]').textContent = translations[lang].email;
    document.querySelector('label[for="message"]').textContent = translations[lang].message;
    document.querySelector('#contactForm button').textContent = translations[lang].send;
}
langToggle.addEventListener('click', () => {
    setLang(currentLang === 'fr' ? 'en' : 'fr');
});
setLang(currentLang);

// Validation du formulaire de contact
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const name = contactForm.name.value.trim();
        const email = contactForm.email.value.trim();
        const message = contactForm.message.value.trim();
        let valid = true;
        if (!name) {
            contactForm.name.classList.add('error');
            valid = false;
        } else {
            contactForm.name.classList.remove('error');
        }
        if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
            contactForm.email.classList.add('error');
            valid = false;
        } else {
            contactForm.email.classList.remove('error');
        }
        if (!message) {
            contactForm.message.classList.add('error');
            valid = false;
        } else {
            contactForm.message.classList.remove('error');
        }
        if (valid) {
            // Ici tu peux intégrer EmailJS ou autre service
            alert(currentLang === 'fr' ? 'Message envoyé avec succès !' : 'Message sent successfully!');
            contactForm.reset();
        }
    });
}

// Initialisation des animations AOS
if (window.AOS) {
    AOS.init({
        duration: 800,
        once: true
    });
} 