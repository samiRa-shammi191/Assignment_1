<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h2>Weather Report</h2>
    <form method="post" action="">
        Enter temperature: <input type="number" name="temperature" required><br><br>
        <input type="submit" name="check" value="Check Weather">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $temperature = intval($_POST['temperature']);
        $message = "";

        if ($temperature < 0) {
            $message = "It's freezing!";
        } elseif ($temperature >= 0 && $temperature < 15) {
            $message = "It's cool.";
        } elseif ($temperature >= 15 && $temperature < 25) {
            $message = "It's mild.";
        } elseif ($temperature >= 25 && $temperature < 35) {
            $message = "It's warm.";
        } else {
            $message = "It's hot!";
        }

        echo "<p>{$message}</p>";
    }
    ?>
</body>
</html>
