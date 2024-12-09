Php
Ex01
Problem Stmt1 : Write a PHP program to Print Your Biodata 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <div class="container">
        <h1>Biodata</h1>
        <?php
            // Define biodata variables
            $name = "Mayur ";
            $age = 21;
            $address = "palus";
            $email = "mayur@gmail.com";
            $phone = "7307307300";
            $education = "BTech in CSIT";
            $skills = ["PHP", "JavaScript", "HTML", "CSS", "MySQL"];
            
            
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>";
            echo "<p><strong>Phone:</strong> <a href='tel:$phone'>$phone</a></p>";
            echo "<p><strong>Education:</strong> $education</p>";
            
            echo "<p><strong>Skills:</strong></p>";
            echo "<ul>";
            foreach ($skills as $skill) {
                echo "<li>$skill</li>";
            }
            echo "</ul>";
        ?>
    </div>
</body>

</html>

Problem Stmt2 : Write a PHP program to take a number input from user and print it
<?php
    if(isset($_POST['num']))
    {
        $value1=$_POST['num1'];
        echo "Number is:".$value1;
    }
?>
`
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input_number.php" method="post">
        <label for="num1">Enter  number:</label>
        <input type="text" name="num1"><br><br>
        <button type="submit" name="num">Print</button>
        
    </form>
</body>
</html>

Problem Stmt3 : Write a PHP program to  perform and display addition, subtraction, division, multiplication of two numbers.
<?php 
   
    if(isset($_POST['add'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];

        echo "Addition is:".$value1+$value2;
    } 
    if(isset($_POST['sub'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];

        echo "Subtraction is:".$value1-$value2;
    } 
    if(isset($_POST['mul'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];

        echo "Multiplication is:".$value1*$value2;
    } 
    if(isset($_POST['div'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];

        echo "Division is:".$value1/$value2;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arithmetic.php" method="post">
        <label for="num1">Enter first number:</label>
        <input type="text" name="num1"><br><br>
        <label for="num2">Enter second number:</label>
        <input type="text" name="num2"><br><br>
        <button type="submit" name="add">Addition</button>
        <button type="submit" name="sub">Subtraction</button>
        <button type="submit" name="mul">Multiplication</button>
        <button type="submit" name="div">Division</button>
    </form>
</body>
</html>

Problem Stmt4 : Find maximum number amongst three number using ternary operator
<?php 
   
    if(isset($_POST['find_max'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];
        $value3=$_POST['num3'];

        $max_number=$value1>$value2 ? (($value1>$value3)?$value1:$value3):(($value2>$value3)?$value2:$value3);

        echo "maximum number among three is:".$max_number;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="maxnumber.php" method="post">
        <label for="num1">Enter first number:</label>
        <input type="text" name="num1"><br><br>
        <label for="num2">Enter second number:</label>
        <input type="text" name="num2"><br><br>
        <label for="num3">Enter third number:</label>
        <input type="text" name="num3"><br><br>
        <button type="submit" name="find_max">find_max</button>
    </form>
</body>
</html>

Problem Stmt5 : Demonstrate the All types of assignment operators (= and all free Hand Assignment)
<?php 

    if(isset($_POST['assign'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];
        $value1=$value2;
        echo "Assignment is:".$value1;
    } 
   
    if(isset($_POST['add'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];
        $value1+=$value2;
        echo "Addition is:".$value1;
    } 
    if(isset($_POST['sub'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];
        $value1-=$value2;
        echo "Subtraction is:".$value1;
    } 
    if(isset($_POST['mul'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];
        $value1*=$value2;
        echo "Multiplication is:".$value1;
    } 
    if(isset($_POST['div'])) 
    { 

        $value1=$_POST['num1'];
        $value2=$_POST['num2'];
        $value1/=$value2;
        echo "Division is:".$value1;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="assignment.php" method="post">
        <label for="num1">Enter first number:</label>
        <input type="text" name="num1"><br><br>
        <label for="num2">Enter second number:</label>
        <input type="text" name="num2"><br><br>
        <button type="submit" name="assign">Assignment =</button>
        <button type="submit" name="add">Addition +=</button>
        <button type="submit" name="sub">Subtraction -=</button>
        <button type="submit" name="mul">Multiplication *=</button>
        <button type="submit" name="div">Division /=</button>
    </form>
</body>
</html>

Problem Stmt6 : Write PHP code to swap two numbers
<?php 
   
    if(isset($_POST['swap'])) 
    { 

        $val1=$_POST['num1'];
        $val2=$_POST['num2'];

        echo 'Before swapping two numbers:'.$val1." ".$val2."\n";

        $temp=$val1;
        $val1=$val2;
        $val2=$temp;

        echo 'After swapping two numbers:'.$val1." ".$val2;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="swap.php" method="post">
        <input type="number" name="num1"><br><br>
        <input type="number" name="num2"><br><br>
        <button type="submit" name="swap">Swap</button>
    </form>
</body>
</html>

Problem Stmt7 : Perform the bitwise operations on two numbers. ( &, |, ^, ~, <<, >>)
<?php 

if (isset($_POST['and'])) {
    $num1 = $_POST['value1'];
    $num2 = $_POST['value2'];
    $and_result = $num1 & $num2;

    echo "Result of AND operation: " . $and_result . "<br>";
}

if (isset($_POST['or'])) {
    $num1 = $_POST['value1'];
    $num2 = $_POST['value2'];
    $or_result = $num1 | $num2;

    echo "Result of OR operation: " . $or_result . "<br>";
}

if (isset($_POST['exor'])) {
    $num1 = $_POST['value1'];
    $num2 = $_POST['value2'];
    $exor_result = $num1 ^ $num2;

    echo "Result of EXOR operation: " . $exor_result . "<br>";
}

if (isset($_POST['not'])) {
    $num1 = $_POST['value1'];
    $not_result = ~$num1;

    echo "Result of NOT operation: " . $not_result . "<br>";
}

if (isset($_POST['leftshift'])) {
    $num1 = $_POST['value1'];
    $num2 = $_POST['value2'];
    $lshift_result = $num1 << $num2;

    echo "Result of leftshift operation: " . $lshift_result . "<br>";
}

if (isset($_POST['rightshift'])) {
    $num1 = $_POST['value1'];
    $num2 = $_POST['value2'];
    $rshift_result = $num1 >> $num2;

    echo "Result of rightshift operation: " . $rshift_result . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise Operations</title>
</head>
<body>
    <form action="bitwise.php" method="post">
        <label for="value1">Enter first number:</label>
        <input type="number" name="value1" id="value1" value="<?php echo isset($_POST['value1']) ? $_POST['value1'] : ''; ?>"><br><br>
        <label for="value2">Enter second number (if applicable):</label>
        <input type="number" name="value2" id="value2" value="<?php echo isset($_POST['value2']) ? $_POST['value2'] : ''; ?>"><br><br>
        <button type="submit" name="and">AND - &</button><br><br>
        <button type="submit" name="or">OR - |</button><br><br>
        <button type="submit" name="exor">EXOR - ^</button><br><br>
        <button type="submit" name="not">NOT - ~</button><br><br>
        <button type="submit" name="leftshift">Left Shift - <<</button><br><br>
        <button type="submit" name="rightshift">Right Shift - >></button><br><br>
    </form>
</body>
</html>


Problem Stmt8 : Demonstrate the use of Incrementing/Decrementing Operators
<?php 

    if(isset($_POST['count']))
    {
        $val=$_POST['value'];

        $val++;

        echo "Incremeted value:".$val;
    }

    if(isset($_POST['less']))
    {
        $vall=$_POST['value'];

        $vall--;

        echo "Decremeted value:".$vall;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="operators.php" method="post">
        <input type="number" name="value"><br><br>
        <button type="submit" name="count">Increment</button><br><br>
        <button type="submit" name="less">Decrement</button><br><br>
    </form>
</body>
</html>

Problem Stmt9 : Write a  PHP program to merge/Concatenate two string
<?php 
   
    if(isset($_POST['concat'])) 
    { 

        $string1=$_POST['str1'];
        $string2=$_POST['str2'];

        $str_concat=$string1.$string2;

        echo 'Concatenation of two strings:'.$str_concat;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="string_concat.php" method="post">
        <input type="text" name="str1"><br><br>
        <input type="text" name="str2"><br><br>
        <button type="submit" name="concat">submit</button>
    </form>
</body>
</html>

Problem Stmt10 : Demonstrate use of instanceof  Operator 
<?php
// Base class
class Animal {
    public function sound() {
        return "Animals make sounds.";
    }
}

// Derived class
class Dog extends Animal {
    public function sound() {
        return "Dogs bark.";
    }
}

// Another class
class Cat extends Animal {
    public function sound() {
        return "Cats meow.";
    }
}

// Function to check object type
function checkType($object) {
    if ($object instanceof Dog) {
        echo "This is a Dog.\n";
    } elseif ($object instanceof Cat) {
        echo "This is a Cat.\n";
    } elseif ($object instanceof Animal) {
        echo "This is some other type of Animal.\n";
    } else {
        echo "This is not an Animal.\n";
    }
}

// Create instances
$dog = new Dog();
$cat = new Cat();
$animal = new Animal();
$notAnimal = new stdClass(); // Some other object

// Check object types
checkType($dog);        // Output: This is a Dog.
checkType($cat);        // Output: This is a Cat.
checkType($animal);     // Output: This is some other type of Animal.
checkType($notAnimal);  // Output: This is not an Animal.
?>


Exp2

<!-- Problem Stmt1 : Input three numbers and find maximum between them. -->

<!-- Problem Stmt2 : Write a program to print types of triangles taking lengths of 3 sides from user using nested if else statement. -->
A triangle is equilateral triangle, If it's sides are equal. 
A triangle is isosceles triangle, If any two sides of a triangle are equal. 
A triangle is scalene triangle, If none of the sides are equal

<!DOCTYPE html>
<html>

<head>
    <title>Triangle Type Checker</title>
</head>

<body>
    <h2>Enter the lengths of the three sides of a triangle</h2>
    <form method="post" action="">
        <label for="side1">Side 1:</label>
        <input type="number" id="side1" name="side1" required><br><br>

        <label for="side2">Side 2:</label>
        <input type="number" id="side2" name="side2" required><br><br>

        <label for="side3">Side 3:</label>
        <input type="number" id="side3" name="side3" required><br><br>

        <input type="submit" value="Check Triangle Type">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $side1 = trim($_POST['side1']);
        $side2 = trim($_POST['side2']);
        $side3 = trim($_POST['side3']);

        if ($side1 == $side2 && $side2 == $side3) {
            echo "<p>The triangle is an equilateral triangle.</p>";
        } else {
            if ($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {
                echo "<p>The triangle is an isosceles triangle.</p>";
            } else {
                echo "<p>The triangle is a scalene triangle.</p>";
            }
        }
    }
    ?>
</body>

</html>

<!-- Problem Stmt3 : Input marks of five subjects from user, calculate percentage and print grade -->
Percentage range	Grade
>=90	Grade A
80-89	Grade B
70-79	Grade C
60-69	Grade D
50-59	Grade E
40-49	Pass
<40	Fail

<!DOCTYPE html>
<html>

<head>
    <title>Calculate Grade</title>
</head>

<body>
    <h2>Enter the marks for five subjects</h2>
    <form method="post" action="">
        <label for="subject1">Subject 1:</label>
        <input type="number" id="subject1" name="subject1" required><br><br>

        <label for="subject2">Subject 2:</label>
        <input type="number" id="subject2" name="subject2" required><br><br>

        <label for="subject3">Subject 3:</label>
        <input type="number" id="subject3" name="subject3" required><br><br>

        <label for="subject4">Subject 4:</label>
        <input type="number" id="subject4" name="subject4" required><br><br>

        <label for="subject5">Subject 5:</label>
        <input type="number" id="subject5" name="subject5" required><br><br>

        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $subject1 = trim($_POST['subject1']);
        $subject2 = trim($_POST['subject2']);
        $subject3 = trim($_POST['subject3']);
        $subject4 = trim($_POST['subject4']);
        $subject5 = trim($_POST['subject5']);

        // Calculate total and percentage
        $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
        $percentage = ($totalMarks / 500) * 100;

        // Determine the grade
        if ($percentage >= 90) {
            $grade = "Grade A";
        } elseif ($percentage >= 80) {
            $grade = "Grade B";
        } elseif ($percentage >= 70) {
            $grade = "Grade C";
        } elseif ($percentage >= 60) {
            $grade = "Grade D";
        } elseif ($percentage >= 50) {
            $grade = "Grade E";
        } elseif ($percentage >= 40) {
            $grade = "Pass";
        } else {
            $grade = "Fail";
        }

        echo "<p>Percentage: " . number_format($percentage, 2) . "%</p>";
        echo "<p>Grade: " . $grade . "</p>";
    }
    ?>
</body>

</html>

 <!-- Problem Stmt4 : Write a C program to check whether a character is upper case or lower case  -->
(Check ASCII value range :65-90 Capital Letter and 97-122 lower case letter)

<!DOCTYPE html>
<html>

<head>
    <title>Character Case Checker</title>
</head>

<body>
    <h2>Enter a character to check its case</h2>
    <form method="post" action="">
        <label for="character">Character:</label>
        <input type="text" id="character" name="character" maxlength="1" required><br><br>
        <input type="submit" value="Check Case">
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $char = trim($_POST['character']);
       
        if (strlen($char) == 1) {
            $ascii = ord($char);
        
            if ($ascii >= 65 && $ascii <= 90) {
                echo "<p>The character '$char' is an uppercase letter.</p>";
            }
            
            else if ($ascii >= 97 && $ascii <= 122) {
                echo "<p>The character '$char' is a lowercase letter.</p>";
            }
            
            else {
                echo "<p>The character '$char' is neither an uppercase nor a lowercase letter.</p>";
            }
        } else{
            echo chop($char);
        }
    }
    ?>
</body>

</html>

<!-- Problem Stmt5 : . Input two numbers from user and implement arithmetic calculator using switch case -->
case 1:-Addition
case 2:-substation
case 3:- multiplication
case 4:-division
case 5: Modulus
default case:- Print “wrong choice” .
<!DOCTYPE html>
<html>

<head>
    <title>Arithmetic Calculator</title>
</head>

<body>
    <h2>Arithmetic Calculator</h2>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" step="any" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" step="any" required><br><br>

        <label for="operation">Choose operation:</label>
        <select id="operation" name="operation" required>
            <option value="1">Addition</option>
            <option value="2">Subtraction</option>
            <option value="3">Multiplication</option>
            <option value="4">Division</option>
            <option value="5">Modulus</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = "";

        switch ($operation) {
            case 1:
                $result = $num1 + $num2;
                echo "<p>Result: $num1 + $num2 = $result</p>";
                break;
            case 2:
                $result = $num1 - $num2;
                echo "<p>Result: $num1 - $num2 = $result</p>";
                break;
            case 3:
                $result = $num1 * $num2;
                echo "<p>Result: $num1 * $num2 = $result</p>";
                break;
            case 4:
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>Result: $num1 / $num2 = $result</p>";
                } else {
                    echo "<p>Division by zero is not allowed.</p>";
                }
                break;
            case 5:
                $result = $num1 % $num2;
                echo "<p>Result: $num1 % $num2 = $result</p>";
                break;
            default:
                echo "<p>Wrong choice.</p>";
                break;
        }
    }
    ?>
</body>

</html>

<!-- Problem Stmt6 :  Find the Sum of Digits -->
<!DOCTYPE html>
<html>

<head>
    <title>Sum of Digits Calculator</title>
</head>

<body>
    <h2>Enter a number to find the sum of its digits</h2>
    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Calculate Sum of Digits">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = trim($_POST['number']);
        $sum = 0;
        
        while ($number != 0) {
            $sum += $number % 10;
            $number = (int)($number / 10);
        }

        echo "<p>Sum of digits: $sum</p>";
    }
    ?>
</body>

</html>
<!-- Problem Stmt7 : Write a PHP program to check prime number. -->
<!DOCTYPE html>
<html>

<head>
    <title>Prime Number Checker</title>
</head>

<body>
    <h2>Enter a number to check if it is a prime number</h2>
    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Check Prime">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = trim($_POST['number']);
        $is_prime = true;

        if ($number <= 1) {
            $is_prime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $is_prime = false;
                    break;
                }
            }
        }

        if ($is_prime) {
            echo "<p>$number is a prime number.</p>";
        } else {
            echo "<p>$number is not a prime number.</p>";
        }
    }
    ?>
</body>

</html>
<!-- Problem Stmt8 : Print Table of entered number -->
<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table</title>
</head>

<body>
    <h2>Enter a number to print its multiplication table</h2>
    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Print Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        echo "<h3>Multiplication Table of $number</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$number x $i = " . ($number * $i) . "</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>
<!-- Problem Stmt9 : Write a PHP program to check armstrong number. -->
<!DOCTYPE html>
<html>

<head>
    <title>Armstrong Number Checker</title>
</head>

<body>
    <h2>Enter a number to check if it is an Armstrong number</h2>
    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Check Armstrong">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $originalNumber = $number;
        $sum = 0;

        // Calculate the sum of cubes of digits
        while ($number != 0) {
            $digit = $number % 10;
            $sum += $digit * $digit * $digit;
            $number = (int)($number / 10);
        }

        // Check if it is an Armstrong number
        if ($originalNumber == $sum) {
            echo "<p>$originalNumber is an Armstrong number.</p>";
        } else {
            echo "<p>$originalNumber is not an Armstrong number.</p>";
        }
    }
    ?>
</body>

</html>
<!-- Problem Stmt10 : Write a PHP program to reverse given number. -->
<!DOCTYPE html>
<html>

<head>
    <title>Reverse Number</title>
</head>

<body>
    <h2>Enter a number to reverse it</h2>
    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Reverse Number">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $reversedNumber = 0;

        // Reverse the number
        while ($number > 0) {
            $digit = $number % 10;
            $reversedNumber = $reversedNumber * 10 + $digit;
            $number = (int)($number / 10);
        }

        echo "<p>Reversed number: $reversedNumber</p>";
    }
    ?>
</body>

</html>
<!-- Problem Stmt11: Write a PHP program to check palindrome number. -->
<!DOCTYPE html>
<html>

<head>
    <title>Palindrome Number Checker</title>
</head>

<body>
    <h2>Enter a number to check if it is a palindrome</h2>
    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Check Palindrome">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $originalNumber = $number;
        $reversedNumber = 0;

        while ($number > 0) {
            $digit = $number % 10;
            $reversedNumber = $reversedNumber * 10 + $digit;
            $number = (int)($number / 10);
        }

        if ($originalNumber == $reversedNumber) {
            echo "<p>$originalNumber is a palindrome number.</p>";
        } else {
            echo "<p>$originalNumber is not a palindrome number.</p>";
        }
    }
    ?>
</body>

</html>
<!-- Problem Stmt12 : Write a PHP program to print fibonacci series -->
<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci Series</title>
</head>

<body>
    <h2>Enter the number of terms for Fibonacci series</h2>
    <form method="post" action="">
        <label for="terms">Number of terms:</label>
        <input type="number" id="terms" name="terms" required><br><br>
        <input type="submit" value="Generate Fibonacci Series">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $terms = $_POST['terms'];
        $first = 0;
        $second = 1;
        $next = 0;

        echo "<h3>Fibonacci Series:</h3>";
        if ($terms >= 1) {
            echo "$first";
        }
        if ($terms >= 2) {
            echo ", $second";
        }

        for ($i = 3; $i <= $terms; $i++) {
            $next = $first + $second;
            echo ", $next";
            $first = $second;
            $second = $next;
        }
    }
    ?>
</body>

</html>
<!-- Problem Stmt13 : Write a PHP program to print alphabet triangle. -->
<!DOCTYPE html>
<html>

<head>
    <title>Pyramid Pattern</title>
</head>

<body>
    <pre>
<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    // Print increasing part
    $char = ord('A');
    for ($j = 1; $j <= $i; $j++) {
        echo chr($char);
        $char++;
    }
    // Print decreasing part
    $char -= 2;
    for ($j = 1; $j < $i; $j++) {
        echo chr($char);
        $char--;
    }
    echo "\n";
}
?>
</pre>
</body>

</html>
<!-- Problem Stmt14: Write a PHP programs to print star triangle. -->
<!DOCTYPE html>
<html>

<head>
    <title>Diamond Pattern</title>
</head>

<body>
    <pre>
<?php
$rows = 5;

// Top part of the diamond
for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    // Print stars
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
        if ($j < (2 * $i - 1)) {
            echo " ";
        }
    }
    echo "\n";
}

// Bottom part of the diamond
for ($i = $rows - 1; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = $rows; $j > $i; $j--) {
        echo " ";
    }
    // Print stars
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
        if ($j < (2 * $i - 1)) {
            echo " ";
        }
    }
    echo "\n";
}
?>
</pre>
</body>

</html>

exp 3

<!-- Problem Stmt1 : Perform the following ,  -->
-	Create the indexed array with list of Friend names.
-	Traversing the created Indexed Array above using foreach loop
-	Retrieving the particular element of an array
-	Retrieves range of elements from an array using array_slice()
-	Insert the additional element into the array
-	Display the entire array element using 1) print_r() and 2) var_dump()
-	Count an array elements using count () and sizeof()
-	Find the occurrence of each value in an array suing array_count_values()
-	Sort the array elements using sort () , assort() and rsort()
-	Move pointer through the array using i) current()
	ii) next()
	iii) prev()
	iv) end()
	v) reset()
-	create the array with elements 23,4,5,4,5,23,5,67,23 and remove duplicate elements using array_unique()

<!DOCTYPE html>
<html>

<head>
    <title>Array Operations</title>
</head>

<body>
    <pre>
<?php
$friends = ["Mayur", "Raj", "Bumrah", "Rohit", "SKY"];

echo "Traversing array using foreach:\n";
foreach ($friends as $friend) {
    echo $friend . "\n";
}

echo "\nRetrieving the particular element of an array:\n";
echo $friends[2] . "\n";

echo "\nRetrieving range of elements using array_slice():\n";
$slice = array_slice($friends, 1, 3);
print_r($slice);


echo "\nInserting an additional element into the array:\n";
array_push($friends, "Frank");
print_r($friends);

echo "\nDisplaying array using print_r():\n";
print_r($friends);
echo "\nDisplaying array using var_dump():\n";
var_dump($friends);


echo "\nCount of array elements using count():\n";
echo count($friends) . "\n";
echo "\nCount of array elements using sizeof():\n";
echo sizeof($friends) . "\n";

echo "\nFinding occurrence of each value using array_count_values():\n";
$occurrences = array_count_values($friends);
print_r($occurrences);


echo "\nSorting the array using sort():\n";
sort($friends);
print_r($friends);

echo "\nSorting the array using asort():\n";
asort($friends);
print_r($friends);

echo "\nSorting the array using rsort():\n";
rsort($friends);
print_r($friends);


echo "\nMoving pointer through the array:\n";
echo "Current: " . current($friends) . "\n";
next($friends);
echo "Next: " . current($friends) . "\n";
prev($friends);
echo "Prev: " . current($friends) . "\n";
end($friends);
echo "End: " . current($friends) . "\n";
reset($friends);
echo "Reset: " . current($friends) . "\n";

$numbers = [23, 4, 5, 4, 5, 23, 5, 67, 23];
$unique_numbers = array_unique($numbers);
echo "\nArray with duplicates removed using array_unique():\n";
print_r($unique_numbers);

?>
</pre>
</body>

</html>

<!-- Problem Stmt2: Perform the following, -->
-	Create the Associative arrays array with list of month number and Month name up-to 11 month 
(Key Data)
-	Insert the 12th  month in above array
-	Retrieving the particular element of an array based on key
-	Display the entire array element using 1) print_r() and 2) var_dump()
-	lopping through an associative array by using each() and list() function
-	Swap the Keys and Values in array using array_flip()
-	Check the existence of any value and key using in_array() and array_key_exists()
-	Retrieving the key based on value of any element using array_search()

<?php
// 1. Create the associative array with a list of month numbers and month names up to the 11th month
$months = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November'
);

// 2. Insert the 12th month in the above array
$months[12] = 'December';

// 3. Retrieve a particular element of an array based on a key
echo "The 7th month is: " . $months[7] . "\n";

// 4. Display the entire array using print_r() and var_dump()
echo "Using print_r():\n";
print_r($months);
echo "\nUsing var_dump():\n";
var_dump($months);

// 5. Loop through an associative array using each() and list() functions
echo "Looping through the array using each() and list():\n";
reset($months);
while (list($key, $value) = each($months)) {
    echo "Key: $key; Value: $value\n";
}

// 6. Swap the keys and values in the array using array_flip()
$flipped_months = array_flip($months);
echo "Swapped keys and values using array_flip():\n";
print_r($flipped_months);

// 7. Check the existence of any value and key using in_array() and array_key_exists()
$check_value = 'June';
$check_key = 6;
echo "Check if the value '$check_value' exists in the array: ";
echo in_array($check_value, $months) ? "Yes\n" : "No\n";
echo "Check if the key '$check_key' exists in the array: ";
echo array_key_exists($check_key, $months) ? "Yes\n" : "No\n";

// 8. Retrieve the key based on the value of any element using array_search()
$search_value = 'March';
$key = array_search($search_value, $months);
echo "The key for the value '$search_value' is: $key\n";
?>

<!-- Problem Stmt3: Perform the following, -->
-	create the multidimensional array(Nested arrays) (e.g..)
Roll	Name	Class	Marks
1	ABC	TY	97
2	XYZ	SY	89
3……			
-	Access the particular array element
-	Access all the array element using nested for loop
-	Displaying an array elements by using print_r() and var_dump()

<?php
// 1. Create the multidimensional array
$students = array(
    array("Roll" => 1, "Name" => "ABC", "Class" => "TY", "Marks" => 97),
    array("Roll" => 2, "Name" => "XYZ", "Class" => "SY", "Marks" => 89),
    array("Roll" => 3, "Name" => "PQR", "Class" => "FY", "Marks" => 92)
);

// 2. Access a particular array element
echo "Accessing the name of the second student: " . $students[1]["Name"] . "\n";

// 3. Access all the array elements using nested for loop
echo "Accessing all elements using nested for loop:\n";
for ($i = 0; $i < count($students); $i++) {
    foreach ($students[$i] as $key => $value) {
        echo "$key: $value ";
    }
    echo "\n";
}

// 4. Displaying array elements using print_r() and var_dump()
echo "Displaying the array using print_r():\n";
print_r($students);
echo "\nDisplaying the array using var_dump():\n";
var_dump($students);
?>

<!-- Problem Stmt4: Queue functionality of Array (First in-first out manner) -->
-	Create the array with 10 numbers
-	Remove first element from an array using array_shift()
-	Add element at beginning of an array by using array_unshift()
<?php
// 1. Create the array with 10 numbers
$queue = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Display the original array
echo nl2br("\nOriginal array:\n ");
print_r($queue);

// 2. Remove the first element from the array using array_shift()
$removed_element = array_shift($queue);

// Display the array after removing the first element
echo nl2br("\nArray after removing the first element ($removed_element):\n");
print_r($queue );

// 3. Add an element at the beginning of the array using array_unshift()
$new_element = 0;
array_unshift($queue, $new_element);

// Display the array after adding an element at the beginning
echo nl2br("\nArray after adding an element ($new_element) at the beginning:\n");
print_r($queue);
?>

<!-- Problem Stmt5: Stack functionality of Array (Last in First out Manner) -->
-	Create the array with 10 numbers
-	add element to the end of an array using array_push()
-	removes the last element from an array array_pop()
<?php
// 1. Create the array with 10 numbers
$stack = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Display the original array
echo "Original array:\n";
print_r($stack);

// 2. Add an element to the end of the array using array_push()
$new_element = 11;
array_push($stack, $new_element);

// Display the array after adding an element at the end
echo "Array after adding an element ($new_element) to the end:\n";
print_r($stack);

// 3. Remove the last element from the array using array_pop()
$removed_element = array_pop($stack);

// Display the array after removing the last element
echo "Array after removing the last element ($removed_element):\n";
print_r($stack);
?>

<!-- Problem Stmt 6: min() and max() function in array -->
-	Take arrays of marks of 3 subjects (for 10 students) ( i.e 3 arrays of 10 values) 
-	Find the maximum marks among all subjects
-	Find the minimum marks among all subjects
<?php
// Arrays of marks for 3 subjects for 10 students
$subject1 = array(75, 82, 91, 65, 78, 84, 95, 89, 72, 68);
$subject2 = array(88, 74, 96, 81, 77, 82, 93, 85, 79, 91);
$subject3 = array(79, 83, 92, 76, 85, 78, 88, 90, 80, 86);

// Combine all arrays into one array
$all_marks = array_merge($subject1, $subject2, $subject3);
print_r($all_marks);

// Find the maximum marks among all subjects
$max_marks = max($all_marks);

// Find the minimum marks among all subjects
$min_marks = min($all_marks);

// Display the results
echo nl2br("Maximum marks among all subjects: $max_marks\n");
echo nl2br("Minimum marks among all subjects: $min_marks\n");
?>

Function: 
<!-- Problem Stmt6: check whether entered number is palindrome or not using user defined function. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>

<body>
    <h1>Palindrome Checker</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    // Function to check if a number is a palindrome
    function isPalindrome($number) {
        // Convert the number to a string
        $str = strval($number);
        // Reverse the string
        $reversedStr = strrev($str);
        // Check if the original string is equal to the reversed string
        return $str === $reversedStr;
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number input from the form
        $inputNumber = $_POST['number'];
        
        // Validate the input to ensure it's a numeric value
        if (is_numeric($inputNumber)) {
            // Check if the entered number is a palindrome
            if (isPalindrome($inputNumber)) {
                echo "<p>The number $inputNumber is a palindrome.</p>";
            } else {
                echo "<p>The number $inputNumber is not a palindrome.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
</body>

</html>
<!-- Problem Stmt7: Write the PHP code for user defined function  -->
o	Take one email_id  as input from user.
o	Call user defined check_email function with parameter to check whether the entered email is valid or not.
o	Inside function body use call standard library function preg_match() to check whether entered string is in format of email.
o	Print final decision Valid/Invalid 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validator</title>
</head>

<body>
    <h1>Email Validator</h1>
    <form method="post">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Check">
    </form>

    <?php
    // Function to check if the email is valid
    function check_email($email) {
        // Regular expression for email validation
        return preg_match('/^[\w\.-]+@[\w\.-]+\.\w+$/', $email);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        echo check_email($email) ? "<p>$email is valid.</p>" : "<p>$email is invalid.</p>";
    }
    ?>
</body>

</html>

<!-- Problem Stmt8: Find the Factorial program in PHP using recursive function -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>

<body>
    <h1>Factorial Calculator</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Recursive function to calculate factorial
    function factorial($n) {
        if ($n <= 1) {
            return 1; // Base case: factorial of 0 or 1 is 1
        } else {
            return $n * factorial($n - 1); // Recursive case
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number input from the form
        $number = (int)$_POST['number'];
        
        // Ensure the number is non-negative
        if ($number >= 0) {
            // Calculate factorial and display the result
            $result = factorial($number);
            echo "<p>The factorial of $number is $result.</p>";
        } else {
            echo "<p>Please enter a non-negative number.</p>";
        }
    }
    ?>
</body>

</html>


exp 4

<!-- Problem Stmt1 : Class, Object and constructor  -->
 
<!DOCTYPE html>
<html>

<head>
    <title>Holiday Class Example</title>
</head>

<body>
    <?php
    class Holiday {
        private $name;
        private $day;
        private $month;

       
        public function __construct($name, $day, $month) {
            $this->name = $name;
            $this->day = $day;
            $this->month = $month;
        }

    
        public function inSameMonth($otherHoliday) {
            return $this->month === $otherHoliday->month;
        }
    }

    
    $holiday1 = new Holiday("Christmas", 25, "December");
    $holiday2 = new Holiday("New Year", 1, "January");
    $holiday3 = new Holiday("Boxing Day", 26, "December");

    echo $holiday1->inSameMonth($holiday2) ? 'true' : 'false'; 
    echo "<br>";
    echo $holiday1->inSameMonth($holiday3) ? 'true' : 'false';
    ?>
</body>

</html>


<!-- Problem Stmt2 : Inheritance -->
Base class Parent with static variable bank_balance=1000 and two methods i.e Deposit() and Withdraw(). 
Method implementation is two argument, no return type where the money value is either deposited or withdraw from bank_balance. 
Create  child classes i.e Son inherits the Parent class.
Create the 2 object and call methods Deposit() and Withdraw() 
Check final bank balance at end. ( as per ur Deposit() and Withdraw)
<?php

// Base class Parent
class ParentClass {
    // Static variable to hold bank balance
    protected static $bank_balance = 1000;

    // Method to deposit money
    public static function Deposit($amount) {
        self::$bank_balance += $amount;
    }

    // Method to withdraw money
    public static function Withdraw($amount) {
        if ($amount > self::$bank_balance) {
            echo "<p>Insufficient funds to withdraw $amount. Current bank balance: " . self::$bank_balance . "</p>";
        } else {
            self::$bank_balance -= $amount;
        }
    }

    // Method to get current bank balance
    public static function getBankBalance() {
        return self::$bank_balance;
    }
}

// Child class Son inherits ParentClass
class Son extends ParentClass {}

// Create objects of Son class
$son1 = new Son();
$son2 = new Son();

// Perform operations
$son1::Deposit(1000);   // Deposit 500
$son2::Withdraw(200);  // Withdraw 200

// Check final bank balance
echo "<p>Final Bank Balance: " . ParentClass::getBankBalance() . "</p>";

?>


<!-- Problem Stmt3 : Abstract Class -->
Create an abstract class named Fruit, with a constructor function that gets the name of the fruit and an abstract function, color, that prints the color of the fruit. Create 3 child classes extending the abstract class namely: Apple, Orange, Grape. In these child classes, define the color function so that it prints Apple is red for the Apple class, Orange is orange for the Orange class and Grape is purple for the Grape class.
<?php
// Abstract class Fruit
abstract class Fruit {
    protected $name;

    // Constructor function to get the name of the fruit
    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract function to print the color of the fruit
    abstract public function color();
}

// Child class Apple extending Fruit
class Apple extends Fruit {
    // Implementing the abstract function color
    public function color() {
        echo $this->name . " is red." . PHP_EOL;
    }
}

// Child class Orange extending Fruit
class Orange extends Fruit {
    // Implementing the abstract function color
    public function color() {
        echo $this->name . " is orange." . PHP_EOL;
    }
}

// Child class Grape extending Fruit
class Grape extends Fruit {
    // Implementing the abstract function color
    public function color() {
        echo $this->name . " is purple." . PHP_EOL;
    }
}

// Creating instances of each fruit and calling the color function
$apple = new Apple("Apple");
$orange = new Orange("Orange");
$grape = new Grape("Grape");

$apple->color();   // Output: Apple is red.
$orange->color();  // Output: Orange is orange.
$grape->color();   // Output: Grape is purple.
?>

<!-- Problem Stmt4 : Interface -->
Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
<?php
// Abstract class Shape
abstract class Shape {
    // Abstract method to calculate the area
    abstract public function calculateArea();
}

// Subclass Triangle extending Shape
class Triangle extends Shape {
    private $base;
    private $height;

    // Constructor to initialize base and height
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Implementing the abstract method calculateArea
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Subclass Rectangle extending Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the abstract method calculateArea
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Creating instances of Triangle and Rectangle
$triangle = new Triangle(10, 5);
$rectangle = new Rectangle(10, 5);

// Calculating and printing the area of the Triangle and Rectangle
echo "The area of the triangle is: " . $triangle->calculateArea() . PHP_EOL; // Output: 25
echo "The area of the rectangle is: " . $rectangle->calculateArea() . PHP_EOL; // Output: 50
?>

exp 5

Problem Statement:
Create a registration form with all component (Textbox, radio button, checkbox, list..) . Perform the validation of all fields. After Submit Display information of registration in PHP on other page
(Make use of POST method, Use Superglobal variable $_POST() 
Fields: Roll, Name, Class (List) Email ID, Phone Number, Gender (radio), Technology Known (Checkbox) etc…
(Include all kind of components in form)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input, .form-container select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container input[type="checkbox"], .form-container input[type="radio"] {
            width: auto;
            margin-right: 5px;
        }
        .form-container .checkbox-group, .form-container .radio-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form method="POST">
            <label for="name">Enter Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Name" required>
            <br><br>
            <label for="email">Enter E-mail:</label>
            <input type="text" id="email" name="email" placeholder="Enter Email" required>
            <br><br>
            <label for="number">Enter Mobile Number:</label>
            <input type="text" id="number" name="number" placeholder="Enter Mobile" required>
            <br><br>
            <label>Select Gender:</label>
            <div class="radio-group">
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
            </div>
            <br><br>
            <label>Select Technology:</label>
            <div class="checkbox-group">
                <input type="checkbox" id="c" name="op[]" value="C">
                <label for="c">C</label>
                <input type="checkbox" id="cpp" name="op[]" value="C++">
                <label for="cpp">C++</label>
                <input type="checkbox" id="java" name="op[]" value="Java">
                <label for="java">Java</label>
            </div>
            <br><br>
            <label for="s_class">Select Class:</label>
            <select id="s_class" name="s_class" required>
                <option value="">Select Class</option>
                <option value="SY">SY</option>
                <option value="TY">TY</option>
                <option value="BTech">BTech</option>
            </select>
            <br><br>
            <button type="submit" name="submit">Register</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $errors = [];

            $namev = trim($_POST['name']);
            $emailv = trim($_POST['email']);
            $numberv = trim($_POST['number']);

            // Validate Name
            if (!preg_match("/^[A-Za-z\s]{3,}$/", $namev)) {
                $errors[] = "Invalid Name. It should be at least 3 letters long.";
            }

            // Validate Email
            if (!filter_var($emailv, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid Email ID.";
            }

            // Validate Phone Number
            if (!preg_match("/^[0-9]{10}$/", $numberv)) {
                $errors[] = "Invalid Phone Number. It should be 10 digits long.";
            }

            if (empty($_POST['gender'])) {
                $errors[] = "Gender is required.";
            }

            if (empty($_POST['op'])) {
                $errors[] = "At least one technology must be selected.";
            }

            if (empty($_POST['s_class'])) {
                $errors[] = "Class is required.";
            }

            if (empty($errors)) {
                echo "<h3>Registration Details</h3>";
                echo "<p><strong>Name:</strong> " . htmlspecialchars($namev) . "</p>";
                echo "<p><strong>Email ID:</strong> " . htmlspecialchars($emailv) . "</p>";
                echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($numberv) . "</p>";
                echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
                echo "<p><strong>Technology Known:</strong> " . implode(', ', $_POST['op']) . "</p>";
                echo "<p><strong>Class:</strong> " . htmlspecialchars($_POST['s_class']) . "</p>";
            } else {
                echo "<div class='error'>";
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>

exp 6

1.	Implement the PHP code to
-	Set the cookies
-	Retrieve the information of cookies 
-	Update the cookies
-	Delete the cookies 
<?php
// Set the cookie
$cookie_name = "atul";
$cookie_value = "123";
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // The cookie will expire in 1 hour
?>
<html>
<body>
    <?php
    echo "Cookie named '" . $cookie_name . "' is set to '" . $cookie_value . "'.<br>";
    ?>
</body>
</html>


<?php
$cookie_name = "atul";
?>
<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>


<?php
// Update the cookie
$cookie_name = "Atul";
$cookie_value = "456";
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // The cookie will expire in 1 hour
?>
<html>
<body>
    <?php
    
    echo "Cookie named '" . $cookie_name . "' is updated to '" . $cookie_value . "'.<br>";
    ?>
</body>
</html>


<?php
// Delete the cookie by setting its expiration time to a past time
$cookie_name = "Atul";
setcookie($cookie_name, "", time() - 3600, "/"); // The cookie is now expired and should be deleted
?>
<html>
<body>
    <?php
    echo "Cookie '" . $cookie_name . "' is deleted.";
    ?>
</body>
</html>

2.	Implement the PHP code to Manage the session
-	Starting session
-	Creating session
-	Accessing session values
-	Destroying session
<?php
// 1. Start the session 
session_start();

// 2. Create session variables
$_SESSION["username"] = "mayur";
$_SESSION["email"] = "mayur453315@gmail.com";

echo "Session variables are set.<br>";

// 3. Access session variables
if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
} else {
    echo "No session variables are set.<br>";
}

// 4. Destroy the session 
session_unset(); 
echo "All session variables are unset.<br>";

// Destroy the session
session_destroy();
echo "Session is destroyed.";
?>


<!-- 3.	Implement the PHP code to find how many times the page is visited  -->
<?php

session_start();

if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    
    $_SESSION['count'] = 1;
}

echo "You have visited this page " . $_SESSION['count'] . " times.";
?>

<!-- 4.	Implement the PHP code to demonstrate the expiry of session by clicking logout or back button) -->
index.php
<?php
// Start the session
session_start();

$_SESSION['username']="Atul";

if (!isset($_SESSION['username'])) {
    echo "Session has expired. Please log in again.";
    exit;
}


echo "Welcome, " . $_SESSION['username'] . "!<br>";
echo "You are logged in.<br>";


echo '<a href="logout.php">Logout</a>';
?>

logout.php
<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the main page (or login page) after logging out
header("Location: logoutpage.php");
exit;
?>
 logoutpage.php 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        .main
        {
            display:flex;
            
            justify-content:center;
            align-items:center;
            height:100vh;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Logout Successful</h1>
    </div>
</body>
</html>

<!-- 5.	Implement the PHO code to demonstrate the use of $_SERVER to find the details of name of server, name of the script, IP address of server, name of the request method, name of the protocol -->
<?php
// Server name
$server_name = $_SERVER['SERVER_NAME'];

// Name of the current script
$script_name = $_SERVER['SCRIPT_NAME'];

// IP address of the server
$server_ip = $_SERVER['SERVER_ADDR'];

// Request method (e.g., GET, POST)
$request_method = $_SERVER['REQUEST_METHOD'];

// Server protocol (e.g., HTTP/1.1)
$server_protocol = $_SERVER['SERVER_PROTOCOL'];

// Display the details
echo "<h2>Server Details</h2>";
echo "Server Name: " . $server_name . "<br>";
echo "Script Name: " . $script_name . "<br>";
echo "Server IP Address: " . $server_ip . "<br>";
echo "Request Method: " . $request_method . "<br>";
echo "Server Protocol: " . $server_protocol . "<br>";
?>

exp 7

<!-- 1.	Implement the PHP code to perform the following operation 
-	Create Database
-	Create Table
-	Insert values into the table
-	Select and select with where clause
-	Update the values in DB
-	Delete the particular record from DB
-	Drop table
-	Drop DB
<?php
    $con=mysqli_connect("localhost","root","Mayur45&$");
    if(!$con){
        echo"connection not Established";
    }
    else{
        echo"connection  Established";
    }
    $query1="Create database AllPHP07";
    if(mysqli_query($con,$query1)){
        echo "<br> Database created";
        }
        else{
            echo "<br> Database not created";
    }
    

    mysqli_query($con,"use AllPHP07");

    $query3="Create table students(roll int, name varchar(20), marks int)";
    if(mysqli_query($con,$query3)){
        echo "<br> Table created";
        }
        else{
            echo "<br> Table not created";
        }
  
    mysqli_query($con,"insert into students values(1,'Mayur',80)");
    mysqli_query($con,"insert into students values(2,'Raju',90)");


    function displayResults($result) {
        echo "<table border='1'>
        <tr>
            <th>Roll_Number</th>
            <th>Name</th>
            <th>Marks</th>
        </tr>";
    
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['roll'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['marks'] . "</td>";
            echo "</tr>";
        }
    
        echo "</table>";
        echo "<br>";
    }
    $result= mysqli_query($con,"select *from students");
    displayResults($result);

    $result1= mysqli_query($con,"select *from students where roll=2");
    displayResults($result1);

    mysqli_query($con,"insert into students values(3,'PQR',90)");
    

    mysqli_query($con,"update students set marks=100 where roll=2");
    $result2= mysqli_query($con,"select *from students");
    echo "Updated table";
    displayResults($result2);

    mysqli_query($con,"delete from students where roll=3");
    $result3= mysqli_query($con,"select *from students");
    echo "after deleting record";
    displayResults($result3);

    if(mysqli_query($con,"drop table students")){
        echo "<br> Table dropped";
    }
    else{
        echo "<br> Table not dropped";
        }
    if(mysqli_query($con,"drop database AllPHP07")){
        echo "<br> Database dropped";
        }
    else{
            echo "<br> Database not dropped";
    }
    mysqli_close($con);
    
?>
2.	Write Simple HTML and PHP code to handle the DB using GUI
(a.	perform the insert operation: make GUI using HTML and insert values into DB after clicking on “INSERT” button) 
(b.	perform the select operation: Show all the values from DB on HTML table tag after clicking on “SHOW” Button -->
index.html

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form, table {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #0c0707;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Database Operations</h1>

    <h2>Insert Data</h2>
    <form action="insert.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <button type="submit">INSERT</button>
    </form>

    <h2>Show Records</h2>
    <form action="show.php" method="GET">
        <button type="submit">SHOW</button>
    </form>

    <!-- <form action="update.php" method="POST">
        <h3>Update Data</h3>
        <label>Enter ID to Update: </label><input type="text" name="id" required><br>
        <label>New Name: </label><input type="text" name="name" required><br>
        <label>New Email: </label><input type="email" name="email" required><br>
        <label>New Phone: </label><input type="text" name="phone" required><br>
        <button type="submit">UPDATE</button>
    </form> -->

</body>
</html>

db_connect.php 
<?php
$servername = "localhost";
$username = "root";
$password = "Mayur45&$";
$database = "PHPEX7Q2";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_errno)
{
    die("Connection failed: " . $conn->connect_error);
}
?>

insert.php
<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO records (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<br>
<a href="index.html">Back to Home</a>

show.php 

<?php
include 'db_connect.php';

$sql = "SELECT * FROM records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
<br>
<a href="index.html">Back to Home</a>
<form action="update.php" method="POST">
        <h3>Update Data</h3>
        <label>Enter ID to Update: </label><input type="text" name="id" required><br>
        <label>New Name: </label><input type="text" name="name" required><br>
        <label>New Email: </label><input type="email" name="email" required><br>
        <label>New Phone: </label><input type="text" name="phone" required><br>
        <button type="submit">UPDATE</button>
    </form>

update.php 

<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE records SET name='$name', email='$email', phone='$phone' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Record updated successfully!";
        } else {
            echo "No record found with ID $id.";
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
<br>
<a href="index.html">Back to Home</a>
<h2>Show Records</h2>
    <form action="show.php" method="GET">
        <button type="submit">SHOW</button>
    </form>


exp 8

<!-- 1)	Create the Registration page in Laravel
Step 1: crate a Laravel application 
Step 2: create the registration view with required fields
Step 3: create route to registration which call method in controller and return registration view 
      Once click to submit, call method in controller and return view which shows all details submitted
Step 4: create controller for above -->

Step 1: Create a Laravel Application
Open your terminal and create a new Laravel application:

bash
Copy code
composer create-project laravel/laravel RegistrationApp
cd RegistrationApp
Run the Laravel development server:

bash
Copy code
php artisan serve
Step 2: Create the Registration View
Inside the resources/views directory, create a file named register.blade.php:
html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('submit.registration') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id" required><br><br>
        <label for="cgpa">CGPA:</label>
        <input type="text" name="cgpa" id="cgpa" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
Step 3: Create Routes
Open the routes/web.php file and add the following routes:
php
Copy code
use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'showForm'])->name('show.registration');
Route::post('/register', [RegistrationController::class, 'submitForm'])->name('submit.registration');
Step 4: Create the Controller
Run the following command to create a controller:

bash
Copy code
php artisan make:controller RegistrationController
Open app/Http/Controllers/RegistrationController.php and add the following code:

php
Copy code
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the registration form
    public function showForm()
    {
        return view('register');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        $name = $request->input('name');
        $id = $request->input('id');
        $cgpa = $request->input('cgpa');

        return view('details', compact('name', 'id', 'cgpa'));
    }
}
Step 5: Create the Details View
Inside the resources/views directory, create a file named details.blade.php:
html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Details</title>
</head>
<body>
    <h1>Submitted Details</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>ID:</strong> {{ $id }}</p>
    <p><strong>CGPA:</strong> {{ $cgpa }}</p>
</body>
</html>
Testing the Application
Start the server:

bash
Copy code
php artisan serve
Visit http://127.0.0.1:8000/register in your browser.

Fill out the form and click Register.

The submitted details will be displayed on a new page.


<!-- 2)	Create the Login Application.
Step 1: crate a Laravel application 
Step 2: create the login view with username and password
Step 3: create route to login which call method in controller and return login view 
Also create the route for post login which will call method from controller to check username and password. If success and profile view et open another open login view again 
Step 4: create controller for above -->

Step 1: Create a Laravel Application
Create a new Laravel application (if you haven't already):

bash
Copy code
composer create-project laravel/laravel LoginApp
cd LoginApp
Start the Laravel development server:

bash
Copy code
php artisan serve
Step 2: Create the Login View
Inside the resources/views directory, create a file named login.blade.php:
html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('submit.login') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
Step 3: Create Routes
Open the routes/web.php file and add these routes:
php
Copy code
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');
Route::post('/login', [LoginController::class, 'submitLogin'])->name('submit.login');
Route::get('/profile', [LoginController::class, 'showProfile'])->name('show.profile');
Step 4: Create the Controller
Generate a new controller:

bash
Copy code
php artisan make:controller LoginController
Open app/Http/Controllers/LoginController.php and add the following code:

php
Copy code
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Show the login form
    public function showLogin()
    {
        return view('login');
    }

    // Handle login submission
    public function submitLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Dummy validation (replace with database validation in real apps)
        if ($username === 'admin' && $password === 'password') {
            return redirect()->route('show.profile')->with('success', 'Login successful!');
        }

        return redirect()->route('show.login')->with('error', 'Invalid username or password.');
    }

    // Show profile view
    public function showProfile()
    {
        return view('profile');
    }
}
Step 5: Create the Profile View
Inside the resources/views directory, create a file named profile.blade.php:
html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Welcome to Your Profile!</h1>
    <p>You have successfully logged in.</p>
    <a href="{{ route('show.login') }}">Logout</a>
</body>
</html>
Step 6: Add Flash Messages (Optional but Helpful)
To display success or error messages, add the following to the login.blade.php:
html
Copy code
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if (session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif
Testing the Application
Start the server:

bash
Copy code
php artisan serve
Visit http://127.0.0.1:8000/login in your browser.

Enter the username admin and password password to log in successfully.

If the login is correct, you'll be redirected to the Profile page. Otherwise, you'll see an error message.

<!-- exp 9 1)	Perform CURD Operation in laravel -->

 Step 1: Set Up a New Laravel Project 
 Install Laravel (if not already installed): 

bash
Copy code
<!-- composer create-project --prefer-dist laravel/laravel laravel_crud
cd laravel_crud -->
Run the development server:

bash
Copy code
<!-- php artisan serve -->
Visit http://127.0.0.1:8000 in your browser.

Step 2: Create a Database
Create a database using tools like phpMyAdmin or MySQL CLI.
Update the .env file with your database credentials:
env
Copy code
<!-- DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=your_password -->
Step 3: Create a Model, Migration, and Controller
Run this command to create all three:

bash
Copy code
<!-- php artisan make:model Post -mcr -->
This creates:
Post model in app/Models/Post.php
A migration file in database/migrations
A controller PostController in app/Http/Controllers/PostController.php
Step 4: Define the Database Schema
In the migration file (e.g., 2024_12_08_000000_create_posts_table.php), define your table structure:

php
Copy code
<!-- public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
} -->
Run the migration to create the table:

bash
Copy code
<!-- php artisan migrate -->
Step 5: Define Routes
In routes/web.php, add these routes:

php
Copy code
<!-- use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class); -->
Step 6: Implement CRUD Methods
In PostController, add the logic for each method:

Display All Posts (index method):

php
Copy code
<!-- public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
} -->
Show Create Form (create method):

php
Copy code
<!-- public function create()
{
    return view('posts.create');
} -->
Store New Post (store method):

php
Copy code
<!-- public function store(Request $request)
{
    Post::create($request->only(['title', 'content']));
    return redirect()->route('posts.index');
} -->
Show Edit Form (edit method):

php
Copy code
<!-- public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
} -->
Update Post (update method):

php
Copy code
<!-- public function update(Request $request, Post $post)
{
    $post->update($request->only(['title', 'content']));
    return redirect()->route('posts.index');
} -->
Delete Post (destroy method):

php
Copy code
<!-- public function destroy(Post $post)
{
    $post->delete();
    return redirect()->route('posts.index');
} -->
Step 7: Create Views
Inside the resources/views/posts folder, create these files:

Index View (index.blade.php):

blade
Copy code
<a href="{{ route('posts.create') }}">Create New Post</a>
<ul>
    @foreach($posts as $post)
        <li>
            {{ $post->title }}
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
Create Form (create.blade.php):

blade
Copy code
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="content" placeholder="Content"></textarea>
    <button type="submit">Save</button>
</form>
Edit Form (edit.blade.php):

blade
Copy code
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}">
    <textarea name="content">{{ $post->content }}</textarea>
    <button type="submit">Update</button>
</form>
Step 8: Test the Application
Visit the following routes:

http://127.0.0.1:8000/posts - View all posts.
http://127.0.0.1:8000/posts/create - Create a new post.
Use edit and delete links/buttons to modify or remove posts.
This setup ensures a minimal and easy-to-remember CRUD application in Laravel.

You said:
Run the migration to create the table:

i want to use mysql
ChatGPT said:
ChatGPT
If you're using MySQL as your database for Laravel, the migration process doesn't change much. However, ensure you have set up MySQL as your database in Laravel correctly. Follow these steps:

Step 1: Configure MySQL in Laravel
Open your .env file in the root of your Laravel project.

Update the database connection details to point to your MySQL database:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
Verify the database connection by running:

bash
Copy code
php artisan migrate:status
If it shows migration status, your MySQL is properly connected.

Step 2: Run the Migration
Once you’ve updated the migration file (like in Step 4 earlier) with your desired table schema, run the migration command:

bash
Copy code
php artisan migrate
This command will create the posts table in your MySQL database as per the structure you defined in the migration file.

Step 3: Verify in MySQL
Open phpMyAdmin, MySQL Workbench, or any other MySQL client.
Check if the posts table has been created under the laravel_crud database.
The table will include the fields defined in your migration file (e.g., id, title, content, timestamps).

https://chatgpt.com/share/67557d9e-b8c0-8003-8a0b-3f801d1972d5

app/models/post.php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'content'];
}

databse/migration/ctreate post table

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

index.blade

<a href="{{ route('posts.create') }}">Create New Post</a>
<ul>
    @foreach($posts as $post)
    <li>
        {{ $post->title }}
        {{ $post->content }}
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>