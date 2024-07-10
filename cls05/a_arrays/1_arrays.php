<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>

<?php 
    $cars = array("Volvo","BMW","Toyota");

   // var_dump($cars);
   echo "<div>";
    foreach($cars as $car){
        echo "<li>$car</li>";
    }

    echo "</div>";
?>
    
</body>
</html>