<?php

namespace App\Entity;


final class Comment
{
    /** @var int */
    private $id;

    /** @var int */
    private $parentId;

    /** @var int */
    private $pageId;

    /** @var string */
    private $message;

    /** @var string */
    private $userName;

    /** @var \DateTimeImmutable */
    private $createdAt;

    /**
     * Message constructor.
     * @param int $id
     * @param int $parentId
     * @param int $pageId
     * @param string $message
     * @param string $userName
     * @param \DateTimeImmutable $createdAt
     */
    public function __construct(int $id, int $parentId, int $pageId, string $message, string $userName, \DateTimeImmutable $createdAt)
    {
        $this->id = $id;
        $this->parentId = $parentId;
        $this->pageId = $pageId;
        $this->message = $message;
        $this->userName = $userName;
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parentId;
    }

    /**
     * @return int
     */
    public function getPageId(): int
    {
        return $this->pageId;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }
}
