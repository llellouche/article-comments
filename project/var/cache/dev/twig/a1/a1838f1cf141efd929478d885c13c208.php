<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* article/comments-template.html.twig */
class __TwigTemplate_4f9a9362bb1296e8bb81caa6f1b9839e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/comments-template.html.twig"));

        // line 1
        echo "<div class=\"container bootdey\">
    <div class=\"col-md-12 bootstrap snippets\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "                    <textarea class=\"comment-content form-control\" rows=\"2\" placeholder=\"What are you thinking?\"></textarea>
                    <div class=\"mar-top clearfix\">
                        <button class=\"submit-comment btn btn-sm bg-dark pull-right\" disabled style=\"float: right; color: white\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i> Comment</button>
                    </div>
                ";
        } else {
            // line 11
            echo "                    <div class=\"mar-top clearfix\">
                        <ul class=\"list-inline text-center\">
                            <h3>Connect for comment, rating and view answers</h3>
                            <br>
                            <li class=\"list-inline-item\">
                                <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google_start");
            echo "\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-google fa-stack-1x fa-inverse\"></i>
                                    </span>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_facebook_start");
            echo "\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "            </div>
        </div>
        <div class=\"panel\">
            <div class=\"panel-body panel-body-comments\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "                    <div class=\"media-block\">
                        <a class=\"media-left\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 40), "picture", [], "any", false, false, false, 40), "html", null, true);
            echo "\"></a>
                        <div class=\"media-body\" data-id= \"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                            <div class=\"mar-btm\">
                                <a class=\"author btn-link text-semibold media-heading box-inline\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 43), "fullName", [], "method", false, false, false, 43), "html", null, true);
            echo "
                                    - ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createDate", [], "any", false, false, false, 44), "g:i A m/d/Y"), "html", null, true);
            echo "</a>
                            </div>
                            <p class=\"comment\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                            <div class=\"pad-ver\">
                                <div class=\"btn-group\">
                                    <div class=\"comment-rating jq-stars\" data-comment-rating=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "rate", [], "any", false, false, false, 49), "html", null, true);
            echo "\" data-comment-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\"></div>
                                </div>
                                ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
                // line 52
                echo "                                    <textarea class=\"comment-answer form-control\" rows=\"2\" data-comment-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\" placeholder=\"What are you thinking?\"></textarea>
                                    <div class=\"mar-top clearfix\">
                                        <button class=\"submit-answer btn btn-sm bg-dark pull-right\" data-comment-id=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\" disabled style=\"float: right; color: white\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i> Answer</button>
                                    </div>
                                    <div>
                                        <a class=\"load-answers btn btn-sm btn-default btn-hover-primary\" data-id= \"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">Load answers</a>
                                    </div>
                                ";
            }
            // line 60
            echo "                            </div>
                            <hr>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </div>
        </div>
    </div>
</div>

