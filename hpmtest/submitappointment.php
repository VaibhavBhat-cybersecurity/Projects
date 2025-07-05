<?php
// Start session to track the user
session_start();

// Database connection details
$servername = "localhost";
$username = "root";  // Change as needed
$password = "";      // Change as needed
$dbname = "hospitalmanagement"; // Your database name

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the appointments table if it doesn't exist
$table_create_query = "CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(255) NOT NULL,
    appointment_date DATE NOT NULL,
    email VARCHAR(255) NOT NULL,
    contact_number VARCHAR(20) NOT NULL,
    doctor_name VARCHAR(255) NOT NULL,
    appointment_time TIME NOT NULL,
    status ENUM('Booked', 'Cancelled') DEFAULT 'Booked',
    patient_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the query to create the table
if ($conn->query($table_create_query) !== TRUE) {
    echo "Error creating table: " . $conn->error;
    exit();
}

// Get the patient ID from the session
$patient_id = $_SESSION['user_id']; 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $patient_name = $_POST['patient-name'];
    $appointment_date = $_POST['appointment-date'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact-number'];
    $doctor_name = $_POST['doctor-name'];
    $appointment_time = $_POST['appointment-time'];
    
    // Check if the appointment already exists for this patient on the selected date and doctor
    $check_query = "SELECT * FROM appointments WHERE patient_id = '$patient_id' AND appointment_date = '$appointment_date' AND doctor_name = '$doctor_name' AND status = 'Booked'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        // If the appointment already exists
        echo "<script>alert('You already have a booked appointment with this doctor on this date.'); window.location.href='appointment_page.php';</script>";
    } else {
        // Insert appointment into the database
        $sql = "INSERT INTO appointments (patient_name, email, contact_number, doctor_name, appointment_date, appointment_time, status, patient_id) 
                VALUES ('$patient_name', '$email', '$contact_number', '$doctor_name', '$appointment_date', '$appointment_time', 'Booked', '$patient_id')";

        if ($conn->query($sql) === TRUE) {
            // If the insertion is successful, redirect to the view appointments page
            header("Location: view_appointments.php");
            exit(); // Ensure no further code execution after redirection
        } else {
            // If insertion fails
            echo "<script>alert('Error booking appointment: " . $conn->error . "'); window.location.href='appointment_page.php';</script>";
        }
    }
}

$conn->close(); // Close the database connection
?>
