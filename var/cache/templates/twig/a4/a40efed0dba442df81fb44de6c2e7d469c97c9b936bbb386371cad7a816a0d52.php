<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__77c51c12057167c6ea6787003ff66e39e0557540a781c8fd16447a4d0e9a0621 */
class __TwigTemplate_bfdd6e08a0c3037ae1a3464824562581f0fda1aa244bba43856ec38b7b980145 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "

  <table>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["element_id"] => $context["element"]) {
            // line 5
            if (($this->getAttribute($context["element"], "element_type", []) == twig_constant("FORM_SEPARATOR"))) {
                // line 6
                echo "<tr>
    <td colspan=\"2\"><hr width=\"100%\" /></td>
</tr>
";
            } elseif (($this->getAttribute(            // line 9
$context["element"], "element_type", []) == twig_constant("FORM_HEADER"))) {
                // line 10
                echo "<tr>
    <td colspan=\"2\"><b>";
                // line 11
                echo $this->getAttribute($context["element"], "description", []);
                echo "</b></td>
</tr>
";
            } elseif (($this->getAttribute(            // line 13
$context["element"], "element_type", []) != twig_constant("FORM_FILE"))) {
                // line 14
                echo "<tr>
    <td>";
                // line 15
                echo $this->getAttribute($context["element"], "description", []);
                echo ":&nbsp;</td>
    <td>
        ";
                // line 17
                $context["value"] = $this->getAttribute(($context["form_values"] ?? null), $context["element_id"], [], "array");
                // line 18
                echo "
        ";
                // line 19
                if ((($this->getAttribute($context["element"], "element_type", []) == twig_constant("FORM_SELECT")) || ($this->getAttribute($context["element"], "element_type", []) == twig_constant("FORM_RADIO")))) {
                    // line 20
                    echo "            ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "variants", []), ($context["value"] ?? null), [], "array"), "description", []);
                    echo "
        ";
                } elseif (($this->getAttribute(                // line 21
$context["element"], "element_type", []) == twig_constant("FORM_CHECKBOX"))) {
                    // line 22
                    echo "            ";
                    if ((($context["value"] ?? null) == "Y")) {
                        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "yes");
                    } else {
                        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "no");
                    }
                    // line 23
                    echo "        ";
                } elseif (($this->getAttribute($context["element"], "element_type", []) == twig_constant("FORM_TEXTAREA"))) {
                    // line 24
                    echo "            ";
                    echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
                    echo "
        ";
                } elseif (($this->getAttribute(                // line 25
$context["element"], "element_type", []) == twig_constant("FORM_DATE"))) {
                    // line 26
                    echo "            ";
                    echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->dateFilter(($context["value"] ?? null), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "Appearance", []), "date_format", []));
                    echo "
        ";
                } else {
                    // line 28
                    echo "            ";
                    echo ($context["value"] ?? null);
                    echo "
        ";
                }
                // line 30
                echo "    </td>
</tr>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['element_id'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

";
        // line 36
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__77c51c12057167c6ea6787003ff66e39e0557540a781c8fd16447a4d0e9a0621";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  119 => 34,  110 => 30,  104 => 28,  98 => 26,  96 => 25,  91 => 24,  88 => 23,  81 => 22,  79 => 21,  74 => 20,  72 => 19,  69 => 18,  67 => 17,  62 => 15,  59 => 14,  57 => 13,  52 => 11,  49 => 10,  47 => 9,  42 => 6,  40 => 5,  36 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\") }}

  <table>
{% for element_id, element in elements %}
{% if element.element_type == constant(\"FORM_SEPARATOR\") %}
<tr>
    <td colspan=\"2\"><hr width=\"100%\" /></td>
</tr>
{% elseif element.element_type == constant(\"FORM_HEADER\") %}
<tr>
    <td colspan=\"2\"><b>{{ element.description }}</b></td>
</tr>
{% elseif element.element_type != constant(\"FORM_FILE\") %}
<tr>
    <td>{{ element.description }}:&nbsp;</td>
    <td>
        {% set value=form_values[element_id] %}

        {% if element.element_type == constant(\"FORM_SELECT\") or element.element_type == constant(\"FORM_RADIO\") %}
            {{ element.variants[value].description }}
        {% elseif element.element_type == constant(\"FORM_CHECKBOX\") %}
            {% if value == 'Y' %}{{ __(\"yes\") }}{% else %}{{ __(\"no\") }}{% endif %}
        {% elseif element.element_type == constant(\"FORM_TEXTAREA\") %}
            {{ value|nl2br }}
        {% elseif element.element_type == constant(\"FORM_DATE\") %}
            {{ value|date(settings.Appearance.date_format) }}
        {% else %}
            {{ value }}
        {% endif %}
    </td>
</tr>
{% endif %}
{% endfor %}
</table>

{{ snippet(\"footer\") }}", "__string_template__77c51c12057167c6ea6787003ff66e39e0557540a781c8fd16447a4d0e9a0621", "");
    }
}
