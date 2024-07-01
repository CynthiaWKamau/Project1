<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                        <input type="date" placeholder="01">
</div>
                         <div class="box">
                        <span>CHILDREN</span><br>
                        <input type="date" placeholder="01">
</div>
                          <div class="box">
                      <button class="flex">

                       <input type="submit" value="CHECK AVAILABILITY">

                      </button>

</div>
</div>
</div>
</section>

<section>
<div class="container">
    <div class="slider-wrapper">
        <div class="image-list">
            <img src="images/background.jpeg" alt="background" class="image-item">
            <img src="images/spa.jpeg" alt="background" class="image-item">
            <img src="images/hotel.jpeg" alt="background" class="image-item">
            <img src="images/back 2.jpeg" alt="background" class="image-item">
            <img src="images/cruise 1.jpeg" alt="background" class="image-item">
            <img src="images/hotel back.jpeg" alt="background" class="image-item">
            <img src="images/scuba diving.jpeg" alt="background" class="image-item">

</div>
</div>
<div class="slider-scrollbar">
    <div class="scrollbar-track">
        <div class="scrollbar-thumb"></div>
</div>
</div>
</div>
</section>

<script src="script.js"></script>
</body>
</html>