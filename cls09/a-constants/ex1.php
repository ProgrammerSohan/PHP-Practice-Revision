<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Constants</title>
</head>
<body>

<?php 
    class Goodbye{
        const LEAVING_MESSAGE = "Thank you for visiting w3schools.com!";
    }

    echo Goodbye::LEAVING_MESSAGE;

?>
    
</body>
</html>