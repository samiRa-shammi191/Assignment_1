<!DOCTYPE html>
<html>
<head>
    <title>Even/Odd Checker</title>
</head>
<body>
    <h2>Even/Odd Number Checker</h2>
    <form method="post" action="">
        Enter a number: <input type="number" name="number" required><br><br>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $number = intval($_POST['number']);
        $message = "";

        if ($number % 2 == 0) {
            $message = "{$number} is an even number.";
        } else {
            $message = "{$number} is an odd number.";
        }

        echo "<p>{$message}</p>";
    }
    ?>
</body>
</html>
