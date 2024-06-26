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
    <form action="" method="post" autocomplete="off">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        
        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required><br>
        
        <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>

    </body>
</html>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = filter_input(INPUT_POST, "name" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, "username" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword" ,FILTER_SANITIZE_SPECIAL_CHARS);


        if(empty($name)){
        echo "<script>alert('Please enter a name');</script>";
        } elseif(empty($username)) {
             echo "<script>alert('Please enter username');</script>";
         } elseif(empty($email)){
            echo "<script>alert('Please enter email');</script>";
        }elseif(empty($password)){
            echo "<script>alert('Please enter password');</script>";
        }elseif(empty($confirmpassword)){
            echo "<script>alert('Please enter confirmation password');</script>";
        
         } else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user( name, username, email, password, confirmation password) VALUES ('$name','$username','$email','$password','$confirmpassword')";
            mysqli_query($conn, $sql);

            try{
                echo "<script>alert('You are now logged in');</script>";
                header("Location:index.php");
            }catch(mysqli_sql_exception $e){
                echo "<script>alert('username is taken');</script>";
                header("Location:login.php");
            }

        }


    }
    $conn->close();




?>

