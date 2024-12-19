<?php
    #Assinment 01
    echo (int)(15.2 + 14.7 + (10.5 + 10.5));
    echo '<br>';
    echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5)));
    echo '<br>';
    #Assignment 02
    var_dump((integer) 100);
    echo '<br>';
    echo gettype(100);
    echo '<br>';
    #Assignment 03
    echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
    echo '<br>';
    #Assignment 04
    echo nl2br('We 
        Love 
        In 
        Elzero 
        Web 
        School');
    echo '<br>';
    #Assignment 05
    echo '<pre>';
        echo <<<'Now'
            Hello "'Elzero'"
            We Love $Programming$
            Languages Specially "PHP";
        Now;
    echo '</pre>';
    echo '<br>';
    #Assignment 06
    $something = "Programming";
    echo <<<"code"
        Hello \PHP\
        We Love $something
    code;
    echo '<br>';
    #Assignment 07
    echo (bool) "Hello PHP";
    echo '<br>';
    echo gettype((int)((bool) "Hello PHP"));
    echo '<br>';
    #Assignment 08
    echo '<pre>';
        print_r([
            "FrontEnd" => [
                "HTML",
                "CSS",
                "JS" => [
                    "Vuejs" => [
                        2 => "v2",
                        "v3"
                    ],
                    "Reactjs",
                    "Svelte"
                ],
            ],
            "BackEnd" => [
                "PHP",
                "MySQL",
                "Security"
                ],
            "Git",
            "Github",
            "Testing" => [
                "Unit Testing",
                "End To End",
                "Integration"
            ],
        ]);
    echo '<pre>';