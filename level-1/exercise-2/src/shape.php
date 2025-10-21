<?php

class Shape {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

 //   protected function calculateBase(): float {
 //       return $this->width * $this->height;
 //   }
}

?>