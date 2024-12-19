<?php
    // Assignment 01
    // Replace ? With Arithmetic Operators
    echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0
    echo "<br>";
    
    // Assignment 02
    $a = "10";
    echo $a;
    echo "<br>";
    echo gettype($a+0);
    echo "<br>";
    echo $a;
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";
    echo $a;
    echo "<br>";
    echo gettype((int)$a);
    echo "<br>";
    
    // Assignment 03
    $a = 10;
    $b = 20;
    // Needed Output
    $c=$b%$a;
    echo --$c;
    echo "<br>";
    
    // Assignment 04
    $a = 10;
    $b = 20;
    $c = 15;
    var_dump($a < $b); // True , 10 < 20
    echo "<br>";
    var_dump($c >= $a); // True , 15 > 10
    echo "<br>";
    var_dump($a <= $b); // True , 10 <= 20
    echo "<br>";
    var_dump($a !== $b); // True , 10 !== 20
    echo "<br>";
    var_dump($a != $c); // True , 10 != 15
    echo "<br>";
    var_dump($a <> $c); // True , 10 <> 15
    echo "<br>";
    var_dump(gettype($a) == gettype($b)); // True , integer == integer
    echo "<br>";
    var_dump(gettype($a) === gettype($b)); // True , integer === integer
    echo "<br>";
    var_dump((bool)(gettype((float) $a) <=> gettype($b))); // True , float ? integer
    echo "<br>";

    // Assignment 05
    $points = 10;
    $points+=3;
    echo $points; // 13
    echo "<br>";
    $points-=5;
    echo $points; // 8;
    echo "<br>";

    // Assignment 06
    $a = "Elzero";
    $b = "Web";
    $c = "School";
    // Method One
    $d = $a . " " . $b . " " . $c;
    // Method Two
    // $a .=" " . $b . " " . $c;
    // $d = $a;
    // Method Three
    // $b .=" " . $c;
    // $a .= " " . $b;
    // $d = $a;
    // Method Four
    // $d = $a;
    // $d .= " " . $b;
    // $d .= " " . $c;
    echo $d; // Elzero Web School
    echo "<br>";

    // Assignment 07
    $a = 10;
    $b = 20;
    $b = ((($a**3)*(--$a))-(++$a))/(++$a);
    --$a;
    echo $a + $b * $a + $b + $a * $a * $a; // 10000

    // Assignment 08
    // Code 1
    $a = $b or die("Custom Error");
    echo "<br>";
    // Code 2
    $f = @file("Not_A_File") or die("Custom Error");
    echo "<br>";
    // Code 3
    (@include("Not_A_File")) or die("Custom Error");