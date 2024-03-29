<?php
    // get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');//underscore added to function name
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    
    // calculate the discount and discounted price
    $discount = ($list_price * $discount_percent) / 100;//math equation fixed
    $discount_price = $list_price - $discount;//subtract not addition

    // apply currency formatting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";//concatenate dot added
    $discount_f = "$".number_format($discount, 2);//semi-colon added
    $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span>
        <br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span>
        <br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span>
        <br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span>
        <br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span>
        <br>
    </main>
</body>
</html>