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

/* __string_template__9169fdda5f801eef8e565f0e32c8542a64ae5a0fcb8e060c789c58ac1da35312 */
class __TwigTemplate_96cd930a6622db84fd26c4b250de6d80099a5fcf2ea85b4b8a84677ca6e0da77 extends \Twig\Template
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
        if ($this->getAttribute(($context["products_table"] ?? null), "rows", [])) {
            // line 2
            echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-top: 3px solid #444; color: #444;  text-transofrm: uppercase; border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
    <tbody>
        <tr style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-weight: 600; text-transform: uppercase; text-align: center; vertical-aling: top;\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["products_table"] ?? null), "headers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 6
                echo "                <td style=\"padding:10px; font-family: Helvetica, Arial, sans-serif;\">";
                echo $context["header"];
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </tr>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["products_table"] ?? null), "rows", []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 10
                echo "            <tr style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-transform: uppercase; text-align: center; vertical-aling: middle;\">
                ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 12
                    echo "                    <td style=\"padding:10px 0px; border-bottom: 1px solid #ebebeb; font-family: Helvetica, Arial, sans-serif;\">";
                    echo $context["column"];
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__9169fdda5f801eef8e565f0e32c8542a64ae5a0fcb8e060c789c58ac1da35312";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 14,  64 => 12,  60 => 11,  57 => 10,  53 => 9,  50 => 8,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if products_table.rows %}
<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"border-top: 3px solid #444; color: #444;  text-transofrm: uppercase; border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
    <tbody>
        <tr style=\"font-size: 12px; font-family: Helvetica, Arial, sans-serif; font-weight: 600; text-transform: uppercase; text-align: center; vertical-aling: top;\">
            {% for  header in products_table.headers %}
                <td style=\"padding:10px; font-family: Helvetica, Arial, sans-serif;\">{{ header }}</td>
            {% endfor %}
        </tr>
        {% for  row in products_table.rows %}
            <tr style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-transform: uppercase; text-align: center; vertical-aling: middle;\">
                {% for  column in row %}
                    <td style=\"padding:10px 0px; border-bottom: 1px solid #ebebeb; font-family: Helvetica, Arial, sans-serif;\">{{ column }}</td>
                {% endfor %}
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endif %}", "__string_template__9169fdda5f801eef8e565f0e32c8542a64ae5a0fcb8e060c789c58ac1da35312", "");
    }
}
