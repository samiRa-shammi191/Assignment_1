<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        Enter Test Score 1: <input type="number" name="score1" required><br><br>
        Enter Test Score 2: <input type="number" name="score2" required><br><br>
        Enter Test Score 3: <input type="number" name="score3" required><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $score1 = floatval($_POST['score1']);
        $score2 = floatval($_POST['score2']);
        $score3 = floatval($_POST['score3']);

        $average = ($score1 + $score2 + $score3) / 3;
        $grade = "";

        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<p>Average Score: {$average}</p>";
        echo "<p>Letter Grade: {$grade}</p>";
    }
    ?>
</body>
</html>
