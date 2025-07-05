<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitalmanagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "SELECT * FROM doctors WHERE email = ?"; // Use prepared statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['password']) { 
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['doctor_id'] = $row['doctor_id'];
        $_SESSION['doctor_name'] = $row['name'];
        header("Location:vap.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid email.";
}

$stmt->close();
$conn->close();
?>