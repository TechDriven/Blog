<?php
declare(strict_types=1);

namespace TechDriven\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\Forward;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    /**
     * @param PageFactory $pageFactory
     * @param ForwardFactory $forwardFactory
     */
    public function __construct(
        private PageFactory $pageFactory,
        private ForwardFactory $forwardFactory
    ) {}

    /**
     * @return Forward
     */
    public function execute(): Forward
    {
        $forward = $this->forwardFactory->create();
        return $forward->setController('post')->forward('list');
    }
}
