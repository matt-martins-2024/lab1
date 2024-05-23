<!DOCTYPE html>
<html>
<head>
    <title>Calculate Area of Circle</title>
</head>
<body>
    <h1>Calculate Area of Circle</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $radius = $_POST["radius"];
            
            if (is_numeric($radius)) {
                $output = shell_exec("python3 area.py " . escapeshellarg($radius));
                echo "<p>$output</p>";
            } else {
                echo "<p>Error: Please enter a valid number for the radius.</p>";
            }
        }
    ?>
</body>
</html>
