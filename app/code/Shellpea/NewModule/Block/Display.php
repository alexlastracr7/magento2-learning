<?php
namespace Shellpea\NewModule\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Display extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function sayHello()
    {
        return __('Contact Us ');
    }

    public function getStorePhoneNumber()
    {
        return $this->scopeConfig->getValue("general/store_information/phone", ScopeInterface::SCOPE_STORE);
    }

    public function getFormAction()
    {
        return $this->getUrl('test/page/save', ['_secure' => true]);
    }

}
