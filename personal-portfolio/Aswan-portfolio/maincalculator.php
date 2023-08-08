<!DOCTYPE html>
<html>
<head>
    <title>Advanced Calculator</title>
</head>
<body>
    <h2>Advanced Calculator</h2>
    <form method="post" action="">
        <input type="text" name="display" placeholder="Enter your expression" required>
        <button type="submit" name="calculate">Calculate</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['calculate'])) {
        $expression = $_POST['display'];

        // Evaluate the expression using eval() function (Caution: Avoid using eval() with user input in production environments)
        eval('$result = ' . $expression . ';');

        // Display the result
        echo "<h3>Result: " . $result . "</h3>";
    }

    // Check if the "Clear" button is clicked
    if (isset($_POST['clear'])) {
        echo "<script>document.querySelector('input[name=\"display\"]').value = '';</script>";
    }
    ?>
</body>
</html>
