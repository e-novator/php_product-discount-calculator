<?php 
  // get the data from the form
  $product_description = $_POST['product_description'];
  $list_price = $_POST['list_price'];
  $discount_percent = $_POST['discount_percent'];
  
  // calculate the discount
  $discount = $list_price * $discount_percent * .01;
  $discount_price = $list_price - $discount;
  
  // apply currency formatting to the dollar and percent amounts
  $list_price_formatted = "$".number_format($list_price, 2);
  $discount_percent_formatted = $discount_percent."%";
  $discount_formatted = "$".number_format($discount, 2);
  $discount_price_formatted = "$".number_format($discount_price, 2);            
  
  // escape the unformatted input
  $product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Discount Percent:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>

        <div id="buttons">
        <label>&nbsp;</label>
          <button type="button"><a href="index.html">Go Back</a></button>
        </div>
    </main> 
    <div style="text-align: center; font-weight: 700;">
    <p>***********************************************************************************</p>
    <p>Author: Bathandwa Mavuso</p>
    <p>Email: mavuso.bathandwa365@gmail.com</p>
    <p>***********************************************************************************</p>
</div>  
</body>

</html>