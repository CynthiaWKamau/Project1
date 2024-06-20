<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>


    <!--insertion of logo-->
        <div class="main">
            <div class="logo">
                <img src="images/logo2.png"alt="Logo"width="150px">
           
            </div>
            <!--Header-->
        <header>
      <?php include_once("templates/nav.php");?>     
        </div>
        </header>
 </div>

 <!--Showcase-->
 <div id="showcase">
        <div class="container">
        <div class="showcase-content">
            <h1><span class="text-primary">Welcome</span> to paradise</h1>
            <p class="lead"> Welcome to Amara Hotel, where luxury meets comfort in the heart of Maldives. Experience exceptional service, elegant accommodations, and a warm, inviting atmosphere. Your perfect stay begins here.</p>
                <a class="btn"href="about.html">About  Amara Hotel</a>
        </div>
       </div>
</div>

<!--Carousel-->
<div class="carousel slide"
id="Carousel"
data-bs-wrap="true"
data-bs-ride="carousel">

<div class="carousel-inner">
  <div class="carousel-item active">
       <div class="container">
        <h1 align="center">AMARA HOTEL GALLERY</h1>
        <div class="center-btn">
        <a class ="btn"href="bookings.html">Book with us Today</a>
       </div>
       </div>

       <div class="carousel-item ">
        <img src="images/background.jpeg" alt=""width="100%">
       </div>

<div class="carousel-item ">
    <img src="images/Jet skii 1.jpeg" alt=""width="100%">
</div>

<div class="carousel-item ">
    <img src="images/cruise 1.jpeg" alt=""width="100%">
</div>

<div class="carousel-item active">
    <img src="images/spa 3.jpeg" alt=""width="100%">
</div>

<button class="carousel-control-prev"type="button"
data-bs-target="#Carousel"
data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next"
    type="button"
    data-bs-target="#Carousel"
    data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>