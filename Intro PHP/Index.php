<?php
session_start();

// Verificar si ya existe la variable de sesion
if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = ['milk' => 3, 'softDrink' => 0]; // Array asociativo del inventario con producto => cantidad
}

// Variables
$workerName = "Pere";
$milkCount = $_SESSION['inventory']['milk'];
$softDrinkCount = $_SESSION['inventory']['softDrink'];

$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);

if ($error) {
    echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        button[type="submit"][value="remove"] {
            background-color: #f44336;
        }

        button[type="submit"][value="remove"]:hover {
            background-color: #e53935;
        }

        button[type="submit"][value="reset"] {
            background-color: #ffc107;
        }

        button[type="submit"][value="reset"]:hover {
            background-color: #ffb300;
        }

        #inventory {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        .error-message {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Supermarket management</h1>
    <form action="ExerciseSession01.php" method="post">
        <label for="workerName">Worker name:</label>
        <input type="text" id="workerName" name="workerName" value="<?php echo htmlspecialchars($workerName); ?>">
        
        <label for="product">Choose product</label>
        <select id="product" name="product">
            <option value="softDrink">Soft Drink</option>
            <option value="milk">Milk</option>
        </select>

        <label for="quantity">Product Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1">

        <button type="submit" name="action" value="add">Add</button>
        <button type="submit" name="action" value="remove">Remove</button>
        <button type="submit" name="action" value="reset">Reset</button>
    </form>
    <div id="inventory">
        <h2>Inventory:</h2>
        <p>Worker: <?php echo $workerName;?></p>
        <p>Units Milk: <?php echo $milkCount;?></p>
        <p>Units Soft Drink: <?php echo htmlspecialchars($softDrinkCount);?></p>
    </div>
</body>
</html>
