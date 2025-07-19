document.addEventListener('DOMContentLoaded', function() {
    // Set current year in footer
    document.getElementById('year').textContent = new Date().getFullYear();
    
    // Mobile navigation toggle
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');
    
    burger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        burger.classList.toggle('toggle');
    });
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            navLinks.classList.remove('active');
            burger.classList.remove('toggle');
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        });
    });
    
    // Sticky navbar on scroll
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('sticky', window.scrollY > 0);
    });
    
    // Animated text cycling (optional)
    const titles = [
        "Full Stack Web Developer",
        "Backened Developer",
        "Software Developer",
    
    ];
    
    const animatedText = document.querySelector('.fade-in-out');
    let currentIndex = 0;
    
    function changeTitle() {
        animatedText.style.animation = 'none';
        setTimeout(() => {
            currentIndex = (currentIndex + 1) % titles.length;
            animatedText.textContent = titles[currentIndex];
            animatedText.style.animation = 'fadeInOut 6s infinite';
        }, 1000);
    }
    
    // Change title every 6 seconds (matches CSS animation duration)
    setInterval(changeTitle, 6000);
});