<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Order Confirmation - Tom's Pizza Palace</title>
        <link rel="stylesheet" href="css/styles.css" />
        </head>
    <body>
        <header>
            <h1>Tom's Pizza Palace</h1>
        </header>
        
        <main>
            <h2>Order Summary</h2>

<?php
// Check if the request method is POST, meaning the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $num_pizzas = ($_POST['num_pizzas'] ?? 'N/A');
    $pizza_size = ($_POST['pizza_size'] ?? 'N/A');
    $crust_type = ($_POST['crust_type'] ?? 'N/A');
    $customer_name = ($_POST['customer_name'] ?? 'Guest');
    $service_type = ($_POST['service_type'] ?? 'N/A');
    $instructions = ($_POST['instructions'] ?? 'None');

    // Toppings are an array, so we handle them separately
    $toppings = $_POST['toppings'] ?? []; 
    $toppings_list = 'None';
    $toppings_list = ($_POST['toppings'] ?? 'None');
    
    // Start displaying the order details
    echo "<h3>Thank you for your order, $customer_name!</h3>";
    echo "<h4>Your Order Details:</h4>";
    
    echo "<ul>";
    echo "<li>Number of Pizzas: $num_pizzas</li>";
    echo "<li>Size and Shape: $pizza_size, " . ($_POST['pizza_shape'] ?? 'N/A') . "</li>";
    echo "<li>Crust Type: $crust_type</li>";
    echo "<li>Selected Toppings: $toppings</li>";
    echo "</ul>";

    echo "<h4>Contact & Service:</h4>";
    echo "<ul>";
    echo "<li>Service Type: $service_type</li>";
	echo "<li>Special Instructions/Address: <br>" . ($instructions) . "</li>";
    echo "</ul>";

} 
?>
        </main>
        
        <hr>

        <footer>
            <p><small>© 2025 Tom's Pizza Palace. All rights reserved.</small></p>
        </footer>
    </body>
</html>