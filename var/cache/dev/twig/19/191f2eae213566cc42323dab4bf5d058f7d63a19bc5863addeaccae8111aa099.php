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

/* @DHAuditor/Audit/transaction.html.twig */
class __TwigTemplate_3f5a91b1d5d5ff31cde8a18d82d0e98a8b27d028924f117b9e124374fc631f51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/transaction.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/transaction.html.twig"));

        // line 3
        $macros["bootstrap"] = $this->macros["bootstrap"] = $this->loadTemplate("@DHAuditor/Audit/helpers/bootstrap.html.twig", "@DHAuditor/Audit/transaction.html.twig", 3)->unwrap();
        // line 4
        $macros["helper"] = $this->macros["helper"] = $this->loadTemplate("@DHAuditor/Audit/helpers/helper.html.twig", "@DHAuditor/Audit/transaction.html.twig", 4)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@DHAuditor/layout.html.twig", "@DHAuditor/Audit/transaction.html.twig", 1);
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
        echo "    <div class=\"card border-0\">
        <div class=\"card-body\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_list_audits");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.header.home", [], "messages");
        echo "</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_transaction", ["hash" => (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 12, $this->source); })())]), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("transaction", [], "messages");
        echo " #";
        echo twig_escape_filter($this->env, (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</a></li>
                </ol>
            </nav>

            <h4 class=\"card-title float-left\"><code>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.transaction", [], "messages");
        echo " #";
        echo twig_escape_filter($this->env, (isset($context["hash"]) || array_key_exists("hash", $context) ? $context["hash"] : (function () { throw new RuntimeError('Variable "hash" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</code> <em>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.entity_per_entity", [], "messages");
        echo "</em></h4>
            ";
        // line 17
        $context["amount"] = 0;
        // line 18
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["entity"] => $context["entries"]) {
            // line 19
            echo "                ";
            $context["amount"] = ((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 19, $this->source); })()) + twig_length_filter($this->env, $context["entries"]));
            // line 20
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entity'], $context['entries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            <h5 class=\"float-right\">";
        echo twig_call_macro($macros["bootstrap"], "macro_badge", [((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 21, $this->source); })()) . " operations"), "primary"], 21, $context, $this->getSourceContext());
        echo "</h5>
            <div style=\"clear: both\"></div>

            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["audits"]) || array_key_exists("audits", $context) ? $context["audits"] : (function () { throw new RuntimeError('Variable "audits" does not exist.', 24, $this->source); })()));
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
        foreach ($context['_seq'] as $context["entity"] => $context["entries"]) {
            // line 25
            echo "            <hr class=\"mt-0\" />
            <h4 class=\"card-title float-left\"><code>";
            // line 26
            echo twig_escape_filter($this->env, $context["entity"], "html", null, true);
            echo "</code> <em>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.most_recent", [], "messages");
            echo "</em></h4>
            <h5 class=\"float-right\">";
            // line 27
            echo twig_call_macro($macros["bootstrap"], "macro_badge", [(twig_length_filter($this->env, $context["entries"]) . " operations"), "primary"], 27, $context, $this->getSourceContext());
            echo "</h5>
            <div class=\"timeline-centered\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["entries"]);
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
                // line 30
                echo "                    ";
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
            // line 32
            echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['entity'], $context['entries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@DHAuditor/Audit/transaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 34,  192 => 32,  175 => 30,  158 => 29,  153 => 27,  147 => 26,  144 => 25,  127 => 24,  120 => 21,  114 => 20,  111 => 19,  106 => 18,  104 => 17,  96 => 16,  85 => 12,  79 => 11,  73 => 7,  63 => 6,  52 => 1,  50 => 4,  48 => 3,  35 => 1,);
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
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('dh_auditor_list_audits') }}\">{% trans %}audit.header.home{% endtrans %}</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"{{ path('dh_auditor_show_transaction', {hash: hash}) }}\">{% trans %}transaction{% endtrans %} #{{ hash }}</a></li>
                </ol>
            </nav>

            <h4 class=\"card-title float-left\"><code>{% trans %}audit.audit_details.transaction{% endtrans %} #{{ hash }}</code> <em>{% trans %}audit.audit_details.entity_per_entity{% endtrans %}</em></h4>
            {% set amount = 0 %}
            {% for entity, entries in audits %}
                {% set amount = amount + entries|length %}
            {% endfor %}
            <h5 class=\"float-right\">{{ bootstrap.badge(amount ~ ' operations', 'primary') }}</h5>
            <div style=\"clear: both\"></div>

            {% for entity, entries in audits %}
            <hr class=\"mt-0\" />
            <h4 class=\"card-title float-left\"><code>{{ entity }}</code> <em>{% trans %}audit.audit_details.most_recent{% endtrans %}</em></h4>
            <h5 class=\"float-right\">{{ bootstrap.badge(entries|length ~ ' operations', 'primary') }}</h5>
            <div class=\"timeline-centered\">
                {% for entry in entries %}
                    {{ include('@DHAuditor/Audit/entry.html.twig', {'entry': entry}) }}
                {% endfor %}
            </div>
            {% endfor %}
        </div>
    </div>
{% endblock dh_auditor_content %}
", "@DHAuditor/Audit/transaction.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/transaction.html.twig");
    }
}
