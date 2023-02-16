<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_delivery";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form input values and sanitize them
$farmer_id = mysqli_real_escape_string($conn, $_POST['farmer_id']);
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
$customer_address = mysqli_real_escape_string($conn, $_POST['customer_address']);
$customer_phone = mysqli_real_escape_string($conn, $_POST['customer_phone']);

// Prepare the SQL statement with placeholders for the values
$sql = "INSERT INTO orders (farmer_id, product_name, quantity, customer_name, customer_address, customer_phone) 
VALUES (?, ?, ?, ?, ?, ?)";

// Create a prepared statement
$stmt = mysqli_prepare($conn, $sql);

// Bind the input values to the placeholders in the statement
mysqli_stmt_bind_param($stmt, 'ssssss', $farmer_id, $product_name, $quantity, $customer_name, $customer_address, $customer_phone);

// Execute the prepared statement
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the prepared statement and the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
