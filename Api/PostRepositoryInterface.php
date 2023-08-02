<?php
declare(strict_types=1);

namespace TechDriven\Blog\Api;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use TechDriven\Blog\Api\Data\PostInterface;

/**
 * Blog post CRUD interface.
 * @api
 * @since 1.0.0
 */
interface PostRepositoryInterface
{
    /**
     * Save post.
     *
     * @param PostInterface $post
     * @return PostInterface
     * @throws LocalizedException
     */
    public function save(PostInterface $post): PostInterface;

    /**
     * Retrieve post.
     *
     * @param int $id
     * @return PostInterface
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function getById(int $id): PostInterface;

    /**
     * Delete post by ID.
     *
     * @param int $id
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById(int $id): bool;
}
