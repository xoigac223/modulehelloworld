<?php


namespace Bss\HelloWorld\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpConnectActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;


class Forward extends Action implements HttpConnectActionInterface
{
    /**
     * @var ForwardFactory
     */
    protected $resultForwardFactory;

    public function __construct(
        Context $context,
        ForwardFactory $resultForwardFactory
    ) {
        parent::__construct($context);

        $this->resultForwardFactory = $resultForwardFactory;
    }
    public function execute()
    {
        $this->_forward("redirect");
        $resultForward = $this->resultForwardFactory->create();
        $resultForward->setController('index')
            ->setModule('cms')
            ->forward('index');
        return $resultForward;
    }
}
