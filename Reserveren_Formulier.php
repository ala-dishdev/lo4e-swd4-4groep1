<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST["naam"]);
    $email = htmlspecialchars($_POST["email"]);
    $keuze = htmlspecialchars($_POST["keuze"]);
    $dag = htmlspecialchars($_POST["dag"]);
    $tijd = htmlspecialchars($_POST["tijd"]);
    $personen = htmlspecialchars($_POST["personen"]);
    $dieet = htmlspecialchars($_POST["dieet"]);

    // Simpele validatie
    if (!empty($naam) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Bedankt voor je reservering, $naam!</h2>";
        echo "<p>Je hebt een $keuze gereserveerd op $dag om $tijd voor $personen persoon/personen.</p>";
        if (!empty($dieet)) {
            echo "<p>Dieetwensen: $dieet</p>";
        }
    } else {
        echo "<p>Ongeldige invoer. Probeer het opnieuw.</p>";
    }
} else {
    echo "<p>Ongeldige aanvraag.</p>";
}
?>
