<?php
require_once 'dbConfig.php';
require_once 'models.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addMerchandise'])) {
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        insertMerchandise($pdo, $name, $category_id, $price);
        header("Location: ../index.php"); // Adjust path to go back to index.php
        exit();
    }

    if (isset($_POST['updateMerchandise'])) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        updateMerchandise($pdo, $id, $name, $category_id, $price);
        header("Location: ../index.php"); // Adjust path to go back to index.php
        exit();
    }
}
?>
