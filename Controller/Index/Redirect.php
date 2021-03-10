<?php


namespace Bss\HelloWorld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RedirectFactory;


class Redirect extends Action
{
    /**
     * @var RedirectFactory
     */
    private $redirectFactory;

    public function __construct(
        Context $context,
        RedirectFactory $redirectFactory
    ) {
        parent::__construct($context);

        $this->redirectFactory = $redirectFactory;
    }
    public function execute()
    {
        // TODO: Implement execute() method.
        $resultRedirect = $this->redirectFactory->create();
        $resultRedirect->setPath('/home');
        return $resultRedirect;
    }
}