<script>
    var userToken = null;
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "    // Set Token as global Javascript variable
    userToken = '";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "token", [], "any", false, false, false, 74), "html", null, true);
            echo "'
    ";
        }
        // line 76
        echo "
    function rateComment(currentRating, \$el) {
        let commentId = \$el.data('comment-id');
        let path = \"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_rate_comment", ["commentId" => "COMMENT_ID"]);
        echo "\";
        path = path.replace('COMMENT_ID', commentId);

        let first = Math.floor(Math.random() * 2500);
        let second = Math.floor(Math.random() * 2500);
        let result = first % second;

        \$.ajax({
            url: path,
            type: 'POST',
            headers: {
                auth: 'Bearer ' + userToken,
                first: first,
                second: second,
                value: result
            },
            data: JSON.stringify({
                'rate': currentRating
            }),
            dataType: 'json',
            success: function (data) {
            }
        });
    }

    // Init stars rating
    \$(function() {
        \$('.comment-rating').each((i, elem) => {
            \$(\".comment-rating[data-comment-id=\" + \$(elem).data('comment-id') + \"]\").starRating({
                initialRating: parseFloat(\$(elem).data('comment-rating')),
                starSize: 25,
                readOnly: ! userToken,
                forceRoundUp: true,
                callback: (currentRating, \$el) => {
                    rateComment(currentRating, \$el);
                }
            });
        });
    });

    \$(document).ready(() => {
        // Load answers action (only connected users)
        \$('.load-answers').click((e) => {
            // Avoid loading answers many times
            if (\$(e.target).hasClass('already')) {
                return;
            }

            let commentId = \$(e.target).data('id');
            let path = \"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_get_comment_answers", ["commentId" => "COMMENT_ID"]);
        echo "\";
            path = path.replace('COMMENT_ID', commentId);

            \$.ajax({
                url: path,
                type: 'GET',
                headers: {
                    auth: 'Bearer ' + userToken
                },
                dataType: 'json',
                success: function (data) {
                    let htmlContent = '';
                    console.info(data);
                    data.forEach((d) => {
                        console.log(d);
                        htmlContent += '<div><div class=\"media-block\"><a class=\"media-left\"><img class=\"profile-picture img-circle img-sm\" alt=\"Profile Picture\" src=\"' + d.user_picture + '\"></a> <div class=\"media-body\"> <div class=\"mar-btm\"> <a class=\"author btn-link text-semibold media-heading box-inline\">' + d.user_fullname + '</a> </div> <p class=\"comment\">' + d.content + '</p> <div class=\"pad-ver\"> <div class=\"btn-group\"> </div> </div> <hr></div></div></div>';
                    });

                    if (htmlContent.length === 0) {
                        htmlContent = '<div><div class=\"media-block\"><div class=\"media-body\"><div class=\"mar-btm\"><h5>No answers for this comment</h5></div><hr/></div></div></div>';
                    }
                    \$('.media-body[data-id=' + commentId + ']').append(htmlContent);
                    console.log(\$(e.target));
                    \$(e.target).addClass('already');
                }
            });
        });

        // Disable and Enable Submit comment button
        \$('.comment-content').keyup((e) => {
            let length = \$(e.target).val().length;
            console.log(length);

            if (length > 0) {
                \$('.submit-comment').removeAttr('disabled');
            } else {
                \$('.submit-comment').attr('disabled', 'disabled');
            }
        });

        // Disable and Enable Submit comment button
        \$('.comment-answer').keyup((e) => {
            let length = \$(e.target).val().length;
            let commentId = \$(e.target).data('comment-id');
            console.log(length);

            if (length > 0) {
                \$('.submit-answer[data-comment-id=' + commentId + ']').removeAttr('disabled');
            } else {
                \$('.submit-answer[data-comment-id=' + commentId + ']').attr('disabled', 'disabled');
            }
        });

        // Right comment action (only connected users)
        \$('.submit-comment').click((e) => {
            let path = \"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_create_comment", ["articleId" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
        echo "\";
            let first = Math.floor(Math.random() * 2500);
            let second = Math.floor(Math.random() * 2500);
            let result = first % second;

            \$.ajax({
                url: path,
                type: 'POST',
                data: JSON.stringify({
                    'content': \$('.comment-content').val()
                }),
                headers: {
                    auth: 'Bearer ' + userToken,
                    first: first,
                    second: second,
                    value: result
                },
                dataType: 'json',
                success: function (d) {
                    let htmlContent = '';
                    console.info(d);
                    htmlContent += '<div class=\"media-block\"><a class=\"media-left\"><img class=\"profile-picture img-circle img-sm\" alt=\"Profile Picture\" src=\"' + d.user_picture + '\"></a> <div class=\"media-body\"> <div class=\"mar-btm\"> <a class=\"author btn-link text-semibold media-heading box-inline\">' + d.user_fullname + ' - Just now</a> </div> <p class=\"comment\">' + d.content + '</p> <div class=\"pad-ver\"> <div class=\"btn-group\"> </div> </div> <hr></div></div>';
                    \$('.panel-body-comments').prepend(htmlContent);
                    \$('.comment-content').val('');
                    \$('.submit-comment').attr('disabled', 'disabled');
                }
            });
        });

        // Right comment answer action (only connected users)
        \$('.submit-answer').click((e) => {
            console.log(\$(e.target).data('comment-id'));
            let commentId = \$(e.target).data('comment-id');
            let path = \"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_create_answer", ["commentId" => "COMMENT_ID"]);
        echo "\";
            path = path.replace('COMMENT_ID', commentId);
            let first = Math.floor(Math.random() * 2500);
            let second = Math.floor(Math.random() * 2500);
            let result = first % second;

            \$.ajax({
                url: path,
                type: 'POST',
                data: JSON.stringify({
                    'content': \$('.comment-answer[data-comment-id=' + commentId + ']').val()
                }),
                headers: {
                    auth: 'Bearer ' + userToken,
                    first: first,
                    second: second,
                    value: result
                },
                dataType: 'json',
                success: function (d) {
                    let htmlContent = '';
                    console.info(d);
                    htmlContent += '<div class=\"media-block\"><a class=\"media-left\"><img class=\"profile-picture img-circle img-sm\" alt=\"Profile Picture\" src=\"' + d.user_picture + '\"></a> <div class=\"media-body\"> <div class=\"mar-btm\"> <a class=\"author btn-link text-semibold media-heading box-inline\">' + d.user_fullname + ' - Just now</a> </div> <p class=\"comment\">' + d.content + '</p> <div class=\"pad-ver\"> <div class=\"btn-group\"> </div> </div> <hr></div></div>';
                    \$('.media-body[data-id=' + commentId + ']').append(htmlContent);
                    \$('.comment-answer[data-comment-id=' + commentId + ']').val('');
                    \$(e.target).attr('disabled', 'disabled');
                }
            });
        });

    });
