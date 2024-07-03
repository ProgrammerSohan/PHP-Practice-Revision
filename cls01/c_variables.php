<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <?php 
        echo "<h2>Variables are containers for storing information</h2>";
        $x = 5;
        $y = "Sohan";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";

        $txt = "W3Schools.com";
        echo "Hi,I am Sohan.I love $txt to practice.";

        //different way
        echo "<br>";
        echo "I like " . $txt . "!";

        //sum of two variables
        echo "<br>";
        $a=11;
        $b=12;
        echo $a+$b;
        echo "<br>";
        //variable types
        //php supports the following data types:
        /**
         * string,integer,float,boolean,array,object,null,resource
         * 
         */
        $c =25; //$c is an integer
        $d ="sohan";//$d is a string

        echo $c;
        echo $d;
        echo "<br>";
      

    ?>
    <h1>Get the type</h1>
    <pre>
    <?php 
      //get the type
        //to get the data type of a variable, use the var_dump() function.
       
        $e=29;
        var_dump($e);
        var_dump("Sohan");
        var_dump(3.14);
        var_dump(true);
        var_dump([1,2,3,4,55]);
        var_dump(NULL);

        echo "<h3>Assign Multiple values</h3>";
        $k=$l=$m = "Programmer Sohan";
        echo $k;
        echo $l;
        echo $m;
    
    ?>
      </pre>
</body>
</html>