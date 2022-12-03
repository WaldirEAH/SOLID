<?php
class Shape_0
{
    protected $areas = [];
    public function insert(Shape $shape, $hole) :bool
    {
        return $shape->area() <= $this->areas[$hole];
    }
}
abstract class  Shape
{
    abstract public function area(string $param):float;
}
class Circle
{
    public function area(string $param):float
    {
        return M_PI * 5 ^ 2;
    }
}
class Square
{
    public function area(string $param):float{
        return 5*5;
    }
}
