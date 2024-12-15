<?php
// index.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    include 'Calculator.php';
    $calc = new Calculator();
    $result = $calc->add($num1, $num2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="First number" required>
        <input type="number" name="num2" placeholder="Second number" required>
        <button type="submit">Add</button>
    </form>
    <?php if (isset($result)): ?>
        <p>Result: <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
