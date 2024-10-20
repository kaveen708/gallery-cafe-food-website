<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="oder.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="order-container">
        <h1>Place Your Order</h1>
        <form id="orderForm">
            <div class="form-group">
                <label for="foodItem">Food Item:</label>
                <select id="foodItem" name="foodItem" required>
                    <option value="burger">Burger</option>
                    <option value="pizza">Pizza</option>
                    <option value="pasta">Pasta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" required>
            </div>
            <div class="form-group">
                <label for="specialInstructions">Special Instructions:</label>
                <textarea id="specialInstructions" name="specialInstructions" rows="4"></textarea>
            </div>
            <button type="submit" class="btn"><i class="fa-solid fa-check"></i>Submit Order</button>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
