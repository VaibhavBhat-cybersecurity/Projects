<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Daily Schedule</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
        }

        /* Page Container */
        .schedule-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Header */
        .schedule-container h1 {
            text-align: center;
            color: #fff;
            background-color:rgb(19, 149, 37);
            padding: 10px 0;
            border-radius: 4px;
        }

        /* Appointment List */
        .appointment {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .appointment:last-child {
            border-bottom: none;
        }

        .appointment-info {
            flex: 1;
        }

        .appointment-info p {
            margin: 5px 0;
            color: #555;
        }

        .appointment-info .time {
            font-weight: bold;
            color: #007bff;
        }

        .cancel-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .cancel-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="schedule-container">
        <h1>Doctor's Daily Schedule</h1>
        <!-- Appointments -->
        <div class="appointment">
            <div class="appointment-info">
                <b><span class="time"> 9:30 AM to 4:30 PM </span> - <b> Dr. Abhisekh Saklecha </b></p>
                <p><b> Schedule: </b> Regular Cardiology Check-up</p>
            </div>
            <button class="cancel-btn">Cancel</button>
        </div>
        <div class="appointment">
            <div class="appointment-info">
                <b><span class="time">10:30 AM to 12:30 PM</span> -<b> Dr. Anish Doke  </b></p>
                <p><b>Schedule: </b> Follow-up Consultation</p>
            </div>
            <button class="cancel-btn">Cancel</button>
        </div>
        <div class="appointment">
            <div class="appointment-info">
                <b><span class="time">11:00 AM to 5:00 PM</span> - <b> Dr. Tulsi Subramanium </b></p>
                <p><b>Schedule: </b> Dental Consultations & Treatments</p>
            </div>
            <button class="cancel-btn">Cancel</button>
        </div>
        <div class="appointment">
            <div class="appointment-info">
                <b><span class="time">9:00 AM to 3:00 PM</span> -<b> Dr. Mayuresh Gore </b></p>
                <p><b>Schedule: </b> Physiotherapy Sessions</p>
            </div>
            <button class="cancel-btn">Cancel</button>
        </div>
        <div class="appointment">
            <div class="appointment-info">
                <b><span class="time">9:00 AM to 3:00 PM</span> - <b> Dr. Sujata Rege </b></p>
                <p><b>Schedule: </b> General Patient's Check-ups</p>
            </div>
            <button class="cancel-btn">Cancel</button>
        </div>
        <div class="appointment">
            <div class="appointment-info">
                <b><span class="time">9:00 AM to 3:00 PM</span> - <b> Dr. Archana Gautam </b></p>
                <p><b>Schedule: </b>Monitoring (ICUs)</p>
            </div>
            <button class="cancel-btn">Cancel</button>
        </div>
    </div>
</body>
</html>
