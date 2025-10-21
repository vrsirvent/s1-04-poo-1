<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle = new Triangle(24, 5);
echo "\nTriangle area: " . $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(35, 11);
echo "Rectangle area: " . $rectangle->calculateArea() . "\n";

?>

