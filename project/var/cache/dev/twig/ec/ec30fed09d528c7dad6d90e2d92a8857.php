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

/* article/view.html.twig */
class __TwigTemplate_ff09d73392b6ce580c656a21be666892 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/post-bg.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"post-heading\">
                        <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
                        <span class=\"meta\">
                                Posted by
                                <a href=\"#!\">Start Bootstrap</a>
                                on August 24, 2022
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    <article class=\"mb-4\">
        ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25), "html", null, true);
        echo "
    </article>
    <div class=\"container bootdey\">
        <div class=\"col-md-12 bootstrap snippets\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <textarea class=\"form-control\" rows=\"2\" placeholder=\"What are you thinking?\"></textarea>
                    <div class=\"mar-top clearfix\">
                        <button class=\"btn btn-sm bg-dark pull-right\" style=\"float: right; color: white\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i> Share</button>
                    </div>
                </div>
            </div>
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    <div class=\"media-block\">
                        <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar1.png\"></a>
                        <div class=\"media-body\">
                            <div class=\"mar-btm\">
                                <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Lisa D.</a>
                                <p class=\"text-muted text-sm\"><i class=\"fa fa-mobile fa-lg\"></i> - From Mobile - 11 min ago</p>
                            </div>
                            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <div class=\"pad-ver\">
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                    <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                </div>
                                <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                            </div>
                            <hr>

                            <!-- Comments -->
                            <div>
                                <div class=\"media-block\">
                                    <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar2.png\"></a>
                                    <div class=\"media-body\">
                                        <div class=\"mar-btm\">
                                            <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Bobby Marz</a>
                                            <p class=\"text-muted text-sm\"><i class=\"fa fa-mobile fa-lg\"></i> - From Mobile - 7 min ago</p>
                                        </div>
                                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        <div class=\"pad-ver\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-sm btn-default btn-hover-success active\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i> You Like it</a>
                                                <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                            </div>
                                            <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class=\"media-block\">
                                    <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar3.png\">
                                    </a>
                                    <div class=\"media-body\">
                                        <div class=\"mar-btm\">
                                            <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Lucy Moon</a>
                                            <p class=\"text-muted text-sm\"><i class=\"fa fa-globe fa-lg\"></i> - From Web - 2 min ago</p>
                                        </div>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                                        <div class=\"pad-ver\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                                <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                            </div>
                                            <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->


                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    <div class=\"media-block pad-all\">
                        <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar1.png\"></a>
                        <div class=\"media-body\">
                            <div class=\"mar-btm\">
                                <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">John Doe</a>
                                <p class=\"text-muted text-sm\"><i class=\"fa fa-mobile fa-lg\"></i> - From Mobile - 11 min ago</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <img class=\"img-responsive thumbnail\" src=\"https://www.bootdey.com/image/400x300\" alt=\"Image\">
                            <div class=\"pad-ver\">
                                <span class=\"tag tag-sm\"><i class=\"fa fa-heart text-danger\"></i> 250 Likes</span>
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                    <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                </div>
                                <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                            </div>
                            <hr>

                            <!-- Comments -->
                            <div>
                                <div class=\"media-block pad-all\">
                                    <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar2.png\"></a>
                                    <div class=\"media-body\">
                                        <div class=\"mar-btm\">
                                            <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Maria Leanz</a>
                                            <p class=\"text-muted text-sm\"><i class=\"fa fa-globe fa-lg\"></i> - From Web - 2 min ago</p>
                                        </div>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                                        <div>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                                <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                            </div>
                                            <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            margin-top:20px;
            background:#ebeef0;
        }

        .img-sm {
            width: 46px;
            height: 46px;
        }

        .panel {
            box-shadow: 0 2px 0 rgba(0,0,0,0.075);
            border-radius: 0;
            border: 0;
            margin-bottom: 15px;
        }

        .panel .panel-footer, .panel>:last-child {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .panel .panel-heading, .panel>:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .panel-body {
            padding: 25px 20px;
        }


        .media-block .media-left {
            display: block;
            float: left
        }

        .media-block .media-right {
            float: right
        }

        .media-block .media-body {
            display: block;
            overflow: hidden;
            width: auto
        }

        .middle .media-left,
        .middle .media-right,
        .middle .media-body {
            vertical-align: middle
        }

        .thumbnail {
            border-radius: 0;
            border-color: #e9e9e9
        }

        .tag.tag-sm, .btn-group-sm>.tag {
            padding: 5px 10px;
        }

        .tag:not(.label) {
            background-color: #fff;
            padding: 6px 12px;
            border-radius: 2px;
            border: 1px solid #cdd6e1;
            font-size: 12px;
            line-height: 1.42857;
            vertical-align: middle;
            -webkit-transition: all .15s;
            transition: all .15s;
        }
        .text-muted, a.text-muted:hover, a.text-muted:focus {
            color: #acacac;
        }
        .text-sm {
            font-size: 0.9em;
        }
        .text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
            line-height: 1.25;
        }

        .btn-trans {
            background-color: transparent;
            border-color: transparent;
            color: #929292;
        }

        .btn-icon {
            padding-left: 9px;
            padding-right: 9px;
        }

        .btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
            padding: 5px 10px !important;
        }

        .mar-top {
            margin-top: 15px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  97 => 24,  90 => 23,  71 => 10,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block header %}
    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url({{ asset('assets/img/post-bg.jpg') }})\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"post-heading\">
                        <h1>{{ article.title }}</h1>
                        <span class=\"meta\">
                                Posted by
                                <a href=\"#!\">Start Bootstrap</a>
                                on August 24, 2022
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

