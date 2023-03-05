<?php

namespace App\Controller;

use App\DTO\CommentDTO;
use App\Service\CommentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/article/{articleId}/comment', name: 'get_article_comments')]
    public function getArticleComments(int $articleId, CommentService $commentService): Response
    {
        $comments = $commentService->getArticleComments($articleId);

        $commentDTOs = [];
        foreach ($comments as $comment) {
            $commentDTOs[] = CommentDTO::toJsonLight($comment);
        }

        return new JsonResponse($commentDTOs, 200, ["Content-Type" => "application/json"]);
    }
    #[Route('/comment/{commentId}/answer', name: 'get_comment_answers')]
    public function getCommentAnswers(int $commentId, CommentService $commentService): Response
    {
        $comments = $commentService->getCommentAnswers($commentId);

        $commentDTOs = [];
        foreach ($comments as $comment) {
            $commentDTOs[] = CommentDTO::toJsonLight($comment);
        }

        return new JsonResponse($commentDTOs, 200, ["Content-Type" => "application/json"]);
    }
}