// Simple animation for navigation links on hover
const navLinks = document.querySelectorAll('nav ul li a');

navLinks.forEach(link => {
    link.addEventListener('mouseover', () => {
        link.style.textDecoration = 'underline';
    });

    link.addEventListener('mouseout', () => {
        link.style.textDecoration = 'none';
    });
});
