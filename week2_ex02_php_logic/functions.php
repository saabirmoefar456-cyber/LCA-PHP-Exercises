<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>

<?php
// TASK 1: printGreeting($name) - accepts a name and outputs a greeting
function printGreeting($name) {
    echo "Hello, $name! Welcome to TechVibe.<br>";
}

echo "<h3>printGreeting()</h3>";
printGreeting("Al");
echo "<br>";

// TASK 2: multiply($a, $b) - accepts two numbers, multiplies them, returns the result
function multiply($a, $b) {
    return $a * $b;
}

echo "<h3>multiply()</h3>";
$product = multiply(6, 7);
echo "6 multiplied by 7 is: $product<br><br>";

// TASK 3: arrayLooper($array) - accepts an array and displays each element on a new line
function arrayLooper($array) {
    foreach ($array as $item) {
        echo "$item<br>";
    }
}

echo "<h3>arrayLooper()</h3>";
$fruits = ["Apple", "Banana", "Mango", "Naartjie"];
arrayLooper($fruits);
echo "<br>";

// TASK 4: calculateDiscount($amount) - returns a discount percentage based on
// tiered amount ranges: 10% over R1000, 5% for R500-999, 2% for R250-499,
// 0% otherwise. Also displays the final amount after discount.
function calculateDiscount($amount) {
    if ($amount > 1000) {
        $discountPercent = 10;
    } elseif ($amount >= 500) {
        $discountPercent = 5;
    } elseif ($amount >= 250) {
        $discountPercent = 2;
    } else {
        $discountPercent = 0;
    }
    return $discountPercent;
}

echo "<h3>calculateDiscount()</h3>";
$testAmounts = [1500, 750, 300, 100];
foreach ($testAmounts as $amount) {
    $discountPercent = calculateDiscount($amount);
    $finalAmount = $amount - ($amount * $discountPercent / 100);
    echo "Amount: R$amount -> Discount: {$discountPercent}% -> Final amount: R$finalAmount<br>";
}
echo "<br>";

// STRETCH GOAL 18: gradeCalculator($score) - returns A, B, C, D, or F
// based on standard score ranges
function gradeCalculator($score) {
    if ($score >= 80) {
        return "A";
    } elseif ($score >= 70) {
        return "B";
    } elseif ($score >= 60) {
        return "C";
    } elseif ($score >= 50) {
        return "D";
    } else {
        return "F";
    }
}

echo "<h3>gradeCalculator()</h3>";
$testScores = [92, 74, 63, 55, 40];
foreach ($testScores as $score) {
    $grade = gradeCalculator($score);
    echo "Score: $score -> Grade: $grade<br>";
}
echo "<br>";

// STRETCH GOAL 20: Function that accepts an array of numbers and returns
// both the minimum and maximum values
function findMinMax($numbers) {
    return [
        "min" => min($numbers),
        "max" => max($numbers)
    ];
}

echo "<h3>findMinMax()</h3>";
$numberSet = [42, 17, 99, 3, 56, 8];
$result = findMinMax($numberSet);
echo "Numbers: " . implode(", ", $numberSet) . "<br>";
echo "Minimum: " . $result["min"] . "<br>";
echo "Maximum: " . $result["max"] . "<br>";
?>

</body>
</html>
