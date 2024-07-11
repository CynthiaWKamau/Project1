<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <!-- Update User Form -->
    <div class="container">
        <h2>Update User</h2>
        <form action="" method="post" autocomplete="off">
            <label for="update_username">Username:</label>
            <input type="text" name="update_username" id="update_username" required><br>
            
            <label for="update_name">New Name:</label>
            <input type="text" name="update_name" id="update_name"><br>
            
            <label for="update_email">New Email:</label>
            <input type="email" name="update_email" id="update_email"><br>
            
            <label for="update_password">New Password:</label>
            <input type="password" name="update_password" id="update_password"><br>
            
            <button type="submit" name="update">Update</button>
        </form>
        <a href="signin.php" >Sign In</a>
        <a href="signup.php">Sign Up</a>
        <a href="signup_update.php" >Update User</a>
        <a href="signup_delete.php">Delete User</a>
    </div>

    <?php
    require 'db_connection.php';

    // Update user
    if (isset($_POST["update"])) {
        if (isset($_POST["update_username"])) {
            $update_username = $_POST["update_username"];
            $update_name = $_POST["update_name"] ?? null;
            $update_email = $_POST["update_email"] ?? null;
            $update_password = $_POST["update_password"] ?? null;

            $query = "UPDATE registration SET ";
            $params = [];
            $types = "";

            if ($update_name) {
                $query .= "name=?, ";
                $params[] = $update_name;
                $types .= "s";
            }
            if ($update_email) {
                $query .= "email=?, ";
                $params[] = $update_email;
                $types .= "s";
            }
            if ($update_password) {
                $query .= "password=?, ";
                $params[] = $update_password;
                $types .= "s";
            }

            if (count($params) > 0) {
                $query = rtrim($query, ", ");
                $query .= " WHERE username=?";
                $params[] = $update_username;
                $types .= "s";

                $stmt = $conn->prepare($query);
                $stmt->bind_param($types, ...$params);

                if ($stmt->execute()) {
                    echo "<script>alert('User updated successfully');</script>";
                } else {
                    echo "<script>alert('Update failed');</script>";
                }

                $stmt->close();
            } else {
                echo "<script>alert('No changes provided');</script>";
            }
        }
    }
    ?>
</body>
</html>
