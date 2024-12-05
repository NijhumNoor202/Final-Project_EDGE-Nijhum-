<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="welcome-container">
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
