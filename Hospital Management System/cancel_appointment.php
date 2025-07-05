<?php
session_start();

// Check if the doctor is logged in
if (!isset($_SESSION['doctor_name'])) {
    header("Location: doctorlogin.php");  // Redirect to login page if doctor is not logged in
    exit();
}

// Database connection details
$servername = "localhost";
$username = "root";  // Change as needed
$password = "";      // Change as needed
$dbname = "hospitalmanagement"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the doctor's name from the session
$doctor_name = $_SESSION['doctor_name'];

// Handle appointment cancellation
if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];
    $cancel_sql = "UPDATE appointments SET status = 'Cancelled' WHERE id = '$appointment_id' AND doctor_name = '$doctor_name'";

    if ($conn->query($cancel_sql) === TRUE) {
        echo "<p style='color:green;'>Appointment cancelled successfully.</p>";
    } else {
        echo "<p style='color:red;'>Error cancelling appointment: " . $conn->error . "</p>";
    }
}

// Fetch appointments for the logged-in doctor
$sql = "SELECT * FROM appointments WHERE doctor_name = '$doctor_name' AND status = 'Booked'";
$result = $conn->query($sql);

// Display appointments
if ($result->num_rows > 0) {
    echo "<h2>Your Appointments</h2>";
    echo "<table border='1'>
                <tr>
                    <th>Patient Name</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                    <td>" . $row['patient_name'] . "</td>
                    <td>" . $row['appointment_date'] . "</td>
                    <td>" . $row['appointment_time'] . "</td>
                    <td>" . $row['status'] . "</td>
                    <td><a href='?id=" . $row['id'] . "'>Cancel</a></td>
                </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No appointments found.</p>";
}

$conn->close();
?>