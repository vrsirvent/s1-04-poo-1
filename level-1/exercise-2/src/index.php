<?php

class Shape {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width; 
        $this->height = $height; 
    }

    protected function calculateBase(): float {
        return $this->width * $this->height;
    }
}

class Triangle extends Shape {
    public function calculateArea(): float {
        return $this->calculateBase() / 2; 
    }
}

class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this->calculateBase(); 
    }
}

$triangle = new Triangle(24, 5); 
echo "\nTriangle area: " . $triangle->calculateArea() . "\n"; 

$rectangle = new Rectangle(35, 11);
echo "Rectangle area: " . $rectangle->calculateArea() . "\n"; 

?>
