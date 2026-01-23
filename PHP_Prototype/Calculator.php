<?php
$num1 = "";
$num2 = "";
$result = "";

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['op'];

    switch ($op) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calculator-container">
        <h2>Simple Calculator</h2>

    <form method="post">
        <input type="number" name="num1" placeholder="First Number" required>
        
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">/</option>
        </select>

        <input type="number" name="num2" placeholder="Second Number" required>
        
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php if ($result !== ""): ?>
        <h3>The result is: <?php echo $result; ?></h3>
    <?php endif; ?>
    </div>
</body>
</html>