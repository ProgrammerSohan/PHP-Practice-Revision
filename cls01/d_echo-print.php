<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP echo & print statements</title>
</head>
<body>

    <?php 
    //a)echo
    /**1*************** */
    //there are two basic ways to get output: echo & print
    /*echo "Hello";
    //same as:
    echo("Hello");*/

    /**2 **********/
    //display text
    /*
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello World!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "made ", "with multiple parameters.";*/

    /**3************** */
    //display variables
   /* $txt1 = "Learn PHP";
    $txt2 = "W3Schools";

    echo "<h2>$txt1</h2>";
    echo "<p>I love $txt2</p>";*/

    /*******4 */
    /*
    //using single quotes
    $txt1 = "PHP - Sohan";
    $txt2 = "Programmer Sohan";

    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';*/

    
    //b) print***************
    /**1********* */
   /* print "Hello<br>";
    //same as:
    print("Hello");*/

    /****2*** display text*/
    /*
    print "<h2>PHP is Fun|Sohan.</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";*/

    /********3**Display variables */
    /*
     $txt1 = "variable & print";
     $txt2 = "Sohan";

     print "<h2>$txt1</h2>";
     print "<p>My name is $txt2</p>";*/

     /*****4**using single quotes */
     $txt1 = "Bangladesh";
     $txt2 = "Sohan";

     print '<h2>' . $txt1 . '</h2>';
     print '<p> My name is ' . $txt2 . '</p>';


       
    ?>
    
</body>
</html>