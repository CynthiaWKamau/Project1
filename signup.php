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
        <a href="signin.php">Sign In</a>
    </div>

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
    </div>

    <!-- Delete User Form -->
    <div class="container">
        <h2>Delete User</h2>
        <form action="" method="post" autocomplete="off">
            <label for="delete_username">Username:</label>
            <input type="text" name="delete_username" id="delete_username" required><br>
            
            <button type="submit" name="delete">Delete</button>
        </form>
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

        // Delete user
        if (isset($_POST["delete"])) {
            if (isset($_POST["delete_username"])) {
                $delete_username = $_POST["delete_username"];

                $stmt = $conn->prepare("DELETE FROM registration WHERE username=?");
                $stmt->bind_param("s", $delete_username);

                if ($stmt->execute()) {
                    echo "<script>alert('User deleted successfully');</script>";
                } else {
                    echo "<script>alert('Delete failed');</script>";
                }

                $stmt->close();
            }
        }
    
    ?>
</body>
</html>
