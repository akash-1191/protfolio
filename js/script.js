document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar-solid-bg');

    menuToggle.addEventListener('click', function () {
        const expanded = menuToggle.getAttribute('aria-expanded') === 'true' || false;
        menuToggle.setAttribute('aria-expanded', !expanded);
        navbar.classList.toggle('hidden');
    });
});




    // Loading code animation page load
 setTimeout(function () {
    var preloader = document.getElementById('preloader');
    preloader.classList.remove('translate-y-0', 'opacity-100');
    preloader.classList.add('-translate-y-full', 'opacity-0');
    document.body.style.overflow = 'visible'; // Allow scrolling
}, 2000);


    
 