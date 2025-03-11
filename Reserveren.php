<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }
        .form-container {
            background-color: #e6821e;
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            margin: auto;
            color: black;
        }
        h2 {
            color: brown;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: brown;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Reserveren</h2>
    <form action="Reserveren_Formulier.php" method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="keuze">Uw keuze:</label>
        <select id="keuze" name="keuze">
            <option value="ontbijt">Ontbijt</option>
            <option value="lunch">Lunch</option>
            <option value="diner">Diner</option>
        </select>

        <label for="dag">Dag:</label>
        <input type="date" id="dag" name="dag" required>

        <label for="tijd">Hoe laat:</label>
        <input type="time" id="tijd" name="tijd" required>

        <label for="personen">Personen:</label>
        <select id="personen" name="personen">
            <?php for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            } ?>
        </select>

        <label for="dieet">Dieetwensen:</label>
        <input type="text" id="dieet" name="dieet">

        <input type="submit" value="Verzenden">
    </form>
</div>

</body>
</html>
