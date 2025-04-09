function vergrootText() {

    let elementen = document.querySelectorAll("h1, h2, h3, h4, h5, p, .gerecht_naam, nav a");

    elementen.forEach(function(element) {
        let huidigeGrootte = window.getComputedStyle(element).fontSize;
        let huidigeGrootteNum = parseFloat(huidigeGrootte);

        let nieuweGrootte = huidigeGrootteNum + 2;

        element.style.fontSize = nieuweGrootte + 'px';
    });
}
