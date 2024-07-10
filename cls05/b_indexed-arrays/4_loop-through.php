<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop through an indexed array</title>
</head>
<body>
    <?php 
    $cars = array("volvo","bmw","toyota");

    foreach($cars as $x){
        echo "$x <br>";
    }
    
    ?>
</body>
</html>