<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitalmanagement";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the table if it doesn't exist
$table_sql = "CREATE TABLE IF NOT EXISTS patients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT(3) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL
)";
//unsigned numbers means non negative numbers enum is similar to boolean

if ($conn->query($table_sql) !== TRUE) {
    die("Error creating table: " . $conn->error);
}

// Insert the form data into the database using POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['cpass'];

    // Check if the passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Directly insert into the database (no prepared statement)
        $sql = "INSERT INTO patients (name, age, gender, contact_number, email, address, password, confirm_password) 
                VALUES ('$name', '$age', '$gender', '$contact_number', '$email', '$address', '$password', '$confirm_password')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Redirect to login page after successful registration
            header("Location: patientslogin.php");
            exit();  // Make sure to stop further script execution
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>
