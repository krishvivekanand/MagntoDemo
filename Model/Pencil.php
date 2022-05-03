<?php

namespace Designnbuy\HelloWold\Model;

use Designnbuy\HelloWold\Api\Color;
use Designnbuy\HelloWold\Api\PencilInterface;
use Designnbuy\HelloWold\Api\Size;

class Pencil implements PencilInterface
{
    /**
     * @var Color
     */
    protected $color;
    /**
     * @var Size
     */
    protected $size;
    /**
     * @var null
     */
    protected $name;
    /**
     * @var null
     */
    protected $school;

    /**
     * Pencil constructor.
     * @param Color $color
     * @param Size $size
     * @param null $name
     * @param null $school
     */
    public function __construct(Color $color, Size $size, $name = null, $school = null)
    {
        $this->color = $color;
        $this->size = $size;
        $this->name = $name;
        $this->school = $school;
    }

    /**
     * @return string
     */
    public function getPencilType()
    {
        return "Our pencil has " . $this->color->getColor() . " color and " . $this->size->getSize() . " size";
    }
}
