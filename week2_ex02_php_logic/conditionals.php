<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Conditionals</title>
</head>
<body>

<?php
// TASK 1: Budget calculator - total budget minus groceries, transport,
// and entertainment, showing the remaining balance
$totalBudget = 5000;
$groceries = 1800;
$transport = 900;
$entertainment = 500;

$balance = $totalBudget - ($groceries + $transport + $entertainment);

echo "<h3>Budget Calculator</h3>";
echo "Total budget: R" . $totalBudget . "<br>";
echo "Groceries: R" . $groceries . "<br>";
echo "Transport: R" . $transport . "<br>";
echo "Entertainment: R" . $entertainment . "<br>";
echo "Remaining balance: R" . $balance . "<br><br>";

// STRETCH GOAL 19: Budget calculator using an array of expense names
// and amounts, looping through them to show each expense then the balance
echo "<h3>Budget Calculator (Array Version)</h3>";
$expenses = [
    "Groceries" => 1800,
    "Transport" => 900,
    "Entertainment" => 500,
    "Airtime" => 250
];

$totalExpenses = 0;
foreach ($expenses as $expenseName => $expenseAmount) {
    echo "$expenseName: R$expenseAmount<br>";
    $totalExpenses += $expenseAmount;
}
$arrayBalance = $totalBudget - $totalExpenses;
echo "Remaining balance: R$arrayBalance<br><br>";

// TASK 2: Age category checker using if/elseif/else
// Categories: Child (under 12), Teen (13-17), Adult (18-64), Senior (65+)
$age = 25;

if ($age < 12) {
    $ageCategory = "Child";
} elseif ($age <= 17) {
    $ageCategory = "Teen";
} elseif ($age <= 64) {
    $ageCategory = "Adult";
} else {
    $ageCategory = "Senior";
}

echo "<h3>Age Category Checker</h3>";
echo "Age: $age -> Category: $ageCategory<br><br>";

// TASK 3: Simple interest calculator
// Principal R10 000, rate 5%, 3 years
$principal = 10000;
$rate = 5;
$years = 3;

$interest = ($principal * $rate * $years) / 100;
$totalAmount = $principal + $interest;

echo "<h3>Simple Interest Calculator</h3>";
echo "Principal: R$principal, Rate: {$rate}%, Years: $years<br>";
echo "Interest: R$interest<br>";
echo "Total amount: R$totalAmount<br><br>";

// TASK 4: Voter eligibility check using logical operators
// Confirms age is between 18 and 35 AND the user is registered
$voterAge = 22;
$isRegistered = true;

echo "<h3>Voter Eligibility Check</h3>";
if ($voterAge >= 18 && $voterAge <= 35 && $isRegistered) {
    echo "Age: $voterAge, Registered: Yes -> Eligible to vote in this category.<br>";
} else {
    echo "Age: $voterAge, Registered: " . ($isRegistered ? "Yes" : "No") . " -> Not eligible in this category.<br>";
}
echo "<br>";

// TASK 5: switch statement - re-checks the age category using switch
// instead of if/elseif, based on a rounded-down decade bracket
echo "<h3>Age Category via Switch Statement</h3>";
$decadeBracket = intdiv($age, 10) * 10;

switch (true) {
    case ($age < 12):
        echo "Switch result: Child<br>";
        break;
    case ($age <= 17):
        echo "Switch result: Teen<br>";
        break;
    case ($age <= 64):
        echo "Switch result: Adult<br>";
        break;
    default:
        echo "Switch result: Senior<br>";
        break;
}
?>

</body>
</html>
