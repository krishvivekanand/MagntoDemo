<?php


namespace Designnbuy\HelloWold\Model;

use Designnbuy\HelloWold\Api\Color;
use Designnbuy\HelloWold\Api\Size;

class Book
{
    protected $color;
    protected $size;
    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }
}
