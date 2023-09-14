<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator Layout</h2>
    <form method="post" action="">
        Enter the first number: <input type="number" name="num1" required><br><br>
        Enter the second number: <input type="number" name="num2" required><br><br>
        Select operations:
        <select name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Division by zero is not allowed.</p>";
                }
                break;
            default:
                echo "<p>Invalid operation selected.</p>";
                break;
        }

        echo "<p>The result is: {$result}</p>";
    }
    ?>
</body>
</html>
