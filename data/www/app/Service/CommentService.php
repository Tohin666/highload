<?php

namespace App\Service;


use App\Entity\Comment;

final class CommentService
{
    /**
     * @param string $page
     * @return Comment[]
     */
    public function list(string $page): array
    {
        $sql = 'SELECT page_id, message, username, created_at FROM messages WHERE page_id = :page_id';

        return [];
    }

    /**
     * @param int $pageId
     * @param string $message
     * @param string $userName
     * @return Comment
     * @throws \InvalidArgumentException
     */
    public function create(int $pageId, string $message, string $userName): Comment
    {
        try {
            $sql = 'INSERT INTO messages (page_id, message, username, created_at) VALUES(:page_id, :message, :username, :created_at)';
            //Поход в базу

            return new Comment(1, 1, $pageId, $message, $userName, new \DateTimeImmutable());
        } catch (\Throwable $exception) {
            throw new \InvalidArgumentException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
