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
        <?php include_once("templates/nav.php");?>    
        </div>
    </header>

</body>
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
                     <br>
                       <input type="submit" value="CHECK AVAILABILITY">

                      </button>

</div>







        
</body>
</html>