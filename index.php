<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            padding: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #0066cc;
            font-size: 24px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
    
        pre {
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
            color: #000;
            line-height: 1.6;
        }
        .question {
            margin-bottom: 30px;
        }
        hr {
            border: 0;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Name: Sabirin Mohamed Ali 
        </h1>
        <h1>ID: C1210227</h1>
        <h1>Class: CA214</h1>
        <h2>PHP and MYSQL</h2>
        <h2>PHP Assignment Solutions</h2>

        <pre>
<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
        </pre>

        <hr>

        <!-- Su'aasha 1: Greatest and Smallest Numbers -->
        <div class="question">
            <h3>1. Greatest and Smallest Number</h3>
            <pre>
<?php
// Input: Three integers
$number1 = 23;
$number2 = 12;
$number3 = 45;

// Finding the greatest number
if ($number1 >= $number2 && $number1 >= $number3) {
    $greatest = $number1;
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    $greatest = $number2;
} else {
    $greatest = $number3;
}

// Finding the smallest number
if ($number1 <= $number2 && $number1 <= $number3) {
    $smallest = $number1;
} elseif ($number2 <= $number1 && $number2 <= $number3) {
    $smallest = $number2;
} else {
    $smallest = $number3;
}

// Output: The greatest and smallest numbers
echo "The greatest number is: " . $greatest . "\n";
echo "The smallest number is: " . $smallest . "\n";
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 2: Divisibility by 3 and 5 -->
        <div class="question">
            <h3>2. Divisibility Check</h3>
            <pre>
<?php
// Input: A number to check
$number = 15;

// Check divisibility
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "The number $number is divisible by both 3 and 5.\n";
} elseif ($number % 3 == 0) {
    echo "The number $number is divisible by 3.\n";
} elseif ($number % 5 == 0) {
    echo "The number $number is divisible by 5.\n";
} else {
    echo "The number $number is not divisible by 3 or 5.\n";
}
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 3: Odd Numbers and Even Numbers -->
        <div class="question">
            <h3>3. Odd and Even Numbers</h3>
            <pre>
<?php
// Print odd numbers from 2 to 20
echo "Odd numbers from 2 to 20:\n";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "\n";

// Print even numbers from 35 to 7
echo "Even numbers from 35 to 7:\n";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 4: Numbers divisible by 2 and 5 -->
        <div class="question">
            <h3>4. Numbers Divisible by 2 and 5</h3>
            <pre>
<?php
// Print numbers divisible by both 2 and 5 from 50 to 2
echo "Numbers divisible by both 2 and 5 from 50 to 2:\n";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 5: Reverse a number -->
        <div class="question">
            <h3>5. Reverse a Number</h3>
            <pre>
<?php
// Input: The number to reverse
$number = 12345;
$reverse = 0;

// Loop through the number and reverse it
while ($number != 0) {
    $remainder = $number % 10;
    $reverse = ($reverse * 10) + $remainder;
    $number = (int)($number / 10);
}

// Output: The reversed number
echo "The reverse of the number is: " . $reverse . "\n";
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 6: LCM Calculation -->
        <div class="question">
            <h3>6. Lowest Common Multiplier (LCM)</h3>
            <pre>
<?php
// Function to calculate the Greatest Common Divisor (GCD) using the Euclidean algorithm
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Function to calculate the LCM of two numbers
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

// Input: Two positive integer numbers
$number1 = 8;
$number2 = 12;

// Output: LCM
echo "The LCM of $number1 and $number2 is: " . lcm($number1, $number2) . "\n";
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 7: HCF Calculation -->
        <div class="question">
            <h3>7. Highest Common Factor (HCF)</h3>
            <pre>
<?php
// Function to calculate the HCF using the Euclidean algorithm
function hcf($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Input: Two integer numbers
$number1 = 18;
$number2 = 24;

// Output: HCF
echo "The HCF of $number1 and $number2 is: " . hcf($number1, $number2) . "\n";
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 8: Multiplication Table -->
        <div class="question">
            <h3>8. Multiplication Table</h3>
            <pre>
<?php
// Output a 12x12 multiplication table using nested loops
echo "<table border='1' cellpadding='5' cellspacing='0'>\n";

// Table headers for 1 to 12
echo "<tr><th></th>";
for ($i = 1; $i <= 12; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>\n";

// Generate table content
for ($i = 1; $i <= 12; $i++) {
    echo "<tr><th>$i</th>"; 
    for ($j = 1; $j <= 12; $j++) {
        $result = $i * $j;
        echo "<td>$result</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 9: Prime or Non-Prime -->
        <div class="question">
            <h3>9. Prime or Non-Prime</h3>
            <pre>
<?php
// Input: The number to check
$number = 29; // You can change this number to test other values 

// Output: Check if the number is prime or non-prime
if (isPrime($number)) {
    echo "The number $number is a prime number.\n";
} else {
    echo "The number $number is not a prime number.\n";
}
?>
            </pre>
        </div>

        <hr>

        <!-- Su'aasha 10: Prime Numbers from 10 to 50 -->
        <div class="question">
            <h3>10. Prime Numbers from 10 to 50</h3>
            <pre>
<?php
// Output: Prime numbers from 10 to 50
echo "Prime numbers from 10 to 50 are:\n";
for ($i = 10; $i <= 50; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "\n";
?>
            </pre>
        </div>
    </div>
</body>
</html>
