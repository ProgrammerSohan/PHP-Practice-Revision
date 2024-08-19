<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Constructor</title>
</head>
<body>

<?php 
    class Fruit{
        public $name;
        public $color;
        public $country;

        function __construct($name,$color,$country){
            $this->name = $name;
            $this->color = $color;
            $this->country = $country;
        }

        function get_name(){
            return $this->name;

        }
        function get_color(){
            return $this->color;

        }
        function get_desh(){
            return $this->country;
        }

    }

    $apple = new Fruit("Apple","Red","BD");
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $apple->get_desh();

?>

    
</body>
</html>