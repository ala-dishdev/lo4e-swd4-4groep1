const menuLinks = document.querySelectorAll('nav a');

menuLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Voorkomt dat de pagina direct springt

        // Haal de ID van het doel-element op
        const doelId = this.getAttribute('href').substring(1);
        const doelElement = document.getElementById(doelId);

        // Scroll soepel naar de juiste sectie
        window.scrollTo({
            top: doelElement.offsetTop - 50, // Houd rekening met de vaste navigatiebalk
            behavior: 'smooth' // Zorgt voor een vloeiende scroll-animatie
        });
    });
});