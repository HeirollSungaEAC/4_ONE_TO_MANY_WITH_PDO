<?php
function getAllMerchandise($pdo) {
    $stmt = $pdo->query("SELECT * FROM merchandise");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertMerchandise($pdo, $name, $category_id, $price) {
    $stmt = $pdo->prepare("INSERT INTO merchandise (name, category_id, price) VALUES (?, ?, ?)");
    $stmt->execute([$name, $category_id, $price]);
}

function getCategories($pdo) {
    $stmt = $pdo->query("SELECT * FROM categories");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMerchandiseById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM merchandise WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateMerchandise($pdo, $id, $name, $category_id, $price) {
    $stmt = $pdo->prepare("UPDATE merchandise SET name = ?, category_id = ?, price = ? WHERE id = ?");
    $stmt->execute([$name, $category_id, $price, $id]);
}

function deleteMerchandise($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM merchandise WHERE id = ?");
    $stmt->execute([$id]);
}
?>
