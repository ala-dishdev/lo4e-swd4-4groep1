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
    <link rel="icon" href="plaatjes/logo_umami_sushi_1.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet/umamisushi.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Staatliches&display=swap" rel="stylesheet">
    <script src="JS/umamisushi_lunch&diner.js" defer></script>
    <script src="JS/light_modus.js" defer></script>
    <script src="JS/tekstvergroot.js" defer></script>
</head>
<body>
    <header> 
        <?php include('header.php');?>
    </header>

    <main class='Lunchdiner_main'>
        <h1 class="topic">Lunch & Diner</h1>

        <nav class="scrollbar">
            <a href="#voorgerechten">Voorgerechten</a>
            <a href="#nigirisushi">Nigiri Sushi</a>
            <a href="#makirolls">Maki Rolls</a>
            <a href="#specialrolls">Special Rolls</a>
            <a href="#sashimi">Sashimi</a>
            <a href="#combinatiemenus">Combinatie Menu's</a>
            <a href="#bijgerechten">Bijgerechten</a>
            <a href="#dranken">Dranken</a>
        </nav>
        
        <button onclick="myFunction()">Toggle dark mode</button>
        <button class="vergroten fixed-button" onclick="vergrootText()">Vergroot lettertype</button>
        
        <h1 class="gerecht_titel">Voorgerechten</h1>
        <section id="voorgerechten">
            <article class="gerecht">
                    <img src="plaatjes/misosoep.jpg" alt="Miso soep">
                    <h1 class="gerecht_naam">Miso Soep<br>Tradionele Japanse soep met tofu, zeewier en lente-ui<br>€4,50 </h1>
            </article>
            <article class="gerecht">
                    <img src="plaatjes/edamame.jpeg" alt="Edamame">
                    <h1 class="gerecht_naam">Edamame<br>Gestoomde sojabonen met zeezout<br>€5,00</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/wakamesalade.jpg" alt="Wakame salade">
                <h1 class="gerecht_naam">Wakame Salade<br>Zeewier salade met sesam dressing<br> €6,50</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Nigiri Sushi (2 stuks)</h1>
        <section id="nigirisushi">
            <article class="gerecht">
                <img src="plaatjes/nigirizalm.jpg" alt="sake">
                <h1 class="gerecht_naam">Sake (Zalm)<br> €4,50  </h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/nigiritonijn.jpg" alt="tonijn">
                <h1 class="gerecht_naam">Maguro (Tonijn)<br>€5,00 </h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/nigirigarnaal.jpg" alt="garnaal">
                <h1 class="gerecht_naam">Ebi (Garnaal)<br>€4,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/nigiripaling.avif" alt="paling">
                <h1 class="gerecht_naam">Unagi (Paling)<br>€5,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/nigiritamago.jpg" alt="ei">
                <h1 class="gerecht_naam">Tamago (Ei)<br>€4,00</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Maki Rolls (6 stuks) </h1>
        <section id="makirolls">
            <article class="gerecht">
                <img src="plaatjes/makicalifornia.jpg" alt="california rolls">
                <h1 class="gerecht_naam">California Roll<br>Krabs ck, avocado, komkommer en masago <br> €8,50 </h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/makispicy.avif" alt="spicy rolls">
                <h1 class="gerecht_naam">Spicy Tuna Roll<br>Tonijn, spicy mayonaise en lente-ui<br>€9,00</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/makisalmonavocado.webp" alt="Salmon Avocado Roll">
                <h1 class="gerecht_naam">Salmon Avocado Roll<br>Verse zalm en avocado<br>€8,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/makikomkommer.jpg" alt="Cucumber Roll">
                <h1 class="gerecht_naam">Cucumber Roll<br>Komkommer en sesam (vegetarisch)<br>€6,50</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Special Rolls (8 stuks) </h1>
        <section id="specialrolls" >
            <article class="gerecht">
                <img src="plaatjes/specialdragonroll.webp" alt="Dragon Roll">
                <h1 class="gerecht_naam">Dragon Roll<br>Tempura garnaal, avocado, komkommer, unagi en unagi saus<br>€15,50 </h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/specialrainbowroll.avif" alt="Rainbow Roll">
                <h1 class="gerecht_naam">Rainbow Roll<br>California roll bedekt met diverse soorten vis<br>€16,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/specialcrispychicken.webp" alt="Crispy Chicken Roll">
                <h1 class="gerecht_naam">Crispy Chicken Roll<br>Krokante kip, avocado, komkommer, teriyaki saus<br>€14,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/specialtempuraroll.jpg" alt="Tempura Roll*">
                <h1 class="gerecht_naam">Tempura Roll<br>Gefrituurde garnaal, avocado, komkommer, spicy mayonaise<br>€15,50</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Sashimi (5 stuks)</h1>
        <section id="sashimi" >
            <article class="gerecht">
                <img src="plaatjes/zalmsashimi.jpg" alt="Sake (Zalm)">
                <h1 class="gerecht_naam">Sake (Zalm)<br>€9,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/magurosashimi.avif" alt="Maguro (Tonijn)">
                <h1 class="gerecht_naam">Maguro (Tonijn)<br>€10,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/hachimisashimi.jpg" alt="Hamachi (Yellowtail)">
                <h1 class="gerecht_naam">Hamachi (Yellowtail)<br> €11,50</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Combinatie Menu's</h1>        
        <section id="combinatiemenus">
            <article class="gerecht">
                <img src="plaatjes/sushisetA.jpg" alt="Sushi Set A">
                <h1 class="gerecht_naam">Sushi Set A<br>4 nigiri, 6 maki, miso soep<br>€22,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/sushisetB.jpg" alt="Sushi Set B">
                <h1 class="gerecht_naam">Sushi Set B<br>6 nigiri, 8 special roll, miso soep, edamame<br>32,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/sushisetC_1.jpg" alt="Sashimi Set">
                <h1 class="gerecht_naam">Sashimi Set<br>15 stuks diverse sashimi met rijst<br>€25,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/sushisetD.jpg" alt="Vegetarisch Set">
                <h1 class="gerecht_naam">Vegetarisch Set<br>4 vegetarische nigiri, 6 cucumber roll, 6 avocado roll<br> €20,50</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Bijgerechten</h1>
        <section id="bijgerechten">
            <article class="gerecht">
                <img src="plaatjes/rice.webp" alt="Witte rijst">
                <h1 class="gerecht_naam">Witte Rijst<br>€2,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/gember.jpg" alt="Gember">
                <h1 class="gerecht_naam">Gember<br>€1,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/wasabi.jpg" alt="Extra Wasabi">
                <h1 class="gerecht_naam">Extra Wasabi<br>€1,00</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/spicymayo.jpg" alt="Spicy mayonaise">
                <h1 class="gerecht_naam">Spicy Mayonaise<br>€1,00</h1>
            </article>
        </section>

        <h1 class="gerecht_titel">Dranken</h1>
        <section id="dranken" >
            <article class="gerecht">
                <img src="plaatjes/groenethee.png" alt="Groene Thee">
                <h1 class="gerecht_naam">Groene Thee<br>€2,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/japansbier.jpeg" alt="Japans bier">
                <h1 class="gerecht_naam">Japanse Bier<br>€4,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/sake.jpeg" alt="sake">
                <h1 class="gerecht_naam">Sake (warm/koud)<br>€6,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/frisdrank.jpg" alt="Frisdrank">
                <h1 class="gerecht_naam">frisdrank<br>€2,50</h1>
            </article>
            <article class="gerecht">
                <img src="plaatjes/chaudfontaine.png" alt="Mineraal Water">
                <h1 class="gerecht_naam">Mineraal Water<br>€2,50</h1>
            </article>
        </section>
        

    </main>

    <footer>
    <?php include('footer.php');?>
    </footer>
</body>
</html>