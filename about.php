<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            color: purple;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        h2 {
            color: purple;
            text-align: left;
            font-family: 'Times New Roman', Times, serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .form-container textarea {
            height: 150px; 
        }
        .form-container input[type="submit"] {
            background-color: #6a5acd;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background-color: #9370db;
        }
    </style>
</head>
<body>

    <!-- Insertion of logo -->
    <div class="main">
        <div class="logo">
            <img src="images/logo2.png" alt="Amara Hotel Logo" width="150px">
        </div>
        <header>
            <?php include_once("nav.php"); ?>
        </header>
    </div>

    <h1>About Us</h1>
    <p>Amara Hotel is a charming hotel located on the Maldives Island, known for its stunning natural beauty and serene atmosphere. The Hotel offers open-air seating with panoramic ocean views, perfect for romantic dinners or casual gatherings. Their menu features fresh seafood and globally inspired dishes crafted by skilled chefs. Amara hotel combines exceptional cuisine, top-notch service, and a welcoming ambiance, making it a must-visit destination for both travelers and locals seeking a taste of paradise.</p>
    <br>
    <h2>Contact Details</h2>
    <p>For any inquiries, below are the contact details.</p>
    <ul>
        <li>Phone: (+544) 123-4567</li>
        <li>Email: info@amara.com</li>
        <li>Address: 124 Maldives Beachfront, Maji waters</li>
        <li>Website: <a href="http://www.amaraaa.com">www.amarahotel.com</a></li>
    </ul>
<br>
    <h2>Client Feedback</h2>
    <div class="container form-container">
        <form method="POST" action="">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" required><br>

            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="rating">Client Rating:</label><br>
            <select id="rating" name="rating" required>
                <option value="">Select Rating</option>
                <option value="Amazing service">Amazing service</option>
                <option value="Mid Service">Mid Service</option>
                <option value="Bad Service">Bad Service</option>
                <option value="Room for improvement">Room for improvement</option>
            </select><br><br>

            <label for="feedback">Client feedback:</label><br>
            <textarea name="feedback" id="feedback" cols="30" rows="5" required></textarea><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    require 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input
        $Firstname = $_POST["fname"];
        $Lastname = $_POST["lname"];
        $Email = $_POST["email"];
        $ClientRating = $_POST["rating"];
        $Clientfeedback = $_POST["feedback"];

        if (empty($Firstname)) {
            echo "<script>alert('Please enter a firstname');</script>";
        } elseif (empty($Lastname)) {
            echo "<script>alert('Please enter lastname');</script>";
        } elseif (empty($Email)) {
            echo "<script>alert('Please enter email');</script>";
        } elseif (empty($ClientRating)) {
            echo "<script>alert('Please enter your rating');</script>";
        } elseif (empty($Clientfeedback)) {
            echo "<script>alert('Please enter your feedback');</script>";
        } else {
            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO `client feedback` (`First name`, `Last name`, `Email`, `Client Rating`, `Client feedback`) VALUES (?, ?, ?, ?, ?)");

            if ($stmt === false) {
                die("Prepare failed: " . htmlspecialchars($conn->error));
            }

            $bind = $stmt->bind_param("sssss", $Firstname, $Lastname, $Email, $ClientRating, $Clientfeedback);

            if ($bind === false) {
                die("Bind param failed: " . htmlspecialchars($stmt->error));
            }

            $execute = $stmt->execute();

            if ($execute) {
                echo "<script>alert('Feedback Successfully submitted');</script>";
            } else {
                echo "<script>alert('Feedback has Failed to be submitted: " . htmlspecialchars($stmt->error) . "');</script>";
            }

            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>
