<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bookings</title>
    <link rel="stylesheet" href="style.css">
    <style>

     .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
/*Heading*/
        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: #6a5acd;
            text-align: center;
        }
/*Booking Page*/
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
        .box input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
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

        /*Carousel */

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
            <img src="images/logo2.png"alt="Amara Hotel Logo"width="150px">
       
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
                    <div class="box">
                    <span>ROOM TYPE</span>
                    <select>
                        <option value="standard">Standard Room</option>
                        <option value="deluxe">Deluxe Room</option>
                        <option value="suite">Suite</option>
                        <option value="family">Family Room</option>
                    </select>
                </div>
                <div class="box">
                        <span>ARRIVAL DATE</span>
                        <input type="date" placeholder="21/08/2024">
                    </div>
                    <div class="box">
                        <span>DEPARTURE DATE</span>
                        <input type="date" placeholder="30/08/2024">
                    </div>
                    <div class="box">
                        <span>ADULTS</span>
                        <input type="number" placeholder="01">
                    </div>
                    <div class="box">
                        <span>CHILDREN</span>
                        <input type="number" placeholder="01">
                    </div>
                    <div class="box">
                        <button class="flex">
                            <input type="submit" value="CHECK AVAILABILITY">
                        </button>
                    </div>
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
                        <img src="images/events.jpeg" alt="Scuba Diving" class="image-item">
                        <img src="images/Dinner by the beach.jpeg" alt="Scuba Diving" class="image-item">

                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
 require 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input
        $RoomType = $_POST["Room Type"];
        $ArrivalDate = $_POST["Arrival Date"];
        $DepartureDate = $_POST["Departure Date"];
        $Adults = $_POST["Adults"];
        $Children = $_POST["Children"];

        if (empty($RoomType)) {
            echo "<script>alert('Please enter a roomtype');</script>";
        } elseif (empty($ArrivalDate)) {
            echo "<script>alert('Please enter arrivaldate');</script>";
        } elseif (empty($DepartureDate)) {
            echo "<script>alert('Please enter departuredate');</script>";
        } elseif (empty($Adults)) {
            echo "<script>alert('Please enter the number of adults');</script>";
        } elseif (empty($Children)) {
            echo "<script>alert('Please enter the number of children');</script>";
        } else {
            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO `bookings`(`Room Type`, `Arrival Date`, `Departure Date`, `Adults`, `Children`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')");

            if ($stmt === false) {
                die("Prepare failed: " . htmlspecialchars($conn->error));
            }

            $bind = $stmt->bind_param("sssss", $Firstname, $Lastname, $Email, $ClientRating, $Clientfeedback);

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
        }
    }

    // Close connection
    $conn->close();
    ?>

</body>
</html>