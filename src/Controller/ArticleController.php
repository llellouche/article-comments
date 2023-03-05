<?php

namespace App\Controller;

use App\DTO\ArticleDTO;
use App\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{articleId}', name: 'get_article')]
    public function getArticle(int $articleId, ArticleService $articleService): Response
    {
        $article = $articleService->getArticle($articleId);

        if (! $article) {
            return new JsonResponse(['error' => 'Article not found'], 404, ["Content-Type" => "application/json"]);
        }

        return new JsonResponse(ArticleDTO::toJsonLight($article), 200, ["Content-Type" => "application/json"]);
    }
}