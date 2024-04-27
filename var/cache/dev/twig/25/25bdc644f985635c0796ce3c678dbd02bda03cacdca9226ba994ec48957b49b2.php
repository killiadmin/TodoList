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

/* @WebProfiler/Icon/close.svg */
class __TwigTemplate_f86303f0f01acc240875f1f7555f95a6bf4dc64d8ac1e37ee7784dac562e2f45 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/close.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M21.1,18.3c0.8,0.8,0.8,2,0,2.8c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6L12,14.8l-6.3,6.3
    c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8L9.2,12L2.9,5.7c-0.8-0.8-0.8-2,0-2.8c0.8-0.8,2-0.8,2.8,0L12,9.2
    l6.3-6.3c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8L14.8,12L21.1,18.3z\"/>
</svg>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/close.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M21.1,18.3c0.8,0.8,0.8,2,0,2.8c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6L12,14.8l-6.3,6.3
    c-0.4,0.4-0.9,0.6-1.4,0.6s-1-0.2-1.4-0.6c-0.8-0.8-0.8-2,0-2.8L9.2,12L2.9,5.7c-0.8-0.8-0.8-2,0-2.8c0.8-0.8,2-0.8,2.8,0L12,9.2
    l6.3-6.3c0.8-0.8,2-0.8,2.8,0c0.8,0.8,0.8,2,0,2.8L14.8,12L21.1,18.3z\"/>
</svg>
", "@WebProfiler/Icon/close.svg", "/Applications/MAMP/htdocs/Todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Icon/close.svg");
    }
}
