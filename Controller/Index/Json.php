<?php


namespace Bss\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Action\Context;

class Json extends Action implements HttpGetActionInterface
{
    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    /**
     * Json constructor.
     *
     * @param Context $context
     *
     * @param JsonFactory $resultJsonFactory
     */
    public function __construct(Context $context, JsonFactory $resultJsonFactory)
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        // TODO: Implement execute() method.
        $resultJson = $this->resultJsonFactory->create();
        $response = [
            "name" => "Nguyen Van Dao",
            "age" => 20,
            "birthday" => "22/03/2000",
            "description" => "Student in HUST"
        ];
        $resultJson->setData($response);
        return $resultJson;
    }
}
