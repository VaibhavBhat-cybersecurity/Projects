<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./symbhos.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .navbar {
            background-color: #007bff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: #fff;
            margin: 0;
        }

        .search-bar input[type="text"] {
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .container {
            text-align: center;
            margin: auto;
            padding: 20px; /* Added padding to increase visibility */
            background-color: rgba(0, 0, 0, 0.3); /* Inserted Semi-transparent background  */
            border-radius: 15px; 
        }

        h2 {
            color:rgb(255, 255, 255); 
            font-size: 36px; 
            font-weight: bold; 
            text-shadow: 2px 2px 6px #000;
        }

        .button {
            display: inline-block;
            margin: 10px;
            padding: 20px 40px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="navbar">
    <h1>Hospital Management System</h1>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
    </div>
</div>

<div class="container">
    <h2>Welcome to our Symbiosis Hospital</h2>
    <a href="doctorregister.php" class="button" id="doctor-btn">Doctors</a>
    <a href="patientslogin.php" class="button" id="patient-btn">Patients</a>
</div>

<script>
    document.getElementById('doctor-btn').addEventListener('click', function() {
        alert('Welcome, Doctor!');
        // redirect to the doctor login page //
    });

    document.getElementById('patient-btn').addEventListener('click', function() {
        alert('Welcome, Patient!');
        // redirect to the patient login page //
    });
</script>
</body>

<?php
//connecting to a database
$servername = "localhost";//Check the port number if 3306 then it would be localhost if not localhost:portnumber
$username = "root";
$password = "";// If you have set a password please enter the password 
$dbname = "hospitalmanagement";//connect to a database make sure the correct namne is entered you can check it through http://localhost/phpmyadmin/
$conn = new mysqli($servername, $username, $password);//Creates a connection object

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);//die stops the execution if any error found
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating database: " . $conn->error."Please retry";
}

// Select the database
$conn->select_db($dbname);
$conn->close();//Connection closed with MySQL server
?>
</body>
</html>
