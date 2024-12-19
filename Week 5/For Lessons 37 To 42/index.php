<?php
    // Assignment 01
    $index = 10;
    while($index >= 1) {
        echo $index-- . "<br>";
    }

    // Assignment 02
    $index = 0;
    while($index <= 20) {
        if($index%2 == 0) {
            echo "$index<br>";
        }
        $index++;
    }
    // do {
    //     if($index%2 == 0) {
    //         echo "$index<br>";
    //     }
    //     $index++;
    // } while($index <= 20);
    // for (;$index <= 20; $index++) {
    //     if($index%2 == 0) {
    //         echo "$index<br>";
    //     }
    // }

    // Assignment 03
    $num = 2;
    while ($num < 520) {
        if( $num == 2 ) {
            $num--;
            echo "$num<br>";
        }
        $num=2*$num + 2 ;
        echo $num > 520 ? "": "$num<br>";
    }

    // Assignment 04
    $start = 10;
    $end = 0;
    $stop = 3;
    for ( ; $start >= $stop ; $start--) {
        echo $start != 10 ? "$end$start<br>" : "$start<br>";
    }
    
    // Assignment 05
    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];
    foreach ($mix as $key => $value) {
        if($key == 0 || $key == 3 || $key == 4 || $key == 5) {
            continue;
        }
        echo "$value<br>";
    }

    // Assignment 06
    $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
    foreach ($money as $key => $value) {
        echo "The Name Is $key And I Need $value Pound From Him<br>";
    }
    
    // Assignment 07
    $mix = [1, 2, "A", "B", "C", 3, 4];
    $n=0;
    $m=0;
    foreach ($mix as $key => $value) {
        if ($key == 2|| $key == 3|| $key == 4) {
            $n++;
            continue;
        }
        $m++;
        echo "$value<br>";
        if ($key == 6) {
            echo "$m Numbers Printed<br>$n Letters Ignored<br>";
        }
    }
    
    // Assignment 08
    $nums = [1, 13, 12, 20, 51, 17, 30];
    foreach ($nums as $value) {
        if($value%2 == 0) {
            echo $value/2 . "<br";
        }
    }
    
    // Assignment 09
    $help_num = 3;
    $nums = [4, 5, 6, 1, 2, 3];
    $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
    for ( ; $help_num <= 4 ; $help_num++ ) { 
        echo $names[$nums[$help_num]] . "<br>";
    }
    
    // ٍٍAssignment 10
    $help_num = 4;
    $nums = [2, 4, 5, 6, 10];
    foreach ($nums as $value) {
        echo $value . " + " . $nums[ $help_num ] . " = " . $value + $nums[ $help_num ] . " .<br>";
        $help_num--;
    }
    // Output
    // "2 + 10 = 12"
    // "4 + 6 = 10"
    // "5 + 5 = 10"
    // "6 + 4 = 10"
    // "10 + 2 = 12"