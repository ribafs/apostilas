<?php

abstract class Shape
{
    var $color;
    var $sides;

    function color( ) 
    { 
        return $this->color; 
    }

    function sides( )
    {
        return $this->sides;
    }

    abstract function area( );

    function __construct($color, $sides)
    {
        $this->color = $color;
        $this->sides = $sides;
    }
}

class Circle extends Shape
{
    var $radius;

    function area( )
    {
        return 2 * M_PI * $this->radius;
    }

    function __construct($color, $radius)
    {
        $this->radius = $radius;
        parent::__construct($color, 1);
    }
}


class Rectangle extends Shape
{
    var $width;
    var $height;

    function area( )
    {
        return $this->width * $this->height;
    }

    function __construct($color, $width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        parent::__construct($color, 4);
    }
}


class Triangle extends Shape
{
    // The length of each side
    var $a;
    var $b;
    var $c;

    function area( )
    {
        // Area using Heron's formula
        $s = ($this->a + $this->b + $this->c)/2;
        $area = sqrt(
            $s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c)
        );

        return $area;
    }

    function __construct($color, $a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct($color, 3);
    }
}
$t = new Triangle("yellow", 2, 3, 4);
$c = new Circle("blue", 5);
$r = new Rectangle("green", 2, 4);

print "Area of our triangle = {$t->area( )} sq units\n<br>";
print "Area of our circle = {$c->area( )} sq units\n<br>";
print "Area of our rectangle = {$r->area( )} sq units\n<br>";

// The following line causes a fatal error because Shape is abstract
//$s = new Shape("green", 5);
/*
Area of our triangle = 2.9047375096556 sq units

Area of our circle = 31.415926535898 sq units

Area of our rectangle = 8 sq units
*/
// https://etutorials.org/Programming/PHP+MySQL.+Building+web+database+applications/Chapter+14.+Advanced+Features+of+Object-Oriented+Programming+in+PHP+5/14.3+Abstract+Classes+and+Interfaces/
?>


