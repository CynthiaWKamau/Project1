<?php
    // Include database connection
    include 'db_connection.php';

    // Initialize variables to store user input
    $username = $email = $password = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate input
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = $_POST["password"]; 

        // Validate required fields
        if (empty($username)) {
            echo "<script>alert('Please enter a username');</script>";
        } elseif (empty($email)) {
            echo "<script>alert('Please enter a valid email');</script>";
        } elseif (empty($password)) {
            echo "<script>alert('Please enter a password');</script>";
        } else {
            // Prepare and execute the SQL query
            $sql = "INSERT INTO login (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("Prepare failed: " . htmlspecialchars($conn->error));
            }
            // Bind parameters and execute query
            $stmt->bind_param("sss", $username, $email, $password); 

            if ($stmt->execute()) {
                echo "<script>alert('Registration Successful');</script>";
                header("Location: index.php");
                exit();
            } else {
                echo "<script>alert('Error: " . htmlspecialchars($stmt->error) . "');</script>";
            }

            // Close statement
            $stmt->close();
        }
    }

    // Close connection
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="signin.css">

</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Welcome</h1>
            <input name="username" type="text" placeholder="Username" value="<?php echo htmlspecialchars($username); ?>" required>
            <br>
            <input name="email" type="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required>
            <br>
            <input name="password" type="password" placeholder="Password" required>
            <br>
            <button type="submit" name="submit">Sign In</button>
        </form>
        <a href="signup.php" class="button-link">Sign Up</a>
    </div>
</body>
</html>
