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

/* base.html.twig */
class __TwigTemplate_544122ef99187418c09556ce95f6b77b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!-- Google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
</head>
<body>
<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Blog Articles</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto py-4 py-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"https://drive.google.com/file/d/1oXhXqky4naQkKXm6KQ2BqTLpPtWRtgK4/view?usp=sharing\" target=\"_blank\">About me</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"mailto:lionel.lellouche@gmail.com\" target=\"_blank\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "<!-- Main Content-->
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        </div>
    </div>
<!-- Footer-->
<footer class=\"border-top\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"";
        // line 65
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
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_facebook_start");
        echo "\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/llellouche/article-comments\" target=\"_blank\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
                <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Blog Articles 2023</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
<!-- Core theme JS-->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url(";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-bg.jpg"), "html", null, true);
        echo ")\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"site-heading\">
                        <h1>Blog Articles</h1>
                        <span class=\"subheading\">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 55,  171 => 39,  168 => 38,  161 => 37,  150 => 97,  123 => 73,  112 => 65,  101 => 56,  99 => 55,  94 => 52,  92 => 37,  82 => 30,  72 => 23,  63 => 17,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/favicon.ico') }}\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!-- Google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
</head>
<body>
<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <a class=\"navbar-brand\" href=\"{{ path('index') }}\">Blog Articles</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto py-4 py-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"{{ path('index') }}\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"https://drive.google.com/file/d/1oXhXqky4naQkKXm6KQ2BqTLpPtWRtgK4/view?usp=sharing\" target=\"_blank\">About me</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"mailto:lionel.lellouche@gmail.com\" target=\"_blank\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
{% block header %}
    <!-- Page Header-->
    <header class=\"masthead\" style=\"background-image: url({{ asset('assets/img/home-bg.jpg') }})\">
        <div class=\"container position-relative px-4 px-lg-5\">
            <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                <div class=\"col-md-10 col-lg-8 col-xl-7\">
                    <div class=\"site-heading\">
                        <h1>Blog Articles</h1>
                        <span class=\"subheading\">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
{% endblock %}
<!-- Main Content-->
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            {% block content %}{% endblock %}
        </div>
    </div>
<!-- Footer-->
<footer class=\"border-top\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <ul class=\"list-inline text-center\">
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
                    <li class=\"list-inline-item\">
                        <a href=\"https://github.com/llellouche/article-comments\" target=\"_blank\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
                <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Blog Articles 2023</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
<!-- Core theme JS-->
<script src=\"{{ asset('js/scripts.js') }}\"></script>
</body>
</html>
", "base.html.twig", "/Users/llellouche/sideprojects/docker-sf/project/templates/base.html.twig");
    }
}
