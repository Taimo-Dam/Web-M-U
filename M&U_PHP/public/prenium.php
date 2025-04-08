<?php
session_start();
require_once '../config/db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch premium content from the database
$query = "SELECT * FROM premium_content WHERE user_id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->execute(['user_id' => $_SESSION['user_id']]);
$premiumContent = $stmt->fetchAll(PDO::FETCH_ASSOC);

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="content">
    <h1>Premium Content</h1>
    <?php if ($premiumContent): ?>
        <ul>
            <?php foreach ($premiumContent as $content): ?>
                <li><?php echo htmlspecialchars($content['title']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No premium content available.</p>
    <?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>