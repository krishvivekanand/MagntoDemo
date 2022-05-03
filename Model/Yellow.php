<?php


namespace Designnbuy\HelloWold\Model;

use Designnbuy\HelloWold\Api\Color;
use Designnbuy\HelloWold\Api\Brightness;

class Yellow implements Color
{
    protected $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Yellow";
    }
}
