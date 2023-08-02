<?php
declare(strict_types=1);

namespace TechDriven\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use TechDriven\Blog\Model\Post;
use TechDriven\Blog\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
