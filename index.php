<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite scroll</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 id="top-title">Infinite scroll</h1>
        <div class="product-list">
            <div class="product">
                <h3>Product Name</h3>
                <p>Product description</p>
                <div class="price">10$</div>
            </div>
            <div class="product">
                <h3>Product Name</h3>
                <p>Product description</p>
                <div class="price">10$</div>
            </div>
            <div class="product">
                <h3>Product Name</h3>
                <p>Product description</p>
                <div class="price">10$</div>
            </div>
        </div>
        <div id="loader">
            <svg class="loader" viewBox="25 25 50 50" stroke-width="5">
                <circle cx="50" cy="50" r="20"></circle>
            </svg>
        </div>
        <div class="end-of-content">
            Plus de produit a afficher
        </div>
    </div>
    <script src="./app.js"></script>
</body>

</html>