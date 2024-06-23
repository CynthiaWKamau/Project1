<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

 
  <br>
    <h1 align="center">About Us</h1>
 <p>Amara Hotel is a charming hotel located on the Maldive's Island, known for its stunning natural beauty and serene atmosphere. The Hotel offers open-air seating with panoramic ocean views, perfect for romantic dinners or casual gatherings. Their menu features fresh seafood and globally inspired dishes crafted by skilled chefs. Amara hotel combines exceptional cuisine, top-notch service, and a welcoming ambiance, making it a must-visit destination for both travelers and locals seeking a taste of paradise.</p>
    <br><br> <h2>Contact Details</h2>
 <p>For any inquires, below are the contact  details.</p>
<ul>
    <li>Phone:(+544) 123-4567</li>
    <li>Email:info@amara.com</li>
     <li>Address:124 Maldives Beachfront, Maji waters</li>
     <li>Website:<a href="http://www.amaraaa.com">www.amarahotel.com</a></li>

</ul>
<br><br><br><h2 align ="center">Client Feedback</h2><br>

<div class="container form-container">
<form>
    <label for="fname">First name:</label><br>
    <input type="text"id="fname"name="fname"><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>

    <label for="address">Email Address:</label><br>
  <input type="text" id="address" address="address"><br>

<label for="rating">Client Rating:</label><br>
  <select Client Rating=""Client Rating="">
    <option value="">Select Rating</option>
  <option value="">Amazing service</option>
    <option value="">Mid Service</option>
    <option value="">Bad Service</option>
    <option value="">Room for improvement</option>
    <br><br>
    </select>
<br><br>

  <label for="feedback">Client feedback:</label><br>
  <textarea name="Client feedback" id="" cols="30" rows="5"></textarea><br>
  
    <input type="submit" value="Submit">

</form>
     </div>
</body>
</html>