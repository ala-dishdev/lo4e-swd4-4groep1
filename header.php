

    
    <header>
        <img class="logo_header" src="plaatjes/logo_umami_sushi_1.png" alt="Umami Sushi Logo">
        <button id="openMenu"> ☰ </button>
    </header>
    

    <article id="menu" class="menu">
        <button id="closeMenu" class="close-btn">&times;</button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="lunch_diner.php">Lunch & diner</a></li>
            <li><a href="openingstijden.php">Locatie & Openingstijden</a></li>
            <li><a href="reserveren.php">Reserveren</a></li>
            <li><a href="vacatures.php">Vacatures</a></li>
        </ul>
        <img src="plaatjes/logo_umami_sushi_1.png" alt="Logo" class="logo">
    </article>

    <script>
        document.getElementById("openMenu").addEventListener("click", function () {
            document.getElementById("menu").classList.add("open");
        });

        document.getElementById("closeMenu").addEventListener("click", function () {
            document.getElementById("menu").classList.remove("open");
        });
    </script>


