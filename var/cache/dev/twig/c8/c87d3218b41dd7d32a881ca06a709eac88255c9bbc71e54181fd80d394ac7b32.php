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

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_95fe043f3e76a9ffaaf357f8422156f3c907d19f86cdaf4eca6b840365f7bdbe extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebProfilerBundle:Router:panel.html.twig"));

        // line 1
        echo "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        ((twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5), "html", null, true))) : (print ("(none)")));
        echo "</span>
        <span class=\"label\">Matched route</span>
    </div>

    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 9, $this->source); })()), "route", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <div class=\"metric\">
            <span class=\"value\">";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new RuntimeError('Variable "traces" does not exist.', 11, $this->source); })())), "html", null, true);
            echo "</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    ";
        }
        // line 15
        echo "</div>

";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 17, $this->source); })()), "route", [], "any", false, false, false, 17)) {
            // line 18
            echo "    <h3>Route Parameters</h3>

    ";
            // line 20
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 20, $this->source); })()), "routeParams", [], "any", false, false, false, 20))) {
                // line 21
                echo "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 25
                echo "        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 25, $this->source); })()), "routeParams", [], "any", false, false, false, 25), "labels" => [0 => "Name", 1 => "Value"]], false);
                echo "
    ";
            }
        }
        // line 28
        echo "
";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 29, $this->source); })()), "redirect", [], "any", false, false, false, 29)) {
            // line 30
            echo "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 34, $this->source); })()), "targetUrl", [], "any", false, false, false, 34), "html", null, true);
            echo "
        ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 35, $this->source); })()), "targetRoute", [], "any", false, false, false, 35)) {
                echo "<span class=\"text-muted\">(route: \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 35, $this->source); })()), "targetRoute", [], "any", false, false, false, 35), "html", null, true);
                echo "\")</span>";
            }
            // line 36
            echo "    </div>
";
        }
        // line 38
        echo "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 42, $this->source); })()), "pathinfo", [], "any", false, false, false, 42), "html", null, true);
        echo "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new RuntimeError('Variable "traces" does not exist.', 55, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 56
            echo "        <tr class=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 56) == 1)) ? ("status-warning") : ((((twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 56) == 2)) ? ("status-success") : (""))));
            echo "\">
            <td class=\"font-normal text-muted\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "path", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
            <td class=\"font-normal\">
                ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 61) == 1)) {
                // line 62
                echo "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 63), "html", null, true);
                echo "</span>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 64
$context["trace"], "level", [], "any", false, false, false, 64) == 2)) {
                // line 65
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 65), "html", null, true);
                echo "
                ";
            } else {
                // line 67
                echo "                    Path does not match
                ";
            }
            // line 69
            echo "            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 72,  193 => 69,  189 => 67,  183 => 65,  181 => 64,  177 => 63,  174 => 62,  172 => 61,  167 => 59,  163 => 58,  159 => 57,  154 => 56,  137 => 55,  121 => 42,  115 => 38,  111 => 36,  105 => 35,  101 => 34,  95 => 30,  93 => 29,  90 => 28,  83 => 25,  77 => 21,  75 => 20,  71 => 18,  69 => 17,  65 => 15,  58 => 11,  55 => 10,  53 => 9,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">{{ request.route ?: '(none)' }}</span>
        <span class=\"label\">Matched route</span>
    </div>

    {% if request.route %}
        <div class=\"metric\">
            <span class=\"value\">{{ traces|length }}</span>
            <span class=\"label\">Tested routes before match</span>
        </div>
    {% endif %}
</div>

{% if request.route %}
    <h3>Route Parameters</h3>

    {% if request.routeParams is empty %}
        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: request.routeParams, labels: ['Name', 'Value'] }, with_context = false) }}
    {% endif %}
{% endif %}

{% if router.redirect %}
    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        {{ router.targetUrl }}
        {% if router.targetRoute %}<span class=\"text-muted\">(route: \"{{ router.targetRoute }}\")</span>{% endif %}
    </div>
{% endif %}

<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>{{ request.pathinfo }}</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    {% for trace in traces %}
        <tr class=\"{{ trace.level == 1 ? 'status-warning' : trace.level == 2 ? 'status-success' }}\">
            <td class=\"font-normal text-muted\">{{ loop.index }}</td>
            <td>{{ trace.name }}</td>
            <td>{{ trace.path }}</td>
            <td class=\"font-normal\">
                {% if trace.level == 1 %}
                    Path almost matches, but
                    <span class=\"newline\">{{ trace.log }}</span>
                {% elseif trace.level == 2 %}
                    {{ trace.log }}
                {% else %}
                    Path does not match
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
", "WebProfilerBundle:Router:panel.html.twig", "/Applications/MAMP/htdocs/Todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Router/panel.html.twig");
    }
}
