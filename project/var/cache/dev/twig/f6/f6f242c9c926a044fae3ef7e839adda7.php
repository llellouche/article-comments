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

/* article/list.html.twig */
class __TwigTemplate_0a0cf1772b5810ea712e750aa75a7fa2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "        <!-- Post preview-->
        <div class=\"post-preview\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_view", ["articleId" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\">
                <h2 class=\"post-title\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
                <h3 class=\"post-subtitle\">";
            // line 9
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 9)) > 40)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 9), 0, 40) . "...")) : (twig_get_attribute($this->env, $this->source, $context["article"], "length", [], "any", false, false, false, 9))), "html", null, true);
            echo "</h3>
            </a>
            <p class=\"post-meta\">
                Posted by
                Blog Article
                on September 24, 2022
            </p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  72 => 8,  68 => 7,  64 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    {% for article in articles %}
        <!-- Post preview-->
        <div class=\"post-preview\">
            <a href=\"{{ path('article_view', {'articleId': article.id}) }}\">
                <h2 class=\"post-title\">{{ article.title }}</h2>
                <h3 class=\"post-subtitle\">{{ article.content | length > 40 ? article.content | slice(0, 40) ~ '...' : article.length }}</h3>
            </a>
            <p class=\"post-meta\">
                Posted by
                Blog Article
                on September 24, 2022
            </p>
        </div>
    {% endfor %}
{% endblock %}", "article/list.html.twig", "/Users/llellouche/sideprojects/docker-sf/project/templates/article/list.html.twig");
    }
}
