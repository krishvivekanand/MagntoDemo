<?php

namespace Designnbuy\HelloWold\Controller\Index;

use Designnbuy\HelloWold\Api\PencilInterface;
use Designnbuy\HelloWold\Model\PencilFactory;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    /**
     * @var PencilInterface
     */
    protected $pencilInterface;
    /**
     * @var PencilFactory
     */
    protected $pencilFactory;
    /**
     * @var PencilFactory
     */
    protected $productFactory;

    /**
     * Index constructor.
     * @param PencilInterface $pencilInterface
     * @param PencilFactory $pencilFactory
     * @param ProductFactory $productFactory
     * @param Context $context
     */
    public function __construct(
        PencilInterface $pencilInterface,
        PencilFactory $pencilFactory,
        ProductFactory $productFactory,
        Context $context
    ) {
        $this->pencilInterface = $pencilInterface;
        $this->pencilFactory = $pencilFactory;
        $this->productFactory = $productFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        echo "<pre/>";
        //$pencil = $this->pencilFactory->create(["name"=>"new name","school"=>"IGNOU"]);
        //var_dump($pencil);
        //echo $this->pencilInterface->getPencilType();
        //$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        //$pencil = $objectManager->create('Designnbuy\HelloWold\Model\Pencil');
        //var_dump($pencil);
        //$book = $objectManager->create('Designnbuy\HelloWold\Model\Book');
        //var_dump($book);
        /*$student = $objectManager->create('Designnbuy\HelloWold\Model\Student');
        var_dump($student);*/

        $product = $this->productFactory->create()->load(1);
        $product->setName("Iphone 6s");
        $productName = $product->getName();
        var_dump($productName);
    }
}
