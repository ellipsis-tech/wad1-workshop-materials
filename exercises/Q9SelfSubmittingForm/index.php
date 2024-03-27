<?php

// Stages: select -> confirm -> checkout -> pay
$products = [
  "Product A" => 50.00,
  "Product B" => 75.00,
  "Product C" => 20.00
];

$stage = $_POST['stage'] ?? 'select';
$selectedProduct = $_POST['selected_product'] ?? '';
$selectedPrice = $_POST['selected_price'] ?? 0;
$gst = 0.09;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($stage === 'confirm') {
    $selectedProduct = $_POST['product'];
    $selectedPrice = $products[$selectedProduct];
  } elseif ($stage === 'pay') {
    // The 'pay' logic here
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Product Selection</title>
</head>

<body>

  <?php if ($stage === 'select') : ?>
    <form method="post">
      <label for="product">Select a Product:</label>
      <select name="product" id="product">
        <?php foreach ($products as $product => $price) : ?>
          <option value="<?php echo htmlspecialchars($product); ?>">
            <?php echo htmlspecialchars($product); ?> - $<?php echo number_format($price, 2); ?>
          </option>
        <?php endforeach; ?>
      </select>
      <!-- TO DO: Submit form to same file and change the stage to next stage -->
    </form>

  <?php elseif ($stage === 'confirm') : ?>
    <p>Confirm selection: <?php echo htmlspecialchars($selectedProduct); ?> - $<?php echo number_format($selectedPrice, 2); ?></p>
    <form method="post">
      <input type="hidden" name="stage" value="pay">
      <!-- TO DO: Pass $selectedProduct to next stage with name="selected_product" -->
      <!-- TO DO: Pass $selectedPrice to next stage with name="selected_price" -->
      <!-- TO DO: Submit form to same file and change the stage to next stage -->
    </form>

  <?php elseif ($stage === 'checkout') : ?>
    <p>Checkout:</p>
    <p>Product: <?php echo htmlspecialchars($selectedProduct); ?></p>
    <p>Price: $<?php echo number_format($selectedPrice, 2); ?></p>
    <p>GST (9%): $<?php echo number_format($selectedPrice * $gst, 2); ?></p>
    <p>Total: $<?php $total = number_format($selectedPrice * (1 + $gst), 2);
                echo number_format($selectedPrice * (1 + $gst), 2); ?></p>
    <form method="post">
      <!-- TO DO: Pass $total to next stage with name="total" -->
      <input type="hidden" name="total" value="<?php echo $total; ?>">
      <!-- TO DO: Submit form to same file and change the stage to next stage -->
    </form>

  <?php elseif ($stage === 'pay') : ?>
    <p>Payment of <?php
                  // TO DO: Display the total amount
                  echo $_POST["total"]; ?> is successful!</p>
  <?php endif; ?>

</body>

</html>