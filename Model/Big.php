<?php


namespace Designnbuy\HelloWold\Model;

use Designnbuy\HelloWold\Api\Size;

class Big implements Size
{

    public function getSize()
    {
        return "Big";
    }
}
