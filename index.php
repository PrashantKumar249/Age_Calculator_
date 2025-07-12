<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Age Calculator</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: linear-gradient(to right, #83a4d4, #b6fbff);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
            color: #007BFF;
        }
        .description {
            color: #555;
            font-size: 14px;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }
        input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #0056b3;
        }
        .result {
            margin-top: 25px;
            padding: 15px;
            border-radius: 8px;
            background: #f1f1f1;
            color: #333;
        }
        footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧮 Age Calculator</h1>
        <p class="description">Enter your date of birth to instantly calculate your exact age in years, months, and days.</p>
        
        <form method="post">
            <label for="dob">Enter Your Date of Birth:</label>
            <input type="date" name="dob" id="dob" required>
            <button type="submit" name="calculate">Calculate Age</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $dob = $_POST['dob'];
            $today = date("Y-m-d");
            
            $birthDate = new DateTime($dob);
            $todayDate = new DateTime($today);
            
            $age = $birthDate->diff($todayDate);
            
            echo "<div class='result'>";
            echo "<p><strong>Your Age:</strong></p>";
            echo "<p>" . $age->y . " Years, " . $age->m . " Months, " . $age->d . " Days</p>";
            echo "</div>";
        }
        ?>

        <footer>
            &copy; <?php echo date("Y"); ?> Age Calculator | Designed by Prashant 😊
        </footer>
    </div>
</body>
</html>
