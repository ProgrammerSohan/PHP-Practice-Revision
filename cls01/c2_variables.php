<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Scope</title>
</head>
<body>

<?php 
    echo "<h2>PHP Variables Scope</h2>";
    //In php, variables can be declared anywhere in the script.
    //The scope of a variable is the part of the script where the variable can be referenced/used
    //php has three different variable scopes:local,global,static
    //variable with global scope
    /***********Global Scope************* */
    //Global Scope= A variable declared outside a function has a GLOBAL SCOPE & can only be accessed outside a function.
   /* $x=15;//global scope

    function myTest(){
        //using x inside this function will generate an error
        echo "<p>Variable x inside function is : $x</p>";

    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";*/

    /********Local Scope***************** */
    //Local Scope = A variable declared within a function has a LOCAL SCOPE & can only be accessed within that function.
    /*function myTest(){
        $x = 25; //local scope
        echo "<p>Variable x inside function is: $x</p>";

    }
    myTest();
    //using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";*/

    /********Global Keyword******** */
    //global keyword is used to access a global variable from within a function
   /*
    $x = 8;
    $y = 10;
    function myTest(){
         global $x,$y;
         $m=$x + $y;
    }
    myTest();//run function
    echo $y; //output the new value for variable $m*/

    //the example above can be rewritten like this.
    /*
    $x = 5;
    $y = 10;

    function myTest(){
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];

    }
    myTest();
    echo $y;*/

    /********PHP static keyword******** */
    function myTest(){
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();


?>
    
</body>
</html>