<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Umami Sushi, sushi restaurant">
    <meta name="keywords" content="Umami Sushi, Umami, sushi, restaurant">
    <meta name="author" content="Angela Bansie">

    <title>Home pagina - Umami Sushi</title>
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet\umamisushi.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>

    <article>
        <header>
            <img class="logo_header" src="plaatjes/logo_umami_sushi_1.png" alt="Umami Sushi Logo">
            <button id="openMenu"> ☰ </button>
        </header>
    </article>

    <article id="menu" class="menu">
        <button id="closeMenu" class="close-btn">&times;</button>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Lunch & diner</a></li>
            <li><a href="#">Locatie</a></li>
            <li><a href="#">Reserveren</a></li>
            <li><a href="#">Vacatures</a></li>
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

</body>
</html>
