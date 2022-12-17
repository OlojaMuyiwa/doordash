<?php
var_dump($_POST);
$image = $_POST['image'];
$product = $_POST['product'];
$price = $_POST['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../websiteplanet.com-favicons//favicons//favicon-16x16.png">
</head>

<body>
</body>
<form action="create.php" method="post">
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <label for="Product" class="form-label">Product</label>
        <input type="text" class="form-control" id="Product" name="product">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.1" class="form-control" id="price" name="price">
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>

</html>