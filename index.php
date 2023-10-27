<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            background-color: #3498db;
            color: #fff;
            padding: 1rem 2rem;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #2078a3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 1rem;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Hotel Management System</h1>
    <div class="container">
        <h2>Make a Reservation</h2>
        <form method="post" action="reservation.php">
            <div class="form-group">
                <label for="name">Guest Name:</label>
                <input type="text" id="name" name="name" value="" required>
            </div>

            <div class="form-group">
                <label for="room">Room Type:</label>
                <input type="text" id="room" name="room" value="" required>
            </div>

            <button class="button" type="submit" name="make_reservation">Make Reservation</button>
        </form>

        <h2>Reservation List</h2>
        <table>
            <tr>
                <th>Reservation ID</th>
                <th>Guest Name</th>
                <th>Room Type</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Jane Doe</td>
                <td>Deluxe Suite</td>
            </tr>
            <tr>
                <td>2</td>
                <td>John Smith</td>
                <td>Standard Room</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mary Johnson</td>
                <td>Executive Suite</td>
            </tr>
        </table>
    </div>
</body>
</html>