<?php
session_start();

// Establecer el nombre del trabajador por defecto si no existe
if (!isset($_SESSION['workerName'])) {
    $_SESSION['workerName'] = 'Pere';
}

$workerName = $_SESSION['workerName'];

// Inicializar el inventario si no existe para el trabajador por defecto
if (!isset($_SESSION['inventory'][$workerName])) {
    $_SESSION['inventory'][$workerName] = ['milk' => 3, 'softDrink' => 0];
}

// Variables del inventario
$milkCount = $_SESSION['inventory'][$workerName]['milk'];
$softDrinkCount = $_SESSION['inventory'][$workerName]['softDrink'];

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
    <title>Supermarket Management</title>
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
    <h1>Supermarket Management</h1>
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
        <p>Worker: <?php echo htmlspecialchars($workerName);?></p>
        <p>Units Milk: <?php echo $milkCount;?></p>
        <p>Units Soft Drink: <?php echo htmlspecialchars($softDrinkCount);?></p>
    </div>
</body>
</html>
