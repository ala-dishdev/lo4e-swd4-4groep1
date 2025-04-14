document.addEventListener("DOMContentLoaded", () => {
    let button = document.getElementById("lightModeButton");
    let mainElement = document.getElementById("Lunchdiner_main"); 

    if (button && mainElement) {
        button.addEventListener("click", () => {
            mainElement.classList.toggle("light_mode"); 
        });
    } else {
        console.error("Knop of hoofdsectie niet gevonden!");    
    }
});
