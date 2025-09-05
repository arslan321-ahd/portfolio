// Initialize Typed.js
document.addEventListener('DOMContentLoaded', function () {
    var typed = new Typed('#typed', {
        strings: ["Web Developer", "UI/UX Designer", "Laravel Developer", "Freelancer"],
        typeSpeed: 100,
        backSpeed: 50,
        backDelay: 2000,
        loop: true
    });

    // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-mode');
        updateThemeIcon(true);
    }
});

// Dark/Light Mode Toggle
const themeSwitch = document.querySelector('.theme-switch');
const themeIcon = themeSwitch.querySelector('i');

themeSwitch.addEventListener('click', () => {
    const isDarkMode = document.body.classList.toggle('dark-mode');

    // Update icon based on current mode
    updateThemeIcon(isDarkMode);

    // Save theme preference
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
});

// Function to update theme icon
function updateThemeIcon(isDarkMode) {
    if (isDarkMode) {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
    } else {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
    }
}

// Portfolio Filter
const filterButtons = document.querySelectorAll('.filter-btn');
const portfolioItems = document.querySelectorAll('.portfolio-item');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));

        // Add active class to clicked button
        button.classList.add('active');

        // Get filter value
        const filterValue = button.getAttribute('data-filter');

        // Show/hide portfolio items based on filter
        portfolioItems.forEach(item => {
            if (filterValue === 'all' || item.getAttribute('data-category') ===
                filterValue) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// Animate skill bars on scroll
const skillBars = document.querySelectorAll('.skill-progress-bar');

function animateSkillBars() {
    skillBars.forEach(bar => {
        const width = bar.getAttribute('data-width');
        bar.style.width = width + '%';
    });
}

// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Initialize animations when page loads
window.addEventListener('load', function () {
    animateSkillBars();
    createParticles();
});

// Create particle animation
function createParticles() {
    const particlesContainer = document.getElementById('particles');
    const numberOfParticles = 50;

    for (let i = 0; i < numberOfParticles; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        const size = Math.random() * 20 + 5;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const delay = Math.random() * 5;

        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.top = `${posY}%`;
        particle.style.animationDelay = `${delay}s`;

        particlesContainer.appendChild(particle);
    }
}
// counter for textarea
document.addEventListener("DOMContentLoaded", function () {
    const textarea = document.querySelector("textarea[name='message']");
    const counter = document.getElementById("charCount");
    const maxLength = 400;

    textarea.addEventListener("input", function () {
        const currentLength = textarea.value.length;
        counter.textContent = currentLength;

        // change color if near limit
        if (currentLength > maxLength - 50) {
            counter.style.color = "red";   // warning
        } else {
            counter.style.color = "#00ffcc"; // light cyan for dark bg
        }
    });
});
document.getElementById('contact-form').addEventListener('submit', async function (e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const btn = form.querySelector('button[type="submit"]');
    const originalText = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = 'Sending...';
    try {
        const res = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: formData
        });
        const json = await res.json();
        if (json.success) {
            form.reset();
            Swal.fire({
                icon: 'success',
                title: 'Message sent',
                text: json.message,
                timer: 2500,
                showConfirmButton: false
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: json.error || 'Unable to send message. Please try again.'
            });
        }
    } catch (err) {
        Swal.fire({
            icon: 'error',
            title: 'Network error',
            text: 'Please check your connection and try again.'
        });
    } finally {
        btn.disabled = false;
        btn.innerHTML = originalText;
    }
});
// Animated counter for statistics
function animateCounter() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200; // The lower the slower
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-count');
        const counterValue = counter.querySelector('.counter-value');
        const count = +counterValue.innerText;
        const increment = Math.ceil(target / speed);

        const updateCount = () => {
            const currentCount = +counterValue.innerText;

            if (currentCount < target) {
                counterValue.innerText = Math.min(currentCount + increment, target);
                setTimeout(updateCount, 1);
            }
        };
        updateCount();
    });
}
// Initialize counter when section is in viewport
function initCounter() {
    const statisticsSection = document.getElementById('statistics');
    if (!statisticsSection) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter();
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });
    observer.observe(statisticsSection);
}
// Initialize when page loads
document.addEventListener('DOMContentLoaded', initCounter);
// Disable right click
document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});

document.onkeydown = function (e) {
    if (e.keyCode == 123) { // F12
        return false;
    }
    if (e.ctrlKey && e.shiftKey && (e.keyCode == 73 || e.keyCode == 74 || e.keyCode == 67)) {
        // Ctrl+Shift+I (Inspect), Ctrl+Shift+J (Console), Ctrl+Shift+C (Inspect element)
        return false;
    }
    if (e.ctrlKey && e.keyCode == 85) {
        // Ctrl+U (View source)
        return false;
    }
};