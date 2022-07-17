<?php

namespace Shellpea\NewModule\Controller\Page;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class View implements HttpGetActionInterface
{

    protected $_pageFactory;
    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    private $request;
    /**
     * @var \Shellpea\NewModule\Model\PostFactory
     */
    private $postFactory;

    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Shellpea\NewModule\Model\PostFactory $postFactory,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->_pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
        $this->request = $request;
    }

    public function execute()
    {

        return $this->_pageFactory->create();
    }

}
