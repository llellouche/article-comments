<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/connect/facebook' => [[['_route' => 'connect_facebook_start', '_controller' => 'App\\Controller\\Auth\\FacebookController::facebookConnectAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/facebook/check' => [[['_route' => 'connect_facebook_check', '_controller' => 'App\\Controller\\Auth\\FacebookController::facebookConnectCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\Auth\\GoogleController::googleConnectAction'], null, ['GET' => 0], null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\Auth\\GoogleController::connectCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\Site\\BlogController::listArticlesAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|pi/(?'
                        .'|article/([^/]++)(?'
                            .'|(*:72)'
                            .'|/comment(?'
                                .'|(*:90)'
                            .')'
                        .')'
                        .'|comment/([^/]++)/(?'
                            .'|answer(?'
                                .'|(*:128)'
                            .')'
                            .'|rate(*:141)'
                        .')'
                    .')'
                    .'|rticle/([^/]++)(*:166)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_get_article', '_controller' => 'App\\Controller\\Api\\ArticleApiController::getArticle'], ['articleId'], null, null, false, true, null]],
        90 => [
            [['_route' => 'api_get_article_comments', '_controller' => 'App\\Controller\\Api\\CommentApiController::getArticleComments'], ['articleId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_create_comment', '_controller' => 'App\\Controller\\Api\\CommentApiController::createComment'], ['articleId'], ['POST' => 0], null, false, false, null],
        ],
        128 => [
            [['_route' => 'api_get_comment_answers', '_controller' => 'App\\Controller\\Api\\CommentApiController::getCommentAnswers'], ['commentId'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_create_answer', '_controller' => 'App\\Controller\\Api\\CommentApiController::createAnswer'], ['commentId'], ['POST' => 0], null, false, false, null],
        ],
        141 => [[['_route' => 'api_rate_comment', '_controller' => 'App\\Controller\\Api\\CommentApiController::rateComment'], ['commentId'], ['POST' => 0], null, false, false, null]],
        166 => [
            [['_route' => 'article_view', '_controller' => 'App\\Controller\\Site\\BlogController::viewArticleAction'], ['articleId'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
