<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styles for the carousel */
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch; /* Enables smooth scrolling on iOS */
            width: 100%;
            scroll-behavior: smooth;
        }

        .carousel img {
            scroll-snap-align: start;
            width: 100%;
            height: auto;
        }

        /* Optional: Style for container */
        .carousel-container {
            max-width: 100%;
            overflow: hidden;
            margin: 0 auto;
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
                <h1>Make Reservations with us today</h1>

                <div class="content grid">
                    <div class="box">
                        <span>ARRIVAL DATE</span><br>
                        <input type="date" placeholder="21/08/2024">
                    </div>
                    <div class="box">
                        <span>DEPARTURE DATE</span><br>
                        <input type="date" placeholder="30/08/2024">
                    </div>
                    <div class="box">
                        <span>ADULTS</span><br>
                        <input type="number" placeholder="01">
                    </div>
                    <div class="box">
                        <span>CHILDREN</span><br>
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

 <!-- Gallery Section -->
 <section class="gallery">
            <div class="container">
                <h1>AMARA'S GALLERY</h1>

                <div class="carousel-container">
                    <div class="carousel">
                        <img src="images/Beach.jpg" alt="Beach" class="image-item">
                        <img src="images/spa.jpeg" alt="Spa" class="image-item">
                        <img src="images/room 2.jpeg" alt="Room" class="image-item">
                        <img src="images/back 2.jpeg" alt="Back 2" class="image-item">
                        <img src="images/hotel back.jpeg" alt="Hotel Back" class="image-item">
                        <img src="images/yoga.jpeg" alt="Yoga" class="image-item">
                        <img src="images/scuba diving.jpeg" alt="Scuba Diving" class="image-item">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>