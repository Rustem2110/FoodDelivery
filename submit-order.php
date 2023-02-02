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

// Get form input values
$farmer_id = $_POST['farmer_id'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$customer_name = $_POST['customer_name'];
$customer_address = $_POST['customer_address'];
$customer_phone = $_POST['customer_phone'];

// Insert values into the orders table
$sql = "INSERT INTO orders (farmer_id, product_name, quantity, customer_name, customer_address, customer_phone) 
VALUES ('$farmer_id', '$product_name', '$quantity', '$customer_name', '$customer_address', '$customer_phone')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
