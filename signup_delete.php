<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <!-- Delete User Form -->
    <div class="container">
        <h2>Delete User</h2>
        <form action="" method="post" autocomplete="off">
            <label for="delete_username">Username:</label>
            <input type="text" name="delete_username" id="delete_username" required><br>
            
            <button type="submit" name="delete">Delete</button>
        </form>
        <a href="signin.php" >Sign In</a>
        <a href="signup.php" >Sign Up</a>
        <a href="signup_update.php" >Update User</a>
        <a href="signup_delete.php" >Delete User</a>
    </div>

    <?php
    require 'db_connection.php';

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
