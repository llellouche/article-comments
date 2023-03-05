<?php

namespace App\Controller;

use App\DTO\CommentDTO;
use App\Entity\ArticleComment;
use App\Entity\CommentAnswer;
use App\Service\ArticleService;
use App\Service\CommentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/article/{articleId}/comment', name: 'get_article_comments', methods: ['GET'])]
    public function getArticleComments(int $articleId, CommentService $commentService): Response
    {
        $comments = $commentService->getArticleComments($articleId);

        $commentDTOs = [];
        foreach ($comments as $comment) {
            $commentDTOs[] = CommentDTO::toJsonLight($comment);
        }

        return new JsonResponse($commentDTOs, 200, ["Content-Type" => "application/json"]);
    }

    #[Route('/comment/{commentId}/answer', name: 'get_comment_answers', methods: ['GET'])]
    public function getCommentAnswers(int $commentId, CommentService $commentService): Response
    {
        $comments = $commentService->getCommentAnswers($commentId);

        $commentDTOs = [];
        foreach ($comments as $comment) {
            $commentDTOs[] = CommentDTO::toJsonLight($comment);
        }

        return new JsonResponse($commentDTOs, 200, ["Content-Type" => "application/json"]);
    }

    #[Route(path: '/article/{articleId}/comment', name: 'create_comment', methods: ['POST'])]
    public function createComment(Request $request, int $articleId, ArticleService $articleService, CommentService $commentService): Response
    {
        if (! $article = $articleService->getArticle($articleId)) {
            return new JsonResponse(['error' => 'Article not found'], 404, ["Content-Type" => "application/json"]);
        }

        try {
            $comment = CommentDTO::fromJson($request->getContent(), ArticleComment::class);
        } catch (\Exception $exception) {
            return new JsonResponse(['error' => 'Fields content is missing'], 500, ["Content-Type" => "application/json"]);
        }

        $comment->setArticle($article);

        $commentService->save($comment);

        return new JsonResponse(CommentDTO::toJsonLight($comment), 200, ["Content-Type" => "application/json"]);
    }

    #[Route(path: '/comment/{commentId}/answer', name: 'create_answer', methods: ['POST'])]
    public function createAnswer(Request $request, int $commentId, CommentService $commentService): Response
    {
        if (! $parentComment = $commentService->getComment($commentId)) {
            return new JsonResponse(['error' => 'Parent comment not found'], 404, ["Content-Type" => "application/json"]);
        }

        try {
            $comment = CommentDTO::fromJson($request->getContent(), CommentAnswer::class);
        } catch (\Exception $exception) {
            return new JsonResponse(['error' => 'Fields content is missing'], 500, ["Content-Type" => "application/json"]);
        }

        $comment->setArticle($parentComment->getArticle());
        $comment->setParentComment($parentComment);

        $commentService->save($comment);
        return new JsonResponse(CommentDTO::toJsonLight($comment), 200, ["Content-Type" => "application/json"]);
    }

    #[Route(path: '/comment/{commentId}/rate', name: 'rate_comment', methods: ['PUT'])]
    public function rateComment(Request $request, int $commentId, CommentService $commentService): Response
    {
        if (! $comment = $commentService->getComment($commentId)) {
            return new JsonResponse(['error' => 'Comment not found'], 404, ["Content-Type" => "application/json"]);
        }

        try {
            $rate = json_decode($request->getContent(), true)['rate'];
        } catch (\Exception $exception) {
            return new JsonResponse(['error' => 'Fields rate is missing'], 500, ["Content-Type" => "application/json"]);
        }

        // TODO Rework
        $comment->setRate($rate);

        $commentService->save($comment);
        return new JsonResponse(CommentDTO::toJsonLight($comment), 200, ["Content-Type" => "application/json"]);
    }
}