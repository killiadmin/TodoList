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

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_1212f339934c58b8428f034f3d18b49c5bee62961d0a6d2888562cd08701cbd7 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo ".sf-reset .traces {
    padding: 0 0 1em 1.5em;
}
.sf-reset .traces a {
    font-size: 14px;
}
.sf-reset .traces abbr {
    border-bottom-color: #AAA;
    padding-bottom: 2px;
}
.sf-reset .traces li {
    color: #222;
    font-size: 14px;
    padding: 5px 0;
    list-style-type: decimal;
    margin: 0 0 0 1em;
}
.sf-reset .traces li.selected {
    background: rgba(255, 255, 153, 0.5);
}

.sf-reset .traces ol li {
    font-size: 12px;
    color: #777;
}
.sf-reset #logs .traces li.error {
    color: #AA3333;
}
.sf-reset #logs .traces li.warning {
    background: #FFCC00;
}
.sf-reset .trace {
    border: 1px solid #DDD;
    background: #FFF;
    padding: 10px;
    overflow: auto;
    margin: 1em 0;
}
.sf-reset .trace code,
#traces-text pre {
    font-size: 13px;
}
.sf-reset .block-exception {
    margin-bottom: 2em;
    background-color: #FFF;
    border: 1px solid #EEE;
    padding: 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception h1 {
    font-size: 21px;
    font-weight: normal;
    margin: 0 0 12px;
}
.sf-reset .block-exception .linked {
    margin-top: 1em;
}

.sf-reset .block {
    margin-bottom: 2em;
}
.sf-reset .block h2 {
    font-size: 16px;
}
.sf-reset .block-exception div {
    font-size: 14px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 110px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 650px;
    margin-left: 20px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .toggle {
    vertical-align: middle;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".sf-reset .traces {
    padding: 0 0 1em 1.5em;
}
.sf-reset .traces a {
    font-size: 14px;
}
.sf-reset .traces abbr {
    border-bottom-color: #AAA;
    padding-bottom: 2px;
}
.sf-reset .traces li {
    color: #222;
    font-size: 14px;
    padding: 5px 0;
    list-style-type: decimal;
    margin: 0 0 0 1em;
}
.sf-reset .traces li.selected {
    background: rgba(255, 255, 153, 0.5);
}

.sf-reset .traces ol li {
    font-size: 12px;
    color: #777;
}
.sf-reset #logs .traces li.error {
    color: #AA3333;
}
.sf-reset #logs .traces li.warning {
    background: #FFCC00;
}
.sf-reset .trace {
    border: 1px solid #DDD;
    background: #FFF;
    padding: 10px;
    overflow: auto;
    margin: 1em 0;
}
.sf-reset .trace code,
#traces-text pre {
    font-size: 13px;
}
.sf-reset .block-exception {
    margin-bottom: 2em;
    background-color: #FFF;
    border: 1px solid #EEE;
    padding: 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception h1 {
    font-size: 21px;
    font-weight: normal;
    margin: 0 0 12px;
}
.sf-reset .block-exception .linked {
    margin-top: 1em;
}

.sf-reset .block {
    margin-bottom: 2em;
}
.sf-reset .block h2 {
    font-size: 16px;
}
.sf-reset .block-exception div {
    font-size: 14px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 110px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 650px;
    margin-left: 20px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .toggle {
    vertical-align: middle;
}
", "@WebProfiler/Collector/exception.css.twig", "/Applications/MAMP/htdocs/Todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
