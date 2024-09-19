import './bootstrap';

// resources/js/main.js

document.addEventListener('DOMContentLoaded', () => {
    // Dark Mode Toggle
    const btnSwitch = document.getElementById('btnSwitch');

    if (btnSwitch) {
        // Initialize theme based on localStorage or system preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
            btnSwitch.checked = savedTheme === 'dark';
        } else {
            // Default to system preference
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.setAttribute('data-theme', prefersDark ? 'dark' : 'light');
            btnSwitch.checked = prefersDark;
        }

        btnSwitch.addEventListener('change', () => {
            if (btnSwitch.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            }
        });
    }

    // Scroll Up Button
    const mybutton = document.getElementById("myBtn");

    if (mybutton) {
        window.addEventListener('scroll', scrollFunction);
        mybutton.addEventListener('click', topFunction);
    }

    // Preloader
    const preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.style.display = 'none';
        });
    }
});

// Scroll Function
function scrollFunction() {
    const mybutton = document.getElementById("myBtn");
    if (mybutton) {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.classList.remove('hidden');
        } else {
            mybutton.classList.add('hidden');
        }
    }
}

// Top Function
function topFunction() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
