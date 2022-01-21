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

/* __string_template__a994490ebbb761001b8f6e3e9601fee74345b7a9bf63077eedb68382c13d838a */
class __TwigTemplate_356798a9bc2e2c86c4d23eeac9ffb0aeb192a620403f9911e25533e52856e630 extends \Twig\Template
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
        echo "<strong style=\"border: solid red\">NURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLAN</strong>
<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_path", []);
        echo "\" width=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_x", []);
        echo "\" height=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["c"] ?? null), "logos", []), "mail", []), "image", []), "image_y", []);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["c"] ?? null), "name", []);
        echo "\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">";
        // line 13
        echo $this->getAttribute(($context["o"] ?? null), "invoice_id_text", []);
        echo "</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 17
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "timestamp", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 20
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute(($context["p"] ?? null), "payment", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 23
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "shippings_method", []);
        echo "
                </p>
                ";
        // line 25
        if ($this->getAttribute(($context["o"] ?? null), "tracking_number", [])) {
            // line 26
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 27
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute(($context["o"] ?? null), "tracking_number", []);
            echo "
                </p>
                ";
        }
        // line 30
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">";
        // line 42
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "store");
        echo "</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>";
        // line 43
        echo $this->getAttribute(($context["c"] ?? null), "name", []);
        echo "</strong>
                </p>
                ";
        // line 45
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "company_address");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                ";
        // line 48
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "bill_to");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                ";
        // line 51
        if ($this->getAttribute(($context["pickup_point"] ?? null), "is_selected", [])) {
            // line 52
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 54
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 56
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 64
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 73
        if ($this->getAttribute(($context["o"] ?? null), "notes", [])) {
            // line 74
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 75
            echo $this->getAttribute(($context["o"] ?? null), "notes", []);
            echo "
                                ";
        }
        // line 77
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "subtotal");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 84
        echo $this->getAttribute(($context["o"] ?? null), "display_subtotal", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        echo $this->getAttribute(($context["o"] ?? null), "tax_name", []);
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 90
        echo $this->getAttribute(($context["o"] ?? null), "tax_total", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 96
        echo $this->getAttribute(($context["o"] ?? null), "display_shipping_cost", []);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 100
        if ($this->getAttribute(($context["o"] ?? null), "payment_surcharge", [])) {
            // line 101
            echo "                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment_surcharge");
            echo " </div> ";
        }
        // line 102
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 103
        if ($this->getAttribute(($context["o"] ?? null), "payment_surcharge", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "payment_surcharge", []);
            echo " ";
        }
        echo "<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">";
        // line 107
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 108
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 109
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "coupon_code", []);
            echo " ";
        }
        // line 110
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 113
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 114
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 115
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "discount", []);
            echo " ";
        }
        // line 116
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 119
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 120
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 121
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "subtotal_discount", []);
            echo " ";
        }
        // line 122
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 125
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "total");
        echo "
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 127
        echo $this->getAttribute(($context["o"] ?? null), "total", []);
        echo "
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__a994490ebbb761001b8f6e3e9601fee74345b7a9bf63077eedb68382c13d838a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 127,  303 => 125,  298 => 122,  292 => 121,  289 => 120,  283 => 119,  278 => 116,  272 => 115,  269 => 114,  263 => 113,  258 => 110,  252 => 109,  249 => 108,  243 => 107,  232 => 103,  229 => 102,  224 => 101,  222 => 100,  215 => 96,  210 => 94,  203 => 90,  198 => 88,  191 => 84,  186 => 82,  179 => 77,  174 => 75,  169 => 74,  167 => 73,  155 => 64,  145 => 56,  139 => 54,  133 => 52,  131 => 51,  125 => 48,  119 => 45,  114 => 43,  110 => 42,  96 => 30,  88 => 27,  85 => 26,  83 => 25,  76 => 23,  68 => 20,  60 => 17,  53 => 13,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<strong style=\"border: solid red\">NURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLANNURLAN</strong>
<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"{{c.logos.mail.image.image_path}}\" width=\"{{c.logos.mail.image.image_x}}\" height=\"{{c.logos.mail.image.image_y}}\" alt=\"{{ c.name }}\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">{{ o.invoice_id_text }}</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"order_date\")}}</span>  {{o.timestamp}}
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"payment\")}}</span>  {{p.payment}}
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"shipping\")}}</span>  {{o.shippings_method}}
                </p>
                {% if o.tracking_number %}
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">{{__(\"tracking_number\")}}</span>  {{o.tracking_number}}
                </p>
                {% endif %}
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">{{__(\"store\")}}</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>{{c.name}}</strong>
                </p>
                {{ snippet(\"company_address\") }}
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                {{ snippet(\"bill_to\") }}
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                {% if pickup_point.is_selected %}
                {{ snippet(\"pickup_point\") }}
                {% else %}
                {{ snippet(\"ship_to\") }}
                {% endif %}
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        {{ snippet(\"products_table\") }}
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                {% if o.notes %}
                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">{{ __(\"customer_notes\") }}</h2>
                {{ o.notes }}
                                {% endif %}
            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">{{ __(\"subtotal\") }}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{{o.display_subtotal}}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">{{o.tax_name}}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{{o.tax_total}}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">{{ __(\"shipping\") }}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{{ o.display_shipping_cost }}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.payment_surcharge %}
                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{__(\"payment_surcharge\")}} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.payment_surcharge %} {{o.payment_surcharge}} {% endif %}<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">{% if o.coupon_code %} <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{ __(\"coupon\") }} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.discount %} <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{ __(\"including_discount\") }} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.discount %} {{o.discount}} {% endif %}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.subtotal_discount %} <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> {{ __(\"order_discount\") }} </div> {% endif %}
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: 600;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">{{ __(\"total\") }}
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">{{o.total}}
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>", "__string_template__a994490ebbb761001b8f6e3e9601fee74345b7a9bf63077eedb68382c13d838a", "");
    }
}
