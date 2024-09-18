<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>
<body>

    <h1>INVENTORY MANAGEMENT SYSTEM</h1>

    <form action="" method="post">
        <label for="item">Item: </label>
        <input type="text" name="item" id="item" required/>
        <label for="quantity">Quantity: </label>
        <input type="number" name="quantity" id="quantity" required/><br>
        <label for="price">Price: </label>
        <input type="number" name="price" id="price" required/><br>
        <input type="submit" name="action" value="Add Item"/>
        <input type="submit" name="action" value="Update Item"/>
        <input type="submit" name="action" value="Remove Item"/>
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['inventory'])) {
        $_SESSION['inventory'] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $action = $_POST['action'];

        switch ($action) {
            case 'Add Item':
                if (isset($_SESSION['inventory'][$item])) {
                    echo "<p>Item already exists. Use 'Update Item' to modify the existing item.</p>";
                } else {
                    $_SESSION['inventory'][$item] = ["Quantity" => $quantity, "Price" => $price];
                }
                break;

            case 'Update Item':
                if (isset($_SESSION['inventory'][$item])) {
                    $_SESSION['inventory'][$item] = ["Quantity" => $quantity, "Price" => $price];
                } else {
                    echo "<p>Item does not exist. Use 'Add Item' to add a new item.</p>";
                }
                break;

            case 'Remove Item':
                if (isset($_SESSION['inventory'][$item])) {
                    unset($_SESSION['inventory'][$item]);
                } else {
                    echo "<p>Item does not exist.</p>";
                }
                break;
        }
    }

    echo "<h2>Inventory List</h2>";
    if (!empty($_SESSION['inventory'])) {
        echo "<ul>";
        $totalValue = 0;
        foreach ($_SESSION['inventory'] as $item => $details) {
            $itemValue = $details["Quantity"] * $details["Price"];
            $totalValue += $itemValue;
            echo "<li>$item - Quantity: {$details['Quantity']}, Price: {$details['Price']}, Value: $itemValue</li>";
        }
        echo "</ul>";
        echo "<h3>Total Inventory Value: $totalValue</h3>";
    } else {
        echo "<p>No items in the inventory.</p>";
    }
    ?>

</body>
</html>
