<?php
// Function to check if a number is Armstrong or not
function isArmstrong($num) {
    $numStr = strval($num); 
    $numDigits = strlen($numStr);
    
    $sum = 0;
    for ($i = 0; $i < $numDigits; $i++) {
        $digit = (int) $numStr[$i]; 
        $sum += pow($digit, $numDigits);  
    }
    
    return $sum == $num; 
}

$result = ''; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    if (is_numeric($number) && $number >= 0) {
        // Check if the number is Armstrong
        if (isArmstrong($number)) {
            $result = "$number is an Armstrong number.";
        } else {
            $result = "$number is not an Armstrong number.";
        }
    } else {
        $result = "Please enter a valid positive integer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>

    <style>
        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-items:center;
        }
        form{
            display:flex;
            gap:10px;
            margin-bottom:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Armstrong Number Checker</h1>
        <form action="" method="POST" class="form-container">
            <label for="number">Enter a number:</label>
            <input type="text" id="number" name="number" required>
            <br>
            <button type="submit">Check</button>
        </form>

        <?php if ($result): ?>
            <div class="result">
                <?php echo $result; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
