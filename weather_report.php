<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    
     <h2>Weather Report</h2>
   <form action="weather_report.php" method="post">
  <input type="text" name="temperature" placeholder="Temperature">
  <input type="submit" value="Check"><br>
</form>

   <?php

$freezing_temperature = 0;
$cool_temperature = 15;
$warm_temperature = 25;


$temperature = $_POST['temperature'];


if ($temperature < $freezing_temperature) {
  echo "It's freezing!";
} else if ($temperature < $cool_temperature) {
  echo "It's cool.";
} else {
  echo "It's warm.";
}

?>

</body>
</html>
