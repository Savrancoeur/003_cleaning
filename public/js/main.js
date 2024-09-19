// resources/js/main.js

document.addEventListener('DOMContentLoaded', () => {
    const btnSwitch = document.getElementById('btnSwitch');
    const htmlElement = document.documentElement;

    // Initialize dark mode based on user's preference
    if (localStorage.getItem('theme') === 'dark' ||
        (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        htmlElement.classList.add('dark');
        if (btnSwitch) btnSwitch.checked = true;
    } else {
        htmlElement.classList.remove('dark');
    }

    // Toggle dark mode on checkbox change
    if (btnSwitch) {
        btnSwitch.addEventListener('change', () => {
            if (btnSwitch.checked) {
                htmlElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                htmlElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        });
    }

    // Scroll Up Button Functionality
    const mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.classList.remove("hidden");
        } else {
            mybutton.classList.add("hidden");
        }
    }

    function topFunction() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Scroll Up Button Click Event
    if (mybutton) {
        mybutton.addEventListener('click', topFunction);
    }

    // Preloader Functionality
    const preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.style.display = 'none';
        });
    }
});
