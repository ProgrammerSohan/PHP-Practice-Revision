<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Items</title>
</head>
<body>

    <?php 

    //function example
    function myFunction(){
        echo "This text comes from a function by Sohan";

    }
    //create array:
    $myArr = array("Volvo", 15,["apples","bananas"],myFunction());

    //calling the function from the array item:
    $myArr[1];
    
    
    ?>
    
</body>
</html>