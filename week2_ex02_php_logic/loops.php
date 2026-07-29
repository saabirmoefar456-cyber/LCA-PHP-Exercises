<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loops</title>
</head>
<body>

<?php
// TASK 1: for loop displaying numbers 0 to 10 in the format "i is equal to X"
echo "<h3>For Loop</h3>";
for ($i = 0; $i <= 10; $i++) {
    echo "i is equal to $i<br>";
}
echo "<br>";

// TASK 2: foreach loop over an array of five South African cities
echo "<h3>Foreach Loop</h3>";
$southAfricanCities = ["Cape Town", "Johannesburg", "Durban", "Pretoria", "Bloemfontein"];
foreach ($southAfricanCities as $city) {
    echo "$city<br>";
}
echo "<br>";

// TASK 3: while loop counting down from 10 to 0 in the format "X is equal to: Y"
echo "<h3>While Loop</h3>";
$countdown = 10;
while ($countdown >= 0) {
    echo "X is equal to: $countdown<br>";
    $countdown--;
}
echo "<br>";

// TASK 4: do-while loop starting at 6, running while the counter is <= 5
echo "<h3>Do-While Loop</h3>";
$counter = 6;
do {
    echo "Counter is currently: $counter<br>";
    $counter++;
} while ($counter <= 5);

// Comment explaining the observation: even though the loop condition
// ($counter <= 5) is false from the very start (since $counter starts at 6),
// a do-while loop always runs its body AT LEAST ONCE before checking the
// condition. That's why "Counter is currently: 6" prints exactly once,
// and then the loop stops immediately because 7 <= 5 is false.
echo "<p><em>Observation: the loop body ran once even though the starting ";
echo "value (6) already failed the condition (&lt;= 5), because do-while ";
echo "always executes at least one pass before checking the condition.</em></p>";
?>

</body>
</html>
