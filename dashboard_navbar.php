<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar_style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include 'navbar.php';
     include 'login.php'; ?> 
    
    <div style="margin-left: 220px; padding: 20px;"> <!-- Margin to avoid overlap with navbar -->
        <h1>Welcome to Your Dashboard!</h1>
        <p>This is where you can manage your bucket list items.</p>
        <!-- Add more content here -->
         
    </div>
</body>
</html>