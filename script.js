const skills = ["Python", "Machine Learning", "SQL", "Power BI", "Data Visualization", "Statistics"];
const typedText = document.getElementById('typed-text');
let skillIndex = 0;
let charIndex = 0;
let isDeleting = false;

const typingSpeed = 100; // Slower typing speed
const deletingSpeed = 50; // Slower deleting speed
const delayBetweenWords = 1500; // Longer pause before deleting

function type() {
    const currentSkill = skills[skillIndex];
    const speed = isDeleting ? deletingSpeed : typingSpeed; // Adjust speed based on action

    if (isDeleting) {
        typedText.textContent = currentSkill.substring(0, charIndex - 1);
        charIndex--;
    } else {
        typedText.textContent = currentSkill.substring(0, charIndex + 1);
        charIndex++;
    }

    if (!isDeleting && charIndex === currentSkill.length) {
        setTimeout(() => {
            isDeleting = true;
        }, delayBetweenWords); // Pause before starting to delete
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        skillIndex = (skillIndex + 1) % skills.length; // Move to the next skill
    }

    setTimeout(type, speed);
}

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(type, 1000); // Start typing after an initial delay
});

document.addEventListener('DOMContentLoaded', () => {
    const menuMobile = document.querySelector('.menu-mobile');
    const btnClose = document.querySelector('.btn-fechar');
    const menuIcon = document.querySelector('#menu-icon');

    // Function to open the menu
    function openMenu() {
        menuMobile.classList.add('active'); // Add 'active' class to show the menu
    }

    // Function to close the menu
    function closeMenu() {
        menuMobile.classList.remove('active'); // Remove 'active' class to hide the menu
    }

    // Add click event to the menu icon to open the menu
    if (menuIcon) {
        menuIcon.addEventListener('click', openMenu);
    }

    // Add click event to the close button to close the menu
    if (btnClose) {
        btnClose.addEventListener('click', closeMenu);
    }

    // Close the menu when clicking on any menu link
    const menuLinks = document.querySelectorAll('.menu-mobile nav a');
    menuLinks.forEach(link => {
        link.addEventListener('click', closeMenu); // Close the menu on link click
    });
});

// Open links in a new tab for mobile titles
document.querySelectorAll('.mobile-title a').forEach(function (link) {
    link.addEventListener('click', function (event) {
        window.open(link.href, '_blank');
    });
});
