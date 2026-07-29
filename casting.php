<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Type Casting</title>
</head>
<body>

<?php
// STRETCH GOAL 23: Demonstrate all PHP casting methods (int), (float),
// (string), (bool) with examples of each

echo "<h3>Casting to (int)</h3>";
$originalFloat = 9.99;
$castToInt = (int) $originalFloat;
echo "Original: $originalFloat (" . gettype($originalFloat) . ")<br>";
echo "Cast to int: $castToInt (" . gettype($castToInt) . ")<br><br>";

echo "<h3>Casting to (float)</h3>";
$originalInt = 42;
$castToFloat = (float) $originalInt;
echo "Original: $originalInt (" . gettype($originalInt) . ")<br>";
echo "Cast to float: $castToFloat (" . gettype($castToFloat) . ")<br><br>";

echo "<h3>Casting to (string)</h3>";
$originalNumber = 100;
$castToString = (string) $originalNumber;
echo "Original: $originalNumber (" . gettype($originalNumber) . ")<br>";
echo "Cast to string: $castToString (" . gettype($castToString) . ")<br><br>";

echo "<h3>Casting to (bool)</h3>";
$originalZero = 0;
$originalNonZero = 15;
$castZeroToBool = (bool) $originalZero;
$castNonZeroToBool = (bool) $originalNonZero;
echo "Original: $originalZero cast to bool: " . var_export($castZeroToBool, true) . "<br>";
echo "Original: $originalNonZero cast to bool: " . var_export($castNonZeroToBool, true) . "<br>";
?>

</body>
</html>
