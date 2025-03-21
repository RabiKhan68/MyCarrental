<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Save data to a text file (or a database)
    $file = fopen("rentals.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\n---\n");
    fclose($file);

    // Confirmation message
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your rental details have been saved. We will contact you soon.</p>";
} else {
    echo "Invalid request.";
}
?>
