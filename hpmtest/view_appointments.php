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

// Get the patient ID from the session
$patient_id = $_SESSION['user_id'];

// Fetch the patient's appointments
$sql = "SELECT * FROM appointments WHERE patient_id = '$patient_id'";
$result = $conn->query($sql);

// Check if there are any appointments
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Doctor Name</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Status</th>
            </tr>";

    // Output the appointment details
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['doctor_name'] . "</td>
                <td>" . $row['appointment_date'] . "</td>
                <td>" . $row['appointment_time'] . "</td>
                <td>" . $row['status'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No appointments found!";
}

$conn->close(); // Close the database connection
?>
