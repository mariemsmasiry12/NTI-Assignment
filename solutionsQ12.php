<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problem 12 - Price & Discount Calculator</title>
</head>
<body>

<h3>Order Form</h3>

<form method="post" action="solutionsQ12.php">

    <label>Product price:</label><br>
    <input type="text" name="price" value="<?php echo isset($_POST['price']) ? htmlspecialchars($_POST['price']) : ''; ?>"><br><br>

    <label>Quantity:</label><br>
    <input type="text" name="quantity" value="<?php echo isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : ''; ?>"><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

<hr>

<?php
if (isset($_POST['submit'])) {

    $price    = $_POST['price'];
    $quantity = $_POST['quantity'];

    // 1) Must be numeric (this answers the "how do I check it's a number" part)
    if (!is_numeric($price) || !is_numeric($quantity)) {
        echo "Error: You must enter numbers only.";
    }
    // 2) Must not be negative
    elseif ($price < 0 || $quantity < 0) {
        echo "Error: Negative numbers are not allowed.";
    }
    // 3) Valid data -> do the calculation
    else {
        $price    = (float) $price;
        $quantity = (int) $quantity;

        $totalBeforeDiscount = $price * $quantity;

        // discount rate grows as the total grows
        if ($totalBeforeDiscount < 1000) {
            $discountRate = 0.10; // 10%
        } else {
            $discountRate = 0.15; // 15%
        }

        $discountValue      = $totalBeforeDiscount * $discountRate;
        $totalAfterDiscount = $totalBeforeDiscount - $discountValue;

        echo "Total price before discount: " . $totalBeforeDiscount . "<br>";
        echo "Discount rate applied: " . ($discountRate * 100) . "%<br>";
        echo "Discount value: " . $discountValue . "<br>";
        echo "Total price after discount: " . $totalAfterDiscount . "<br>";
    }
}
?>

</body>
</html>
