<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Welkom bij Umami Sushi! Hier vind je de beste en meest verrukkelijke sushi. Ons menu zit vol nieuwe smaken die je zeker niet teleurstellen. Alle informatie vind je op onze website. Kom langs en geniet! ">
    <meta name="keywords" content="Umami Sushi, Umami, sushi, restaurant, ">
    <meta name="author" content="Spuranthi Srirangam">

    <title>Lunch & Diner - Umami Sushi</title>
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet/umamisushi.css">
    <script src="JS/umamisushi_lunch&diner" defer></script>
</head>
<body>
    <header> 
        <?php include('header.php');?>
    </header>

    <main>
        <h1 class="topic">Lunch & Diner</h1>

        <nav class="scrollbar">
            <a href="#voorgerechten">Voorgerechten</a>
            <a href="#hoofdgerecht">Hoofdgerechten</a>
            <a href="#desserts">Desserts</a>
        </nav>

        <!-- Secties -->
        <section id="voorgerechten" style="background: lightblue;">
            <h1>Voorgerechten</h1>
            <p>Hier komen de voorgerechten.</p>
        </section>

        <section id="hoofdgerecht" style="background: lightcoral;">
            <h1>Hoofdgerechten</h1>
            <p>Hier komen de hoofdgerechten.</p>
        </section>

        <section id="desserts" style="background: lightgreen;">
            <h1>Desserts</h1>
            <p>Hier komen de desserts.</p>
        </section>

    </main>

    <footer>
    <?php include('footer.php');?>
    </footer>
</body>
</html>