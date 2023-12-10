<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>User List</title>
</head>
<body>
    <div class="container">
        <h1>User List</h1>

        <?php
        $sql = "SELECT user_id, username, email FROM Users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>User ID</th><th>Username</th><th>Email</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td></tr>";
            }
            
            echo "</table>";
        } else {
            echo "No users found";
        }
        ?>

        <a href="../index.php">Back to Home</a>
    </div>
</body>
</html>
