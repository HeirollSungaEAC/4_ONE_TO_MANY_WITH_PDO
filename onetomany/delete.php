<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php 
if (isset($_GET['id'])) {
    deleteMerchandise($pdo, $_GET['id']);
    header("Location: index.php");
    exit();
}
?>
