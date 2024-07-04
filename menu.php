<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2{
            color: #6a5acd;
            font-family: 'Times New Roman', Times, serif;
           text-align:center;
        }
        /* Styles for the carousel */
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch; 
            width: 100%;
            scroll-behavior: smooth;
        }

        .carousel img {
            scroll-snap-align: start;
            width: 100%;
            height: auto;
        }

       
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
        </div>
    </header>

       </body>

   
    <h2 >AMARA'S MENU</h2>
</p>Indulge in a culinary journey at Amara Hotel, where our menu is crafted to tantalize your taste buds with a delightful selection of dishes. From hearty breakfast options to satisfying lunch and dinner choices, our menu offers a fusion of flavors and premium ingredients to cater to every palate.</p>
<br><br>

<section class="gallery">
<div class="carousel-container">
        <div class="carousel">
            <img src="images/food 1.jpeg" alt="Food 1">
            <img src="images/desert.jpeg" alt="Dessert">
            <img src="images/food 2.jpeg" alt="Food 2">
            <img src="images/Dinner by the beach.jpeg" alt="Dinner by the beach">
            <img src="images/food.jpeg" alt="Food">
            <img src="images/Fresh seafood Perdido Key.jpeg" alt="Fresh seafood Perdido Key">
        </div>
    </div>
    </section>


<br> <br>
<table class="menu_table"border="1px" style="border-collapse: collapse;">
    
    <tr>
        <th>Meal</th>
        <th>Item</th>
        <th>Description</th>
        <th>Price(USD)</th>


    </tr>    
    <tr>
        <td>Breakfast</td>
        <td>Smoked Salmon Bagel</td>
        <td>Toasted bagel topped with smoked salmon, cream cheese, red onion, capers and fresh dill</td>
        <td>$12</td>
    </tr>
    <tr>
        <td></td>
        <td>Shrimp Omelette</td>
        <td>Fluffy omelette filled with sautéed shrimp, spinach, and feta cheese, served with hash browns</td>
        <td>$10</td>
    </tr>
    <tr>
        <td></td>
        <td>Crab Benedict</td>
        <td>Classic eggs Benedict with poached eggs, crab cakes, hollandaise sauce, and English muffin</td>
        <td>$14</td>
    </tr>
    <tr>
        <td>Lunch</td>
        <td>Grilled Shrimp Salad</td>
        <td>Mixed greens topped with grilled shrimp, cherry tomatoes, cucumbers, avocado, and citrus vinaigrette</td>
        <td>$16</td>
    </tr>
    <tr>
    <td></td>
   <td>Lobster Roll</td>
   <td>Buttery lobster chunks on a toasted roll with lettuce, mayo, and lemon, served with fries</td>
   <td>$18</td>
   </tr>
   <tr>
    <td></td>
    <td>Sea food Chowder</td>
    <td>Creamy chowder with shrimp, crab, clams, and potatoes, served with garlic bread</td>
    <td>$12</td>
   </tr>
   <tr>
    <td>Dinner</td>
     <td>Pan-Seared Scallops</td>
     <td>Pan-seared scallops with a lemon butter sauce, served with wild rice and grilled asparagus</td>
     <td>$22</td>

   </tr>
   <tr>
    <td></td>
    <td>Seafood Paella</td>
    <td>Spanish-style paella with shrimp, mussels, clams, and chorizo, flavored with saffron</td>
    <td>$25</td>
   </tr>
   <tr>
    <td></td>
     <td>Grilled Swordfish</td>
     <td>Grilled swordfish steak marinated in herbs and lemon, accompanied by roasted vegetables</td>
     <td>$28</td>
    
   </tr>
   <tr>
    <td>Drinks</td>
    <td>White Wine Spritzer</td>
    <td>Crisp white wine mixed with soda water, garnished with fresh citrus</td>
    <td>$8</td>
    
   </tr>
   <tr>
    <td></td>
    <td>Sea Breeze Cocktail</td>
    <td>Vodka, cranberry juice, and grapefruit juice, served over ice with a lime wedge</td>
    <td>$10</td>
   </tr>
   <tr>
    <td></td>
    <td>Mango Mojito</td>
    <td>Rum, muddled mint and mango, lime juice, soda water, and a splash of simple syrup</td>
    <td>$12</td>
   </tr>
</table>
<br><br>
<p>This menu offers a variety of seafood dishes for different meals, including breakfast, lunch, and dinner, along with refreshing drink options to complement the meals.</p>


<a class="btn"href="bookings.php">BOOK WITH US TODAY</a>


</body>
</html>

