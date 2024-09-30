<?php
session_start();

// Si no existe el array como variable de sesión, crearlo. 
if (!isset($_SESSION["array"])) {
    $_SESSION["array"] =[10,20,30]; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sesion</title>
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

        p {
            margin: 10px 0;
            text-align: center;
        }

        .error-message {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Modify array saved in sesion</h1>
    <form action="ExerciseSesion02.php" method="post">
        <label for="position">Position to modify:</label>
        <select name="position" id="position">
            <option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
        </select>
        <label for="newValue">New Value:</label>
        <input type="text" name="newValue" id="newValue">
        <button type="submit" name="action" value="modify">Modify</button>
        <button type="submit" name="action" value="average">Average</button>
        <button type="submit" name="action" value="reset">Reset</button>
    </form>
    <p>Current Array: <?php echo implode(",", $_SESSION["array"])?></p>
    <p>Average: <?php echo number_format($_SESSION['average'],2)?></p>
</body>
</html>