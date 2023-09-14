<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
    <form method="post" action="">
        Enter temperature value: <input type="text" name="temperature" required><br><br>
        Conversion direction:
        <input type="radio" name="direction" value="celsius_to_fahrenheit" required> Celsius to Fahrenheit
        <input type="radio" name="direction" value="fahrenheit_to_celsius" required> Fahrenheit to Celsius<br><br>
        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $temperature = floatval($_POST['temperature']);
        $direction = $_POST['direction'];
        $result = "";

        if ($direction == "celsius_to_fahrenheit") {
            $result = ($temperature * 9/5) + 32;
            echo "<p>{$temperature} Celsius is equal to {$result} Fahrenheit.</p>";
        } elseif ($direction == "fahrenheit_to_celsius") {
            $result = ($temperature - 32) * 5/9;
            echo "<p>{$temperature} Fahrenheit is equal to {$result} Celsius.</p>";
        }
    }
    ?>
</body>
</html>
