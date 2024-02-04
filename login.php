<?php
include "conn.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted credentials
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email and password are provided
    if (!empty($email) && !empty($password)) {
        // Validate user credentials
        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // User found, verify password
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Password is correct, login successful
                // Start session and store user information if needed
                session_start();
                $_SESSION['user_id'] = $row['user_id']; // Example: Store user ID in session
                $_SESSION['email'] = $row['email']; // Example: Store email in session
                header("Location: dashboard.php");
                exit();
            } else {
                // Password is incorrect, display error message
                echo "Error: Incorrect password.";
            }
        } else {
            // User not found, display error message
            echo "Error: User not found.";
        }
    } else {
        // If email or password is empty, display an error message
        echo "Error: Email and password are required.";
    }
}

// Close database connection
$conn->close();
?>
