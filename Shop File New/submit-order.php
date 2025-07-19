<?php
// Enable error reporting for debugging (optional, you can remove this in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));

    // Check if any of the fields are empty
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        echo "<p style='color: red;'>All fields are required. Please fill in all fields.</p>";
        exit;
    }

    // Optional: Add logic to save order to a database
    // Example of saving to a database (uncomment and update with your database credentials)
    /*
    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO orders (name, email, phone, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $address);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    */

    // Optionally, send an email (e.g., an order confirmation)
    // mail($email, "Order Confirmation", "Thank you for your order, $name!");

    // Display confirmation message
		echo "<h3>Order has been placed successfully!</h3>";
		echo "<p>Thank you, <strong>$name</strong>! We have received your order and will send a confirmation email to <strong>$email</strong>.</p>";
		echo "<p><a href='"file:///C:/ketan/Internship/Healet/healet-html/clacess-new editing.html"'>Go back to the homepage</a></p>";
} else {
    // If the form wasn't submitted correctly
    echo "<p style='color: red;'>Invalid request. Please submit the form first.</p>";
}
?>
