<?php

namespace Shellpea\NewModule\Controller\Page;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Save implements HttpGetActionInterface
{


    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    private $request;
    /**
     * @var \Shellpea\NewModule\Model\PostFactory
     */
    private $postFactory;
    private $resultFactory;

    public function __construct(

        \Shellpea\NewModule\Model\PostFactory $postFactory,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\ResultFactory $resultFactory

    ) {

        $this->postFactory = $postFactory;
        $this->request = $request;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {

        $post = $this->postFactory->create();
        $post->addData($this->request->getParams());
        $post->save();
        $redirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
        $redirect->setUrl('/test/page/view');

        return $redirect;


    }

}
