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

/* @DHAuditor/Audit/entry.html.twig */
class __TwigTemplate_875524b36394b2fa3604b388a9957f7e9637427377a1e193dc700acd6cfe53c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/entry.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DHAuditor/Audit/entry.html.twig"));

        // line 1
        $macros["bootstrap"] = $this->macros["bootstrap"] = $this->loadTemplate("@DHAuditor/Audit/helpers/bootstrap.html.twig", "@DHAuditor/Audit/entry.html.twig", 1)->unwrap();
        // line 2
        $macros["helper"] = $this->macros["helper"] = $this->loadTemplate("@DHAuditor/Audit/helpers/helper.html.twig", "@DHAuditor/Audit/entry.html.twig", 2)->unwrap();
        // line 3
        echo "
<article class=\"timeline-entry\">
    <div class=\"timeline-entry-inner\">
        <time class=\"timeline-time\" datetime=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 6, $this->source); })()), "getCreatedAt", [], "method", false, false, false, 6), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 7, $this->source); })()), "getCreatedAt", [], "method", false, false, false, 7), "H:i:s"), "html", null, true);
        echo "</span> <span>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 7, $this->source); })()), "getCreatedAt", [], "method", false, false, false, 7), "l d F Y"), "html", null, true);
        echo "</span>
        </time>

        <div class=\"timeline-icon bg-";
        // line 10
        echo twig_call_macro($macros["bootstrap"], "macro_label_type", [twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 10, $this->source); })()), "getType", [], "method", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "\">
            ";
        // line 11
        echo twig_call_macro($macros["bootstrap"], "macro_icon_type", [twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 11, $this->source); })()), "getType", [], "method", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "
        </div>

        <div class=\"timeline-label\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <h2 class=\"mb-0\">";
        // line 17
        echo twig_call_macro($macros["helper"], "macro_humanize", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "</h2>
                </div>
                <div class=\"col-lg-3\" align=\"right\">
                    ";
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 20, $this->source); })()), "getTransactionHash", [], "method", false, false, false, 20))) {
            // line 21
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dh_auditor_show_transaction", ["hash" => twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 21, $this->source); })()), "getTransactionHash", [], "method", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"badge badge-pill badge-light font-weight-light transaction-hash\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.entry_title", [], "messages");
            echo "\">
                        <i class=\"fas fa-tag\"></i>&nbsp;";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 22, $this->source); })()), "getTransactionHash", [], "method", false, false, false, 22), "html", null, true);
            echo "
                    </a>
                    ";
        }
        // line 25
        echo "                </div>
                <div class=\"col-lg-1\" align=\"center\">";
        // line 26
        echo twig_call_macro($macros["bootstrap"], "macro_badge", [twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 26, $this->source); })()), "getType", [], "method", false, false, false, 26), twig_call_macro($macros["bootstrap"], "macro_label_type", [twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 26, $this->source); })()), "getType", [], "method", false, false, false, 26)], 26, $context, $this->getSourceContext())], 26, $context, $this->getSourceContext());
        echo "</div>
            </div>
            ";
        // line 28
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 28, $this->source); })()), "getType", [], "method", false, false, false, 28), [0 => "insert", 1 => "update"])) {
            // line 29
            echo "                <table class=\"table table-hover layout-fixed table-sm mt-2 mb-0\">
                    <thead class=\"thead-light\">
                    <th width=\"30%\">";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.property", [], "messages");
            echo "</th>
                    <th width=\"35%\">";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.old_value", [], "messages");
            echo "</th>
                    <th width=\"35%\">";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("audit.audit_details.new_value", [], "messages");
            echo "</th>
                    </thead>
                    <tbody>
                    ";
            // line 36
            $context["diffs"] = twig_get_attribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 36, $this->source); })()), "getDiffs", [], "method", false, false, false, 36);
            // line 37
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["diffs"]) || array_key_exists("diffs", $context) ? $context["diffs"] : (function () { throw new RuntimeError('Variable "diffs" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["values"]) {
                // line 38
                echo "                        <tr>
                            <td>
                                <code>";
                // line 40
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</code>
                            </td>
                            <td>
                                ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["values"], "old", [], "any", true, true, false, 43)) {
                    // line 44
                    echo "                                    ";
                    if ((null === twig_get_attribute($this->env, $this->source, $context["values"], "old", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "                                        ";
                        echo twig_call_macro($macros["bootstrap"], "macro_badge", ["null", "secondary"], 45, $context, $this->getSourceContext());
                        echo "
                                    ";
                    } else {
                        // line 47
                        echo "                                        ";
                        echo twig_call_macro($macros["bootstrap"], "macro_text", [twig_call_macro($macros["helper"], "macro_dump", [twig_get_attribute($this->env, $this->source, $context["values"], "old", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext()), "danger"], 47, $context, $this->getSourceContext());
                        echo "
                                    ";
                    }
                    // line 49
                    echo "                                ";
                }
                // line 50
                echo "                            </td>
                            <td>
                                ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["values"], "new", [], "any", true, true, false, 52)) {
                    // line 53
                    echo "                                    ";
                    if ((null === twig_get_attribute($this->env, $this->source, $context["values"], "new", [], "any", false, false, false, 53))) {
                        // line 54
                        echo "                                        ";
                        echo twig_call_macro($macros["bootstrap"], "macro_badge", ["null", "secondary"], 54, $context, $this->getSourceContext());
                        echo "
                                    ";
                    } else {
                        // line 56
                        echo "                                        ";
                        if ((null === twig_get_attribute($this->env, $this->source, $context["values"], "old", [], "any", false, false, false, 56))) {
                            // line 57
                            echo "                                            ";
                            echo twig_call_macro($macros["bootstrap"], "macro_text", [twig_call_macro($macros["helper"], "macro_dump", [twig_get_attribute($this->env, $this->source, $context["values"], "new", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext()), "primary"], 57, $context, $this->getSourceContext());
                            echo "
                                        ";
                        } else {
                            // line 59
                            echo "                                            ";
                            echo twig_call_macro($macros["bootstrap"], "macro_text", [twig_call_macro($macros["helper"], "macro_dump", [twig_get_attribute($this->env, $this->source, $context["values"], "new", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext()), "success"], 59, $context, $this->getSourceContext());
                            echo "
                                        ";
                        }
                        // line 61
                        echo "                                    ";
                    }
                    // line 62
                    echo "                                ";
                }
                // line 63
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </tbody>
                </table>
            ";
        }
        // line 69
        echo "        </div>
    </div>
</article>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@DHAuditor/Audit/entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 69,  207 => 66,  199 => 63,  196 => 62,  193 => 61,  187 => 59,  181 => 57,  178 => 56,  172 => 54,  169 => 53,  167 => 52,  163 => 50,  160 => 49,  154 => 47,  148 => 45,  145 => 44,  143 => 43,  137 => 40,  133 => 38,  128 => 37,  126 => 36,  120 => 33,  116 => 32,  112 => 31,  108 => 29,  106 => 28,  101 => 26,  98 => 25,  92 => 22,  85 => 21,  83 => 20,  77 => 17,  68 => 11,  64 => 10,  56 => 7,  52 => 6,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@DHAuditor/Audit/helpers/bootstrap.html.twig' as bootstrap %}
{% import '@DHAuditor/Audit/helpers/helper.html.twig' as helper %}

<article class=\"timeline-entry\">
    <div class=\"timeline-entry-inner\">
        <time class=\"timeline-time\" datetime=\"{{ entry.getCreatedAt()|date('Y-m-d H:i:s') }}\">
            <span>{{ entry.getCreatedAt()|date('H:i:s') }}</span> <span>{{ entry.getCreatedAt()|date('l d F Y') }}</span>
        </time>

        <div class=\"timeline-icon bg-{{ bootstrap.label_type(entry.getType()) }}\">
            {{ bootstrap.icon_type(entry.getType()) }}
        </div>

        <div class=\"timeline-label\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <h2 class=\"mb-0\">{{ helper.humanize(entity, entry) }}</h2>
                </div>
                <div class=\"col-lg-3\" align=\"right\">
                    {% if entry.getTransactionHash() is not empty %}
                    <a href=\"{{ path('dh_auditor_show_transaction', {hash: entry.getTransactionHash()}) }}\" class=\"badge badge-pill badge-light font-weight-light transaction-hash\" title=\"{% trans %}audit.audit_details.entry_title{% endtrans %}\">
                        <i class=\"fas fa-tag\"></i>&nbsp;{{ entry.getTransactionHash() }}
                    </a>
                    {% endif %}
                </div>
                <div class=\"col-lg-1\" align=\"center\">{{ bootstrap.badge(entry.getType(), bootstrap.label_type(entry.getType())) }}</div>
            </div>
            {% if entry.getType() in ['insert', 'update'] %}
                <table class=\"table table-hover layout-fixed table-sm mt-2 mb-0\">
                    <thead class=\"thead-light\">
                    <th width=\"30%\">{% trans %}audit.audit_details.property{% endtrans %}</th>
                    <th width=\"35%\">{% trans %}audit.audit_details.old_value{% endtrans %}</th>
                    <th width=\"35%\">{% trans %}audit.audit_details.new_value{% endtrans %}</th>
                    </thead>
                    <tbody>
                    {% set diffs = entry.getDiffs() %}
                    {% for key, values in diffs %}
                        <tr>
                            <td>
                                <code>{{ key }}</code>
                            </td>
                            <td>
                                {% if values.old is defined %}
                                    {% if values.old is null %}
                                        {{ bootstrap.badge('null', 'secondary') }}
                                    {% else %}
                                        {{ bootstrap.text(helper.dump(values.old), 'danger') }}
                                    {% endif %}
                                {% endif %}
                            </td>
                            <td>
                                {% if values.new is defined %}
                                    {% if values.new is null %}
                                        {{ bootstrap.badge('null', 'secondary') }}
                                    {% else %}
                                        {% if values.old is null %}
                                            {{ bootstrap.text(helper.dump(values.new), 'primary') }}
                                        {% else %}
                                            {{ bootstrap.text(helper.dump(values.new), 'success') }}
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
</article>
", "@DHAuditor/Audit/entry.html.twig", "/var/www/symfony/reportes/vendor/damienharper/auditor-bundle/src/Resources/views/Audit/entry.html.twig");
    }
}
