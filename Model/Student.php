<?php

namespace Designnbuy\HelloWold\Model;

class Student
{
    /**
     * @var mixed|string
     */
    private $name;
    /**
     * @var int|mixed
     */
    private $age;
    /**
     * @var array|int[]
     */
    private $score;

    /**
     * Student constructor.
     * @param string $name
     * @param int $age
     * @param array|int[] $score
     */
    public function __construct($name="Rahul", $age=20, array $score = ["Math"=>90,"Hindi"=>75,"programing"=>98])
    {
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }
}
