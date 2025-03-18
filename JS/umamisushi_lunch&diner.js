const menuLinks = document.querySelectorAll('nav a');

menuLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 

        const doelId = this.getAttribute('href').substring(1);
        const doelElement = document.getElementById(doelId);


        window.scrollTo({
            top: doelElement.offsetTop - 50, 
            behavior: 'smooth'
        });
    });
});