<?php
declare(strict_types=1);

namespace TechDriven\Blog\Model;

use Magento\Framework\Exception\CouldNotSaveException;
use TechDriven\Blog\Api\Data\PostInterface;
use TechDriven\Blog\Api\PostRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use TechDriven\Blog\Model\PostFactory;
use TechDriven\Blog\Model\Post;
use TechDriven\Blog\Model\ResourceModel\Post as PostResourceModel;

class PostRepository implements PostRepositoryInterface
{
    /**
     * @param PostFactory $postFactory
     * @param PostResourceModel $postResourceModel
     */
    public function __construct(
        private PostFactory $postFactory,
        private PostResourceModel $postResourceModel
    ) {}

    public function save(PostInterface $post): PostInterface
    {
        try {
            $this->postResourceModel->save($post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $post;
    }

    public function getById(int $id): PostInterface
    {
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $id);
        if (!$post->getId()) {
            throw new NoSuchEntityException(__('The blog post with "%1" ID doesn\'t exists', $id));
        }

        return $post;
    }

    public function deleteById(int $id): bool
    {
        $post = $this->getById($id);
        try {
            $this->postResourceModel->delete($post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return true;
    }
}
