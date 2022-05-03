<?php

namespace Designnbuy\HelloWold\Model;

use Designnbuy\HelloWold\Api\Size;

class Small implements Size
{
    public function getSize()
    {
        return "Small";
    }
}
