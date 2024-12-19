<?php
    // Assignment 01
    $a = 100;
    $b = 200;
    $c = 100;
    /*
      Check That:
      Variable "b" Larger Than Variable "a"
      Variable "a" Identical To Variable "c"
      Variable "a" Plus Variable "c" Identical To Variable "b"
    */
    if( $a < $b ){
        echo 'Yes , $a < $b ' . "( $a < $b ) .";
        echo "<br>";
        if( $a == $c ){
            echo 'Yes , $a == $c ' . "( $a == $c ) .";
            echo "<br>";
            if( $a + $c == $b ){
                echo 'Yes , $a + $c == $b ' . "( $a + $c == $b ) .";
            }
        }
    }
    echo "<br>";
    // Assignment 02
    // Test Case 1
    $a = 100;
    $b = 200;
    $c = 300;
    if( $a > $b ) {
        echo "a is larger than b " . "( $a > $b ) .";
    }
    elseif( $a > $c ) {
        echo "a is larger than c " . "( $a > $c ) .";
    }
    else {
        echo "a is not larger than b or c " . "( $a < $c || $a < $b ) .";
    }
    // A Is Not Larger Than B Or C
    echo "<br>";
    // Test Case 2
    $a = 200;
    $b = 100;
    $c = 300;
    if( $a > $b ) {
        echo "a is larger than b " . "( $a > $b ) .";
    }
    elseif( $a > $c ) {
        echo "a is larger than c " . "( $a > $c ) .";
    }
    else {
        echo "a is not larger than b or c " . "( $a < $c || $a < $b ) .";
    }
    // A Is Larger Than B
    echo "<br>";
    // Test Case 3
    $a = 200;
    $b = 200;
    $c = 100;
    if( $a > $b ) {
        echo "a is larger than b " . "( $a > $b ) .";
    }
    elseif( $a > $c ) {
        echo "a is larger than c " . "( $a > $c ) .";
    }
    else {
        echo "a is not larger than b or c " . "( $a < $c || $a < $b ) .";
    }
    // A Is Larger Than c
    echo "<br>";
    // Assignment 03
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $admins = ["Osama", "Ahmed", "Sayed"];
        if($_POST["user"] === $admins[0]){
            echo "The request method is post and username is " . $admins[0] . " . ";
            echo "<br>";
            echo "This username " . $admins[0] . " is admin .";
        }
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
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
</body>

</html>
<?php
    // Assignment 04
    $a = 30;
    $b = 20;
    $c = 10;
    if ($a + $b === $c) {
    echo "A + B = C";
    } elseif ($a + $c === $b) {
    echo "A + C = B";
    } elseif ($b + $c === $a) {
    echo "B + C = A";
    } else {
    echo "The End";
    }
    echo "<br>";
    // Output
    // "B + C = A"
    echo $a + $b === $c ? : $a + $c === $b ?  : $b + $c === $a ? : "The End" ;
    echo "<br>";
    // Assignment 05
    $name = "Osama";
    $age = 40;
    $country = "Egypt";
    if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
        echo "The Age Is Good To Go<br>";
        echo "The Name Is Good To Go<br>";
        echo "The Country Is Good To Go<br>";
    }
    // Needed Output
    // "The Age Is Good To Go"
    // "The Name Is Good To Go"
    // "The Country Is Good To Go"
    // Assignment 06
    $genre = "Hack And Slash";
    switch($genre) {
        case "RPG":
            echo "I Recommend Ys Games";
            break;
        case "Hack And Slash" :
            echo "I Recommend Castlevania Games";
            break;
        case "FPS" :
            echo "I Recommend Uncharted Games";
            break;
        case "Platform" :
            echo "I Recommend Megaman Games";
            break;
        case "Puzzle" :
            echo "I Recommend Megaman Games";
            break;
        default :
            echo "I Recommend Shadow Of Mordor And Shadow Of War";
    }
    // Needed Output
    // "I Recommend Castlevania Games"
    echo "<br>";
    // Assignment 07
    $num_one = 23;
    $num_two = 5;
    $op = "+";
    switch( $op ) {
        case "+" :
            echo ( $num_one + $num_two );
            break;
        case "-" :
            echo ( $num_one - $num_two );
            break;
        case "/" :
            echo (int)( $num_one / $num_two ) . "<br>" . ( $num_one % $num_two );
            break;
        case "*" :
            echo ( $num_one * $num_two );
            break;
        default :
            echo "Unknown operation .";
    }
    echo "<br>";
    // Assignment 08
    $day = "Sat";

    if ( $day == "Sat" || $day == "Sun" || $day == "Mon" ) {
        echo "We Are Open All The Day";
    } elseif ( $day == "Tue" || $day == "Wed" ) {
        echo "We Are Open From 08:12";
    } elseif ( $day == "Thu" || $day == "Fri" ) {
        echo "We Are Closed";
    } else {
        echo "Unknown Day";
    }