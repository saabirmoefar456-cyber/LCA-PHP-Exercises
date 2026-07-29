<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables and Data Types</title>
</head>
<body>

<?php
// TASK 1: Declare variables for name, age, favourite colour, and favourite hobby
$name = "Al";
$age = 22;
$favouriteColour = "blue";
$favouriteHobby = "building web apps";

// Display them as a formatted bio paragraph
echo "<p>My name is $name, I am $age years old. My favourite colour is $favouriteColour, ";
echo "and in my free time I enjoy $favouriteHobby.</p><br>";

// TASK 2: BMI calculator (height in metres, weight in kilograms)
$heightMetres = 1.75;
$weightKg = 68;
$bmi = $weightKg / ($heightMetres * $heightMetres);
$bmi = round($bmi, 1);

// Determine the weight category label
if ($bmi < 18.5) {
    $category = "Underweight";
} elseif ($bmi < 25) {
    $category = "Normal weight";
} elseif ($bmi < 30) {
    $category = "Overweight";
} else {
    $category = "Obese";
}

echo "Height: {$heightMetres}m, Weight: {$weightKg}kg<br>";
echo "Your BMI is: $bmi ($category)<br><br>";

// STRETCH GOAL 25: Full BMI category table, highlighting the matching category
echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Category</th><th>BMI Range</th></tr>";

$categories = [
    "Underweight"   => "Below 18.5",
    "Normal weight" => "18.5 - 24.9",
    "Overweight"    => "25.0 - 29.9",
    "Obese"         => "30.0 and above"
];

foreach ($categories as $label => $range) {
    if ($label === $category) {
        echo "<tr style='background-color: yellow;'><td><strong>$label</strong></td><td>$range</td></tr>";
    } else {
        echo "<tr><td>$label</td><td>$range</td></tr>";
    }
}
echo "</table><br><br>";

// TASK 3: Assign a float, convert it to an integer using intval()
$floatValue = 9.87;
$intValue = intval($floatValue);
echo "Original float value: $floatValue<br>";
echo "Converted integer value: $intValue<br><br>";

// TASK 4: Use gettype() to identify the data type of an integer, float, string, and array
$sampleInt = 42;
$sampleFloat = 3.14;
$sampleString = "Hello PHP";
$sampleArray = ["red", "green", "blue"];

echo "Data type of \$sampleInt: " . gettype($sampleInt) . "<br>";
echo "Data type of \$sampleFloat: " . gettype($sampleFloat) . "<br>";
echo "Data type of \$sampleString: " . gettype($sampleString) . "<br>";
echo "Data type of \$sampleArray: " . gettype($sampleArray) . "<br>";
?>

</body>
</html>
