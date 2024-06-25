<?php
    include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form class=""action="" method="post" autocomplete="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required value=""> <br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required value=""> <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required value=""> <br>
        
    </form>
</body>
</html>