<?php 
class Fruit {
    //properties
    public $name;
    public $color;

    //methods
    function set_name($name){
        $this->name = $name;

    }
    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;

    }
    function get_color(){
        return $this->name;

    }

}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();