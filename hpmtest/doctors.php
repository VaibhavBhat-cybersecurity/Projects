<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctor Specialists</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /* Main Title Styles */
        .main-title {
            text-align: center;
            background-color: rgb(212, 87, 53);
            color: white;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
        }

        /* Container for Doctor Cards */
        .doctor-info-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        /* Doctor Card Styles */
        .doctor-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
            margin: 15px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .doctor-card img {
            border-radius: 8px;
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .doctor-card h2 {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }

        .doctor-card p {
            margin: 5px 0;
            color: #666;
        }

        .doctor-card .specialty {
            font-weight: bold;
            color: rgb(40, 218, 46);
        }

        .actions button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin: 10px 5px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 1em;
        }

        .actions button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="main-title">Meet Our High Specialist Doctors</div>

    <div class="doctor-info-container">
        <div class="doctor-card">
            <img src="Dr.Abhishek Saklecha.jpeg" alt="Dr. Abhishek Saklecha">
            <h2>Dr. Abhishek Saklecha</h2>
            <p class="specialty">Interventional Cardiologist</p>
            <p>Cardiac Sciences & CCU</p>
            <p>MBBS, MD (Medicine), DM (Cardiology), DrNB (Cardiology)</p>
            <p>Mon - Sat | 9:30 AM to 4:30 PM</p>
            <div class="actions">
                <a href="patientsappfin.php"><button>Book Appointment</button></a>
            </div>
        </div>
        <div class="doctor-card">
            <img src="Dr. Anish Doke.jpeg" alt="Dr. Anish Doke">
            <h2>Dr. Anish Doke</h2>
            <p class="specialty">Consultant Orthodontist</p>
            <p>Dentistry</p>
            <p>BDS, MDS (Orthodontics and Dentofacial Orthopedics)</p>
            <p>Mon - Sat | By Appointment</p>
            <div class="actions">
                <a href="patientsappfin.php"><button>Book Appointment</button></a>
            </div>
        </div>
        <div class="doctor-card">
            <img src="Dr. Tulsi Subramanium.jpeg" alt="Dr. Tulsi Subramanium">
            <h2>Dr. Tulsi Subramanium</h2>
            <p class="specialty">Dentist</p>
            <p>Dentistry</p>
            <p>BDS, MDS, Master of Prosthetic </p>
            <p>Dentistry</p>
            <p>Mon - Sat | 11:00 AM to 5:00 PM</p>
            <div class="actions">
                <a href="patientsappfin.php"><button>Book Appointment</button></a>
            </div>
        </div>
        <div class="doctor-card">
            <img src="Dr. Mayuresh Gore.jpeg" alt="Dr. Mayuresh Gore">
            <h2>Dr. Mayuresh Gore</h2>
            <p class="specialty">Physiotherapist</p>
            <p>Physiotherapy</p>
            <p>BPT, MPT MSK (SPORTS) Osteopath, Chiropractic, DNL, Dcup.T</p>
            <p>Mon - Sat | 9:00 AM to 3:00 PM</p>
            <div class="actions">
                <a href="patientsappfin.php"><button>Book Appointment</button></a>
            </div>
        </div>
        <div class="doctor-card">
            <img src="Dr. Sujata Rege.jpeg" alt="Dr. Sujata Rege">
            <h2>Dr. Sujata Rege</h2>
            <p class="specialty">Infectious Diseases</p>
            <p>Infectious Diseases</p>
            <p>MBBS, DNB, Fellowship in Infectious Diseases</p>
            <p>Mon - Sat | 9:00 AM to 3:00 PM</p>
            <div class="actions">
                <a href="patientsappfin.php"><button>Book Appointment</button></a>
            </div>
        </div>
        <div class="doctor-card">
            <img src="Dr. Archana Gautam.jpeg" alt="Dr. Archana Gautam">
            <h2>Dr. Archana Gautam</h2>
            <p class="specialty">Intensivist</p>
            <p>ICU & ER</p>
            <p>DA, DNB (Anaesthesiology) </p>
            <p>IDCCM</p>
            <p>Mon - Sat | 9:00 AM to 3:00 PM</p>
            <div class="actions">
                <a href="patientsappfin.php"><button>Book Appointment</button></a>
            </div>
        </div>
    </div>
</body>
</html>