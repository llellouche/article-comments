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
class __TwigTemplate_64088b551557d3a7222927cdebf771db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script src=\"https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("star-rating/star-rating-svg.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/post-bg.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"post-heading\">
                        <h1>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
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

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "    <article class=\"mb-4\">
        ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), "html", null, true);
        echo "
    </article>

    ";
        // line 33
        echo twig_include($this->env, $context, "article/comments-template.html.twig");
        echo "

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
        return array (  129 => 33,  123 => 30,  120 => 29,  113 => 28,  94 => 15,  86 => 10,  83 => 9,  76 => 8,  67 => 6,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block head %}
    {{ parent() }}
    <script src=\"https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('star-rating/star-rating-svg.css') }}\">
{% endblock %}
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

    {{ include('article/comments-template.html.twig') }}

{% endblock %}", "article/view.html.twig", "/var/www/project/templates/article/view.html.twig");
    }
}
