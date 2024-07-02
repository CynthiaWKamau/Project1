<?php
    // Include database connection
    include 'db_connection.php';

    // Initialize variables to store user input
    $username = $email = $password = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate input
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = $_POST["password"]; // No need to sanitize password since it's not directly used in SQL

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

            // You can choose to hash the password manually (not recommended, but shown here for illustration)
            // $hashed_password = hash('sha256', $password); // Example of manual hashing

            // Bind parameters and execute query
            $stmt->bind_param("sss", $username, $email, $password); // Assuming you're directly inserting the password

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
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
