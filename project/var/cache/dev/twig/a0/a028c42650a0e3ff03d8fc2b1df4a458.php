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
class __TwigTemplate_01f7aa3147f28d2b5a430609ed8cf534 extends Template
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
        echo "    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">Man must explore, and this is exploration at its greatest</h2>
            <h3 class=\"post-subtitle\">Problems look mighty small from 150 miles up</h3>
        </a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on September 24, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\"><h2 class=\"post-title\">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on September 18, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">Science has not yet mastered prophecy</h2>
            <h3 class=\"post-subtitle\">We predict too much for the next year and yet far too little for the next ten.</h3>
        </a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on August 24, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">Failure is not an option</h2>
            <h3 class=\"post-subtitle\">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
        </a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on July 8, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Pager-->
    <div class=\"d-flex justify-content-end mb-4\"><a class=\"btn btn-primary text-uppercase\" href=\"#!\">Older Posts →</a></div>
";
        
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
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">Man must explore, and this is exploration at its greatest</h2>
            <h3 class=\"post-subtitle\">Problems look mighty small from 150 miles up</h3>
        </a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on September 24, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\"><h2 class=\"post-title\">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on September 18, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">Science has not yet mastered prophecy</h2>
            <h3 class=\"post-subtitle\">We predict too much for the next year and yet far too little for the next ten.</h3>
        </a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on August 24, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Post preview-->
    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">Failure is not an option</h2>
            <h3 class=\"post-subtitle\">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
        </a>
        <p class=\"post-meta\">
            Posted by
            <a href=\"#!\">Start Bootstrap</a>
            on July 8, 2022
        </p>
    </div>
    <!-- Divider-->
    <hr class=\"my-4\" />
    <!-- Pager-->
    <div class=\"d-flex justify-content-end mb-4\"><a class=\"btn btn-primary text-uppercase\" href=\"#!\">Older Posts →</a></div>
{% endblock %}", "article/list.html.twig", "/var/www/project/templates/article/list.html.twig");
    }
}
