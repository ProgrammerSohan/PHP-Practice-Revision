<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Value</title>
</head>
<body>
    <?php 
        $cars = array("volvo","bmw","toyota");
        $cars[1]="ford";
        var_dump($cars);
    
    ?>
</body>
</html>