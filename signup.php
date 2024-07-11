<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="" method="post" autocomplete="off">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>
            
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <a href="signin.php" >Sign In</a>
        <a href="signup_update.php">Update User</a>
        <a href="signup_delete.php">Delete User</a>
    </div>

    <?php
    require 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"])) {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            if ($password !== $password) {
                echo "<script>alert('Passwords do not match');</script>";
            } else {
                $stmt = $conn->prepare("SELECT * FROM registration WHERE username=? OR email=?");
                $stmt->bind_param("ss", $username, $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo "<script>alert('Username or Email has been taken');</script>";
                } else {
                    $stmt = $conn->prepare("INSERT INTO registration (name, username, email, password) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $name, $username, $email, $password);

                    if ($stmt->execute()) {
                        echo "<script>alert('Registration Successful');</script>";
                    } else {
                        echo "<script>alert('Registration Failed');</script>";
                    }
                }
                $stmt->close();
            }
        }
    }
    ?>
</body>
</html>
