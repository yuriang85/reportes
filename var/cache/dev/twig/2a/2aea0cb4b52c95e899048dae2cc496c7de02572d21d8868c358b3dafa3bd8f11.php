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

/* @DHAuditor/Audit/entity_history.html.twig */
class __TwigTemplate_e5f78029362c3ecd9d16700a4f1755614d360e6ada6618748a8340ba14d49618 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'dh_auditor_content' => [$this, 'block_dh_auditor_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@DHAuditor/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/entity_history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/entity_history.html.twig"));

        // line 3
        $macros["bootstrap"] = $this->macros["bootstrap"] = $this->loadTemplate("@DHAuditor/Audit/helpers/bootstrap.html.twig", "@DHAuditor/Audit/entity_history.html.twig", 3)->unwrap();
        // line 4
        $macros["helper"] = $this->macros["helper"] = $this->loadTemplate("@DHAuditor/Audit/helpers/helper.html.twig", "@DHAuditor/Audit/entity_history.html.twig", 4)->unwrap();
        // line 5
        $macros["pager"] = $this->macros["pager"] = $this->loadTemplate("@DHAuditor/Audit/helpers/pager.html.twig", "@DHAuditor/Audit/entity_history.html.twig", 5)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@DHAuditor/layout.html.twig", "@DHAuditor/Audit/entity_history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_dh_auditor_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dh_auditor_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dh_auditor_content"));

        // line 8
        echo "<div class=\"card border-0\">
    <div class=\"card-body\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_list_audits");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.header.home", [], "messages");
        echo "</a></li>
                <li class=\"breadcrumb-item ";
        // line 13
        if ((null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()))) {
            echo "active";
        }
        echo "\" aria-current=\"page\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => twig_call_macro($macros["helper"], "macro_namespaceToParam", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext())]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</a></li>
                ";
        // line 14
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => twig_call_macro($macros["helper"], "macro_namespaceToParam", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })())], 15, $context, $this->getSourceContext()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 17
        echo "            </ol>
        </nav>

        <h4 class=\"card-title float-left\"><code>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "html", null, true);
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()))) {
            echo "#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 20, $this->source); })()), "html", null, true);
        }
        echo "</code> <em>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.most_recent", [], "messages");
        echo "</em></h4>
        <h5 class=\"float-right\">";
        // line 21
        echo twig_call_macro($macros["bootstrap"], "macro_badge", [(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })()), "results", [], "any", false, false, false, 21)) . " operations"), "primary"], 21, $context, $this->getSourceContext());
        echo "</h5>

        <div class=\"timeline-centered\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 24, $this->source); })()), "results", [], "any", false, false, false, 24));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 25
            echo "            ";
            echo twig_include($this->env, $context, "@DHAuditor/Audit/entry.html.twig", ["entry" => $context["entry"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

        ";
        // line 29
        echo twig_call_macro($macros["pager"], "macro_render", [twig_call_macro($macros["helper"], "macro_namespaceToParam", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })())], 29, $context, $this->getSourceContext()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 29, $this->source); })()), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })())], 29, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@DHAuditor/Audit/entity_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 29,  164 => 27,  147 => 25,  130 => 24,  124 => 21,  114 => 20,  109 => 17,  99 => 15,  97 => 14,  87 => 13,  81 => 12,  75 => 8,  65 => 7,  54 => 1,  52 => 5,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DHAuditor/layout.html.twig\" %}

{% import '@DHAuditor/Audit/helpers/bootstrap.html.twig' as bootstrap %}
{% import '@DHAuditor/Audit/helpers/helper.html.twig' as helper %}
{% import '@DHAuditor/Audit/helpers/pager.html.twig' as pager %}

{% block dh_auditor_content %}
<div class=\"card border-0\">
    <div class=\"card-body\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('dh_auditor_list_audits') }}\">{% trans %}audit.header.home{% endtrans %}</a></li>
                <li class=\"breadcrumb-item {% if id is null %}active{% endif %}\" aria-current=\"page\"><a href=\"{{ path('dh_auditor_show_entity_history', { 'entity': helper.namespaceToParam(entity) }) }}\">{{ entity }}</a></li>
                {% if id is not null %}
                <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"{{ path('dh_auditor_show_entity_history', { 'entity': helper.namespaceToParam(entity), 'id': id }) }}\">{{ entity }}#{{ id }}</a></li>
                {% endif %}
            </ol>
        </nav>

        <h4 class=\"card-title float-left\"><code>{{ entity }}{% if id is not null %}#{{ id }}{% endif %}</code> <em>{% trans %}audit.audit_details.most_recent{% endtrans %}</em></h4>
        <h5 class=\"float-right\">{{ bootstrap.badge(paginator.results|length ~ ' operations', 'primary') }}</h5>

        <div class=\"timeline-centered\">
        {% for entry in paginator.results %}
            {{ include('@DHAuditor/Audit/entry.html.twig', {'entry': entry}) }}
        {% endfor %}
        </div>

        {{ pager.render(helper.namespaceToParam(entity), id, paginator) }}
    </div>
</div>
{% endblock dh_auditor_content %}
", "@DHAuditor/Audit/entity_history.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/entity_history.html.twig");
    }
}
