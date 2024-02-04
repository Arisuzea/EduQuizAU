<?php 
include "conn.php"
?>
<?php
// Form - PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Password check
    if (strlen($password) < 8 || !preg_match("/[a-zA-Z]/", $password) || !preg_match("/[0-9]/", $password)) {
        echo '<div class="error">Error: Password must be at least 8 characters long and contain at least 1 letter(a-z) and 1 number(0-9).</div>';
        echo '<meta http-equiv="refresh" content="3;URL=\'SignUp.php\'" />'; // Error redirect
        exit;
    }

    // Email check
    $check_email_query = "SELECT * FROM accounts WHERE email = '$email'";
    $check_email_result = $conn->query($check_email_query);
    if ($check_email_result->num_rows > 0) {
        echo '<div class="error">Error: Email address already exists.</div>';
        echo '<meta http-equiv="refresh" content="3;URL=\'SignUp.php\'" />'; // Error redirect
        exit;
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // PHP - SQL DB
    $sql = "INSERT INTO accounts (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Index.php after register
        header("Location: index.php");
        exit();
    }
}

$conn->close();
?>
