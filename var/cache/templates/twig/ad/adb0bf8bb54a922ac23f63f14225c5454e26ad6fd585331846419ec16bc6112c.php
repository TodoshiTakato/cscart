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

/* __string_template__df65e747616b05a3bd3c1d9dbde6e7936fb85a788d66ed69d9889c8a97047f05 */
class __TwigTemplate_c273a69349802d54f9ef2e6f03f11a5da0a823294714a51c66d8678299fe3311 extends \Twig\Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">";
        echo $this->getAttribute(($context["p"] ?? null), "display_subtotal", []);
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__df65e747616b05a3bd3c1d9dbde6e7936fb85a788d66ed69d9889c8a97047f05";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight:600;\">{{ p.display_subtotal }}</strong></p>", "__string_template__df65e747616b05a3bd3c1d9dbde6e7936fb85a788d66ed69d9889c8a97047f05", "");
    }
}
