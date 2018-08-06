<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP App</title>
</head>
<body>
    
    <?php
        // Variables
        $characterName = "Sivar Sarkawt";
        $characterAge = 23;
        echo "My name is $characterName and I'm $characterAge years old <br>";

        $characterName = "Stealth";
        $characterAge = 24;
        echo "My name is $characterName and I'm $characterAge years old <br><hr>";

        // echo("Hello World");
        // echo "<h1>Sivar Site</h1>";
        // echo "<hr>";
        // echo "<p>This is my site</p>";

        // Data Types
        $phrase = "To be or not to be <br>";    // String
        $age = 23;                              // Iteger
        $gpa = 32.45363;                        // Float
        $isMale = false;                        // Boolean
        echo $phrase;

        // Working with strings
        $phrase = "Sivar Developer <br>";
        $phrase[0] = "B";                       // change index char of string
        echo strtolower($phrase);               // Lower case chars
        echo strtoupper($phrase);               // Upper case chars
        echo strlen($phrase);                   // Length of String
        echo "<br>";
        echo $phrase[0];                        // String Index
        echo "Mike"[1];
        echo "<br>";
        echo str_replace("Bivar", "Stealth", $phrase);  // Replace String characters
        echo substr($phrase, 6, 7);             // Return part of a string
        echo "<br>";

        // Working with numbers
        echo 40;                // Positive number
        echo -40;               // Negative number
        echo 40.4365;           // Decimal number
        echo 5.456 * 7.54;      // Math operations
        echo (4 + 5) * 10;
        echo 10 % 3;            // Mode
        $num = 10;
        $num--;                 // Subtract 1 to num variable
        $num = $num + 25;       // Add 25 to num variable
        echo $num;
        echo abs(-100);         // Absolute value of number
        echo pow(2, 4);         // 2 power 4 or 2^4
        echo sqrt(144);         // Square root of number
        echo max(2, 10);        // Maximum number choosing between two numbers
        echo min(2, 10);        // Minimum number choosing between two numbers
        echo round(3.2);        // Round of number
        echo ceil(3.4);         // Ceil of number 3.1 ... >> 4
        echo floor(3.4);        // Floor of number
    ?>

</body>
</html>