</script>

<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("star-rating/jquery.star-rating-svg.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/comments-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 249,  330 => 216,  294 => 183,  236 => 128,  184 => 79,  179 => 76,  174 => 74,  171 => 73,  169 => 72,  160 => 65,  150 => 60,  144 => 57,  138 => 54,  132 => 52,  130 => 51,  123 => 49,  117 => 46,  112 => 44,  108 => 43,  103 => 41,  99 => 40,  96 => 39,  92 => 38,  86 => 34,  73 => 24,  62 => 16,  55 => 11,  48 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container bootdey\">
    <div class=\"col-md-12 bootstrap snippets\">
        <div class=\"panel\">
            <div class=\"panel-body\">
                {% if app.user %}
                    <textarea class=\"comment-content form-control\" rows=\"2\" placeholder=\"What are you thinking?\"></textarea>
                    <div class=\"mar-top clearfix\">
                        <button class=\"submit-comment btn btn-sm bg-dark pull-right\" disabled style=\"float: right; color: white\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i> Comment</button>
                    </div>
                {% else %}
                    <div class=\"mar-top clearfix\">
                        <ul class=\"list-inline text-center\">
                            <h3>Connect for comment, rating and view answers</h3>
                            <br>
                            <li class=\"list-inline-item\">
                                <a href=\"{{ path('connect_google_start') }}\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-google fa-stack-1x fa-inverse\"></i>
                                    </span>
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"{{ path('connect_facebook_start') }}\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                {% endif %}
            </div>
        </div>
        <div class=\"panel\">
            <div class=\"panel-body panel-body-comments\">
                {% for comment in comments %}
                    <div class=\"media-block\">
                        <a class=\"media-left\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"{{ comment.user.picture }}\"></a>
                        <div class=\"media-body\" data-id= \"{{ comment.id }}\">
                            <div class=\"mar-btm\">
                                <a class=\"author btn-link text-semibold media-heading box-inline\">{{ comment.user.fullName() }}
                                    - {{ comment.createDate | date(\"g:i A m/d/Y\") }}</a>
                            </div>
                            <p class=\"comment\">{{ comment.content }}</p>
                            <div class=\"pad-ver\">
                                <div class=\"btn-group\">
                                    <div class=\"comment-rating jq-stars\" data-comment-rating=\"{{ comment.rate }}\" data-comment-id=\"{{ comment.id }}\"></div>
                                </div>
                                {% if app.user %}
                                    <textarea class=\"comment-answer form-control\" rows=\"2\" data-comment-id=\"{{ comment.id }}\" placeholder=\"What are you thinking?\"></textarea>
                                    <div class=\"mar-top clearfix\">
                                        <button class=\"submit-answer btn btn-sm bg-dark pull-right\" data-comment-id=\"{{ comment.id }}\" disabled style=\"float: right; color: white\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i> Answer</button>
                                    </div>
                                    <div>
                                        <a class=\"load-answers btn btn-sm btn-default btn-hover-primary\" data-id= \"{{ comment.id }}\">Load answers</a>
                                    </div>
                                {% endif %}
                            </div>
                            <hr>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>

<script>
    var userToken = null;
    {% if app.user %}
    // Set Token as global Javascript variable
    userToken = '{{ app.user.token }}'
    {% endif %}

    function rateComment(currentRating, \$el) {
        let commentId = \$el.data('comment-id');
        let path = \"{{ path('api_rate_comment', {'commentId': 'COMMENT_ID'}) }}\";
        path = path.replace('COMMENT_ID', commentId);

        let first = Math.floor(Math.random() * 2500);
        let second = Math.floor(Math.random() * 2500);
        let result = first % second;

        \$.ajax({
            url: path,
            type: 'POST',
            headers: {
                auth: 'Bearer ' + userToken,
                first: first,
                second: second,
                value: result
            },
            data: JSON.stringify({
                'rate': currentRating
            }),
            dataType: 'json',
            success: function (data) {
            }
        });
    }

    // Init stars rating
    \$(function() {
        \$('.comment-rating').each((i, elem) => {
            \$(\".comment-rating[data-comment-id=\" + \$(elem).data('comment-id') + \"]\").starRating({
                initialRating: parseFloat(\$(elem).data('comment-rating')),
                starSize: 25,
                readOnly: ! userToken,
                forceRoundUp: true,
                callback: (currentRating, \$el) => {
                    rateComment(currentRating, \$el);
                }
            });
        });
    });

    \$(document).ready(() => {
        // Load answers action (only connected users)
        \$('.load-answers').click((e) => {
            // Avoid loading answers many times
            if (\$(e.target).hasClass('already')) {
                return;
            }

            let commentId = \$(e.target).data('id');
            let path = \"{{ path('api_get_comment_answers', {'commentId': 'COMMENT_ID'}) }}\";
            path = path.replace('COMMENT_ID', commentId);

            \$.ajax({
                url: path,
                type: 'GET',
                headers: {
                    auth: 'Bearer ' + userToken
                },
                dataType: 'json',
                success: function (data) {
                    let htmlContent = '';
                    console.info(data);
                    data.forEach((d) => {
                        console.log(d);
                        htmlContent += '<div><div class=\"media-block\"><a class=\"media-left\"><img class=\"profile-picture img-circle img-sm\" alt=\"Profile Picture\" src=\"' + d.user_picture + '\"></a> <div class=\"media-body\"> <div class=\"mar-btm\"> <a class=\"author btn-link text-semibold media-heading box-inline\">' + d.user_fullname + '</a> </div> <p class=\"comment\">' + d.content + '</p> <div class=\"pad-ver\"> <div class=\"btn-group\"> </div> </div> <hr></div></div></div>';
                    });

                    if (htmlContent.length === 0) {
                        htmlContent = '<div><div class=\"media-block\"><div class=\"media-body\"><div class=\"mar-btm\"><h5>No answers for this comment</h5></div><hr/></div></div></div>';
                    }
                    \$('.media-body[data-id=' + commentId + ']').append(htmlContent);
                    console.log(\$(e.target));
                    \$(e.target).addClass('already');
                }
            });
        });

        // Disable and Enable Submit comment button
        \$('.comment-content').keyup((e) => {
            let length = \$(e.target).val().length;
            console.log(length);

            if (length > 0) {
                \$('.submit-comment').removeAttr('disabled');
            } else {
                \$('.submit-comment').attr('disabled', 'disabled');
            }
        });

        // Disable and Enable Submit comment button
        \$('.comment-answer').keyup((e) => {
            let length = \$(e.target).val().length;
            let commentId = \$(e.target).data('comment-id');
            console.log(length);

            if (length > 0) {
                \$('.submit-answer[data-comment-id=' + commentId + ']').removeAttr('disabled');
            } else {
                \$('.submit-answer[data-comment-id=' + commentId + ']').attr('disabled', 'disabled');
            }
        });

        // Right comment action (only connected users)
        \$('.submit-comment').click((e) => {
            let path = \"{{ path('api_create_comment', {'articleId': article.id}) }}\";
            let first = Math.floor(Math.random() * 2500);
            let second = Math.floor(Math.random() * 2500);
            let result = first % second;

            \$.ajax({
                url: path,
                type: 'POST',
                data: JSON.stringify({
                    'content': \$('.comment-content').val()
                }),
                headers: {
                    auth: 'Bearer ' + userToken,
                    first: first,
                    second: second,
                    value: result
                },
                dataType: 'json',
                success: function (d) {
                    let htmlContent = '';
                    console.info(d);
                    htmlContent += '<div class=\"media-block\"><a class=\"media-left\"><img class=\"profile-picture img-circle img-sm\" alt=\"Profile Picture\" src=\"' + d.user_picture + '\"></a> <div class=\"media-body\"> <div class=\"mar-btm\"> <a class=\"author btn-link text-semibold media-heading box-inline\">' + d.user_fullname + ' - Just now</a> </div> <p class=\"comment\">' + d.content + '</p> <div class=\"pad-ver\"> <div class=\"btn-group\"> </div> </div> <hr></div></div>';
                    \$('.panel-body-comments').prepend(htmlContent);
                    \$('.comment-content').val('');
                    \$('.submit-comment').attr('disabled', 'disabled');
                }
            });
        });

        // Right comment answer action (only connected users)
        \$('.submit-answer').click((e) => {
            console.log(\$(e.target).data('comment-id'));
            let commentId = \$(e.target).data('comment-id');
            let path = \"{{ path('api_create_answer', {'commentId': 'COMMENT_ID'}) }}\";
            path = path.replace('COMMENT_ID', commentId);
            let first = Math.floor(Math.random() * 2500);
            let second = Math.floor(Math.random() * 2500);
            let result = first % second;

            \$.ajax({
                url: path,
                type: 'POST',
                data: JSON.stringify({
                    'content': \$('.comment-answer[data-comment-id=' + commentId + ']').val()
                }),
                headers: {
                    auth: 'Bearer ' + userToken,
                    first: first,
                    second: second,
                    value: result
                },
                dataType: 'json',
                success: function (d) {
                    let htmlContent = '';
                    console.info(d);
                    htmlContent += '<div class=\"media-block\"><a class=\"media-left\"><img class=\"profile-picture img-circle img-sm\" alt=\"Profile Picture\" src=\"' + d.user_picture + '\"></a> <div class=\"media-body\"> <div class=\"mar-btm\"> <a class=\"author btn-link text-semibold media-heading box-inline\">' + d.user_fullname + ' - Just now</a> </div> <p class=\"comment\">' + d.content + '</p> <div class=\"pad-ver\"> <div class=\"btn-group\"> </div> </div> <hr></div></div>';
                    \$('.media-body[data-id=' + commentId + ']').append(htmlContent);
                    \$('.comment-answer[data-comment-id=' + commentId + ']').val('');
                    \$(e.target).attr('disabled', 'disabled');
                }
            });
        });

    });
</script>

<script src=\"{{ asset('star-rating/jquery.star-rating-svg.min.js') }}\"></script>", "article/comments-template.html.twig", "/var/www/project/templates/article/comments-template.html.twig");
    }
}
