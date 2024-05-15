<?php
// PHP for login logic

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get input data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check user credentials
    $sql = "SELECT * FROM users WHERE (username='$username' OR email='$username' OR phone='$username') AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        header("Location: home.html"); // Redirect to home page
    } else {
        // Login failed
        header("Location: index.html"); // Redirect back to login page
    }

    $conn->close();
}
?>
