<?php
// Step 1: Start the session
session_start();

include "includes/config.php";

// Step 3: Retrieve and sanitize session array values
if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cartItems = $_SESSION['cart'];

    // Step 4: Construct and execute the SQL INSERT query
    $sql = "INSERT INTO cart_items (item_name, quantity) VALUES ";

    $values = array();
    foreach ($cartItems as $item) {
        $itemName = mysqli_real_escape_string($conn, $item['name']);
        $quantity = (int)$item['quantity'];
        $values[] = "('$itemName', $quantity)";
    }

    // Display the contents of the $values[] array
    echo "<pre>";
    print_r($values);
    echo "</pre>";

    // Execute the SQL INSERT query
    $sql .= implode(", ", $values);

    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "No items in the cart to insert.";
}

// Close the database connection
mysqli_close($conn);
?>
