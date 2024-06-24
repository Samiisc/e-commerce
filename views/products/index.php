<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
<h1>Produits populaires</h1>
<ul>
    <?php foreach ($products as $product): ?>
    <?php var_dump($product); ?>
        <li>
            <h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <p>Prix : <?php echo $product['price']; ?> €</p>
            <p>Stock : <?php echo $product['stock']; ?></p>
            <p>cat : <?php echo $product['category']; ?></p>
            <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
