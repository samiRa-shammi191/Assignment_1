
<style>
   body {
  font-family: sans-serif;
      background: #dfe7ee;
}


form {
  width: 100px;
  margin: 30px 20px 20px 20px ;
}

input {
  margin-bottom: 10px;
}

textarea {
  height: 150px;
}

.submit {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</style>






<?php

$name = "";
$age = "";
$country = "";
$introduction = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $introduction = $_POST["introduction"];
}

?>

<!DOCTYPE html>
<html>
<head>
<title>My Personal Information</title>
</head>
<body>

<h1>My Personal Information</h1>

<form action="" method="post">
    <label for="name"> My Name: </label><br>
  <input type="text" name="name" placeholder="Your name">
  <label for="age"> My Age: </label><br>
  <input type="number" name="age" placeholder="Your age">
  <label for="country"> My country: </label><br>
  <input type="text" name="country" placeholder="Your country">
  <label for="introduction"> My introduction: </label><br>
  <textarea name="introduction" placeholder=" brief introduction "></textarea>
  <br>
  <br>
  <input type="submit" value="Submit">
</form>

<?php

echo "<p>Name: $name</p>";
echo "<p>Age: $age</p>";
echo "<p>Country: $country</p>";
echo "<p>Introduction: $introduction</p>";

?>

</body>
</html>
