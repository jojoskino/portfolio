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