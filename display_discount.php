<?php
/***********************************************************************************
 * Code by: BATHANDWA MAVUSO
 * Email: mavuso.bathandwa365@gmail.com
 * *********************************************************************************/

//get data from the forms
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

//calculating discount and discount price
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

//formatting the data
$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = $discount_percent."%";
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);
?>

<!--HTML for display_discount page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted ?></span><br>

        <label>Discount Percent:</label>
        <span><?php echo $discount_percent_formatted ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted ?></span><br>

        <label>Total Cost:</label>
        <span><?php echo $discount_price_formatted ?></span><br>
    </main>
</body>
</html>
