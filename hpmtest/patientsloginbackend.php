<?php
// Start session to keep the user logged in
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "hospitalmanagement";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Check if this email exists in the database
    $sql = "SELECT id, email, password FROM patients WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Get the user data
        $user = $result->fetch_assoc();

        if ($password == $user['password']) {
            // Login is successful, store user info in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // Redirect to the dashboard page after successful login
            header("Location: doctors.php");
            exit(); // Stop further script execution
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect password'); window.location.href='patientslogin.php';</script>";
        }
    } else {
        // Email not found in the database
        echo "<script>alert('No account found with this email'); window.location.href='patientslogin.php';</script>";
    }
}

$conn->close(); // Close the database connection
?>
