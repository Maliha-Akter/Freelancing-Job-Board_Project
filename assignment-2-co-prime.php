<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #F8345F, #FBFBFC);
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #80ced6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e06377;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: linear-gradient(to right, #25BAB5, #25C18F);
            color: white;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

       
    </style>
</head>
<body>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="a">Enter number a:</label>
            <input type="number" id="a" name="a" required>

            <label for="b">Enter number b:</label>
            <input type="number" id="b" name="b" required>

            <label for="c">Enter number c:</label>
            <input type="number" id="c" name="c" required>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            echo "<h2>Table</h2>";
            echo "<table>";
            echo "<tr><th>Number</th><th>Coprime with $c</th></tr>";

            for ($i = $a; $i <= $b; $i++) {
                $isCoprime = coprime($i, $c) == 1 ? 'Yes' : 'No';
                echo "<tr><td>$i</td><td>$isCoprime</td></tr>";
            }

            echo "</table>";
        }

        
        function coprime($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }
        ?>
    </div>
</body>
</html>
