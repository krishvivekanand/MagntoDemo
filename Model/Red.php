<?php

namespace Designnbuy\HelloWold\Model;

use Designnbuy\HelloWold\Api\Brightness;
use Designnbuy\HelloWold\Api\Color;

class Red implements Color
{
    protected $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Red";
    }
}
