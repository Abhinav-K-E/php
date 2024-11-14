<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
    <style>
        form{
            margin-bottom:20px;
        }
    </style>
</head>
<body>
    <h1>Fibonacci Series Generator</h1>
    <form action="" method="POST">
        <label for="n">Enter the number of terms:</label>
        <input type="number" id="n" name="n" required>
        <button type="submit">Generate Fibonacci Series</button>
    </form>
</body>
</html>

<?php
function fibonacci($n) {
    $a = 0;  
    $b = 1; 

    echo "Fibonacci Series up to $n terms: ";

    echo $a;

    for ($i = 1; $i < $n; $i++) {
        echo " $b";  
        $nextTerm = $a + $b;  
        $a = $b;  
        $b = $nextTerm;  
    }
    echo "\n"; 
} 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = $_POST['n'];  
    if (!is_numeric($n) || $n <= 0) {
        echo "Please enter a positive integer.";
    } else {
        fibonacci($n); 
    }
}
?>