<!DOCTYPE html>
<html>
    <head><title>Display Data from Database</title></head>
    <body>
        <h2>Data from Database</h2>
        <?php
        $conn = new mysqli("localhost", "rachit_gupta", "Rachit1234@", "example_db");
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM example_t";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
            while ($row = $result->fetch_assoc())
            {
                echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "No data found.";
        }
        $conn->close();
        ?>
    </body>
</html>
