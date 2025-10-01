// Navigation functionality
const navLinks = document.querySelectorAll('.nav-link');
const pageSection = document.querySelectorAll('.page-section');

function showPage(targetPage) {
    // Hide all sections
    pageSection.forEach(section => {
        section.classList.remove('active');
    });

    // Remove active class from all nav links
    navLinks.forEach(link => {
        link.classList.remove('active');
    });

    // Show target section with animation delay
    setTimeout(() => {
        document.getElementById(targetPage).classList.add('active');
    }, 150);

    // Add active class to clicked nav link
    document.querySelector(`[data-page="${targetPage}"]`).classList.add('active');
}

// Add click event listeners to nav links
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetPage = link.getAttribute('data-page');
        showPage(targetPage);
    });
});

// Add click event to CTA button
document.querySelector('.cta-button').addEventListener('click', (e) => {
    if (e.target.getAttribute('data-page')) {
        e.preventDefault();
        const targetPage = e.target.getAttribute('data-page');
        showPage(targetPage);
    }
});

// Form submission
document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you for your message! We\'ll get back to you soon.');
});

// Add scroll effect to header
let lastScrollTop = 0;
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    const navbar = document.querySelector('.navbar');
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 50) {
        header.classList.add('scrolled');
        navbar.style.background = 'rgba(0, 0, 0, 0.95)';
    } else {
        header.classList.remove('scrolled');
        navbar.style.background = 'rgba(15, 15, 15, 0.92)';
    }

    lastScrollTop = scrollTop;
});

// Add loading animation for smooth transitions
document.addEventListener('DOMContentLoaded', () => {
    document.body.style.opacity = '0';
    setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s ease';
        document.body.style.opacity = '1';
    }, 100);
});

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-link');

    // Create mobile menu toggle button if it doesn't exist
    if (!mobileToggle) {
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'mobile-menu-toggle';
        toggleBtn.innerHTML = '☰';
        toggleBtn.setAttribute('aria-label', 'Toggle menu');
        document.body.appendChild(toggleBtn);
        
        toggleBtn.addEventListener('click', () => {
            navbar.classList.toggle('active');
            toggleBtn.innerHTML = navbar.classList.contains('active') ? '✕' : '☰';
        });
    }

    // Close menu when clicking a nav link
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                navbar.classList.remove('active');
                const toggle = document.querySelector('.mobile-menu-toggle');
                if (toggle) toggle.innerHTML = '☰';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const footerNavLinks = document.querySelectorAll('.footer-links a');
    
    footerNavLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetPage = link.getAttribute('data-page');
            if (targetPage) {
                e.preventDefault();
                showPage(targetPage);
                // Scroll to top when changing pages
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    });
});