<?php

namespace App\Service;

use App\Entity\CommentAnswer;
use App\Repository\CommentAnswerRepository;
use App\Repository\CommentRepository;

class CommentService
{
    private CommentRepository $commentRepository;
    private CommentAnswerRepository $commentAnswerRepository;

    public function __construct(CommentRepository $commentRepository, CommentAnswerRepository $commentAnswerRepository)
    {
        $this->commentRepository       = $commentRepository;
        $this->commentAnswerRepository = $commentAnswerRepository;
    }

    public function getArticleComments(int $articleId): array
    {
        return $this->commentRepository->findBy(['article' => $articleId]);
    }

    public function getCommentAnswers(int $commentId)
    {
        return $this->commentAnswerRepository->findBy(['parentComment' => $commentId]);
    }
}