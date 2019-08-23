<?php

namespace App\Http\Controllers;


use App\Entity\Comment;
use App\Service\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list(string $page)
    {
        return [
            'data' => [
                'comments' => array_map(static function (Comment $comment): array {
                    return [
                        'id' => $comment->getId(),
                        'parent_id' => $comment->getParentId(),
                        'page_id' => $comment->getPageId(),
                        'message' => $comment->getMessage(),
                        'user_name' => $comment->getUserName(),
                        'created_at' => $comment->getCreatedAt(),
                    ];
                }, (new CommentService)->list($page))
            ],
        ];
    }

    public function create(Request $request)
    {
        $pageId = $request->get('page_id');
        $message = $request->get('message');
        $userName = $request->get('user_name');
        try {
            $comment = (new CommentService())->create($pageId, $message, $userName);
            return [
                'data' => [
                    'id' => $comment->getId(),
                ],
            ];
        } catch (\InvalidArgumentException $exception) {
            return [
                'error' => [
                    'message' => $exception->getMessage(),
                    'code' => $exception->getCode(),
                ],
            ];
        }
    }
}
