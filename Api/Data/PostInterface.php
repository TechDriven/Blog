<?php
declare(strict_types=1);

namespace TechDriven\Blog\Api\Data;

/**
 * Blog Post interface.
 * @api
 * @since 1.0.0
 */
interface PostInterface
{
    const ID = 'id';
    const TITLE = 'title';
    const CONTENT = 'content';
    const CREATED_AT = 'created_at';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content);

    /**
     * @return string
     */
    public function getCreatedAt();
}
