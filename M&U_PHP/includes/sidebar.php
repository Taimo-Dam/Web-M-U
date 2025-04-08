<?php
session_start();
?>

<nav class="sidebar" id="sidebar">
    <div class="sidebar-content">
        <h1 class="logo">Me and <span>You</span></h1>
        <ul>
            <li class="group-title">Menu</li>
            <li><a href="index.php" class="active"> Home</a></li>
            <li><a href="#discover"> Discover</a></li>
            <li><a href="albums.html"> Albums</a></li>
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
            <li><a href="logout.php" class="red"> Logout</a></li>
        </ul>
    </div>
</nav>