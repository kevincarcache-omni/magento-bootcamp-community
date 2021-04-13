<?php
namespace OmniPro\Customattribute\ViewModel;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class AttributeViewModel implements ArgumentInterface
{
    /**
     * @var Product
     */
    protected $_product = null;

     /**
     * Core registry
     *
     * @var Registry
     */
    protected $_coreRegistry = null;

    public function __construct(
        Registry $registry
    )
    {
        $this->_coreRegistry = $registry;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = $this->_coreRegistry->registry('product');
        }
        return $this->_product;
    }

    public function getAttributeValue() {
        return $this->getProduct()->getAttributeText('capacidad_almacenamiento');
    }
}
