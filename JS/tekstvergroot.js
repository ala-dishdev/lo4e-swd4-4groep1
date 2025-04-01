function vergrootText() {
    // Selecteer alle tekst-elementen die je wilt aanpassen (bijv. h1, h2, p, etc.)
    let elementen = document.querySelectorAll("h1, h2, h3, h4, h5, p, .gerecht_naam");

    // Doorloop alle geselecteerde elementen en verhoog hun lettergrootte
    elementen.forEach(function(element) {
        let huidigeGrootte = window.getComputedStyle(element, null).getPropertyValue('font-size');
        huidigeGrootte = parseFloat(huidigeGrootte); // Zet de grootte om naar een getal

        // Verhoog de lettergrootte met 2px
        let nieuweGrootte = huidigeGrootte + 2;
        element.style.fontSize = nieuweGrootte + "px";
    });
}
