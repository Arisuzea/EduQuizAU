<?php
include "conn.php";

// submit check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // post get
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check email pass
    if (!empty($email) && !empty($password)) {
        // check acc
        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // user found, pass verify
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {

                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                header("Location: dashboard.php");
                exit();
            } else {
                // error msg
                echo "Error: Incorrect password.";
            }
        } else {
            // User not found, display error message
            echo "Error: User not found.";
        }
    } else {
       
        echo "Error: Email and password are required.";
    }
}


$conn->close();
?>
