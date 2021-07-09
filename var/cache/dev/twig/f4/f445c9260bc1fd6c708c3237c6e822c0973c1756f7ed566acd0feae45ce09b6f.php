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

/* @DHAuditor/Audit/audits.html.twig */
class __TwigTemplate_142ab1df6580c8e1f4ce9c0646d6b67f28b4eead5daebc8e0b5750217c588a4c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/audits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/audits.html.twig"));

        // line 3
        $macros["bootstrap"] = $this->macros["bootstrap"] = $this->loadTemplate("@DHAuditor/Audit/helpers/bootstrap.html.twig", "@DHAuditor/Audit/audits.html.twig", 3)->unwrap();
        // line 4
        $macros["helper"] = $this->macros["helper"] = $this->loadTemplate("@DHAuditor/Audit/helpers/helper.html.twig", "@DHAuditor/Audit/audits.html.twig", 4)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@DHAuditor/layout.html.twig", "@DHAuditor/Audit/audits.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_dh_auditor_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dh_auditor_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dh_auditor_content"));

        // line 7
        echo "<div class=\"card border-0\">
    <div class=\"card-body\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_list_audits");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.header.home", [], "messages");
        echo "</a></li>
            </ol>
        </nav>
        <h4 class=\"card-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["audited"]) || array_key_exists("audited", $context) ? $context["audited"] : (function () { throw new RuntimeError('Variable "audited" does not exist.', 14, $this->source); })())), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.header.audited_entities", [], "messages");
        echo "</h4>
        <table class=\"table table-hover\">
            <thead class=\"thead-dark\">
            <th>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.table_headers.entity", [], "messages");
        echo "</th>
            <th>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.table_headers.table", [], "messages");
        echo "</th>
            <th>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.table_headers.activity", [], "messages");
        echo "</th>
            <th width=\"10%\"></th>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["audited"]) || array_key_exists("audited", $context) ? $context["audited"] : (function () { throw new RuntimeError('Variable "audited" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["entity"] => $context["table"]) {
            // line 24
            echo "                <tr>
                    <td><code>";
            // line 25
            echo twig_escape_filter($this->env, $context["entity"]);
            echo "</code></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $context["table"]);
            echo "</td>
                    <td>";
            // line 27
            echo twig_call_macro($macros["bootstrap"], "macro_badge", [(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reader"]) || array_key_exists("reader", $context) ? $context["reader"] : (function () { throw new RuntimeError('Variable "reader" does not exist.', 27, $this->source); })()), "createQuery", [0 => $context["entity"]], "method", false, false, false, 27), "count", [], "method", false, false, false, 27) . " operations")], 27, $context, $this->getSourceContext());
            echo "</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_entity_history", ["entity" => twig_call_macro($macros["helper"], "macro_namespaceToParam", [$context["entity"]], 29, $context, $this->getSourceContext())]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.view_audit", [], "messages");
            echo "</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entity'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@DHAuditor/Audit/audits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 33,  130 => 29,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  103 => 19,  99 => 18,  95 => 17,  87 => 14,  79 => 11,  73 => 7,  63 => 6,  52 => 1,  50 => 4,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@DHAuditor/layout.html.twig\" %}

{% import '@DHAuditor/Audit/helpers/bootstrap.html.twig' as bootstrap %}
{% import '@DHAuditor/Audit/helpers/helper.html.twig' as helper %}

{% block dh_auditor_content %}
<div class=\"card border-0\">
    <div class=\"card-body\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item active\"><a href=\"{{ path('dh_auditor_list_audits') }}\">{% trans %}audit.header.home{% endtrans %}</a></li>
            </ol>
        </nav>
        <h4 class=\"card-title\">{{ audited|length }} {% trans %}audit.header.audited_entities{% endtrans %}</h4>
        <table class=\"table table-hover\">
            <thead class=\"thead-dark\">
            <th>{% trans %}audit.table_headers.entity{% endtrans %}</th>
            <th>{% trans %}audit.table_headers.table{% endtrans %}</th>
            <th>{% trans %}audit.table_headers.activity{% endtrans %}</th>
            <th width=\"10%\"></th>
            </thead>
            <tbody>
            {% for entity, table in audited %}
                <tr>
                    <td><code>{{ entity|escape }}</code></td>
                    <td>{{ table|escape }}</td>
                    <td>{{ bootstrap.badge(reader.createQuery(entity).count() ~ ' operations') }}</td>
                    <td>
                        <a href=\"{{ path('dh_auditor_show_entity_history', {'entity': helper.namespaceToParam(entity)}) }}\">{% trans %}audit.audit_details.view_audit{% endtrans %}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock dh_auditor_content %}
", "@DHAuditor/Audit/audits.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/audits.html.twig");
    }
}
