
<?php
    require_once "header.php"; 
    ?>
<html>
<body>
    <div class="product-container">
        <h1 id="projecthead">Products</h1>
        <div class="products_page">
            <?php
                // Example array of products
                $products = [
                    ["name" => "Product 1", "price" => 19.99, "image" => "img/item1.jpg", "id" => "product"],
                    ["name" => "Product 2", "price" => 29.99, "image" => "img/item2.jpg", "id" => "product"],
                    ["name" => "Product 3", "price" => 39.99, "image" => "img/item3.jpg", "id" => "product"],
                ];

                // Loop through the products and display them
                foreach ($products as $product) {
                    echo "<div class='product'>";
                    echo "<img src='" . $product['image'] . "' alt='" . $product['name'] . "'>";
                    echo "<h2>" . $product['name'] . "</h2>";
                    echo "<p>Price: $" . $product['price'] . "</p>";
                    echo "<button>Add to Cart</button>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</body>
</html>















<?php include "footer.php"; ?>