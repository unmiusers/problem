<?php
// PHP for registration logic

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
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    // Insert user data into database
    $sql = "INSERT INTO users (email, phone, username, password, id, gender, dob) VALUES ('$email', '$phone', '$username', '$password', '$id', '$gender', '$dob')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        header("Location: index.html"); // Redirect to login page
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
