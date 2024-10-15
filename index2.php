<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment HTML & CSS</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .divisible-by-3 {
            background-color: blue;
            color: white;
        }
        .divisible-by-5 {
            background-color: green;
            color: white;
        }
        .divisible-by-3-and-5 {
            background-color: orange;
            color: white;
        }
        .prime-number {
            font-weight: bold;
            background-color: yellow;
        }
        .odd-number {
            background-color: yellow;
        }
        .even-number {
            background-color: green;
        }
        .squared-number {
            background-color: blue;
            color: white;
        }
        .number-div {
            margin: 20px;
            padding: 10px;
            border: 1px solid #000;
        }
        .multiplication-highlight {
            background-color: lightblue;
        }
        .multiplication-special {
            background-color: lightgreen;
        }
    </style>
</head>
<body>

    <!-- Question 1: HTML Table with 10 Rows and 10 Columns from 1 to 100 -->
    <h2>Assignment 1: Numbers from 1 to 100 (10x10 Table)</h2>
    <table>
        <tbody>
            <?php for ($i = 1; $i <= 100; $i++): ?>
                <?php if ($i % 10 == 1): ?>
                    <tr>
                <?php endif; ?>
                
                <td class="
                    <?php
                    if ($i % 3 == 0 && $i % 5 == 0) {
                        echo 'divisible-by-3-and-5';
                    } elseif ($i % 3 == 0) {
                        echo 'divisible-by-3';
                    } elseif ($i % 5 == 0) {
                        echo 'divisible-by-5';
                    }
                    ?>
                "><?php echo $i; ?></td>
                
                <?php if ($i % 10 == 0): ?>
                    </tr>
                <?php endif; ?>
            <?php endfor; ?>
        </tbody>
    </table>

    <br> 

    <!-- Question 2: Numbers from 1 to 50 in a Div -->
    <h2>Assignment 2: Numbers from 1 to 50 (Styled Div)</h2>
    <div class="number-div">
        <?php
        function isPrime($num) {
            if ($num < 2) return false;
            for ($j = 2; $j <= sqrt($num); $j++) {
                if ($num % $j == 0) return false;
            }
            return true;
        }

        for ($i = 1; $i <= 50; $i++) {
            if (isPrime($i)) {
                echo "<span class='prime-number'>$i</span> ";
            } else {
                echo "$i ";
            }
        }
        ?>
    </div>

    <br> 

    <!-- Question 3: HTML Table with Numbers from 1 to 100 -->
    <h2>Assignment 3: Numbers from 1 to 100 with Different Highlights</h2>
    <table>
        <tbody>
            <?php for ($i = 1; $i <= 100; $i++): ?>
                <?php if ($i % 10 == 1): ?>
                    <tr>
                <?php endif; ?>
                
                <td class="
                    <?php
                    if (sqrt($i) == (int)sqrt($i)) {
                        echo 'squared-number';
                    } elseif ($i % 2 == 0) {
                        echo 'even-number';
                    } else {
                        echo 'odd-number';
                    }
                    ?>
                "><?php echo $i; ?></td>
                
                <?php if ($i % 10 == 0): ?>
                    </tr>
                <?php endif; ?>
            <?php endfor; ?>
        </tbody>
    </table>

    <br> 

    <!-- Question 4: Multiplication Table with Criss-Cross Highlights -->
    <h2>Assignment 4: Multiplication Table from 1 to 12</h2>
    <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: center;'>
        <?php
        for ($row = 1; $row <= 12; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 12; $col++) {
                $value = $row * $col;
                
                if ($row == $col) {
                    echo "<td style='padding: 10px 20px; background-color: rgb(135, 206, 235); font-weight: bold;'>$value</td>";
                } elseif ($row + $col == 13) {
                    echo "<td style='padding: 10px 20px; background-color: rgb(173, 255, 47); font-weight: bold;'>$value</td>";
                } else {
                    echo "<td style='padding: 10px 20px;'>$value</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