{% block content %}
    <article class=\"mb-4\">
        {{ article.content }}
    </article>
    <div class=\"container bootdey\">
        <div class=\"col-md-12 bootstrap snippets\">
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <textarea class=\"form-control\" rows=\"2\" placeholder=\"What are you thinking?\"></textarea>
                    <div class=\"mar-top clearfix\">
                        <button class=\"btn btn-sm bg-dark pull-right\" style=\"float: right; color: white\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i> Share</button>
                    </div>
                </div>
            </div>
            <div class=\"panel\">
                <div class=\"panel-body\">
                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    <div class=\"media-block\">
                        <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar1.png\"></a>
                        <div class=\"media-body\">
                            <div class=\"mar-btm\">
                                <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Lisa D.</a>
                                <p class=\"text-muted text-sm\"><i class=\"fa fa-mobile fa-lg\"></i> - From Mobile - 11 min ago</p>
                            </div>
                            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <div class=\"pad-ver\">
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                    <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                </div>
                                <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                            </div>
                            <hr>

                            <!-- Comments -->
                            <div>
                                <div class=\"media-block\">
                                    <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar2.png\"></a>
                                    <div class=\"media-body\">
                                        <div class=\"mar-btm\">
                                            <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Bobby Marz</a>
                                            <p class=\"text-muted text-sm\"><i class=\"fa fa-mobile fa-lg\"></i> - From Mobile - 7 min ago</p>
                                        </div>
                                        <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                        <div class=\"pad-ver\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-sm btn-default btn-hover-success active\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i> You Like it</a>
                                                <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                            </div>
                                            <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class=\"media-block\">
                                    <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar3.png\">
                                    </a>
                                    <div class=\"media-body\">
                                        <div class=\"mar-btm\">
                                            <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Lucy Moon</a>
                                            <p class=\"text-muted text-sm\"><i class=\"fa fa-globe fa-lg\"></i> - From Web - 2 min ago</p>
                                        </div>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                                        <div class=\"pad-ver\">
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                                <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                            </div>
                                            <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->


                    <!-- Newsfeed Content -->
                    <!--===================================================-->
                    <div class=\"media-block pad-all\">
                        <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar1.png\"></a>
                        <div class=\"media-body\">
                            <div class=\"mar-btm\">
                                <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">John Doe</a>
                                <p class=\"text-muted text-sm\"><i class=\"fa fa-mobile fa-lg\"></i> - From Mobile - 11 min ago</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <img class=\"img-responsive thumbnail\" src=\"https://www.bootdey.com/image/400x300\" alt=\"Image\">
                            <div class=\"pad-ver\">
                                <span class=\"tag tag-sm\"><i class=\"fa fa-heart text-danger\"></i> 250 Likes</span>
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                    <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                </div>
                                <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                            </div>
                            <hr>

                            <!-- Comments -->
                            <div>
                                <div class=\"media-block pad-all\">
                                    <a class=\"media-left\" href=\"#\"><img class=\"img-circle img-sm\" alt=\"Profile Picture\" src=\"https://bootdey.com/img/Content/avatar/avatar2.png\"></a>
                                    <div class=\"media-body\">
                                        <div class=\"mar-btm\">
                                            <a href=\"#\" class=\"btn-link text-semibold media-heading box-inline\">Maria Leanz</a>
                                            <p class=\"text-muted text-sm\"><i class=\"fa fa-globe fa-lg\"></i> - From Web - 2 min ago</p>
                                        </div>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate ?</p>
                                        <div>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-sm btn-default btn-hover-success\" href=\"#\"><i class=\"fa fa-thumbs-up\"></i></a>
                                                <a class=\"btn btn-sm btn-default btn-hover-danger\" href=\"#\"><i class=\"fa fa-thumbs-down\"></i></a>
                                            </div>
                                            <a class=\"btn btn-sm btn-default btn-hover-primary\" href=\"#\">Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!-- End Newsfeed Content -->
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            margin-top:20px;
            background:#ebeef0;
        }

        .img-sm {
            width: 46px;
            height: 46px;
        }

        .panel {
            box-shadow: 0 2px 0 rgba(0,0,0,0.075);
            border-radius: 0;
            border: 0;
            margin-bottom: 15px;
        }

        .panel .panel-footer, .panel>:last-child {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .panel .panel-heading, .panel>:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .panel-body {
            padding: 25px 20px;
        }


        .media-block .media-left {
            display: block;
            float: left
        }

        .media-block .media-right {
            float: right
        }

        .media-block .media-body {
            display: block;
            overflow: hidden;
            width: auto
        }

        .middle .media-left,
        .middle .media-right,
        .middle .media-body {
            vertical-align: middle
        }

        .thumbnail {
            border-radius: 0;
            border-color: #e9e9e9
        }

        .tag.tag-sm, .btn-group-sm>.tag {
            padding: 5px 10px;
        }

        .tag:not(.label) {
            background-color: #fff;
            padding: 6px 12px;
            border-radius: 2px;
            border: 1px solid #cdd6e1;
            font-size: 12px;
            line-height: 1.42857;
            vertical-align: middle;
            -webkit-transition: all .15s;
            transition: all .15s;
        }
        .text-muted, a.text-muted:hover, a.text-muted:focus {
            color: #acacac;
        }
        .text-sm {
            font-size: 0.9em;
        }
        .text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
            line-height: 1.25;
        }

        .btn-trans {
            background-color: transparent;
            border-color: transparent;
            color: #929292;
        }

        .btn-icon {
            padding-left: 9px;
            padding-right: 9px;
        }

        .btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
            padding: 5px 10px !important;
        }

        .mar-top {
            margin-top: 15px;
        }
    </style>
{% endblock %}", "article/view.html.twig", "/var/www/project/templates/article/view.html.twig");
    }
}
