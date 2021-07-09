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

/* @DHAuditor/Audit/helpers/bootstrap.html.twig */
class __TwigTemplate_1659a0d26ca85a2358dbaedf52d52cf395b0d18894ffb5aaa4fca7cfa0639505 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/helpers/bootstrap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/helpers/bootstrap.html.twig"));

        // line 9
        echo "
";
        // line 18
        echo "
";
        // line 34
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_badge($__text__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            // line 2
            echo "    ";
            if ((array_key_exists("type", $context) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2, $this->source); })())) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "bg-") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))))) {
                // line 3
                echo "        ";
                $context["prefix"] = "";
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["prefix"] = "badge-";
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <span class=\"badge ";
            echo twig_escape_filter($this->env, ((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 7, $this->source); })()) . ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()), "secondary")) : ("secondary"))), "html", null, true);
            echo " p-1 pl-2 pr-2\">";
            echo (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 7, $this->source); })());
            echo "</span>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 10
    public function macro_text($__text__ = null, $__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "text"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "text"));

            // line 11
            echo "    ";
            if ((array_key_exists("type", $context) && (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 11, $this->source); })())) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "bg-") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) {
                // line 12
                echo "        ";
                $context["prefix"] = "";
                // line 13
                echo "    ";
            } else {
                // line 14
                echo "        ";
                $context["prefix"] = "text-";
                // line 15
                echo "    ";
            }
            // line 16
            echo "    <span class=\"";
            echo twig_escape_filter($this->env, ((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 16, $this->source); })()) . ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 16, $this->source); })()), "secondary")) : ("secondary"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</span>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_label_type($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_type"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_type"));

            // line 20
            ob_start();
            // line 21
            echo "    ";
            if ((0 === twig_compare((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 21, $this->source); })()), "insert"))) {
                // line 22
                echo "        ";
                echo "success";
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 23
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()), "update"))) {
                // line 24
                echo "        ";
                echo "primary";
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 25
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "remove"))) {
                // line 26
                echo "        ";
                echo "danger";
                echo "
    ";
            } elseif (twig_in_filter(            // line 27
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), [0 => "associate", 1 => "dissociate"])) {
                // line 28
                echo "        ";
                echo "warning";
                echo "
    ";
            } else {
                // line 30
                echo "        ";
                echo "secondary";
                echo "
    ";
            }
            $___internal_f389ccd98fa88239b4f9d1d8f6d4ed0d39f456c8e954a8aa3cf029d8b29517dc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo twig_spaceless($___internal_f389ccd98fa88239b4f9d1d8f6d4ed0d39f456c8e954a8aa3cf029d8b29517dc_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 35
    public function macro_icon_type($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "icon_type"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "icon_type"));

            // line 36
            ob_start();
            // line 37
            echo "    ";
            if ((0 === twig_compare((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 37, $this->source); })()), "insert"))) {
                // line 38
                echo "        ";
                echo "<i class=\"fas fa-plus\"></i>";
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 39
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()), "update"))) {
                // line 40
                echo "        ";
                echo "<i class=\"fas fa-not-equal\"></i>";
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 41
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })()), "remove"))) {
                // line 42
                echo "        ";
                echo "<i class=\"fas fa-minus\"></i>";
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 43
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 43, $this->source); })()), "associate"))) {
                // line 44
                echo "        ";
                echo "<i class=\"fas fa-link\"></i>";
                echo "
    ";
            } elseif ((0 === twig_compare(            // line 45
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })()), "dissociate"))) {
                // line 46
                echo "        ";
                echo "<i class=\"fas fa-unlink\"></i>";
                echo "
    ";
            }
            $___internal_4ead6c14e79be2dc2ef3ac0a9a76067465ab907c66f536caff5038803355a782_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            echo twig_spaceless($___internal_4ead6c14e79be2dc2ef3ac0a9a76067465ab907c66f536caff5038803355a782_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DHAuditor/Audit/helpers/bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 36,  295 => 46,  293 => 45,  288 => 44,  286 => 43,  281 => 42,  279 => 41,  274 => 40,  272 => 39,  267 => 38,  264 => 37,  262 => 36,  243 => 35,  228 => 20,  221 => 30,  215 => 28,  213 => 27,  208 => 26,  206 => 25,  201 => 24,  199 => 23,  194 => 22,  191 => 21,  189 => 20,  170 => 19,  150 => 16,  147 => 15,  144 => 14,  141 => 13,  138 => 12,  135 => 11,  115 => 10,  95 => 7,  92 => 6,  89 => 5,  86 => 4,  83 => 3,  80 => 2,  60 => 1,  49 => 34,  46 => 18,  43 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro badge(text, type) %}
    {% if type is defined and type starts with 'bg-' %}
        {% set prefix = '' %}
    {% else %}
        {% set prefix = 'badge-' %}
    {% endif %}
    <span class=\"badge {{ prefix ~ type|default('secondary') }} p-1 pl-2 pr-2\">{{ text|raw }}</span>
{% endmacro %}

{% macro text(text, type) %}
    {% if type is defined and type starts with 'bg-' %}
        {% set prefix = '' %}
    {% else %}
        {% set prefix = 'text-' %}
    {% endif %}
    <span class=\"{{ prefix ~ type|default('secondary') }}\">{{ text }}</span>
{% endmacro %}

{% macro label_type(value) %}
{% apply spaceless %}
    {% if value == 'insert' %}
        {{ 'success' }}
    {% elseif value == 'update' %}
        {{ 'primary' }}
    {% elseif value == 'remove' %}
        {{ 'danger' }}
    {% elseif value in ['associate', 'dissociate'] %}
        {{ 'warning' }}
    {% else %}
        {{ 'secondary' }}
    {% endif %}
{% endapply %}
{% endmacro %}

{% macro icon_type(value) %}
{% apply spaceless %}
    {% if value == 'insert' %}
        {{ '<i class=\"fas fa-plus\"></i>' }}
    {% elseif value == 'update' %}
        {{ '<i class=\"fas fa-not-equal\"></i>' }}
    {% elseif value == 'remove' %}
        {{ '<i class=\"fas fa-minus\"></i>' }}
    {% elseif value == 'associate' %}
        {{ '<i class=\"fas fa-link\"></i>' }}
    {% elseif value == 'dissociate' %}
        {{ '<i class=\"fas fa-unlink\"></i>' }}
    {% endif %}
{% endapply %}
{% endmacro %}
", "@DHAuditor/Audit/helpers/bootstrap.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/helpers/bootstrap.html.twig");
    }
}
