<?php
namespace OmniPro\Attributes\ViewModel;

class AttributeViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @param \OmniPro\Attributes\Helper\Data
     */
    private $helperData;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \OmniPro\Attributes\Helper\Data $helperData
    )
    {
        $this->storeManager = $storeManager;
        $this->helperData = $helperData;
    }

    public function getConfig() {
        $id = $this->storeManager->getStore()->getId();
        $config = $this->helperData->getOmniproField($id);
        return $config;
    }
}
