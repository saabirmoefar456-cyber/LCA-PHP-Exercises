<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP</title>
</head>
<body>

<?php
// TASK 1: Use echo to print name and favourite programming language with a reason
$name = "Al";
$favouriteLanguage = "JavaScript";
$reason = "it lets me build and ship things fast, both in the browser and on the server";

echo "My name is $name.<br>";
echo "My favourite programming language is $favouriteLanguage because $reason.<br><br>";

// TASK 2: Calculate and print the sum of two numbers
$numberOne = 15;
$numberTwo = 27;
$sum = $numberOne + $numberTwo;
echo "The sum of $numberOne and $numberTwo is: $sum<br><br>";

// TASK 3: Display today's date using date() in the required format
$formattedDate = date("l, F j, Y");
echo "Today is $formattedDate<br><br>";

// STRETCH GOAL 24: Change the greeting based on the time of day using date('H')
$currentHour = date('H');
if ($currentHour < 12) {
    $greeting = "Good morning";
} elseif ($currentHour < 18) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}
echo "$greeting, $name!<br><br>";
?>

<!-- TASK 4: Embed PHP into HTML to output a heading -->
<h1><?php echo "Welcome to PHP Programming!"; ?></h1>

<?php
// TASK 5: Generate and display a random number between 1 and 100 using rand()
$luckyNumber = rand(1, 100);
echo "Your lucky number today is: $luckyNumber<br>";
?>

</body>
</html>
