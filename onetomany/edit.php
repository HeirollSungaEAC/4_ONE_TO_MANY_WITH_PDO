<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Merchandise</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $merchandise = getMerchandiseById($pdo, $_GET['id']); 
    ?>
    <h1>Edit Merchandise</h1>
    <form action="core/handleForms.php?id=<?php echo $merchandise['id']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $merchandise['name']; ?>" required>

        <label for="category_id">Category:</label>
        <select name="category_id" required>
            <?php foreach (getCategories($pdo) as $category) { ?>
                <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $merchandise['category_id']) ? 'selected' : ''; ?>>
                    <?php echo $category['name']; ?>
                </option>
            <?php } ?>
        </select>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="<?php echo $merchandise['price']; ?>" required>

        <input type="submit" name="updateMerchandise" value="Update Merchandise">
    </form>
    <a href="index.php">Back to Merchandise List</a>
</body>
</html>
