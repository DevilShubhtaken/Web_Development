<?php
  function isPrime($num) {
    if ($num <= 1) {
      return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
      if ($num % $i == 0) {
        return false;
      }
    }
    return true;
  }

  // Check if the form is submitted and the number is provided
  if (isset($_GET['limit']) && !empty($_GET['limit'])) {
    $limit = $_GET['limit'];

    echo "<h2>Prime numbers less than $limit</h2>";
    echo "<p>";
    for ($i = 2; $i < $limit; $i++) {
      if (isPrime($i)) {
        echo "$i, ";
      }
    }
    echo "</p>";
  }
  ?>
