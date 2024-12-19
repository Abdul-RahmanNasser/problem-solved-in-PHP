<!-- Assignment 01 -->
<?php $username = "Elzero Courses";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $username;?>">
    <title>Welcome To <?php echo $username;?></title>
</head>

<body>
    <h1><?php echo $username;?></h1>
    <p>Here In <?php echo $username;?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username;?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username;?></footer>
</body>

</html>
<?php 
    // Assignment 02
    $name = "elzero";
    $$name = "Web";
    echo $$name;
    echo '<br>';
    echo $elzero;
    echo '<br>';
    echo "${$name}";
    echo '<br>';
    echo "${elzero}";
    echo '<br>';
    echo "Web";
    echo '<br>';
    // Assignment 03
    $a = 200;
    $b = &$a;
    $a = 100;
    echo $b; // 100
    echo '<br>';
    // Assignment 04
    /*
        "C:/xampp/htdocs"
        "localhost"
        "C:\WINDOWS"
        "C:/xampp/apache/bin/openssl.cnf"
    */
    echo '<pre>';
    print_r($_SERVER);
    echo $_SERVER["DOCUMENT_ROOT"];
    echo '<br>';
    echo $_SERVER["SERVER_NAME"];
    echo '<br>';
    echo $_SERVER["HTTP_SEC_CH_UA_PLATFORM"];
    echo '<br>';
    echo $_SERVER["SCRIPT_FILENAME"];
    echo '<pre>';
    // Assignment 05
    /*
        10 Words Here
        1 - abstract
        2 - and
        3 - as
        4 - break
        5 - callable
        6 - case
        7 - catch
        8 - class
        9 - clone
        10 - const
    */
    // Assignment 06
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __DIR__;
    echo '<br>';