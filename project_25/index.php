<!DOCTYPE html>
<html>
<head>
    <title>Welcome User</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $gender = $_POST['gender'];

        if ($gender == 'male') {
            echo "<h2>Welcome Mr. $name</h2>";
        } elseif ($gender == 'female') {
            echo "<h2>Welcome Ms. $name</h2>";
        } else {
            echo "<h2>Welcome $name</h2>";
        }
    }
    ?>
</body>
</html>
