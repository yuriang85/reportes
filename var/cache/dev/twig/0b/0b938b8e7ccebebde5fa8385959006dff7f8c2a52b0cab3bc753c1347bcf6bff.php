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

/* @DHAuditor/Audit/helpers/pager.html.twig */
class __TwigTemplate_e9791a2ce6f1c040719970e07d781cfb92ef56583e7628cd256c9c194b224b31 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/helpers/pager.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/helpers/pager.html.twig"));

        // line 27
        echo "
";
        // line 35
        echo "
";
        // line 43
        echo "
";
        // line 49
        echo "
";
        // line 55
        echo "
";
        // line 61
        echo "
";
        // line 69
        echo "
";
        // line 77
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_render($__entity__ = null, $__id__ = null, $__paginator__ = null, $__proximity__ = 3, $__displayedPages__ = 10, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "proximity" => $__proximity__,
            "displayedPages" => $__displayedPages__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render"));

            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 2, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 2)) {
                // line 3
                echo "        ";
                $context["start"] = (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "currentPage", [], "any", false, false, false, 3) - (isset($context["proximity"]) || array_key_exists("proximity", $context) ? $context["proximity"] : (function () { throw new RuntimeError('Variable "proximity" does not exist.', 3, $this->source); })()));
                // line 4
                echo "        ";
                $context["end"] = (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "currentPage", [], "any", false, false, false, 4) + (isset($context["proximity"]) || array_key_exists("proximity", $context) ? $context["proximity"] : (function () { throw new RuntimeError('Variable "proximity" does not exist.', 4, $this->source); })()));
                // line 5
                echo "        ";
                if ((-1 === twig_compare((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 5, $this->source); })()), 1))) {
                    // line 6
                    echo "            ";
                    $context["end"] = min(((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 6, $this->source); })()) + (1 - (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 6, $this->source); })()))), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "numPages", [], "any", false, false, false, 6));
                    // line 7
                    echo "            ";
                    $context["start"] = 1;
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                if ((1 === twig_compare((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 9, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "numPages", [], "any", false, false, false, 9)))) {
                    // line 10
                    echo "            ";
                    $context["start"] = max(((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 10, $this->source); })()) - ((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 10, $this->source); })()) - twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "numPages", [], "any", false, false, false, 10))), 1);
                    // line 11
                    echo "            ";
                    $context["end"] = twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "numPages", [], "any", false, false, false, 11);
                    // line 12
                    echo "        ";
                }
                // line 13
                echo "
        <nav class=\"float-right\">
            <ul class=\"pagination\">
                ";
                // line 16
                echo twig_call_macro($macros["_self"], "macro_first", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
                echo "
                ";
                // line 17
                echo twig_call_macro($macros["_self"], "macro_previous", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
                echo "
                ";
                // line 18
                echo twig_call_macro($macros["_self"], "macro_dotsIfStartIsOver3", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 18, $this->source); })())], 18, $context, $this->getSourceContext());
                echo "
                ";
                // line 19
                echo twig_call_macro($macros["_self"], "macro_pages", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 19, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 19, $this->source); })()), (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
                echo "
                ";
                // line 20
                echo twig_call_macro($macros["_self"], "macro_dotsIfEndIsUnder3ToLast", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 20, $this->source); })()), (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 20, $this->source); })())], 20, $context, $this->getSourceContext());
                echo "
                ";
                // line 21
                echo twig_call_macro($macros["_self"], "macro_next", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext());
                echo "
                ";
                // line 22
                echo twig_call_macro($macros["_self"], "macro_last", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
                echo "
            </ul>
        </nav>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_first($__entity__ = null, $__id__ = null, $__paginator__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "first"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "first"));

            // line 29
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 29)) {
                // line 30
                echo "        <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "page" => 1]), "html", null, true);
                echo "\" class=\"page-link\" rel=\"previous\"><i class=\"fa fw fa-angle-double-left\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.first", [], "messages");
                echo "</a></li>
    ";
            } else {
                // line 32
                echo "        <li class=\"page-item disabled\"><span class=\"page-link\"><i class=\"fa fw fa-angle-double-left\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.first", [], "messages");
                echo "</span></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
    public function macro_previous($__entity__ = null, $__id__ = null, $__paginator__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "previous"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "previous"));

            // line 37
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 37)) {
                // line 38
                echo "        <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 38, $this->source); })()), "previousPage", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"page-link\" rel=\"previous\"><i class=\"fa fw fa-angle-left\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.previous", [], "messages");
                echo "</a></li>
    ";
            } else {
                // line 40
                echo "        <li class=\"page-item disabled\"><span class=\"page-link\"><i class=\"fa fw fa-angle-left\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.previous", [], "messages");
                echo "</span></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 44
    public function macro_dotsIfStartIsOver3($__entity__ = null, $__id__ = null, $__paginator__ = null, $__start__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "start" => $__start__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dotsIfStartIsOver3"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dotsIfStartIsOver3"));

            // line 45
            echo "    ";
            if ((1 === twig_compare((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 45, $this->source); })()), 1))) {
                // line 46
                echo "        <li class=\"page-item disabled\"><span class=\"page-link\">&hellip;</span></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 50
    public function macro_pages($__entity__ = null, $__id__ = null, $__paginator__ = null, $__start__ = null, $__end__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "start" => $__start__,
            "end" => $__end__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pages"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pages"));

            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 51, $this->source); })()), (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 51, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_page", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 52, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 52, $this->source); })()), $context["i"]], 52, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 56
    public function macro_dotsIfEndIsUnder3ToLast($__entity__ = null, $__id__ = null, $__paginator__ = null, $__end__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "end" => $__end__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dotsIfEndIsUnder3ToLast"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dotsIfEndIsUnder3ToLast"));

            // line 57
            echo "    ";
            if ((-1 === twig_compare((isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 57, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 57, $this->source); })()), "numPages", [], "any", false, false, false, 57)))) {
                // line 58
                echo "        <li class=\"page-item disabled\"><span class=\"page-link\">&hellip;</span></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
    public function macro_next($__entity__ = null, $__id__ = null, $__paginator__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "next"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "next"));

            // line 63
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 63, $this->source); })()), "hasNextPage", [], "any", false, false, false, 63)) {
                // line 64
                echo "        <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 64, $this->source); })()), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 64, $this->source); })()), "nextPage", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"page-link\" rel=\"next\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.next", [], "messages");
                echo " <i class=\"fa fw fa-angle-right\"></i></a></li>
    ";
            } else {
                // line 66
                echo "        <li class=\"page-item disabled\"><span class=\"page-link\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.next", [], "messages");
                echo " <i class=\"fa fw fa-angle-right\"></i></span></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 70
    public function macro_last($__entity__ = null, $__id__ = null, $__paginator__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "last"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "last"));

            // line 71
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 71, $this->source); })()), "hasNextPage", [], "any", false, false, false, 71)) {
                // line 72
                echo "        <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 72, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })()), "page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 72, $this->source); })()), "numPages", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" class=\"page-link\" rel=\"previous\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.last", [], "messages");
                echo " <i class=\"fa fw fa-angle-double-right\"></i></a></li>
    ";
            } else {
                // line 74
                echo "        <li class=\"page-item disabled\"><span class=\"page-link\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.last", [], "messages");
                echo " <i class=\"fa fw fa-angle-double-right\"></i></span></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 78
    public function macro_page($__entity__ = null, $__id__ = null, $__paginator__ = null, $__page__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "id" => $__id__,
            "paginator" => $__paginator__,
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "page"));

            // line 79
            echo "    ";
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 79, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 79, $this->source); })()), "currentPage", [], "any", false, false, false, 79)))) {
                // line 80
                echo "        <li class=\"page-item active\"><span class=\"page-link\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()), "html", null, true);
                echo " <span class=\"sr-only\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.pager.current", [], "messages");
                echo "</span></span></li>
    ";
            } else {
                // line 82
                echo "        <li class=\"page-item\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 82, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 82, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 82, $this->source); })())]), "html", null, true);
                echo "\" class=\"page-link\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 82, $this->source); })()), "html", null, true);
                echo "</a></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DHAuditor/Audit/helpers/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 82,  544 => 80,  541 => 79,  519 => 78,  500 => 74,  492 => 72,  489 => 71,  468 => 70,  449 => 66,  441 => 64,  438 => 63,  417 => 62,  400 => 58,  397 => 57,  375 => 56,  353 => 52,  348 => 51,  325 => 50,  308 => 46,  305 => 45,  283 => 44,  264 => 40,  256 => 38,  253 => 37,  232 => 36,  213 => 32,  205 => 30,  202 => 29,  181 => 28,  161 => 22,  157 => 21,  153 => 20,  149 => 19,  145 => 18,  141 => 17,  137 => 16,  132 => 13,  129 => 12,  126 => 11,  123 => 10,  120 => 9,  117 => 8,  114 => 7,  111 => 6,  108 => 5,  105 => 4,  102 => 3,  99 => 2,  76 => 1,  65 => 77,  62 => 69,  59 => 61,  56 => 55,  53 => 49,  50 => 43,  47 => 35,  44 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro render(entity, id = null, paginator, proximity = 3, displayedPages = 10) %}
    {% if paginator.haveToPaginate %}
        {% set start = paginator.currentPage - proximity %}
        {% set end = paginator.currentPage + proximity %}
        {% if start < 1 %}
            {% set end = min(end + (1 - start), paginator.numPages) %}
            {% set start = 1 %}
        {% endif %}
        {% if end > paginator.numPages %}
            {% set start = max(start - (end - paginator.numPages), 1) %}
            {% set end = paginator.numPages %}
        {% endif %}

        <nav class=\"float-right\">
            <ul class=\"pagination\">
                {{ _self.first(entity, id, paginator) }}
                {{ _self.previous(entity, id, paginator) }}
                {{ _self.dotsIfStartIsOver3(entity, id, paginator, start) }}
                {{ _self.pages(entity, id, paginator, start, end) }}
                {{ _self.dotsIfEndIsUnder3ToLast(entity, id, paginator, end) }}
                {{ _self.next(entity, id, paginator) }}
                {{ _self.last(entity, id, paginator) }}
            </ul>
        </nav>
    {% endif %}
{% endmacro render %}

{% macro first(entity, id, paginator) %}
    {% if paginator.hasPreviousPage %}
        <li class=\"page-item\"><a href=\"{{ path('dh_auditor_show_entity_history', {entity: entity, id: id, page: 1}) }}\" class=\"page-link\" rel=\"previous\"><i class=\"fa fw fa-angle-double-left\"></i> {% trans %}audit.pager.first{% endtrans %}</a></li>
    {% else %}
        <li class=\"page-item disabled\"><span class=\"page-link\"><i class=\"fa fw fa-angle-double-left\"></i> {% trans %}audit.pager.first{% endtrans %}</span></li>
    {% endif %}
{% endmacro first %}

{% macro previous(entity, id, paginator) %}
    {% if paginator.hasPreviousPage %}
        <li class=\"page-item\"><a href=\"{{ path('dh_auditor_show_entity_history', {entity: entity, id: id, page: paginator.previousPage}) }}\" class=\"page-link\" rel=\"previous\"><i class=\"fa fw fa-angle-left\"></i> {% trans %}audit.pager.previous{% endtrans %}</a></li>
    {% else %}
        <li class=\"page-item disabled\"><span class=\"page-link\"><i class=\"fa fw fa-angle-left\"></i> {% trans %}audit.pager.previous{% endtrans %}</span></li>
    {% endif %}
{% endmacro previous %}

{% macro dotsIfStartIsOver3(entity, id, paginator, start) %}
    {% if start > 1 %}
        <li class=\"page-item disabled\"><span class=\"page-link\">&hellip;</span></li>
    {% endif %}
{% endmacro dotsIfStartIsOver3 %}

{% macro pages(entity, id, paginator, start, end) %}
    {% for i in start..end %}
        {{ _self.page(entity, id, paginator, i) }}
    {% endfor %}
{% endmacro pages %}

{% macro dotsIfEndIsUnder3ToLast(entity, id, paginator, end) %}
    {% if end < paginator.numPages %}
        <li class=\"page-item disabled\"><span class=\"page-link\">&hellip;</span></li>
    {% endif %}
{% endmacro dotsIfEndIsUnder3ToLast %}

{% macro next(entity, id, paginator) %}
    {% if paginator.hasNextPage %}
        <li class=\"page-item\"><a href=\"{{ path('dh_auditor_show_entity_history', {entity: entity, id: id, page: paginator.nextPage}) }}\" class=\"page-link\" rel=\"next\">{% trans %}audit.pager.next{% endtrans %} <i class=\"fa fw fa-angle-right\"></i></a></li>
    {% else %}
        <li class=\"page-item disabled\"><span class=\"page-link\">{% trans %}audit.pager.next{% endtrans %} <i class=\"fa fw fa-angle-right\"></i></span></li>
    {% endif %}
{% endmacro next %}

{% macro last(entity, id, paginator) %}
    {% if paginator.hasNextPage %}
        <li class=\"page-item\"><a href=\"{{ path('dh_auditor_show_entity_history', {entity: entity, id: id, page: paginator.numPages}) }}\" class=\"page-link\" rel=\"previous\">{% trans %}audit.pager.last{% endtrans %} <i class=\"fa fw fa-angle-double-right\"></i></a></li>
    {% else %}
        <li class=\"page-item disabled\"><span class=\"page-link\">{% trans %}audit.pager.last{% endtrans %} <i class=\"fa fw fa-angle-double-right\"></i></span></li>
    {% endif %}
{% endmacro last %}

{% macro page(entity, id, paginator, page) %}
    {% if page == paginator.currentPage %}
        <li class=\"page-item active\"><span class=\"page-link\">{{ page }} <span class=\"sr-only\">{% trans %}audit.pager.current{% endtrans %}</span></span></li>
    {% else %}
        <li class=\"page-item\"><a href=\"{{ path('dh_auditor_show_entity_history', {entity: entity, id: id, page: page}) }}\" class=\"page-link\">{{ page }}</a></li>
    {% endif %}
{% endmacro page %}
", "@DHAuditor/Audit/helpers/pager.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/helpers/pager.html.twig");
    }
}
