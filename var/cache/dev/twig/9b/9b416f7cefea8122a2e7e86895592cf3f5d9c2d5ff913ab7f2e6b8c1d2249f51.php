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

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_a749b4ef53e5637a3647834fde60b5904f24e37963e14d71daaa51116a97545f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        // line 1
        echo "<div class=\"block\">
    ";
        // line 2
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 2, $this->source); })()) > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 4, $this->source); })()) - (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 4, $this->source); })())) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 4, $this->source); })()) + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 5, $this->source); })()), "class", [], "any", false, false, false, 5));
            echo ": ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 5, $this->source); })()), "message", [], "any", false, false, false, 5), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "', 'traces'); switchIcons('icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "-open', 'icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 8, $this->source); })()))) ? ("inline") : ("none"));
            echo "\" />
                <img class=\"toggle\" id=\"icon-traces-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 9, $this->source); })()))) ? ("none") : ("inline"));
            echo "\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces-link-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list-exception\" id=\"traces-";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 18, $this->source); })()))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 19, $this->source); })()), "trace", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->loadTemplate("@Twig/Exception/trace.html.twig", "TwigBundle:Exception:traces.html.twig", 21)->display(twig_to_array(["prefix" => (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 21, $this->source); })()), "i" => $context["i"], "trace" => $context["trace"]]));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 24,  115 => 22,  113 => 21,  110 => 20,  106 => 19,  100 => 18,  96 => 17,  93 => 16,  89 => 14,  85 => 12,  77 => 9,  71 => 8,  62 => 7,  60 => 6,  54 => 5,  48 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block\">
    {% if count > 0 %}
        <h2>
            <span><small>[{{ count - position + 1 }}/{{ count + 1 }}]</small></span>
            {{ exception.class|abbr_class }}: {{ exception.message|nl2br|format_file_from_text }}&nbsp;
            {% spaceless %}
            <a href=\"#\" onclick=\"toggle('traces-{{ position }}', 'traces'); switchIcons('icon-traces-{{ position }}-open', 'icon-traces-{{ position }}-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-{{ position }}-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: {{ 0 == count ? 'inline' : 'none' }}\" />
                <img class=\"toggle\" id=\"icon-traces-{{ position }}-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: {{ 0 == count ? 'none' : 'inline' }}\" />
            </a>
            {% endspaceless %}
        </h2>
    {% else %}
        <h2>Stack Trace</h2>
    {% endif %}

    <a id=\"traces-link-{{ position }}\"></a>
    <ol class=\"traces list-exception\" id=\"traces-{{ position }}\" style=\"display: {{ 0 == count ? 'block' : 'none' }}\">
        {% for i, trace in exception.trace %}
            <li>
                {% include '@Twig/Exception/trace.html.twig' with { 'prefix': position, 'i': i, 'trace': trace } only %}
            </li>
        {% endfor %}
    </ol>
</div>
", "TwigBundle:Exception:traces.html.twig", "/Applications/MAMP/htdocs/Todolist/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}
