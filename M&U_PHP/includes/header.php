<?php
session_start();
include_once '../config/db.php';

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ M&U</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<header>
    <div class="header-left">
        <div class="logo">M&U</div>
        <div class="search-container">
            <input type="text" placeholder="Search For Musics, Artists, ..." class="search-input">
            <i class="search-icon">&#128269;</i>
        </div>
    </div>
    <div class="header-right">
        <nav>
            <a href="../public/index.php">Home</a>
            <a href="../public/login.php">Login</a>
            <a href="../public/register.php"><button class="button">Sign up</button></a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="../public/logout.php">Logout</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<div class="menu-toggle" onclick="toggleMenu()">
    <i class="fas fa-bars"></i>
</div>
<nav class="sidebar" id="sidebar">
    <div class="sidebar-content">
        <h1 class="logo">Me and <span>You</span></h1>
        <ul>
            <li class="group-title">Menu</li>
            <li><a href="../public/index.php" class="active"> Home</a></li>
            <li><a href="../public/prenium.php"> Prenium</a></li>
            <li><a href="#"> Discover</a></li>
            <li><a href="#"> Albums</a></li>
            <li><a href="#"> Artists</a></li>
            <li class="group-title">Library</li>
            <li><a href="#"> Recently Added</a></li>
            <li><a href="#"> Most Played</a></li>
            <li class="group-title">Playlist and Favorite</li>
            <li><a href="#"> <i class="fa fa-heart"></i> Your Favorites</a></li>
            <li><a href="#"> Your Playlist</a></li>
            <li><a href="#" class="blue"> Add Playlist</a></li>
            <li class="group-title"> General</li>
            <li><a href="#"> Settings</a></li>
        </ul>
    </div>
</nav>
<script src="../assets/js/script.js"></script>
</body>
</html>