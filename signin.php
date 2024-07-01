<?php
    include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="" method="post">
            <h1>Welcome</h1>
            <input name="username" type="text" placeholder="Username">
            <br>
            <input name="email" type="text" placeholder="Email">
            <br>
            <input name="password" type="text" placeholder="password">
            <br>
            <button name="submit">Sign In</button>
        </form>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password" ,FILTER_SANITIZE_SPECIAL_CHARS);


        if(empty($username)){
        echo "<script>alert('Please enter a username');</script>";
        }elseif(empty($email)){
            echo "<script>alert('Please enter email');</script>";
        }elseif(empty($password)){
            echo "<script>alert('Please enter password');</script>";
        }
        
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user( username, email, password) VALUES ('$username','$email','$password')";
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