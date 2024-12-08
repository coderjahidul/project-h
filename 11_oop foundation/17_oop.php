<?php 
class Color {
    public $color;

    function __construct($color) {
        $this->color = $color;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function __toString() {
        return "The color is: " . $this->color;
    }
}

// $color = new Color('red');
// echo $color;

class Color2 {
    public $color;
    function __construct($color) {
        $this->color = $color;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function __toString() {
        return "The color is: " . $this->color;
    }
}

$color2 = new Color2('Blue');
echo $color2;






































?>