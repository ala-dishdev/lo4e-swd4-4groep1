<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="">
    <meta name="keywords" content="Umami Sushi, Umami, sushi, restaurant, Reserveren">
    <meta name="author" content="Angela Bansie">

    <title>Home pagina - Umami Sushi</title>
    <link rel="icon" href="plaatjes/logo_umami_wit.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet/umamisushi.css">
    <link rel="stylesheet" href="stylesheet\header.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
        <form action="reserveren_formulier.php" method="post">
            <article class="formulier">
                <h2>Reserveren</h2>

                <article>
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" name="naam" required>
                </article>

                <article>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </article>

                <article>
                    <label for="keuze">Uw keuze:</label>
                    <select id="keuze" name="keuze">
                        <option>Lunch</option>
                        <option>Diner</option>
                    </select>
                </article>

                <article>
                    <label for="dag">Dag:</label>
                    <select id="dag" name="dag">
                        <option>5 Feb</option>
                        <option>6 Feb</option>
                        <option>7 Feb</option>
                        <option>8 Feb</option>
                        <option>9 Feb</option>
                    </select>
                </article>

                <article>
                    <label for="tijd">Hoe laat:</label>
                    <select id="tijd" name="tijd">
                        <option>09:00</option>
                        <option>09:45</option>
                        <option>10:45</option>
                        <option>12:00</option>
                        <option>18:30</option>
                    </select>
                </article>

                <article>
                    <label for="personen">Personen:</label>
                    <select id="personen" name="personen">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>meer dan 5</option>
                    </select>
                </article>

                <article>
                    <label for="dieet">Dieetwensen:</label>
                    <input type="text" id="dieet" name="dieet">
                </article>

                <article>
                    <button type="submit">Versturen</button>
                </article>
            </article>
        </form>
    </main>
    
    <?php include 'footer.php'; ?>

</body>
</html>
