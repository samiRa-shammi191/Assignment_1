<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h2>Comparison Tool</h2>
    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br><br>
        Enter the second number: <input type="number" name="num2" required><br><br>
        <input type="submit" name="compare" value="Compare">
    </form>

    <?php
    if (isset($_POST['compare'])) {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $result = ($num1 > $num2) ? $num1 : $num2;

        echo "<p>The larger number is: {$result}</p>";
    }
    ?>
</body>
</html>
