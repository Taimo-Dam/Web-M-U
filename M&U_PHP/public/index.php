<?php
session_start();
require_once '../config/db.php';

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);

// Fetch some content for the homepage (e.g., latest music, featured artists)
$query = "SELECT * FROM music ORDER BY release_date DESC LIMIT 10";
$stmt = $pdo->prepare($query);
$stmt->execute();
$musicList = $stmt->fetchAll(PDO::FETCH_ASSOC);

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<main>
    <h1>Welcome to M&U Music App</h1>
    <h2>Latest Music</h2>
    <ul>
        <?php foreach ($musicList as $music): ?>
            <li><?php echo htmlspecialchars($music['title']); ?> by <?php echo htmlspecialchars($music['artist']); ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php include '../includes/footer.php'; ?>