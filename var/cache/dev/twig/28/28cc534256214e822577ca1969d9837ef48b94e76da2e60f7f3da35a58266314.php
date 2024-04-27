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

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_8512f8a3fd4444887a01b58634e6572a386ee54bb65f9b021c2adde675823f2a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 83
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 89
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 90
        $this->displayBlock('panel', $context, $blocks);
        // line 91
        echo "                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">";
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search", ["limit" => 10]);
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", twig_array_merge(["token" => "latest"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 102, $this->source); })()), "query", [], "any", false, false, false, 102), "all", [], "any", false, false, false, 102))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 104
        if (((isset($context["tokens"]) || array_key_exists("tokens", $context)) || (isset($context["about"]) || array_key_exists("about", $context)))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 105
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\HttpKernelExtension']->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_bar", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 108, $this->source); })()), "query", [], "any", false, false, false, 108), "all", [], "any", false, false, false, 108)));
        echo "
                    </div>
                </div>

                ";
        // line 112
        if ((isset($context["templates"]) || array_key_exists("templates", $context))) {
            // line 113
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 114, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 115
                echo "                            ";
                ob_start();
                // line 116
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 116)->hasBlock("menu", $context)) {
                    // line 117
                    $__internal_compile_0 = ["collector" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 117, $this->source); })()), "getcollector", [0 => $context["name"]], "method", false, false, false, 117), "profiler_markup_version" => (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 117, $this->source); })())];
                    if (!twig_test_iterable($__internal_compile_0)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 117, $this->getSourceContext());
                    }
                    $__internal_compile_0 = twig_to_array($__internal_compile_0);
                    $context['_parent'] = $context;
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_0));
                    // line 118
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 118)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 122
                echo "                            ";
                if ( !twig_test_empty((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 122, $this->source); })()))) {
                    // line 123
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) || array_key_exists("panel", $context) ? $context["panel"] : (function () { throw new RuntimeError('Variable "panel" does not exist.', 123, $this->source); })()))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 124, $this->source); })()), "panel" => $context["name"]]), "html", null, true);
                    echo "\">";
                    echo (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 124, $this->source); })());
                    echo "</a>
                                </li>
                            ";
                }
                // line 127
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                    </ul>
                ";
        }
        // line 130
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if ((isset($context["profile"]) || array_key_exists("profile", $context))) {
            // line 9
            echo "                ";
            $context["status_code"] = ((twig_in_filter("request", twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "collectors", [], "any", false, false, false, 9)))) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => "request"], "method", false, true, false, 9), "statuscode", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => "request"], "method", false, true, false, 9), "statuscode", [], "any", false, false, false, 9), 0)) : (0))) : (0));
            // line 10
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 10, $this->source); })()) > 399)) ? ("status-error") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 10, $this->source); })()) > 299)) ? ("status-warning") : ("status-success"))));
            // line 11
            echo "
                <div class=\"status ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 15
            if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })()), "method", [], "any", false, false, false, 15)), [0 => "GET", 1 => "HEAD"])) {
                // line 16
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 18
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18), "html", null, true);
                echo "
                            ";
            }
            // line 20
            echo "                        </h2>

                        ";
            // line 22
            $context["request_collector"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 22), "request", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, false, 22), "request", [], "any", false, false, false, 22), false)) : (false));
            // line 23
            echo "                        ";
            if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context)) && twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 23, $this->source); })()), "redirect", [], "any", false, false, false, 23))) {
                // line 24
                $context["redirect"] = twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 24, $this->source); })()), "redirect", [], "any", false, false, false, 24);
                // line 25
                $context["controller"] = twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 25, $this->source); })()), "controller", [], "any", false, false, false, 25);
                // line 26
                $context["redirect_route"] = ("@" . twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 26, $this->source); })()), "route", [], "any", false, false, false, 26));
                // line 27
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 29, $this->source); })()), "status_code", [], "any", false, false, false, 29), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 33
                ((("GET" != twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 33, $this->source); })()), "method", [], "any", false, false, false, 33))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 33, $this->source); })()), "method", [], "any", false, false, false, 33), "html", null, true))) : (print ("")));
                echo "
                                    ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 34), "class", [], "any", true, true, false, 34)) {
                    // line 35
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 35, $this->source); })()), "file", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 35, $this->source); })()), "line", [], "any", false, false, false, 35));
                    // line 36
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 36, $this->source); })())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 36, $this->source); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 36, $this->source); })()), "file", [], "any", false, false, false, 36), "html", null, true);
                        echo "\">";
                    }
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) || array_key_exists("redirect_route", $context) ? $context["redirect_route"] : (function () { throw new RuntimeError('Variable "redirect_route" does not exist.', 37, $this->source); })()), "html", null, true);
                    // line 38
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })())) {
                        echo "</a>";
                    }
                } else {
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["redirect_route"]) || array_key_exists("redirect_route", $context) ? $context["redirect_route"] : (function () { throw new RuntimeError('Variable "redirect_route" does not exist.', 40, $this->source); })()), "html", null, true);
                }
                // line 42
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 42, $this->source); })()), "token", [], "any", false, false, false, 42), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 42, $this->source); })()), "query", [], "any", false, false, false, 42), "get", [0 => "panel", 1 => "request"], "method", false, false, false, 42)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 42, $this->source); })()), "token", [], "any", false, false, false, 42), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 46
            echo "
                        ";
            // line 47
            if ((((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 47, $this->source); })()) && ((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forward", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forward", [], "any", false, false, false, 47), false)) : (false))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forward", [], "any", false, true, false, 47), "controller", [], "any", false, true, false, 47), "class", [], "any", true, true, false, 47))) {
                // line 48
                $context["forward"] = twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 48, $this->source); })()), "forward", [], "any", false, false, false, 48);
                // line 49
                $context["controller"] = twig_get_attribute($this->env, $this->source, (isset($context["forward"]) || array_key_exists("forward", $context) ? $context["forward"] : (function () { throw new RuntimeError('Variable "forward" does not exist.', 49, $this->source); })()), "controller", [], "any", false, false, false, 49);
                // line 50
                echo "<dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 53
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 53, $this->source); })()), "file", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 53, $this->source); })()), "line", [], "any", false, false, false, 53));
                // line 54
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 54, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 54, $this->source); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 54, $this->source); })()), "file", [], "any", false, false, false, 54), "html", null, true);
                    echo "\">";
                }
                // line 55
                echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 55, $this->source); })()), "class", [], "any", false, false, false, 55))), "html", null, true);
                // line 56
                ((twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 56, $this->source); })()), "method", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 56, $this->source); })()), "method", [], "any", false, false, false, 56)), "html", null, true))) : (print ("")));
                // line 57
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 57, $this->source); })())) {
                    echo "</a>";
                }
                // line 58
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["forward"]) || array_key_exists("forward", $context) ? $context["forward"] : (function () { throw new RuntimeError('Variable "forward" does not exist.', 58, $this->source); })()), "token", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forward"]) || array_key_exists("forward", $context) ? $context["forward"] : (function () { throw new RuntimeError('Variable "forward" does not exist.', 58, $this->source); })()), "token", [], "any", false, false, false, 58), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 62
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 65
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 65, $this->source); })()), "method", [], "any", false, false, false, 65)), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 71, $this->source); })()), "ip", [], "any", false, false, false, 71), "html", null, true);
            echo "</dd>

                            <dt>Profiled on</dt>
                            <dd>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 74, $this->source); })()), "time", [], "any", false, false, false, 74), "r"), "html", null, true);
            echo "</dd>

                            <dt>Token</dt>
                            <dd>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 77, $this->source); })()), "token", [], "any", false, false, false, 77), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 82
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 90,  393 => 82,  385 => 77,  379 => 74,  373 => 71,  367 => 68,  361 => 65,  356 => 62,  347 => 58,  343 => 57,  341 => 56,  339 => 55,  331 => 54,  329 => 53,  324 => 50,  322 => 49,  320 => 48,  318 => 47,  315 => 46,  306 => 42,  303 => 40,  298 => 38,  296 => 37,  288 => 36,  286 => 35,  284 => 34,  280 => 33,  273 => 29,  269 => 27,  267 => 26,  265 => 25,  263 => 24,  260 => 23,  258 => 22,  254 => 20,  248 => 18,  240 => 16,  238 => 15,  232 => 12,  229 => 11,  226 => 10,  223 => 9,  220 => 8,  213 => 7,  203 => 130,  199 => 128,  185 => 127,  177 => 124,  170 => 123,  167 => 122,  162 => 118,  154 => 117,  152 => 116,  149 => 115,  132 => 114,  129 => 113,  127 => 112,  120 => 108,  114 => 105,  108 => 104,  103 => 102,  99 => 101,  93 => 98,  84 => 91,  82 => 90,  78 => 89,  70 => 83,  68 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set status_code = ('request' in profile.collectors|keys) ? profile.getcollector('request').statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                            {% endif %}
                        </h2>

                        {% set request_collector = profile.collectors.request|default(false) %}
                        {% if request_collector is defined and request_collector.redirect -%}
                            {%- set redirect = request_collector.redirect -%}
                            {%- set controller = redirect.controller -%}
                            {%- set redirect_route = '@' ~ redirect.route %}
                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">{{ redirect.status_code }}</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    {{ 'GET' != redirect.method ? redirect.method }}
                                    {% if redirect.controller.class is defined -%}
                                        {%- set link = controller.file|file_link(controller.line) -%}
                                        {% if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                            {{ redirect_route }}
                                        {%- if link %}</a>{% endif -%}
                                    {%- else -%}
                                            {{ redirect_route }}
                                    {%- endif %}
                                    (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        {% if request_collector and request_collector.forward|default(false) and request_collector.forward.controller.class is defined -%}
                            {%- set forward = request_collector.forward -%}
                            {%- set controller = forward.controller -%}
                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    {% set link = controller.file|file_link(controller.line) -%}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                        {{- controller.class|abbr_class|striptags -}}
                                        {{- controller.method ? ' :: ' ~ controller.method }}
                                    {%- if link %}</a>{% endif %}
                                    (<a href=\"{{ path('_profiler', { token: forward.token }) }}\">{{ forward.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>{{ profile.ip }}</dd>

                            <dt>Profiled on</dt>
                            <dd>{{ profile.time|date('r') }}</dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>

            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" class=\"visible-small\" onclick=\"Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded'); return false;\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {%- if block('menu', template) is defined -%}
                                    {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                        {{- block('menu', template) -}}
                                    {% endwith %}
                                {%- endif -%}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/Applications/MAMP/htdocs/Todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/layout.html.twig");
    }
}
