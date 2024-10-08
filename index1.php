<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table and Purchase Discount</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 50%;
            margin-bottom: 30px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #000;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) td {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

    <h2>Even or Odd Number Check</h2>
    <?php
        $number = 8; 
        $result = ($number % 2 == 0) ? 'Even' : 'Odd';
        echo "<p>The number $number is $result.</p>";
    ?>

    <h2>Current Day Count</h2>
    <?php
        // Get the current day of the week
        $dayOfWeek = date('D');
        $dayCount = 0;

        switch ($dayOfWeek) {
            case 'Mon':
                $dayCount = 1;
                break;
            case 'Tue':
                $dayCount = 2;
                break;
            case 'Wed':
                $dayCount = 3;
                break;
            case 'Thur':
                $dayCount = 4;
                break;
            case 'Fri':
                $dayCount = 5;
                break;
            case 'Sat':
                $dayCount = 6;
                break;
            case 'Sun':
                $dayCount = 7;
                break;
            default:
                $dayCount = 0; 
                break;
        }
        echo "<p>Today is $dayOfWeek.</p>";
    ?>

    <h1>Multiplication Table (1-9)</h1>

    <table>
        <thead>
            <tr>
                <th>x</th>
                <?php for ($i = 1; $i <= 9; $i++) {
                    echo "<th>$i</th>";
                } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($row = 1; $row <= 9; $row++) {
                echo "<tr>";
                echo "<th>$row</th>"; 
                for ($col = 1; $col <= 9; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h1>Purchase Amount - Discount - Final Price</h1>

    <?php
        $purchaseAmount = 450; 
        $discount = 0;

        if ($purchaseAmount > 500) {
            $discount = 20; 
        } elseif ($purchaseAmount >= 300 && $purchaseAmount <= 500) {
            $discount = 15; 
        } elseif ($purchaseAmount >= 100 && $purchaseAmount < 300) {
            $discount = 10; 
        } else {
            $discount = 3; 
        }

        $discountAmount = ($purchaseAmount * $discount) / 100;
        $finalPrice = $purchaseAmount - $discountAmount;

        echo "<p>Purchase Amount: $$purchaseAmount</p>";
        echo "<p>Discount: $discount%</p>";
        echo "<p>Discount Amount: $$discountAmount</p>";
        echo "<p><strong>Final Price: $$finalPrice</strong></p>";
    ?>

</body>
</html>
