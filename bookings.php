<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Heading color */
        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: #6a5acd;
            text-align: center;
        }

        /* Booking Page */
        .bookings .content {
            background-color: #e0ffff;
            border-radius: 10px;
            padding: 20px;
        }

        .box {
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .box span {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .box select,
        .box input[type="date"],
        .box input[type="number"],
        .box input[type="text"],
        .box input[type="email"],
        .box input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .wide-input {
            width: calc(100% - 20px);
        }

        .box button {
            width: 100%;
            padding: 10px;
            background-color: #6a5acd;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .box button:hover {
            background-color: #9370db;
        }

        /* Carousel */

        .carousel-container {
            max-width: 100%;
            overflow: hidden;
            margin: 20px 0;
        }

        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch; 
            scroll-behavior: smooth;
        }

        .carousel img {
            scroll-snap-align: start;
            width: 100%;
            height: auto;
        }

        .image-item {
            width: 100%;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-right: 10px;
        }

        .gallery h1 {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <!--insertion of logo-->
    <div class="main">
        <div class="logo">
            <img src="images/logo2.png" alt="Amara Hotel Logo" width="150px">
        </div>
        <header>
            <?php include_once("nav.php");?>    
        </header>
    </div>
    
    <!--bookings-->
    <section class="bookings" id="bookings">
        <div class="container">
            <h1>Make Reservations with us today!!!</h1>
            <br>
            <div class="content grid">
                <form method="POST" action="">
                    <div class="box wide-input">
                        <span>First Name</span>
                        <input type="text" name="first_name" required>
                    </div>
                    <div class="box wide-input">
                        <span>Last Name</span>
                        <input type="text" name="last_name" required>
                    </div>
                    <div class="box wide-input">
                        <span>Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="box wide-input">
                        <span>Contact</span>
                        <input type="tel" name="contact" required>
                    </div>
                    <div class="box">  
                        <span>ROOM TYPE</span>
                        <select name="room_type" required>
                            <option value="standard">Standard Room</option>
                            <option value="deluxe">Deluxe Room</option>
                            <option value="suite">Suite</option>
                            <option value="family">Family Room</option>
                        </select>
                    </div>
                    <div class="box">
                        <span>ARRIVAL DATE</span>
                        <input type="date" name="arrival_date" required>
                    </div>
                    <div class="box">
                        <span>DEPARTURE DATE</span>
                        <input type="date" name="departure_date" required>
                    </div>
                    <div class="box">
                        <span>ADULTS</span>
                        <input type="number" name="adults" placeholder="01" required>
                    </div>
                    <div class="box">
                        <span>CHILDREN</span>
                        <input type="number" name="children" placeholder="01" required>
                    </div>
                    <div class="box">
                        <button class="flex" type="submit">
                            CHECK AVAILABILITY
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <br><br>
    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <h1>HOTEL GALLERY</h1>
            <div class="carousel-container">
                <div class="carousel">
                    <img src="images/Beach.jpg" alt="Beach" class="image-item">
                    <img src="images/spa.jpeg" alt="Spa" class="image-item">
                    <img src="images/room 2.jpeg" alt="Room" class="image-item">
                    <img src="images/back 2.jpeg" alt="Back 2" class="image-item">
                    <img src="images/hotel back.jpeg" alt="Hotel Back" class="image-item">
                    <img src="images/yoga.jpeg" alt="Yoga" class="image-item">
                    <img src="images/scuba diving.jpeg" alt="Scuba Diving" class="image-item">
                    <img src="images/events.jpeg" alt="Events" class="image-item">
                    <img src="images/Dinner by the beach.jpeg" alt="Dinner by the Beach" class="image-item">
                </div>
            </div>
        </div>
    </section>
    <?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $First_name = trim($_POST["first_name"]);
    $Last_name = trim($_POST["last_name"]);
    $Email = trim($_POST["email"]);
    $Contact = trim($_POST["contact"]);
    $Room_Type = trim($_POST["room_type"]);
    $Arrival_Date = trim($_POST["arrival_date"]);
    $Departure_Date = trim($_POST["departure_date"]);
    $Adults = trim($_POST["adults"]);
    $Children = trim($_POST["children"]);

    // Ensure data is not empty and properly sanitized
    if (!empty($First_name) && !empty($Last_name) && !empty($Email) && !empty($Contact) && !empty($Room_Type) && !empty($Arrival_Date) && !empty($Departure_Date) && !empty($Adults) && !empty($Children)) {

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO `bookings`(`First name`, `Last name`, `Email`, `Contact`, `Room Type`, `Arrival Date`, `Departure Date`, `Adults`, `Children`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')");

        if ($stmt === false) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }

        $bind = $stmt->bind_param("sssssssss", $First_name, $Last_name, $Email, $Contact, $Room_Type, $Arrival_Date, $Departure_Date, $Adults, $Children);

        if ($bind === false) {
            die("Bind param failed: " . htmlspecialchars($stmt->error));
        }

        $execute = $stmt->execute();

        if ($execute) {
            echo "<script>alert('Booking Successfully submitted');</script>";
        } else {
            echo "<script>alert('Booking has Failed to be submitted: " . htmlspecialchars($stmt->error) . "');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('All fields are required');</script>";
    }
}

// Close connection
$conn->close();
?>

    
</body>
</html>
