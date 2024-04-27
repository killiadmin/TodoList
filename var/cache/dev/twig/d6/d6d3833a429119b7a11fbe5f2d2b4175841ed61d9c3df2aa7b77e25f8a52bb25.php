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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_48ad1d1d33454a8536497ec5ba51480d49ffd9015ca0a730daf67125b524064c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (("unknown" == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "symfonyState", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            $context["block_status"] = "";
            // line 6
            echo "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "    ";
        } elseif (("eol" == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "symfonyState", [], "any", false, false, false, 7))) {
            // line 8
            echo "        ";
            $context["block_status"] = "red";
            // line 9
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "    ";
        } elseif (("eom" == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "symfonyState", [], "any", false, false, false, 10))) {
            // line 11
            echo "        ";
            $context["block_status"] = "yellow";
            // line 12
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "    ";
        } elseif (("dev" == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "symfonyState", [], "any", false, false, false, 13))) {
            // line 14
            echo "        ";
            $context["block_status"] = "yellow";
            // line 15
            echo "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["block_status"] = "";
            // line 18
            echo "        ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        ob_start();
        // line 22
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "applicationname", [], "any", false, false, false, 22)) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "applicationname", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "applicationversion", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 25
($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 25)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">
                ";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "symfonyversion", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "applicationname", [], "any", false, false, false, 35)) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "applicationname", [], "any", false, false, false, 37), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "applicationversion", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
        // line 45
        if ((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "token", [], "any", false, false, false, 46), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "token", [], "any", false, false, false, 48), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                </span>
            </div>

            ";
        // line 53
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "appname", [], "any", false, false, false, 53))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "appname", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 59
        echo "
            ";
        // line 60
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "env", [], "any", false, false, false, 60))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "env", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ( !("n/a" === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "debug", [], "any", false, false, false, 67))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "debug", [], "any", false, false, false, 70)) ? ("green") : ("red"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "debug", [], "any", false, false, false, 70)) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>
            ";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "phpversion", [], "any", false, false, false, 79), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "hasxdebug", [], "any", false, false, false, 86)) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "hasaccelerator", [], "any", false, false, false, 87)) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "sapiName", [], "any", false, false, false, 92), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 97)) {
            // line 98
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        ";
            // line 101
            if (("Silex" == twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "applicationname", [], "any", false, false, false, 101))) {
                // line 102
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        ";
            } else {
                // line 106
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "symfonyversion", [], "any", false, false, false, 106), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "symfonyversion", [], "any", false, false, false, 107), "html", null, true);
                echo " Docs
                            </a>
                        ";
            }
            // line 110
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
        }
        // line 121
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo "
    ";
        // line 124
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => (isset($context["block_status"]) || array_key_exists("block_status", $context) ? $context["block_status"] : (function () { throw new RuntimeError('Variable "block_status" does not exist.', 124, $this->source); })()), "additional_classes" => "sf-toolbar-block-right"]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 128
        echo "    <span class=\"label label-status-";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "symfonyState", [], "any", false, false, false, 128) == "eol")) ? ("red") : (((twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "symfonyState", [], "any", false, false, false, 128), [0 => "eom", 1 => "dev"])) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 129
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 135
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "applicationname", [], "any", false, false, false, 135)) {
            // line 136
            echo "        ";
            // line 137
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "applicationname", [], "any", false, false, false, 141), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 146, $this->source); })()), "applicationversion", [], "any", false, false, false, 146), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "symfonyversion", [], "any", false, false, false, 152), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 155
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "symfonyversion", [], "any", false, false, false, 159), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>

            ";
            // line 163
            if (("n/a" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 163, $this->source); })()), "appname", [], "any", false, false, false, 163))) {
                // line 164
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 165, $this->source); })()), "appname", [], "any", false, false, false, 165), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>
            ";
            }
            // line 169
            echo "
            ";
            // line 170
            if (("n/a" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 170, $this->source); })()), "env", [], "any", false, false, false, 170))) {
                // line 171
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "env", [], "any", false, false, false, 172), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if (("n/a" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 177, $this->source); })()), "debug", [], "any", false, false, false, 177))) {
                // line 178
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 179
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 179, $this->source); })()), "debug", [], "any", false, false, false, 179)) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>
            ";
            }
            // line 183
            echo "        </div>
    ";
        }
        // line 185
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 190, $this->source); })()), "phpversion", [], "any", false, false, false, 190), "html", null, true);
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 195
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 195, $this->source); })()), "hasaccelerator", [], "any", false, false, false, 195)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 200
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 200, $this->source); })()), "hasxdebug", [], "any", false, false, false, 200)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 207
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 207, $this->source); })()), "haszendopcache", [], "any", false, false, false, 207)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 212
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 212, $this->source); })()), "hasapc", [], "any", false, false, false, 212)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 217
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 217, $this->source); })()), "hasxcache", [], "any", false, false, false, 217)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 222
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 222, $this->source); })()), "haseaccelerator", [], "any", false, false, false, 222)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>

    ";
        // line 231
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "bundles", [], "any", false, false, false, 231)) {
            // line 232
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 232, $this->source); })()), "bundles", [], "any", false, false, false, 232)), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 241, $this->source); })()), "bundles", [], "any", false, false, false, 241))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 242
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 243
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 244
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 244, $this->source); })()), "bundles", [], "any", false, false, false, 244), $context["name"], [], "array", false, false, false, 244), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 247,  555 => 244,  551 => 243,  548 => 242,  544 => 241,  531 => 232,  529 => 231,  523 => 228,  514 => 222,  506 => 217,  498 => 212,  490 => 207,  480 => 200,  472 => 195,  464 => 190,  457 => 185,  453 => 183,  446 => 179,  443 => 178,  441 => 177,  438 => 176,  431 => 172,  428 => 171,  426 => 170,  423 => 169,  416 => 165,  413 => 164,  411 => 163,  404 => 159,  398 => 155,  392 => 152,  383 => 146,  375 => 141,  369 => 137,  367 => 136,  364 => 135,  357 => 134,  346 => 129,  341 => 128,  334 => 127,  325 => 124,  322 => 123,  318 => 121,  305 => 110,  299 => 107,  294 => 106,  288 => 102,  286 => 101,  281 => 98,  279 => 97,  271 => 92,  263 => 87,  259 => 86,  250 => 80,  246 => 79,  238 => 73,  230 => 70,  226 => 68,  224 => 67,  221 => 66,  215 => 63,  211 => 61,  209 => 60,  206 => 59,  200 => 56,  196 => 54,  194 => 53,  189 => 50,  183 => 48,  175 => 46,  173 => 45,  167 => 41,  161 => 38,  157 => 37,  154 => 36,  152 => 35,  149 => 34,  147 => 33,  144 => 32,  141 => 31,  136 => 29,  131 => 27,  128 => 26,  126 => 25,  122 => 24,  117 => 23,  114 => 22,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        {% if collector.applicationname %}
            <span class=\"sf-toolbar-label\">{{ collector.applicationname }}</span>
            <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
        {% elseif collector.symfonyState is defined %}
            <span class=\"sf-toolbar-label\">
                {{ include('@WebProfiler/Icon/symfony.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">{{ collector.symfonyversion }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            {% if collector.applicationname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ collector.applicationname }}</b>
                    <span>{{ collector.applicationversion }}</span>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.appname) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        {% if 'Silex' == collector.applicationname %}
                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        {% else %}
                            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                                Read Symfony {{ collector.symfonyversion }} Docs
                            </a>
                        {% endif %}
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">PHP acceleration</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <div class=\"metrics metrics-horizontal\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapc ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APC</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">XCache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haseaccelerator ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">EAccelerator</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ collector.bundles[name] }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "/Applications/MAMP/htdocs/Todolist/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/config.html.twig");
    }
}
