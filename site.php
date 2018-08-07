<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP App</title>
</head>
<body>

        <!-- Including HTML header -->
        <?php include "header.html" ?>
    
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
        echo "<br>";
    ?>

    <!-- Get User input -->
    <form action="site.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="username" id=""><br>
        <label for="age">Age: </label>
        <input type="number" name="age" id="">
        <input type="submit">
    </form>
    <br> Your name is <?php echo $_GET["username"]; ?>
    <br> Your Age is <?php echo $_GET["age"]; ?>
    <br>

    <!-- Building a basic calculator -->
    <h4>Calculator</h4>
    <form action="site.php" method="get">
        <input type="number" name="num1" id=""><br>
        <input type="number" name="num2" id="">
        <input type="submit">
    </form>

    <?php echo $_GET["num1"] + $_GET["num2"] ?> <hr>

    <!-- Building a mad libs game -->
    <h4>Building a mad libs game</h4>
    <form action="site.php" method="get">
        Color : <input type="text" name="color" id=""><br>
        Plural Noun : <input type="text" name="pluralNoun" id=""><br>
        celebrity : <input type="text" name="celebrity" id=""><br>
        <input type="submit">
    </form>
    <br><br>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>

    <!-- URL Parameters -->
    <h4>URL Parameters</h4>
    <form action="site.php" method="get">
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>
    <br><br>
    <?php 
        echo $_GET["name"];
    ?>

    <!-- POST Requests -->
    <h4>POST Requests</h4>
    <form action="site.php" method="post">
        Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <br><br>
    <?php 
        echo $_POST["password"];
    ?>
    <hr>

    <!-- Arrays -->
    <h4>Arrays</h4>
    <?php
        $friends = array("sivar", "sivan", "savan", "sarkawt");
        $friends[2] = "No Matter";
        $friends[2] = 400;

        echo $friends[2];
        echo "<br>";
        echo count($friends);
        // echo $friends[1];
        // echo $friends[2];
        // echo $friends[3];
    ?><hr>

    <!-- Using checkboxes -->
    <h4>Using Checkboxes</h4>
    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?><hr>

    <!-- Associative Arrays -->
    <h4>Associative Arrays</h4>
    <form action="site.php" method="post">
        <input type="text" name="student" id="">
    <input type="submit">
    </form>
    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo $grades[$_POST["student"]];
        $grades["Jim"] = "F";
        echo $grades["Jim"];
        echo count($grades);
    ?><br><br>

    <!-- Functions -->
    <h4>Functions</h4>
    <?php
        function sayHi($name, $age) {
            echo "Hello $name, You are $age <br>";
        }

        sayHi("Sivar", 23);        // Calling Function
        sayHi("Tom", 13);
        sayHi("World", 40);
    ?>

    <!-- Return statements -->
    <?php
        function cube($num) {
            return $num * $num * $num;
        }

        $cubeResult = cube(4);
        echo $cubeResult;
        echo cube(6);
    ?><hr>

    <!-- If statements -->
    <?php
        $isMale = false;
        $isTall = true;
        if ($isMale && $isTall) {
            echo "You are a tall male";
        } elseif($isMale && !$isTall) {
            echo "You are a short male";
        } elseif(!$isMale && $isTall) {
            echo "You are not male but tall";
        } else {
            echo "You are not male";
        }
    ?><hr>

    <!-- If statements (Con't) -->
    <?php
        function getMax($num1, $num2, $num3) {
            if ($num1 >= $num2 && $num1 >=$num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }

        echo getMax(640, 1145, 453);
    ?><hr>

    <!-- Building a Better Calculator -->
    <h6>Building a Better Calculator</h6>
    <form action="site.php" method="post">
        First Num: <input type="number" step="0.1" name="num1" id=""> <br>
        Operator: <input type="text" name="op" id=""> <br>
        Second Num: <input type="number" name="num2" id=""> <br>
    <input type="submit">
    </form>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+") {
            echo $num1 + $num2;
        } elseif($op == "-") {
            echo $num1 - $num2;
        } elseif($op == "/") {
            echo $num1 / $num2;
        } elseif($op == "*") {
            echo $num1 * $num2;
        } else {
            echo "Invalid Operator";
        }
    ?> <hr>

    <!-- Switch statements -->
    <h6>Switch statements</h6>
    <form action="site.php" method="post">
    What is Your grade?
    <input type="text" name="grade" id="">
    <input type="submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch ($grade) {
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did well";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did bad";
                break;
            case "F":
                echo "You failed!";
                break;
            default:
                echo "Invalid grade";
        }
    ?> <hr>

    <!-- While loops and Do while loops -->
    <h6>While loops and Do while loops</h6>
    <?php
        $index = 1;
        while ($index <= 5) {
            echo "$index <br>";
            $index++;
        }

        echo "do while loop: <br>";

        do {
            echo "$index <br>";
            $index++;
        } while ($index <= 10)
    ?> <hr>

    <!-- For loops -->
    <h4>For loops</h4>
    <?php
        $lucky = array(4, 5, 9, 12, 1, 23, 54, 6);
        for ($i = 1; $i < count($lucky); $i++) {
            echo "$lucky[$i] <br>";
        }
    ?>

    <!-- Including PHP -->
    <?php 
        $title = "My pure php site";
        $author = "Sivar Sarkawt";
        $wordCount = 400;
        include "article-header.php";
    ?>

    <?php
        include "useful-tool.php";
        SaidHi("sivar");
        echo $feetInMile;
    ?><hr>

    <!-- Class and Object -->
    <h4>Class and Object</h4>
    <?php
        class Book {
            var $title;
            var $auther;
            var $pages;

            // Constructors
            function __construct($aTitle, $aAuthor, $aPages){
                // echo "$name <br>";
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 435);
        $book1->title = "Harry Potter : Prisoner of Azkaban";
        // $book1->auther = "JK Rowling";
        // $book1->pages = 435;

        $book2 = new Book("Lord of the rings", "Anyone", 585);
        // $book2->title = "Lord of the rings";
        // $book2->auther = "Anyone";
        // $book2->pages = 585;

        echo $book1->title;
        echo "<br>";
        echo $book2->title;
    ?> <hr>

    <!-- Function objects -->
    <h4>Function objects</h4>
    <?php
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = name;
                $this->major = major;
                $this->gpa = gpa;
            }

            function hasHonors(){
                if($this->gpa >= 2.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Sivar", "anything", 3.4);
        $student2 = new Student("Jim", "Art", 99.4);

        echo $student2->hasHonors();
    ?> <hr>

    <!-- Getters and Setters -->
    <h6>Getters and Setters</h6>
    <?php
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                if($rating == "G" || $rating == "PG" || $rating == "PG-13") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
        // $avengers->rating = "Anything";
        echo $avengers->getRating();

    ?> <hr>

    <!-- Inheritance -->
    <?php
        class Chef {
            function makeChicken() {
                echo "The chief makes a chicken <br>";
            }

            function makeSalad() {
                echo "The chief makes a salad <br>";
            }

            function makeSpecialDish() {
                echo "The chief makes a bibiq ribs <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta() {
                echo "The Italian Chef can make pasta <br>";
            }

            function makeSpecialDish() {
                echo "The Italian Chef make chicken parms <br>";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();
        $chef->makeSpecialDish();
        // $chef->makePasta();  // will uncaght error because not part of chef class and not exteded

        $italianChef = new ItalianChef();
        $italianChef->makeChicken();    // Extended from Chef class
        $italianChef->makeSpecialDish();    // Extended form chef class , BUT overwrited be using same function
        $italianChef->makePasta();
    ?>

    <!-- Including HTML footer -->
    <?php include "footer.html" ?>

</body>
</html>