<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variable Scope</title>
</head>
<body>

<?php
// TASK 1: Declare a global variable and demonstrate its behaviour inside a
// function using the 'global' keyword
$siteName = "TechVibe Academy";

function showGlobalVariable() {
    // Without 'global', this function would NOT be able to see $siteName
    global $siteName;
    echo "Inside the function, the global variable says: $siteName<br>";
}

echo "<h3>Global Scope</h3>";
echo "Outside the function, the global variable says: $siteName<br>";
showGlobalVariable();
echo "<br>";

// TASK 2: Declare a local variable inside a function and show it is not
// accessible outside
function createLocalVariable() {
    $localMessage = "I only exist inside this function";
    echo "Inside the function: $localMessage<br>";
}

echo "<h3>Local Scope</h3>";
createLocalVariable();
// Trying to echo $localMessage here would cause an undefined-variable
// notice, because it was destroyed as soon as the function finished running.
echo "Outside the function, \$localMessage does not exist and cannot be printed.<br><br>";

// TASK 3: Use the 'static' keyword to retain a variable's value across
// multiple function calls
function countFunctionCalls() {
    static $callCount = 0;
    $callCount++;
    echo "This function has been called $callCount time(s)<br>";
}

echo "<h3>Static Scope</h3>";
// Call the function three times to demonstrate the static value persisting
countFunctionCalls();
countFunctionCalls();
countFunctionCalls();
?>

</body>
</html>
