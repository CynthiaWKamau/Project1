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

    <h1 align="center">AMARA HOTEL</h1>
    <h2 align="center">BOOKING PRICES</h2>

</p> This table provides an overview of various activities and amenities offered at the hotel, along with corresponding prices for specific services and room types. Note that actual prices may vary based on availability, season, and promotional </p>

<table class="menu_table"border="1px" style="border-collapse: collapse;">
    <tr>
        <th>Activity</th>
        <th>Description</th>
        <th>Price(USD)</th>
        </tr>
        <tr>
            <td>Spa Massage</td>
            <td>Relaxing full-massage</td>
            <td>$80 per hour</td>
         </tr>
            <td>Facial Treatment</td>
            <td>Rejuvenating facial with organic products</td>
            <td>$50 per session</td>
        </tr>
            <td>Yoga classes</td>
            <td>Group yoga sessions for all levels</td>
            <td>$15 per class</td>
         </tr>
            <td>Swimming Pool</td>
            <td>Access to outdoor pool and sun loungers</td>
            <td>Included with stay</td>
        </tr>
             <td>Fitness Center</td>
             <td>State of the art gym equipment and personal trainers</td>
             <td>Included with stay</td> 
     
     </tr>
            <td>Standard Rooms</td>
            <td>Elegantly furnished and equipped with essential amenities</td>
            <td>Starting at $150 per night</td>
        </tr>  
             <td>Deluxe Room</td>  
             <td>Luxurious room with king-sized bed and ocean view</td>
             <td>Starting at $350 per night </td>

        </tr> 
             <td>Suite</td>
             <td>Spacious suite with separate living area and balcony</td>
             <td>Starting at $350 per night</td>
        </tr>
            <td>Family Room</td>
            <td>Family-friendly room with bunk beds and kid's amenities</td> 
            <td>Starting at $250 per night</td>       
        </tr>           

            </table>
            
            <br/>
            <img src="images/view restaurant.jpg"alt=""width="30%">
            <img src="images/restaurant.jpg"alt=""width="30%">
            <img src="images/Dinner by the beach.jpeg"alt=""width="25%">
            <img src="images/Beach.jpg"alt=""width="31%">
            <img src="images/beach wedding.jpeg"alt=""width="25%">
            <img src="images/spa 3.jpeg"alt=""width="36%">

            <br/> <br/> <br/>
            <h1 align="Center">BOOK SERVICES AT AMARA HOTEL</h1>
            
<div class="container form-container">

            <form action="booking conifirmation"method="post">

                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>

                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname">

             <br><br> <input type="checkbox"id="spa"name="services[]" value="Spa Massage">
               <label for="spa">Spa Massage($80 per hour)</label><br/>

               <input type="checkbox" id="facial" name="services[]" value="Facial Treatment">
            <label for="facial">Facial Treatment ($50 per session)</label><br>

            <input type="checkbox" id="yoga" name="services[]" value="Yoga Classes">
            <label for="yoga">Yoga Classes ($15 per class)</label><br>
                
            <h3 align="center">ACCOMODATION AT AMARA HOTEL</h3><br>
        
            <select room=""Room=""><br><br><br>
                <option value="">Select Room</option>
                <option value="">Standard Room(Starting at $150 per night)</option>
                <option value="">Deluxe room (Starting at $200nper night)</option>
                <option value="">Suite (Starting at $350 per night)</option>
                <option value="">Family Room (Starting at $250 per night)</option>
                <br><br>
                </select>
            
                <br> <br><input type="submit" value="Submit Booking">
            </form>
</div>

        
</body>
</html>