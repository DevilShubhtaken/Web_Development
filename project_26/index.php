<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bill</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Generated Bill</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantities = $_POST['quantity'] ?? [];
        $menu = [
            "Burger" => 150,
            "Pizza" => 250,
            "Pasta" => 180,
            "Soft Drink" => 50
        ];
        
        $billAmount = 0;
        
        foreach ($quantities as $item => $quantity) {
            if ($quantity > 0 && array_key_exists($item, $menu)) {
                $billAmount += $menu[$item] * $quantity;
            }
        }
        
        echo "<table>";
        echo "<tr><th>Item</th><th>Price (Rs.)</th><th>Quantity</th></tr>";
        foreach ($quantities as $item => $quantity) {
            if ($quantity > 0 && array_key_exists($item, $menu)) {
                echo "<tr>";
                echo "<td>$item</td>";
                echo "<td>" . $menu[$item] . "</td>";
                echo "<td>$quantity</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
        
        echo "<p>Total Amount: Rs. $billAmount</p>";
        
        if ($billAmount > 1000) {
            $discount = $billAmount * 0.1;
            $discountedAmount = $billAmount - $discount;
            echo "<p>Discount Applied (10%): Rs. $discount</p>";
            echo "<p>Amount Payable after Discount: Rs. $discountedAmount</p>";
        }
    }
    ?>
</body>
</html>
