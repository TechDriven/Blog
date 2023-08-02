<?php
declare(strict_types=1);

namespace TechDriven\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class ListAction implements HttpGetActionInterface
{
    /**
     * Index constructor.
     * @param PageFactory $pageFactory
     */
    public function __construct(
        private PageFactory $pageFactory
    ) {}


    /**
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
