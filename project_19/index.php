<!DOCTYPE html>
<html>
<head>
  <title>Multiplication Table</title>
</head>
<body>
  <h1>Multiplication Table</h1>

  <form method="GET" action="table.php">
    Enter a number: <input type="number" name="number">
    <input type="submit" value="Generate Table">
  </form>
</body>
</html>
PHP FILE:
<?php
  // Check if the form is submitted and the number is provided
  if (isset($_GET['number']) && !empty($_GET['number'])) {
    $number = $_GET['number'];

    // Display the multiplication table
    echo "<h2>Table of $number</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<tr><td>$number x $i =</td><td>" . ($number * $i) . "</td></tr>";
    }
    echo "</table>";
  }
  ?>
