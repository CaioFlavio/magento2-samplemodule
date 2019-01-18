<?php
namespace CaioFlavio\SampleModule\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Store\Model\ScopeInterface;

class BaseHelper extends AbstractHelper
{
    public function getStoreConfig($fieldPath, $configScope = ScopeInterface::SCOPE_STORE, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $fieldPath,
            $configScope,
            $storeId
        );
    }
}