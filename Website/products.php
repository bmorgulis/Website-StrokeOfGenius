<?php
require_once "header.php"; 
?>
<html>
<body>
<section class="bg" id="bg2">
    <div class="product-container">
        <h1 id="projecthead">Products</h1>
        <div class="products_page">
            <?php
                // Fetch the image paths from the database
                $sql = "SELECT productimgpath FROM products";
                $result = mysqli_query($dbc, $sql);

                $imagePaths = [];
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $imagePaths[] = $row['productimgpath'];
                    }
                }

                // Define the $products array
                $products = [
                    ['name' => 'Product 1', 'price' => 19.99],
                    ['name' => 'Product 2', 'price' => 29.99],
                    ['name' => 'Product 3', 'price' => 39.99]
                ];

                // Combine the image paths with the existing products array
                foreach ($products as $key => $product) {
                    $products[$key]['image'] = $imagePaths[$key];
                }

                // Loop through the products and display them
                foreach ($products as $product) {
                    echo "<div class='product'>";
                    echo "<img src='" . $product['image'] . "' alt='" . $product['name'] . "'>";
                    echo "<h2>" . $product['name'] . "</h2>";
                    echo "<p>Price: $" . $product['price'] . "</p>";
                    echo "<button>Add to Cart</button><br><br><br><br>";
                    echo "</div>";
                }

                // Close the connection
                $dbc->close();
            ?>
            </section>
        </div>
    </div>
</body>
</html>    
<script src="blur.js"></script>

<?php include "footer.php";