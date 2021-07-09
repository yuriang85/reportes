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

/* @DHAuditor/Audit/helpers/helper.html.twig */
class __TwigTemplate_832e61f303618b155bab11fcc02fc2148f6c657b90cf83c4fb52c875a49b6cd4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/helpers/helper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/helpers/helper.html.twig"));

        // line 20
        echo "
";
        // line 24
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_dump($__value__ = null, $__separator__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "separator" => $__separator__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump"));

            // line 2
            $macros["helper"] = $this;
            // line 3
            $macros["bootstrap"] = $this->loadTemplate("@DHAuditor/Audit/helpers/bootstrap.html.twig", "@DHAuditor/Audit/helpers/helper.html.twig", 3)->unwrap();
            // line 4
            ob_start();
            // line 5
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "label", [], "any", true, true, false, 5)) {
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 6, $this->source); })()), "label", [], "any", false, false, false, 6), "html", null, true);
                echo "
    ";
            } elseif (twig_test_iterable(            // line 7
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 7, $this->source); })()))) {
                // line 8
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 8, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 9
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo ": ";
                    echo twig_call_macro($macros["helper"], "macro_dump", [$context["v"]], 9, $context, $this->getSourceContext());
                    echo ((array_key_exists("separator", $context)) ? (_twig_default_filter((isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 9, $this->source); })()), "<br/>")) : ("<br/>"));
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "    ";
            } elseif (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 11, $this->source); })()) === true)) {
                // line 12
                echo "        ";
                echo "true";
                echo "
    ";
            } elseif ((            // line 13
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()) === false)) {
                // line 14
                echo "        ";
                echo "false";
                echo "
    ";
            } else {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })()), "html", null, true);
                echo "
    ";
            }
            $___internal_e86fbd83d58baace3d9e65d7450bc3f64c67d5aabef89e065a938326ad7b03cd_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 4
            echo twig_spaceless($___internal_e86fbd83d58baace3d9e65d7450bc3f64c67d5aabef89e065a938326ad7b03cd_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_namespaceToParam($__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "namespaceToParam"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "namespaceToParam"));

            // line 22
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), ["\\" => "-"]), "html", null, true);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_humanize($__entity__ = null, $__entry__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "entry" => $__entry__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "humanize"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "humanize"));

            // line 26
            echo "    ";
            $macros["helper"] = $this;
            // line 27
            echo "
    ";
            // line 28
            $context["diffs"] = twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 28, $this->source); })()), "getDiffs", [], "method", false, false, false, 28);
            // line 29
            echo "    ";
            $context["subject"] = (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()) . "#") . twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 29, $this->source); })()), "getObjectId", [], "method", false, false, false, 29));
            // line 30
            echo "
    ";
            // line 31
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 31, $this->source); })()), "getType", [], "method", false, false, false, 31), "insert"))) {
                // line 32
                echo "        ";
                $context["action"] = "inserted";
                // line 33
                echo "    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 33, $this->source); })()), "getType", [], "method", false, false, false, 33), "update"))) {
                // line 34
                echo "        ";
                $context["action"] = "updated";
                // line 35
                echo "    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 35, $this->source); })()), "getType", [], "method", false, false, false, 35), "remove"))) {
                // line 36
                echo "        ";
                $context["action"] = "deleted";
                // line 37
                echo "        ";
                $context["source"] = (isset($context["diffs"]) || array_key_exists("diffs", $context) ? $context["diffs"] : (function () { throw new RuntimeError('Variable "diffs" does not exist.', 37, $this->source); })());
                // line 38
                echo "    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 38, $this->source); })()), "getType", [], "method", false, false, false, 38), "associate"))) {
                // line 39
                echo "        ";
                $context["action"] = "associated";
                // line 40
                echo "        ";
                $context["source"] = twig_get_attribute($this->env, $this->source, (isset($context["diffs"]) || array_key_exists("diffs", $context) ? $context["diffs"] : (function () { throw new RuntimeError('Variable "diffs" does not exist.', 40, $this->source); })()), "source", [], "any", false, false, false, 40);
                // line 41
                echo "        ";
                $context["target"] = twig_get_attribute($this->env, $this->source, (isset($context["diffs"]) || array_key_exists("diffs", $context) ? $context["diffs"] : (function () { throw new RuntimeError('Variable "diffs" does not exist.', 41, $this->source); })()), "target", [], "any", false, false, false, 41);
                // line 42
                echo "        ";
                $context["direction"] = "to";
                // line 43
                echo "    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 43, $this->source); })()), "getType", [], "method", false, false, false, 43), "dissociate"))) {
                // line 44
                echo "        ";
                $context["action"] = "dissociated";
                // line 45
                echo "        ";
                $context["source"] = twig_get_attribute($this->env, $this->source, (isset($context["diffs"]) || array_key_exists("diffs", $context) ? $context["diffs"] : (function () { throw new RuntimeError('Variable "diffs" does not exist.', 45, $this->source); })()), "source", [], "any", false, false, false, 45);
                // line 46
                echo "        ";
                $context["target"] = twig_get_attribute($this->env, $this->source, (isset($context["diffs"]) || array_key_exists("diffs", $context) ? $context["diffs"] : (function () { throw new RuntimeError('Variable "diffs" does not exist.', 46, $this->source); })()), "target", [], "any", false, false, false, 46);
                // line 47
                echo "        ";
                $context["direction"] = "from";
                // line 48
                echo "    ";
            } else {
                // line 49
                echo "        ";
                $context["action"] = "???";
                // line 50
                echo "    ";
            }
            // line 51
            echo "
    <code><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => twig_call_macro($macros["helper"], "macro_namespaceToParam", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })())], 52, $context, $this->getSourceContext()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 52, $this->source); })()), "getObjectId", [], "method", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"code\">";
            echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "</a></code>
    ";
            // line 53
            if (((array_key_exists("source", $context) &&  !(null === (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 53, $this->source); })()))) && (0 !== twig_compare((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 53, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 53, $this->source); })()), "label", [], "any", false, false, false, 53))))) {
                // line 54
                echo "    <em>(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 54, $this->source); })()), "label", [], "any", false, false, false, 54), "html", null, true);
                echo ")</em>
    ";
            }
            // line 56
            echo "    has been <b>";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "</b>
    ";
            // line 57
            if ((array_key_exists("target", $context) &&  !(null === (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 57, $this->source); })())))) {
                // line 58
                echo "        ";
                $context["subject"] = ((twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 58, $this->source); })()), "class", [], "any", false, false, false, 58) . "#") . twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58));
                // line 59
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 59, $this->source); })()), "html", null, true);
                echo " <code><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => twig_call_macro($macros["helper"], "macro_namespaceToParam", [twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 59, $this->source); })()), "class", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "</a></code>
        ";
                // line 60
                if ((0 !== twig_compare((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 60, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 60, $this->source); })()), "label", [], "any", false, false, false, 60)))) {
                    // line 61
                    echo "            (<em>";
                    echo twig_call_macro($macros["helper"], "macro_dump", [(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 61, $this->source); })())], 61, $context, $this->getSourceContext());
                    echo "</em>)
        ";
                }
                // line 63
                echo "    ";
            }
            // line 64
            echo "    by <b>";
            (((null === twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 64, $this->source); })()), "getUsername", [], "method", false, false, false, 64))) ? (print ("unknown user")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 64, $this->source); })()), "getUsername", [], "method", false, false, false, 64), "html", null, true))));
            echo "</b>
    ";
            // line 65
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 65, $this->source); })()), "getIp", [], "method", false, false, false, 65))) {
                // line 66
                echo "        , IP: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 66, $this->source); })()), "getIp", [], "method", false, false, false, 66), "html", null, true);
                echo "
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
        return "@DHAuditor/Audit/helpers/helper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 66,  327 => 65,  322 => 64,  319 => 63,  313 => 61,  311 => 60,  302 => 59,  299 => 58,  297 => 57,  292 => 56,  286 => 54,  284 => 53,  278 => 52,  275 => 51,  272 => 50,  269 => 49,  266 => 48,  263 => 47,  260 => 46,  257 => 45,  254 => 44,  251 => 43,  248 => 42,  245 => 41,  242 => 40,  239 => 39,  236 => 38,  233 => 37,  230 => 36,  227 => 35,  224 => 34,  221 => 33,  218 => 32,  216 => 31,  213 => 30,  210 => 29,  208 => 28,  205 => 27,  202 => 26,  182 => 25,  167 => 22,  148 => 21,  133 => 4,  126 => 16,  120 => 14,  118 => 13,  113 => 12,  110 => 11,  98 => 9,  93 => 8,  91 => 7,  86 => 6,  83 => 5,  81 => 4,  79 => 3,  77 => 2,  57 => 1,  46 => 24,  43 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro dump(value, separator) %}
{% import _self as helper %}
{% import '@DHAuditor/Audit/helpers/bootstrap.html.twig' as bootstrap %}
{% apply spaceless %}
    {% if value.label is defined %}
        {{ value.label }}
    {% elseif value is iterable %}
        {% for k, v in value %}
            {{ k }}: {{ helper.dump(v) }}{{ separator|default('<br/>')|raw }}
        {% endfor %}
    {% elseif value is same as(true) %}
        {{ 'true' }}
    {% elseif value is same as(false) %}
        {{ 'false' }}
    {% else %}
        {{ value }}
    {% endif %}
{% endapply %}
{% endmacro dump %}

{% macro namespaceToParam(entity) %}
{{- entity|replace({'\\\\': '-'}) -}}
{% endmacro namespaceToParam %}

{% macro humanize(entity, entry) %}
    {% import _self as helper %}

    {% set diffs = entry.getDiffs() %}
    {% set subject = entity~'#'~entry.getObjectId() %}

    {% if entry.getType() == 'insert' %}
        {% set action = 'inserted' %}
    {% elseif entry.getType() == 'update' %}
        {% set action = 'updated' %}
    {% elseif entry.getType() == 'remove' %}
        {% set action = 'deleted' %}
        {% set source = diffs %}
    {% elseif entry.getType() == 'associate' %}
        {% set action = 'associated' %}
        {% set source = diffs.source %}
        {% set target = diffs.target %}
        {% set direction = 'to' %}
    {% elseif entry.getType() == 'dissociate' %}
        {% set action = 'dissociated' %}
        {% set source = diffs.source %}
        {% set target = diffs.target %}
        {% set direction = 'from' %}
    {% else %}
        {% set action = '???' %}
    {% endif %}

    <code><a href=\"{{ path('dh_auditor_show_entity_history', { 'entity': helper.namespaceToParam(entity), 'id': entry.getObjectId() }) }}\" class=\"code\">{{ subject }}</a></code>
    {% if source is defined and source is not null and subject != source.label %}
    <em>({{ source.label }})</em>
    {% endif %}
    has been <b>{{ action }}</b>
    {% if target is defined and target is not null %}
        {% set subject = target.class~'#'~target.id %}
        {{ direction }} <code><a href=\"{{ path('dh_auditor_show_entity_history', { 'entity': helper.namespaceToParam(target.class), 'id': target.id }) }}\">{{ subject }}</a></code>
        {% if subject != target.label %}
            (<em>{{ helper.dump(target) }}</em>)
        {% endif %}
    {% endif %}
    by <b>{{ entry.getUsername() is null ? 'unknown user' : entry.getUsername() }}</b>
    {% if entry.getIp() is not empty %}
        , IP: {{ entry.getIp() }}
    {% endif %}
{% endmacro %}
", "@DHAuditor/Audit/helpers/helper.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/helpers/helper.html.twig");
    }
}
